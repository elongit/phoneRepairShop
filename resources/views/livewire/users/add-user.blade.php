<fieldset class="w-full md:w-2/4 m-auto shadow p-4 rounded my-10">
    <legend class="text-2xl font-bold text-blue-500">
        Add user
    </legend>
    <form   wire:submit='store' class="flex flex-col gap-3.5">
        <div class="grid grid-cols-2 gap-2">
            <div class="flex flex-col gap-2">
                <x-form-label name="first_name" class="font-semibold text-gray-500">First name</x-form-label>
                <x-form-input wire:model="first_name" type="text" id="first_name" placeholder="First name" />
                <x-form-error name="first_name" />
            </div>
            <div class="flex flex-col gap-2">
                <x-form-label name="last_name" class="font-semibold text-gray-500">Last name</x-form-label>
                <x-form-input wire:model="last_name" type="text" id="last_name" placeholder="Last name" />
                <x-form-error name="last_name" />
            </div>
        </div>

        <x-form-label name="email" class="font-semibold text-gray-500">Email</x-form-label>
        <x-form-input wire:model="email" type="email" id="email" placeholder="Your email" />
        <x-form-error name="email" />

        <x-form-label name="phone_number" class="font-semibold text-gray-500">Phone Number</x-form-label>
        <x-form-input wire:model="phone_number" type="tel" id="phone_number" placeholder="Your Phone Number" inputmode="tel" />
        <x-form-error name="phone_number" />

        <x-form-label name="password" class="font-semibold text-gray-500">Password</x-form-label>
        <x-form-input wire:model="password" type="password" id="password" placeholder="Your password" />
        <x-form-error name="password" />


        <x-form-label name="role">Choose user role</x-form-label>
        <select wire:model="role_id" id="role_id" class="bg-slate-200 p-2 rounded">
            <option value="">Select role</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">
                {{ $role->name }}
            </option>
            @endforeach
        </select>
        <x-form-error name="role_id" />

        <div class="grid grid-cols-2 gap-2">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded p-2.5">Add user</button>
            <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-semibold rounded p-2.5" wire:click="resetForm">Cancel</button>
        </div>
    </form>
</fieldset>