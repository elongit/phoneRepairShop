<x-adminLayout>
    <x-slot name="title">
        Edit User
    </x-slot>
    
    <fieldset class="w-full md:w-2/4 m-auto shadow p-4 rounded my-10">
        <legend class="text-2xl font-bold text-green-500">
            Edit User
        </legend>
        
        <form action="{{ route('user.update', $user->id) }}" method="POST" class="flex flex-col gap-3.5">
            @csrf
            @method('PATCH')

            <div class="grid grid-cols-2 gap-2">
                <div class="flex flex-col gap-2">
                    <x-form-label name="first_name" class="font-semibold text-gray-500">First name</x-form-label>
                    <x-form-input name="first_name" type="text" value="{{ old('first_name', $user->first_name) }}" placeholder="First name" />
                    <x-form-error name="first_name" />
                </div>
                
                <div class="flex flex-col gap-2">
                    <x-form-label name="last_name" class="font-semibold text-gray-500">Last name</x-form-label>
                    <x-form-input name="last_name" type="text" value="{{ old('last_name', $user->last_name) }}" placeholder="Enter your last name" />
                    <x-form-error name="last_name" />
                </div>
            </div>

            <x-form-label name="email" class="font-semibold text-gray-500">Email</x-form-label>
            <x-form-input name="email" type="email" value="{{ old('email', $user->email) }}" placeholder="Your email" />
            <x-form-error name="email" />

            <x-form-label name="phone_number" class="font-semibold text-gray-500">Phone Number</x-form-label>
            <x-form-input name="phone_number" type="tel" value="{{ old('phone_number', $user->phone_number) }}" placeholder="Your phone number" inputmode="tel" />
            <x-form-error name="phone_number" />

            <x-form-label name="role">Choose User Role</x-form-label>
            <select id="role_id" name="role_id" class="bg-slate-200 p-2 rounded">
                <option value="">Select role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>
            <x-form-error name="role_id" />

            <div class="grid grid-cols-2 gap-2">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold rounded p-2.5">Update User</button>
                <a href="{{ route('users') }}">
                    <button type="button" class="bg-red-500 w-full hover:bg-red-600 text-white font-semibold rounded p-2.5">Cancel</button>
                </a>
            </div>
        </form>
    </fieldset>
</x-adminLayout>
