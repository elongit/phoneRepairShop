<x-adminLayout>
<x-slot name="title">
      Add Service
   </x-slot>
<section class="p-5 mt-5 md:text-lg">

<form  action="{{ route('addService.store') }}" method="POST" class="w-full md:w-2/4 m-auto flex flex-col gap-3">
   @csrf
    <h2 class="text-2xl font-bold text-center text-green-500">
    Add Service
    </h2>
    <x-form-label  name="service_name"   >
       Service name
    </x-form-label>
    <x-form-input type="text" id="service_name" name="service_name"  placeholder=" service name"   />
    <x-form-error name='service_name' />

    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Add</button>
</form>
<section>
</x-layout>
