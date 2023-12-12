<button data-modal-target="order-modal" data-modal-toggle="order-modal"
    class="block text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800"
    type="button">
    Toggle modal
</button>
<div id="order-modal" tabindex="-1" aria-hidden="true"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative rounded-lg shadow bg-gray-700 border-white border">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                <h3 class="text-xl font-semibold  text-white">
                    Checkout
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                    data-modal-hide="order-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium  text-white">Your name</label>
                        <input type="text" autocomplete="off" name="name" id="name"
                            class="border outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium  text-white">Your email</label>
                        <input type="text" autocomplete="off" name="email" id="email"
                            class="border outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium  text-white">Your address</label>
                        <input type="text" autocomplete="off" name="address" id="address"
                            class="border outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            placeholder="Street Address" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium  text-white">Your password</label>
                        <input type="password" name="pass" id="pass" placeholder="••••••••"
                            class="border outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            required>
                    </div>
                    <button id="dropdownButton" data-dropdown-toggle="paymentMethod"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800"
                        type="button">Payment method <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="paymentMethod"
                        class="z-10 hidden border border-white rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-1 text-sm text-gray-200"
                            aria-labelledby="paymentMethod">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Paypal</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  hover:bg-gray-600 hover:text-white">JazzCash</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Visa card</a>
                            </li>
                        </ul>
                        <div class="h-[0.1px] border-t border-[#e5e7eb]"></div>
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">At delivery</a>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Confirm
                        order</button>
                </form>
            </div>
        </div>
    </div>
</div>