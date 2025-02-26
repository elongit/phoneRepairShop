<fieldset class="w-full md:w-2/4 m-auto p-4 rounded">
    <legend class="text-2xl font-bold text-green-500">
        Phone Repair Request
    </legend>

    <form action="" class="flex flex-col gap-3" wire:submit='store'>
    @if(session()->has('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

        <x-form-label name="device_model" class="font-semibold text-gray-500">Device Model</x-form-label>
        <x-form-input wire:model="device_model" type="text" id="device_model" placeholder="Phone Model (e.g., iPhone 12)"  />
        <x-form-error name="device_model" />

        <x-form-label name="imei_number" class="font-semibold text-gray-500">IMEI Number (Optional)</x-form-label>
        <x-form-input wire:model="imei_number" type="text" id="imei_number" placeholder="IMEI or Serial Number (Optional)" />
        <x-form-error name="imei_number" />

        <x-form-label name="issue_description" class="font-semibold text-gray-500">Tell us about your device's problem</x-form-label>
        <textarea wire:model="issue_description"  id="issue_description" placeholder="Describe the issue with your phone" rows="4" class="bg-slate-100 p-2" ></textarea>
        <x-form-error name="issue_description" />

        <x-form-label name="repair_service" class="font-semibold text-gray-500">Repair Service Type</x-form-label>
        <select id="repair_service" wire:model="repair_service" class="rounded p-3 bg-slate-100 " >
            <option value="" disabled>Select Repair Service</option>
            @foreach($services as $service)
            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
            @endforeach
        </select>
        <x-form-error name="repair_service" />

        <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">
            Submit Repair Request
        </button>
    </form>
</fieldset>