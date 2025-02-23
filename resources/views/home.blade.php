<x-layout>
   <x-slot name="title">
      Home
   </x-slot>
     
   <section class="my-5 md:my-24 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <figure class="order-last lg:order-last overflow-hidden cursor-zoom-in">
         <img
         src="{{ asset('images/smartPhone.png') }}"
         alt="Green Phone provides telecommunications services including sales, management, and repairs of telecom equipment."
            class="w-full h-full object-cover rounded hover:scale-110 transition-all"
         />
      </figure>

      <div class="h-full p-2 rounded flex flex-col justify-center">
         <h1 class="text-2xl md:text-5xl font-bold text-gray-700 drop-shadow">
           <span class="text-green-500"> Green </span>Phone Telecom Services
         </h1>
         <p class="text-[17px] md:text-xl my-4 md:my-7 lg:my-4 text-black/50">
         Explore our high-quality phone services including repairs, accessories, mobile plans, and more, all at affordable prices.         </p>
         <div class="w-fit">
            <a href="{{ route('contact') }}" class="bg-green-500 text-white px-4 py-3 rounded font-semibold transition-all hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
            Repair my phone
             </a>

         </div>
      </div>
   </section>
<!-- our services secion -->
   <section class="my-10 px-4 md:px-16 bg-slate-50 p-5">
   <h1 class="text-2xl md:text-5xl font-bold text-green-700 drop-shadow-md mb-6">
      Our Services
   </h1>

   <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <figure class="overflow-hidden rounded-lg shadow-lg  cursor-zoom-in">
         <img
            src="https://t4.ftcdn.net/jpg/09/56/94/87/360_F_956948738_qmUNWlaxfgdUZdzp5hTlMumdD3xbuCvP.jpg"
            alt="Technician repairing smartphones"
            class="w-full h-full object-cover"
         />
      </figure>

      <div class="flex flex-col justify-center space-y-4">
         <p class="text-lg md:text-xl  leading-relaxed text-green-500">
            <strong>Complete After-Sales Service</strong>
         </p>
         <p class="text-md text-gray-600 leading-relaxed">
            Our technicians support you throughout the process, from the first consultation to the finalization of the repairs.
         </p>
         <p class="text-md text-gray-600 leading-relaxed">
            Drawing on their expertise, they ensure that each step is carried out with care and precision.
         </p>
         <p class="text-md text-gray-600 leading-relaxed">
            We provide you with original parts as well as compatible parts, carefully selected to best meet your requirements and guarantee the durability and performance of your equipment.
         </p>
      </div>
   </div>
</section>

<section class="my-10 px-4 md:px-16">
   <h1 class="text-2xl text-center md:text-5xl font-bold text-green-700 drop-shadow-md mb-6">
      Service Commercial Local
   </h1>

   <p class="text-center text-lg md:text-xl text-gray-700 mb-6">
      Located in Morocco in the Casablanca-Settat region and available from 9 a.m. to 5:30 p.m. without interruption
   </p>

   <figure class="w-4/5 md:w-2/3 m-auto">
      <img 
         src="https://static.wixstatic.com/media/40bb32_11399d500cb54624a779f61d8b2db2c7~mv2.png/v1/fill/w_909,h_909,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/Iphones.png" 
         class="w-full rounded-lg shadow-lg" 
         alt="Iphones"
      />
   </figure>
</section>

      <!-- Testimonial section -->

<section class="my-16 px-4 md:px-16">
   <h2 class="text-2xl text-center md:text-4xl font-bold text-green-700 mb-10">What Our Clients Say</h2>

   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg text-center">
         <img src="https://static.vecteezy.com/system/resources/thumbnails/001/840/612/small_2x/picture-profile-icon-male-icon-human-or-people-sign-and-symbol-free-vector.jpg" alt="Client Image" class="w-24 h-24 rounded-full mx-auto mb-4">
         <p class="text-lg text-gray-700 mb-4">
            "The service provided by Green Phone was exceptional! They helped me fix my phone quickly, and the customer service was outstanding."
         </p>
         <h3 class="text-xl font-semibold text-green-700">laamari Hassan</h3>
         <p class="text-sm text-gray-500">CEO, Tech Solutions</p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg text-center">
         <img src="https://static.vecteezy.com/system/resources/thumbnails/001/840/612/small_2x/picture-profile-icon-male-icon-human-or-people-sign-and-symbol-free-vector.jpg" alt="Client Image" class="w-24 h-24 rounded-full mx-auto mb-4">
         <p class="text-lg text-gray-700 mb-4">
            "Amazing experience! Green Phone was able to repair my phone quickly, and it works like new. Highly recommend their services!"
         </p>
         <h3 class="text-xl font-semibold text-green-700">Omar zahi</h3>
         <p class="text-sm text-gray-500">Manager, Creative Agency</p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg text-center">
         <img src="https://static.vecteezy.com/system/resources/thumbnails/001/840/612/small_2x/picture-profile-icon-male-icon-human-or-people-sign-and-symbol-free-vector.jpg" alt="Client Image" class="w-24 h-24 rounded-full mx-auto mb-4">
         <p class="text-lg text-gray-700 mb-4">
            "Green Phone provided top-notch service. They repaired my phone at an affordable price, and I was kept informed throughout the process."
         </p>
         <h3 class="text-xl font-semibold text-green-700">Ahmed ali</h3>
         <p class="text-sm text-gray-500">Freelance Developer</p>
      </div>
   </div>
</section>

<section class="my-5 px-4 md:px-16 bg-green-50 py-5 rounded-lg">
   <h2 class="text-2xl text-center md:text-4xl font-bold text-green-700 mb-6">
   Subscribe to our newsletter!
   </h2>

   <form action="#" method="POST" class="max-w-lg mx-auto flex flex-col items-center space-y-4">
      <input 
         type="email" 
         name="email" 
         id="email" 
         placeholder="Entrez votre email"
         class="w-full px-4 py-2.5   rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
         required
      />
      <button 
         type="submit" 
         class="w-full px-4 py-2 bg-green-700 text-white font-semibold rounded-lg hover:bg-green-800 transition-all focus:outline-none focus:ring-2 focus:ring-green-500"
      >
         S'abonner
      </button>
   </form>

   <p class="text-center text-sm text-gray-600 mt-4">
      En vous inscrivant, vous acceptez de recevoir nos emails. Vous pouvez vous désabonner à tout moment.
   </p>
</section>


</x-layout>
