<x-layout>
<x-slot name="title">
      track my phone
   </x-slot>
<section class="p-5 mt-5 md:text-lg">

<form  method="GET" class="w-full md:w-2/4 m-auto flex flex-col gap-4">
    <h2 class="text-2xl font-bold text-center text-green-500">Track Your Repair</h2>

    <label for="repair_id" class="font-semibold text-gray-500">Repair ID</label>
    <x-form-input type="text" id="repair_id" name="repair_id" placeholder="Enter your repair ID" required />

    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Track Repair Status</button>
</form>
<section>
</x-layout>
