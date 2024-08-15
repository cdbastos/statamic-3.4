<div>
    <div wire:loading class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="w-24 h-24 animate-spin rounded-full bg-gradient-to-r from-purple-400 via-blue-500 to-red-400 ">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 bg-gray-200 rounded-full border-2 border-white"></div>
        </div>
    </div>

{{--    <livewire:wizard.toolbar :wire:key="'toolbar-'.time().$currentComponent" :current-step="$currentStep" />--}}

{{--    <livewire:is :wire:key="'component-'.time().$currentComponent" component="wizard.steps.{{ $currentComponent }}" />--}}

    hola mundo

    {{--    <livewire:wizard.notification />--}}

    <br><br>
    {{ $number }}

    <br><br>

    <button wire:click="increment" class="btn btn-primary">Increment</button>
    <button wire:click="decrement" class="btn btn-primary">Decrement</button>

</div>
