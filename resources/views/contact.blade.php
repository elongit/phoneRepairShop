<x-layout>
    <x-slot name="title">
        Phone Repair Request
    </x-slot>

    <section class="p-5 mt-5 md:text-lg">
        <fieldset class="w-full md:w-2/4 m-auto shadow p-4 rounded">
            <legend class="text-2xl font-bold text-green-500">
                Phone Repair Request
            </legend>

            <form action="" class="flex flex-col gap-3.5">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-3">

                        <x-form-label name="name" class="font-semibold text-gray-500">Name</x-form-label>
                        <x-form-input type="text" id="name" placeholder="Your Full Name" required />
                        <x-form-error name="name" />
                    </div>
                    <div class="flex flex-col gap-3">
                        <x-form-label name="city" class="font-semibold text-gray-500">City</x-form-label>
                        <x-form-input type="text" id="city" placeholder="Your City" required />
                        <x-form-error name="city" />
                    </div>
                </div>
                <x-form-label name="email" class="font-semibold text-gray-500">Email</x-form-label>
                <x-form-input type="email" id="email" placeholder="Your Email Address" required />
                <x-form-error name="email" />

                <x-form-label name="phone_number" class="font-semibold text-gray-500">Phone Number</x-form-label>
                <x-form-input type="text" id="phone_number" placeholder="Your Phone Number" required />
                <x-form-error name="phone_number" />

                <x-form-label name="device_model" class="font-semibold text-gray-500">Device Model</x-form-label>
                <x-form-input type="text" id="device_model" placeholder="Phone Model (e.g., iPhone 12)" required />
                <x-form-error name="device_model" />

                <x-form-label name="imei_number" class="font-semibold text-gray-500">IMEI Number (Optional)</x-form-label>
                <x-form-input type="text" id="imei_number" placeholder="IMEI or Serial Number (Optional)" />
                <x-form-error name="imei_number" />

                <x-form-label name="issue_description" class="font-semibold text-gray-500">Tell us about your device's problem</x-form-label>
                <textarea id="issue_description" placeholder="Describe the issue with your phone" rows="4" class="bg-slate-100 p-2" required></textarea>
                <x-form-error name="issue_description" />

                <x-form-label name="repair_service" class="font-semibold text-gray-500">Repair Service Type</x-form-label>
                <select id="repair_service" class="border rounded p-3 " required>
                    <option value="">Select Repair Service</option>
                    <option value="screen_replacement">Screen Replacement</option>
                    <option value="battery_replacement">Battery Replacement</option>
                    <option value="water_damage_repair">Water Damage Repair</option>
                    <option value="charging_port_replacement">Charging Port Repair</option>
                    <option value="other">Other</option>
                </select>
                <x-form-error name="repair_service" />

                <button type="submit" class="bg-green-500 text-white font-semibold rounded p-2.5">
                    Submit Repair Request
                </button>
            </form>
        </fieldset>
    </section>
</x-layout>