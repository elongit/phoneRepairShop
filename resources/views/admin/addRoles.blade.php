<x-adminLayout>
<x-slot name="title">
      Add role
   </x-slot>
<section class="p-5 mt-5 md:text-lg">

<form  action="" method="POST" class="w-full md:w-2/4 m-auto flex flex-col gap-3">
   @csrf
    <h2 class="text-2xl font-bold text-center text-green-500">
    Add role
    </h2>
    <x-form-label  name="role_name"   >
       role name
    </x-form-label>
    <x-form-input type="text" id="role_name" name="role_name"  placeholder=" role name"   />
    <x-form-error name='role_name' />

    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Add role</button>
</form>
<section>
</x-layout>
