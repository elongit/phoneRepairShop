<x-layout>
    <x-slot name="title"> Checkout </x-slot>

    <section class="p-2 mt-5 md:text-lg">
        <fieldset class="w-full md:w-2/4 m-auto  p-4 rounded">
            <legend class="text-2xl font-bold text-red-500">Checkout</legend>
            <form action="" class="flex flex-col gap-3.5">
                <!-- Card Name Field -->
                <x-form-label name="cardName">Card Name</x-form-label>
                <x-form-input type="text" id="cardName" placeholder="Card Name"/>
                <x-form-error name="cardName" />

                <!-- Address Field -->
                <x-form-label name="address">Address</x-form-label>
                <x-form-input type="text" id="address" placeholder="Your address"/>
                <x-form-error name="address" />

                <!-- City and Zip Fields (Grid) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col gap-2">
                        <x-form-label name="city">City</x-form-label>
                        <x-form-input type="text" id="city" placeholder="Your city"/>
                        <x-form-error name="city" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <x-form-label name="zip">Zip</x-form-label>
                        <x-form-input type="number" id="zip" placeholder="Your zip"/>
                        <x-form-error name="zip" />
                    </div>
                </div>

                <!-- Expiry Date and CCV Fields (Grid) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col gap-2">
                        <x-form-label name="expiry_date">Expiry Date</x-form-label>
                        <x-form-input type="number" id="expiry_date" placeholder="MM/YY"/>
                        <x-form-error name="expiry_date" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <x-form-label name="ccv">CCV</x-form-label>
                        <x-form-input type="number" id="ccv"/>
                        <x-form-error name="ccv" />
                    </div>
                </div>

                <!-- Phone Number Field -->
                <x-form-label name="phone_number">Phone Number</x-form-label>
                <x-form-input type="tel" id="phone_number" placeholder="Your phone number"/>
                <x-form-error name="phone_number" />

                <!-- Checkbox for Save Card Details -->
                <div class="flex items-center gap-2 cursor-pointer">
                    <input
                        type="checkbox"
                        name="save_payment_details"
                        id="save_payment_details"
                        class="h-4 w-4 border-gray-300 text-red-500 focus:ring-red-500"
                    />
                    <x-form-label name="save_payment_details">
                        Save card details for future purchases
                    </x-form-label>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="bg-red-500 text-white font-semibold rounded p-2.5 mt-3 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                >
                    Complete Purchase
                </button>
            </form>
        </fieldset>

        <section class="p-5 h-fit -order-last md:-order-first flex flex-col gap-3 bg-slate-50 text-lg font-semibold text-gray-600">
          <h1 class="font-bold">Order Summary</h1>
          <div class="flex justify-between">
            <h3 class="text-xl font-medium text-gray-700">Total items :</h3>
            <span>{itemsOnCart}</span>
          </div>
          <div class="flex justify-between">
            <h3 class="text-xl font-medium text-gray-700">
              Total charges :
            </h3>
            <span>${totalCharges.toFixed(2)}</span>
          </div>
          <div class="flex justify-between">
            <h3 class="text-xl font-medium text-gray-700">Shipping :</h3>
            <span>${shippingFee.toFixed(2)}</span>
          </div>
          <hr />
          <div class="flex justify-between">
            <h3 class="text-xl font-medium text-gray-700">
              Estimated Total :
            </h3>
            <span>${estimatedTotal.toFixed(2)}</span>
          </div>
        </section>
      </section>
    </section>
</x-layout>
