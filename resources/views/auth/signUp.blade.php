<x-layout>
<x-slot name='title'>
        Sign Up
    </x-slot>
   <section class="p-3 mt-5 md:text-lg">
      <fieldset class="w-full md:w-2/4 m-auto shadow p-4 rounded">
      <legend class="text-2xl font-bold  text-green-500">
            Sign Up
          </legend>
          <form action="" class=" flex flex-col gap-3.5 ">
          <div class="grid grid-cols-2 gap-2">
        
          <div class="flex flex-col gap-2">
          <x-form-label name="first_name" class="font-semibold text-gray-500">First name</x-form-label>
          <x-form-input type="text"  id="first_name" placeholder="First name"/>
          <x-form-error name='first_name'  />

          </div>
          <div class="flex flex-col gap-2">
            <x-form-label name="last_name" class="font-semibold text-gray-500">Last name</x-form-label>
            <x-form-input type="text"  id="last_name" placeholder="Last name"/>
            <x-form-error name='last_name'  />
            </div>
          </div>

            <x-form-label name="email" class="font-semibold text-gray-500">Email</x-form-label>
            <x-form-input type="text" id="email" placeholder="Your email"/>
            <x-form-error name='email'  />


            <x-form-label name="password" class="font-semibold text-gray-500">Password</x-form-label>
            <x-form-input type="password" id="password" placeholder="Your password"/>
            <x-form-error name='password'  />


            <x-form-label name="password_confirmation" class="font-semibold text-gray-500"> Confirm your Password</x-form-label>
            <x-form-input type="password" id="password_confirmation"  placeholder=" Confirm your Password"/>
            <x-form-error name='password_confirmation'  />


            <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5 ">Sign up</button>
            <small className="text-gray-700">
            Already have an account?
            <sapn class="font-semibold cursor-pointer">
              <a href="{{route('login')}}">Sign In</a>
            </sapn>
          </small>
         </form>
      </fieldset>
   </section>
</x-layout>
