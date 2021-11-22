<div>
    <div class="bg-white">
        <!--
          Mobile menu

          Off-canvas menu for mobile, show/hide based on off-canvas menu state.
        -->
        <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu overlay, show/hide based on off-canvas menu state.

              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 pt-5 pb-2 flex">
                    <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Links -->
{{--                <div class="mt-2">--}}
{{--                    <div class="border-b border-gray-200">--}}
{{--                        <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">--}}
{{--                            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->--}}
{{--                            <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">--}}
{{--                                Women--}}
{{--                            </button>--}}

{{--                            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->--}}
{{--                            <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">--}}
{{--                                Men--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- 'Women' tab panel, show/hide based on tab state. -->
{{--                    <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">--}}
{{--                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">--}}
{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    New Arrivals--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}

{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    Basic Tees--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}

{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    Accessories--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}

{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    Carry--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- 'Men' tab panel, show/hide based on tab state. -->
{{--                    <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">--}}
{{--                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">--}}
{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    New Arrivals--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}

{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    Basic Tees--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}

{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    Accessories--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}

{{--                            <div class="group relative">--}}
{{--                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">--}}
{{--                                </div>--}}
{{--                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">--}}
{{--                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                    Carry--}}
{{--                                </a>--}}
{{--                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

{{--                <div class="border-t border-gray-200 py-6 px-4 space-y-6">--}}
{{--                    <div class="flow-root">--}}
{{--                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>--}}
{{--                    </div>--}}

{{--                    <div class="flow-root">--}}
{{--                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="border-t border-gray-200 py-6 px-4 space-y-6">--}}
{{--                    <div class="flow-root">--}}
{{--                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>--}}
{{--                    </div>--}}
{{--                    <div class="flow-root">--}}
{{--                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="border-t border-gray-200 py-6 px-4 space-y-6">--}}
{{--                    <!-- Currency selector -->--}}
{{--                    <form>--}}
{{--                        <div class="inline-block">--}}
{{--                            <label for="mobile-currency" class="sr-only">Currency</label>--}}
{{--                            <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">--}}
{{--                                <select id="mobile-currency" name="currency" class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">--}}
{{--                                    <option>CAD</option>--}}

{{--                                    <option>USD</option>--}}

{{--                                    <option>AUD</option>--}}

{{--                                    <option>EUR</option>--}}

{{--                                    <option>GBP</option>--}}
{{--                                </select>--}}
{{--                                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">--}}
{{--                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">--}}
{{--                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>

        <header class="relative">
            <nav aria-label="Top">
                <!-- Top navigation -->
                <div class="bg-gray-900">
                    <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                        <!-- Currency selector -->
{{--                        <form>--}}
{{--                            <div>--}}
{{--                                <label for="desktop-currency" class="sr-only">Currency</label>--}}
{{--                                <div class="-ml-2 group relative bg-gray-900 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">--}}
{{--                                    <select id="desktop-currency" name="currency" class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">--}}
{{--                                        <option>CAD</option>--}}

{{--                                        <option>USD</option>--}}

{{--                                        <option>AUD</option>--}}

{{--                                        <option>EUR</option>--}}

{{--                                        <option>GBP</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">--}}
{{--                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">--}}
{{--                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}

                        <div class="flex items-center space-x-6">
                            <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                            <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                        </div>
                    </div>
                </div>

                <!-- Secondary navigation -->
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
{{--                        <div class="h-16 flex items-center justify-between">--}}
                            <!-- Logo (lg+) -->
{{--                            <div class="hidden lg:flex-1 lg:flex lg:items-center">--}}
{{--                                <a href="#">--}}
{{--                                    <span class="sr-only">Workflow</span>--}}
{{--                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        @include('components.shop.store-navigation')

{{--                            <div class="hidden h-full lg:flex">--}}
{{--                                <!-- Flyout menus -->--}}
{{--                                <div class="px-4 bottom-0 inset-x-0">--}}
{{--                                    <div class="h-full flex justify-center space-x-8">--}}
{{--                                        <div class="flex">--}}
{{--                                            <div class="relative flex">--}}
{{--                                                <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->--}}
{{--                                                <button type="button" class="text-gray-700 hover:text-gray-800 relative flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium" aria-expanded="false">--}}
{{--                                                    Women--}}
{{--                                                    <!-- Open: "bg-indigo-600", Closed: "" -->--}}
{{--                                                    <span class="absolute z-20 -bottom-px inset-x-0 h-0.5 transition ease-out duration-200" aria-hidden="true"></span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}

{{--                                            <!----}}
{{--                                              'Women' flyout menu, show/hide based on flyout menu state.--}}

{{--                                              Entering: "transition ease-out duration-200"--}}
{{--                                                From: "opacity-0"--}}
{{--                                                To: "opacity-100"--}}
{{--                                              Leaving: "transition ease-in duration-150"--}}
{{--                                                From: "opacity-100"--}}
{{--                                                To: "opacity-0"--}}
{{--                                            -->--}}
{{--                                            <div class="absolute z-10 top-full inset-x-0 bg-white text-sm text-gray-500">--}}
{{--                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->--}}
{{--                                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>--}}
{{--                                                <!-- Fake border when menu is open -->--}}
{{--                                                <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">--}}
{{--                                                    <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->--}}
{{--                                                    <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>--}}
{{--                                                </div>--}}

{{--                                                <div class="relative">--}}
{{--                                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--                                                        <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">--}}
{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    New Arrivals--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    Basic Tees--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    Accessories--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    Carry--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="flex">--}}
{{--                                            <div class="relative flex">--}}
{{--                                                <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->--}}
{{--                                                <button type="button" class="text-gray-700 hover:text-gray-800 relative flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium" aria-expanded="false">--}}
{{--                                                    Men--}}
{{--                                                    <!-- Open: "bg-indigo-600", Closed: "" -->--}}
{{--                                                    <span class="absolute z-20 -bottom-px inset-x-0 h-0.5 transition ease-out duration-200" aria-hidden="true"></span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}

{{--                                            <!----}}
{{--                                              'Women' flyout menu, show/hide based on flyout menu state.--}}

{{--                                              Entering: "transition ease-out duration-200"--}}
{{--                                                From: "opacity-0"--}}
{{--                                                To: "opacity-100"--}}
{{--                                              Leaving: "transition ease-in duration-150"--}}
{{--                                                From: "opacity-100"--}}
{{--                                                To: "opacity-0"--}}
{{--                                            -->--}}
{{--                                            <div class="absolute z-10 top-full inset-x-0 bg-white text-sm text-gray-500">--}}
{{--                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->--}}
{{--                                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>--}}
{{--                                                <!-- Fake border when menu is open -->--}}
{{--                                                <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">--}}
{{--                                                    <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->--}}
{{--                                                    <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>--}}
{{--                                                </div>--}}

{{--                                                <div class="relative">--}}
{{--                                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--                                                        <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">--}}
{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    New Arrivals--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    Basic Tees--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    Accessories--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="group relative">--}}
{{--                                                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">--}}
{{--                                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#" class="mt-4 block font-medium text-gray-900">--}}
{{--                                                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>--}}
{{--                                                                    Carry--}}
{{--                                                                </a>--}}
{{--                                                                <p aria-hidden="true" class="mt-1">Shop now</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>--}}

{{--                                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Mobile menu and search (lg-) -->
{{--                            <div class="flex-1 flex items-center lg:hidden">--}}
{{--                                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->--}}
{{--                                <button type="button" class="-ml-2 bg-white p-2 rounded-md text-gray-400">--}}
{{--                                    <span class="sr-only">Open menu</span>--}}
{{--                                    <!-- Heroicon name: outline/menu -->--}}
{{--                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                                    </svg>--}}
{{--                                </button>--}}

{{--                                <!-- Search -->--}}
{{--                                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">--}}
{{--                                    <span class="sr-only">Search</span>--}}
{{--                                    <!-- Heroicon name: outline/search -->--}}
{{--                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <!-- Logo (lg-) -->--}}
{{--                            <a href="#" class="lg:hidden">--}}
{{--                                <span class="sr-only">Workflow</span>--}}
{{--                                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">--}}
{{--                            </a>--}}

{{--                            <div class="flex-1 flex items-center justify-end">--}}
{{--                                <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">--}}
{{--                                    Search--}}
{{--                                </a>--}}

{{--                                <div class="flex items-center lg:ml-8">--}}
{{--                                    <!-- Help -->--}}
{{--                                    <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:hidden">--}}
{{--                                        <span class="sr-only">Help</span>--}}
{{--                                        <!-- Heroicon name: outline/question-mark-circle -->--}}
{{--                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Help</a>--}}

{{--                                    <!-- Cart -->--}}
{{--                                    <div class="ml-4 flow-root lg:ml-8">--}}
{{--                                        <a href="#" class="group -m-2 p-2 flex items-center">--}}
{{--                                            <!-- Heroicon name: outline/shopping-bag -->--}}
{{--                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />--}}
{{--                                            </svg>--}}
{{--                                            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>--}}
{{--                                            <span class="sr-only">items in cart, view bag</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <!-- Hero section -->
            <div class="relative">
                <!-- Background image and overlap -->
                <div aria-hidden="true" class="hidden absolute inset-0 sm:flex sm:flex-col">
                    <div class="flex-1 relative w-full bg-gray-800">
                        <div class="absolute inset-0 overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-hero-full-width.jpg" alt="" class="w-full h-full object-center object-cover">
                        </div>
                        <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                    </div>
                    <div class="w-full bg-white h-32 md:h-40 lg:h-48"></div>
                </div>

                <div class="relative max-w-3xl mx-auto pb-96 px-4 text-center sm:pb-0 sm:px-6 lg:px-8">
                    <!-- Background image and overlap -->
                    <div aria-hidden="true" class="absolute inset-0 flex flex-col sm:hidden">
                        <div class="flex-1 relative w-full bg-gray-800">
                            <div class="absolute inset-0 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-hero-full-width.jpg" alt="" class="w-full h-full object-center object-cover">
                            </div>
                            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                        </div>
                        <div class="w-full bg-white h-48"></div>
                    </div>
                    <div class="relative py-32">
                        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">Mid-Season Sale</h1>
                        <div class="mt-4 sm:mt-6">
                            <a href="#" class="inline-block bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop Collection</a>
                        </div>
                    </div>
                </div>

                <section aria-labelledby="collection-heading" class="-mt-96 relative sm:mt-0">
                    <h2 id="collection-heading" class="sr-only">Collections</h2>
                    <div class="max-w-md mx-auto grid grid-cols-1 gap-y-6 px-4 sm:max-w-7xl sm:px-6 sm:grid-cols-3 sm:gap-y-0 sm:gap-x-6 lg:px-8 lg:gap-x-8">
                        <div class="group relative h-96 bg-white rounded-lg shadow-xl sm:h-auto sm:aspect-w-4 sm:aspect-h-5">
                            <div>
                                <div aria-hidden="true" class="absolute inset-0 rounded-lg overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-collection-01.jpg" alt="Woman wearing a comfortable cotton t-shirt." class="w-full h-full object-center object-cover">
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                                </div>
                                <div class="absolute inset-0 rounded-lg p-6 flex items-end">
                                    <div>
                                        <p aria-hidden="true" class="text-sm text-white">
                                            Shop the collection
                                        </p>
                                        <h3 class="mt-1 font-semibold text-white">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Women&#039;s
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group relative h-96 bg-white rounded-lg shadow-xl sm:h-auto sm:aspect-w-4 sm:aspect-h-5">
                            <div>
                                <div aria-hidden="true" class="absolute inset-0 rounded-lg overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-collection-02.jpg" alt="Man wearing a comfortable and casual cotton t-shirt." class="w-full h-full object-center object-cover">
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                                </div>
                                <div class="absolute inset-0 rounded-lg p-6 flex items-end">
                                    <div>
                                        <p aria-hidden="true" class="text-sm text-white">
                                            Shop the collection
                                        </p>
                                        <h3 class="mt-1 font-semibold text-white">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Men&#039;s
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group relative h-96 bg-white rounded-lg shadow-xl sm:h-auto sm:aspect-w-4 sm:aspect-h-5">
                            <div>
                                <div aria-hidden="true" class="absolute inset-0 rounded-lg overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-collection-03.jpg" alt="Person sitting at a wooden desk with paper note organizer, pencil and tablet." class="w-full h-full object-center object-cover">
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                                </div>
                                <div class="absolute inset-0 rounded-lg p-6 flex items-end">
                                    <div>
                                        <p aria-hidden="true" class="text-sm text-white">
                                            Shop the collection
                                        </p>
                                        <h3 class="mt-1 font-semibold text-white">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Desk Accessories
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <section aria-labelledby="trending-heading">
                <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 sm:py-32 lg:pt-32 lg:px-8">
                    <div class="md:flex md:items-center md:justify-between">
                        <h2 id="favorites-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Trending Products</h2>
                        <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">Shop the collection<span aria-hidden="true"> &rarr;</span></a>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                        <div class="group relative">
                            <div class="w-full h-56 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Leather Long Wallet
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Natural</p>
                            <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                        </div>

                        <!-- More products... -->
                    </div>

                    <div class="mt-8 text-sm md:hidden">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Shop the collection<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </section>

            <section aria-labelledby="perks-heading" class="bg-gray-50 border-t border-gray-200">
                <h2 id="perks-heading" class="sr-only">Our perks</h2>

                <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 sm:py-32 lg:px-8">
                    <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-returns-light.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                                <h3 class="text-sm font-semibold tracking-wide uppercase text-gray-900">
                                    Free returns
                                </h3>
                                <p class="mt-3 text-sm text-gray-500">
                                    Not what you expected? Place it back in the parcel and attach the pre-paid postage stamp.
                                </p>
                            </div>
                        </div>

                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-calendar-light.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                                <h3 class="text-sm font-semibold tracking-wide uppercase text-gray-900">
                                    Same day delivery
                                </h3>
                                <p class="mt-3 text-sm text-gray-500">
                                    We offer a delivery service that has never been done before. Checkout today and receive your products within hours.
                                </p>
                            </div>
                        </div>

                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-gift-card-light.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                                <h3 class="text-sm font-semibold tracking-wide uppercase text-gray-900">
                                    All year discount
                                </h3>
                                <p class="mt-3 text-sm text-gray-500">
                                    Looking for a deal? You can use the code &quot;ALLYEAR&quot; at checkout and get money off all year round.
                                </p>
                            </div>
                        </div>

                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                                <h3 class="text-sm font-semibold tracking-wide uppercase text-gray-900">
                                    For the planet
                                </h3>
                                <p class="mt-3 text-sm text-gray-500">
                                    We’ve pledged 1% of sales to the preservation and restoration of the natural environment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
