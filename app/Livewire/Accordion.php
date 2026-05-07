<?php

namespace App\Livewire;

use Livewire\Component;

class Accordion extends Component
{
    public ?int $openItem = null;

     public $items = [
        [
            'id' => 1,
            'title' => 'Views',
            'fields' => [
                'label' => 'Sea and Mountain Views',
                'name' => 'views[sea_and_mountain_views]'
            ]
        ],
        [
            'id' => 2,
            'title' => 'Orientation',
            'content' => 'Content for section 2',
        ],
        [
            'id' => 3,
            'title' => 'Private Parking',
            'content' => 'Content for section 3',
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
            'title' => 'Fiurnished',
            'conten
            t' => 'Content for section 3',
        ],

    ];

    public function toggle($id)
    {
        $this->openItem = $this->openItem === $id ? null : $id;
    }

    public function render()
    {
        return view('livewire.accordion');
    }
}
