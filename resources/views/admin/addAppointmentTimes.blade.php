<x-adminLayout>
<x-slot name="title">
      Add appointment time
   </x-slot>
<section class="p-5 mt-5 md:text-lg">

<form  action="{{ route('addAppointment.store') }}" method="POST" class="w-full md:w-2/4 m-auto flex flex-col gap-3">
    @csrf
    <h2 class="text-2xl font-bold text-center text-green-500">
        Add Appointment Time
    </h2>

    <x-form-label  name="time"   >
       Add Appointment Time 
    </x-form-label>
    <x-form-input type="time" id="time" name="time"    />
    <x-form-error name='time' />
    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Add</button>
</form>
<section>
</x-layout>
