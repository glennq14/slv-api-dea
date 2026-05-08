<?php

namespace App\Livewire;

use Livewire\Component;

class AccordionKeyFeatures extends Component
{
    public ?int $openItem = null;

    public $items = [
        [
            'id' => 1,
            'title' => 'Views',
            'fields' => [
                [
                    'label' => 'Sea and Mountain Views',
                    'name' => 'views[sea_and_mountain_views]',
                    'value' => false
                ],
                [
                    'label' => 'Sea Views',
                    'name' => 'views[sea_views]',
                    'value' => false
                ],
                [
                    'label' => 'Panoramic Views',
                    'name' => 'views[panoramic_views]',
                    'value' => false
                ],
                [
                    'label' => 'Views_of_Town_and_Sea',
                    'name' => 'views[views_of_town_and_sea]',
                    'value' => false
                ],
                [
                    'label' => 'Overlooking the Marina',
                    'name' => 'views[overlooking_the_marina]',
                    'value' => true
                ],
                [
                    'label' => 'Overlooking the Golf Course',
                    'name' => 'views[overlooking_the_golf_course]',
                    'value' => false
                ],
            ]
        ],
        [
            'id' => 2,
            'title' => 'Orientation',
            'fields' => [
                [
                    'label' => 'East',
                    'name' => 'orientation[east]'
                ],
                [
                    'label' => 'South',
                    'name' => 'orientation[south]'
                ],
                [
                    'label' => 'Southwest',
                    'name' => 'orientation[southwest]'
                ],
                [
                    'label' => 'Southeast',
                    'name' => 'orientation[southeast]'
                ],
                [
                    'label' => 'West',
                    'name' => 'orientation[west]'
                ],
                [
                    'label' => 'North',
                    'name' => 'orientation[north]'
                ],
                [
                    'label' => 'Northwest',
                    'name' => 'orientation[northwest]'
                ],
                [
                    'label' => 'Northeast',
                    'name' => 'orientation[northeast]'
                ],
                
            ]
        ],
        [
            'id' => 3,
            'title' => 'Private Parking',
            'fields' => [
                [
                    'label' => 'Covered Parking',
                    'name' => 'private_parking[covered_parking]',
                    'value' => false

                ],
                [
                    'label' => 'Uncovered Parking',
                    'name' => 'private_parking[uncovered_parking]',

                ],
            ]
        ],
        [
            'id' => 4,
            'title' => 'Kitchen',
            'content' => 'Content for section 3',
        ],
        [
            'id' => 5,
            'title' => 'Extras',
            'content' => 'Content for section 3',
        ],
        [
            'id' => 6,
            'title' => 'Heating',
            'content' => 'Content for section 3',
        ],
        [
            'id' => 7,
            'title' => 'Air Conditioning',
            'content' => 'Content for section 3',
        ],
        [
            'id' => 8,
            'title' => 'Inclusions',
            'content' => 'Content for section 3',
        ],
        [
            'id' => 9,
            'title' => 'Furnished',
            'content' => 'Content for section 3',
        ],

    ];

    public function toggle($id)
    {

        $this->openItem = $this->openItem === $id ? null : $id;
    }

    public function render()
    {
        return view('livewire.accordion-key-features');
    }
}
