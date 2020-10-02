<div>
    <div class="text-blue-600 text-sm my-2">{{ json_encode($state) }}</div>

    @if($step === 1) <livewire:msf.step-one :state="$state"/> @endif
    @if($step === 2) <livewire:msf.step-two :state="$state"/> @endif
    @if($step === 3) <livewire:msf.step-three :state="$state"/> @endif
</div>

