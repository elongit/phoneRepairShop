<x-layout>
    <x-slot name='title'>
        My Order
    </x-slot>

    <section class="p-5 mt-5 md:text-lg">
        @if($orders->isNotEmpty())
        <table class="cursor-pointer text-sm w-full rounded-lg">
            <thead class="text-xs uppercase bg-green-600 text-white sticky top-0">
                <tr>
                    <th scope="col" class="px-4 py-3">Repair ID</th>
                    <th scope="col" class="px-4 py-3">Device</th>
                    <th scope="col" class="px-4 py-3">Service Type</th>
                    <th scope="col" class="px-4 py-3">Scheduled Appointment</th>
                    <th scope="col" class="px-4 py-3">Status</th>
                    <th scope="col" class="px-4 py-3">Technician</th>
                    <th scope="col" class="px-4 py-3">Progress</th>
                </tr>
            </thead>

            <tbody class="text-sm text-center text-gray-700 font-semibold">
                @foreach($orders as $order)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-3">{{ $order->order_id }}</td>
                    <td class="px-4 py-3">{{ $order->phoneType->device_model }}</td>
                    <td class="px-4 py-3">Other</td>

                    <td class="px-4 py-3">
                        {{ $order->appointment->appointment_date }} at
                        {{ $order->appointment->appointmentTime->time }}
                    </td>

                    <td class="px-4  py-2">
                        <span class="px-2 py-1 rounded-full text-white 
                            @if($order->status->name == 'En coure') bg-blue-500
                            @elseif($order->status->name == 'En attente') bg-yellow-500
                            @elseif($order->status->name == 'Terminé') bg-green-500
                            @else bg-gray-500
                            @endif">
                            {{ $order->status->name }}
                        </span>
                    </td>

                    <td class="px-4 py-3">
                        {{ $order->technicien ? $order->technicien->technicien_name : 'Waiting for assignment' }}
                    </td>

                    <td class="px-4 py-3 flex gap-2 items-center">
                        <div class="w-full bg-gray-300 h-2 rounded-full">
                            <!-- Progress Bar -->
                            <div class="bg-green-500 h-2 rounded-full" style="width: {{ $order->status->progress ?? 0 }}%"></div>
                        </div>
                        <span>{{$order->status->progress }}%</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <div class="w-fit  m-auto p-3">
       
            <figure>
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/girl-is-facing-an-order-error-illustration-download-in-svg-png-gif-file-formats--online-shopping-digital-e-commerce-set-01-pack-illustrations-8247634.png?f=webp" alt="">
            </figure>
        </div>

        <div class="flex flex-col items-center gap-6">
           <h1 class="font-semibold text-xl">You dont have any order yet</h1>
            <div class="w-fit">
                <a href="{{ route('repair') }}" class="bg-green-500 text-white px-4 py-3 rounded font-semibold transition-all hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Repair my phone
                </a>
            </div>
           </div>
        @endif
    </section>
</x-layout>