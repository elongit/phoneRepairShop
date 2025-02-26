<fieldset class="w-full md:w-2/4 m-auto shadow p-4 rounded">
    <legend class="text-2xl font-bold  text-green-500">
        Login
    </legend>
    <form action="" class=" flex flex-col gap-3.5 " wire:submit = 'store'>
        <span class="text-lg text-center">
        <x-form-error name='Invalidcredentials' />
        </span>
        <x-form-label name="email" class="font-semibold text-gray-500">Email</x-form-label>
        <x-form-input wire:model='email' type="text" id="email" placeholder="Your email" />
        <x-form-error name='email' />

        <x-form-label name="password" class="font-semibold text-gray-500">Password</x-form-label>
        <x-form-input wire:model='password' type="password" id="password" placeholder="Your password" />
        <x-form-error name='password' />


        <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5 ">Login</button>
        <small className="text-gray-700">
            Don’t have an account?
            <sapn class="font-semibold cursor-pointer">
                <a href="{{ route('signup') }}">Sign Up</a>
            </sapn>
        </small>
    </form>
</fieldset>