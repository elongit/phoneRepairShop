<x-adminLayout>
    <x-slot name="title">
        Edit Order
    </x-slot>
    
    <section class="p-5 mt-5 md:text-lg">
        <form method="POST" action="{{ route('order.update' , $order->id) }}" class="w-full md:w-2/4 m-auto flex flex-col gap-3">
            @csrf
            @method('PATCH')
            <h2 class="text-2xl font-bold text-center text-green-500">
                Edit Order
            </h2>

              <!-- customer_name -->
            <x-form-label name="customer_name"> Customer name </x-form-label>
            <x-form-input type="text" id="customer_name" name="customer_name"  readonly value="{{ $order->user->last_name }}"/>

            <!-- Order Status -->
            <x-form-label name="order_status">Order Status</x-form-label>
            <select name="order_status" id="order_status" class="bg-slate-200 p-2 rounded">
                <option value="">Select Status</option>
                @foreach($statuses as $status) 
                    <option value="{{$status->id}}" {{ $order->status->id == $status->id ? 'selected' : '' }}>
                        {{ $status->name }}
                    </option>
                @endforeach
            </select>

            <!-- Order Progress -->
            <x-form-label name="order_progress">Order Progress (%)</x-form-label>
            <x-form-input type="number" id="order_progress" name="order_progress" value="{{ $order->status->progress }}" min="0" max="100" />

            <!-- Assign Technician -->
            <x-form-label name="technician_id">Assign to Technician</x-form-label>
            <select name="technician_id" id="technician_id" class="bg-slate-200  text-black p-2 rounded">
                <option value="" disabled>Select Technician</option>
                @foreach($technicians as $technician)
                    <option value="{{ $technician->id }}" {{ $order->technician_id == $technician->id ? 'selected' : '' }}>
                        {{ $technician->first_name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">Update Order</button>
        </form>
    </section>
</x-adminLayout>
