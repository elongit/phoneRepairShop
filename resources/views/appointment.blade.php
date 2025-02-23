<x-layout>
<x-slot name="title">
    Schedule Appointment
   </x-slot>

   <section class="p-5 mt-5 md:text-lg">

<form method="POST" class="w-full md:w-2/4 m-auto  shadow p-4 rounded flex flex-col gap-4">
    <h2 class="text-2xl font-bold text-center">Schedule Your Repair Appointment</h2>

    <label for="appointment_date" class="font-semibold text-gray-500">Preferred Appointment Date</label>
    <x-form-input type="date" id="appointment_date" name="appointment_date"  required />

    <label for="appointment_time" class="font-semibold text-gray-500">Preferred Appointment Time</label>
    <!-- <x-form-input type="time" id="appointment_time" name="appointment_time"  required /> -->
    <div class="grid grid-cols-4 gap-2 text-center cursor-pointer">
        @foreach($times as $time)
            <label class="bg-slate-400 text-white font-bold rounded-md p-2 hover:scale-95 transition-all">
                <input type="radio" name="selected_time" value="{{ $time }}" class="hidden" >
                {{$time}}
            </label>
        @endforeach
    </div>

    <x-form-label name="city" class="font-semibold text-gray-500">City</x-form-label>
    <x-form-input type="text" id="city" placeholder="Your City" required />
    <x-form-error name="city" />

    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Schedule Appointment</button>
</form>

   </section>
</x-layout>
