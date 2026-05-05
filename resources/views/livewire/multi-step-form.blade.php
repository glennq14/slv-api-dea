<section>

    @if ( $currentStep == 1 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.reference-form />
    @endif

    @if ( $currentStep == 2 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.location-form />
    @endif

    @if ( $currentStep == 3 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.photos-form />
    @endif

    @if ( $currentStep == 4 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.floor-plan-form />
    @endif

    @if ( $currentStep == 5 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.distances-form />
    @endif

    @if ( $currentStep == 6 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.channel-manager-form  />
    @endif 

    @if ( $currentStep == 7 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.contact-details-form />
    @endif

    @if ( $currentStep == 8 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.custom-fields />
    @endif

    @if ( $currentStep == 9 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.videos-virtual-tour-form />
    @endif

    @if ( $currentStep == 10 )
        <livewire:dotted-steps :step="$currentStep" />
        <livewire:property.title-description-form />
    @endif

    <div class="py-3">
        @if ( $currentStep > 1 )
            <button wire:click="previousStep" class="px-4 py-2 bg-gray-300 text-white rounded">Back</button>
            <button wire:click="saveAsDraft" class="px-4 py-2 bg-gray-500 text-white rounded">Save as Draft</button>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 flex">
            <button wire:click="nextStep" wire:loading.class="opacity-50" class="ml-auto px-4 py-2 bg-orange-400 text-white rounded-md hover:bg-orange-500 px-7">
                <span wire:loading.remove>{{ __('Save and Next') }} </span>
                <span wire:loading>
                    Loading..
                </span>
            </button>
        </div>
    </div>
</section>