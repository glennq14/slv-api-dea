<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MultiStepForm extends Component
{
    public $currentStep = 1;
    public $totalSteps = 10;

    public string $updatedStep;

    public function updatedStep(int $value)
    {   

        $this->updatedStep = $value;
        if ($value == 2) {
            $this->dispatch('load-map');
        }

        if ($value == 10) {
            $this->dispatch('load-tinymce');
        }
    }

    public function nextStep()
    {
        if ($this->currentStep == 1) {
            $this->saveStep1();
        }

        if ( $this->currentStep < $this->totalSteps ) {
            $this->currentStep++;
        }
        
        $this->updatedStep($this->currentStep);
    }

    public function previousStep()
    {
        $this->currentStep--;
        $this->updatedStep($this->currentStep);
    }

    public function validateStep()
    {
        if ( $this->currentStep == 3 ) {

            dd('test');

            // $rules = [
            //     ''
            // ]
        }
    }

    public function mount()
    {

    }
    
    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
