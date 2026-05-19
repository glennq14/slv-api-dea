<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

#[Signature('app:migrate-ultra-xml-feed')]
#[Description('Copy data from Ultra XML feed to new database')]
class MigrateUltraXmlFeedCommand extends Command
{
    private $ultraaXMLfeedUrl = 'https://feed.ultrait.me/kyero/?Guid=c7889ade-16ba-4f7c-ac97-e407085d715f';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $oldProperties = DB::table('properties_old')->get();
        $response = Http::get($this->ultraaXMLfeedUrl);
        if ($response->failed()) {
            Log::error('Failed to fetch data from the XML feed. Status: ' . $response->status());
            return 1; 
        }
        $xmlData = simplexml_load_string($response->body());
        
        if ($xmlData === false) {
            Log::error('Failed to parse XML data from the feed.');
            return 1; 
        }

        
        $propertyTypes = PropertyType::pluck('id', 'name')->toArray();
        $totalProperties = count($xmlData->property);
        $propertiesData = [];
        $propertiesAddressData = [];
        $propertiesAmenitiesData = [];
        $propertiesPricesData = [];
        $ctr = 0;

        $this->line('Total Records to migrate: ' . $totalProperties);
        Log::info('Starting migration of Ultra XML feed. Total Records to migrate: ' . $totalProperties);

        foreach ($xmlData->property as $property) {

            if (strtolower($property->type) == 'town house') {
                $property->type = 'Townhouse';
            }

            if (strtolower($property->type) == 'commerial property') {
                $property->type = 'Commercial Property';
            }
            
            $propertyTypeId = $propertyTypes[$property->type] ?? null;

            $propertiesData = [
                'author_id'     => 1,
                'property_type_id' => $propertyTypeId,
                'reference'     => $property->ref,
                'description'   => $property->desc->en,
                'leasehold'     => ($property->leasehold != null) ? strtolower($property->leasehold) : 'no',
                'bedrooms'      => ($property->beds != null) ? $property->bedrooms : 0,
                'bathrooms'     => ($property->baths != null) ? $property->bathrooms : 0,
                'build'         => ($property->surface_area->build != null) ? $property->surface_area->build : 0,
                'plot'          => ($property->surface_area->plot != null) ? floatval($$property->surface_area->plot) : 0,
                'pool'          => ($property->pool != null) ? floatval($property->pool) : 0,
                'agent_id'      => 1,
                'status'        => 'published',
                'save_type'     => 'feed'
            ];

            $propertiesDataXMLFeed = [
                'external_feed_id' => $property->id,
                'xml_feed_source'  => 'Ultra XML',
                'property_url'     => $property->url,
                'property_type'    => $property->type,
                'property_date'    => date('Y-m-d H:i:s', strtotime($property->date)),
                'price_freq'       => $property->price_freq,
                'part_owner'       => ($property->part_owner != null) ? $property->part_owner : 0,
                'imported_at'      => now()
            ];

            $propertiesAddressData = [
                'region'        => $property->province,
                'town_city'     => $property->town,
                'locality'      => null,
                'latitude'      => $property->location->latitude,
                'longitude'     => $property->location->longitude,
                'accuracy'      => 0,
                'map_address'   => null,
                'map_accuracy'  => 0
            ];


            $propertiesPricesData = [
                'basic_price' => ($property->price != null) ? $property->price : 0,
            ];

            $images = ($property->images != null) ? json_decode($property->images) : [];

            $photosData = [];
            if (!empty($images)) {
                foreach ($images as $key => $image) {
                    $photosData[] = [
                        'url' => $image,
                        'type' => 'gallery',
                        'caption' => null,
                        'sort_order' => $key + 1
                    ];
                }

                // insert photos if a relationship exists, e.g. $property->photos()->insert($photosData);
            }

            $network = [
                // 'property_id' => $property->id,
                'external_feeds' => 'slv' 
            ];

            $property = Property::create($propertiesData);

            $property->address()->create($propertiesAddressData);
            $property->amenities()->create($propertiesAmenitiesData);
            $property->price()->create($propertiesPricesData);
            $property->photos()->createMany($photosData);
            $property->networks()->createMany($network);

            ++$ctr;
        }

        echo 'Total inserted records: '.$ctr;

        return 0; 
    }
}
