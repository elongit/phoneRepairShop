<x-adminLayout>
    <x-slot name='title'>
        Order Management
    </x-slot>

    <section class="p-5 mt-5 md:text-lg">
        <table class="cursor-pointer  text-sm w-full rounded-lg">
            <thead class="text-xs text-center uppercase bg-slate-800 text-white sticky top-0">
                <tr>
                    <th scope="col" class="px-4 py-3">Order ID</th>
                    <th scope="col" class="px-4 py-3">Customer Name</th>
                    <th scope="col" class="px-4 py-3">Service</th>
                    <th scope="col" class="px-4 py-3">Order Date</th>
                    <th scope="col" class="px-4 py-3">Status</th>
                    <th scope="col" class="px-4 py-3">Progress</th>
                    <th scope="col" class="px-4 py-3">Assigned to</th>
                    <th scope="col" class="px-4 py-3">Shipping Address</th>
                    <th scope="col" class="px-4 py-3">Actions</th>
                </tr>
            </thead>

            <tbody class="text-center">
                @foreach($orders as $order)
                <tr class="border-b  font-semibold hover:bg-gray-100">
                        <td class="px-4 py-2">
                            {{ $order->id }}
                        </td>
                        <td class="px-4  py-2">
                        {{ $order->user->first_name . ' '. $order->user->last_name  }}
                        </td>

                        <td class="px-4  py-2">
                        Others
                        </td>
                        <td class="px-4  py-2">
                        {{ $order->appointment->appointment_date }}
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

                        <td class="px-4  py-2 text-red-600">
                        {{ $order->status->progress }}%
                        </td>

                        <td class="px-4  py-2">
                        {{ $order->technicien ? $order->technicien->technicien_name : 'Waiting for assignment' }}                        </td>

                        <td class="px-4  py-2">
                        {{ $order->appointment->address}}
                        </td>

                        <td class="px-4  py-2">
                            <a href="{{ route('order.edit', $order->id) }}">
                            <button class="p-2 px-4 text-white font-semibold bg-green-500 hover:bg-green-600 rounded ">
                            <i class="fas fa-edit"></i>

                            </button>
                            </a>
                        </td>
                        
                </tr>
                @endforeach
            </tbody>

        </table>
    </section>
</x-adminLayout>
