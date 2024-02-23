<div class="lg:w-1/2 m-auto">
    <form wire:submit="addItems" class="px-6 pb-6">
        @csrf
        <div class="mt-6">
            <x-input.label for="location" value="{{ __('Location') }}*" />

            <select wire:model.defer="location" id="location" name="location" class="block w-full rounded border-0 shadow-sm ring-1 ring-inset ring-slate-400 focus:ring-2 focus:ring-inset focus:ring-midnight-500">
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>

            <x-input.label class="mt-2" for="forageable" value="{{ __('Item') }}*" />

            <select wire:model.defer="forageable" id="forageable" name="forageable" class="block w-full rounded border-0 shadow-sm ring-1 ring-inset ring-slate-400 focus:ring-2 focus:ring-inset focus:ring-midnight-500">
                @foreach ($forageables as $forageable)
                    <option value="{{ $forageable->id }}">{{ $forageable->name }}</option>
                @endforeach
            </select>

            <x-input.label class="mt-2" for="amount" value="{{ __('Amount') }}" />
            {{-- <span>*When foraging Astatine or Prestige, select the right amount in the Item tab. Do not put the amount here! </span> --}}

                <x-input.text
                    wire:model="amount"
                    type="number"
                    name="amount"
                    id="amount"
                    class="w-full"
                />
        </div>

        <div class="mt-6 flex justify-end items-center">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <a href="{{ route('xero.foraging') }}">
                <x-button.secondary class="ml-3">
                    {{ __('Back') }}
                </x-button.secondary>
            </a>

            <x-button.primary class="ml-3">
                {{ __('Add') }}
            </x-button.primary>
        </div>
    </form>
</div>
