<form method="POST" class="w-full md:w-2/4 m-auto shadow p-4 rounded flex flex-col gap-4" wire:submit.prevent="store">
    @if(session()->has('error'))
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif
    <h2 class="text-2xl font-bold  text-green-500 text-center">Schedule Your Repair Appointment</h2>
    <label for="appointment_date" class="font-semibold text-gray-500">Preferred Appointment Date</label>
    <x-form-input wire:model="appointment_date" type="date" id="appointment_date" name="appointment_date" />
    <x-form-error name="appointment_date" />

    <label for="appointment_time" class="font-semibold text-gray-500">Preferred Appointment Time</label>
    <div class="grid grid-cols-4 gap-2 text-center cursor-pointer">
        @foreach($times as $time)
        <label class="bg-slate-400 text-white font-bold rounded-md p-2 hover:scale-95 transition-all time-label">
            <input wire:model="selected_time" type="radio" name="selected_time" id="selected_time" value="{{ $time->id }}" class="hidden">
            {{ $time->time }}
        </label>
        @endforeach
    </div>
    <x-form-error name="selected_time" />

    <x-form-label name="address" class="font-semibold text-gray-500">Address</x-form-label>
    <x-form-input wire:model="address" type="text" id="address" placeholder="Your address" />
    <x-form-error name="address" />

    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Schedule Appointment</button>
</form>

<script>
    // Get all the time labels
    const timeLabels = document.querySelectorAll('.time-label');
    console.log(timeLabels);

    timeLabels.forEach((label => {
        label.addEventListener('click', () => {
            // Reset background color for all labels
            timeLabels.forEach(label => label.style.backgroundColor = '')
            label.style.backgroundColor = '#38a169';
        });
    }))
</script>