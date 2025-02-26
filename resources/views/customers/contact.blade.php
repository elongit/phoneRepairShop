<x-layout>
<x-slot name="title">
      Contact us
   </x-slot>
<section class="p-5 mt-5 md:text-lg">

<form  method="GET" class="w-full md:w-2/4 m-auto flex flex-col gap-3">
    <h2 class="text-2xl font-bold text-center text-green-500">
    Get in Touch
    </h2>

    <x-form-label  id="subject"  name="message"   >
       Your subject
    </x-form-label>
    <x-form-input type="text" id="subject" name="subject"  placeholder="Your subject"   />
    <x-form-label  id="message" name="message">
        Write your message
    </x-form-label>
    <textarea name="message" id="message" placeholder="Your message" class="p-2.5 bg-slate-200"></textarea>
    <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Send</button>
</form>
<section>
</x-layout>
