<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <header class="relative bg-white">
        <nav aria-label="Top" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="border-b border-gray-200 px-4 pb-14 sm:px-0 sm:pb-0">
                <div class="h-16 flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex-1 flex">
                        <a href="#">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                        </a>
                    </div>

                    <div class="absolute bottom-0 inset-x-0 sm:static sm:flex-1 sm:self-stretch">
                        <div x-data="{ open: false }" class="absolute border-t h-14 px-4 flex space-x-8 overflow-x-auto pb-px sm:h-full sm:border-t-0 sm:justify-center sm:overflow-visible sm:pb-0 z-40" @mouseleave="open = false">
                            <div class="flex">
                                <div class="relative flex">
                                    <button @mouseover="open = true" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px">Women</button>
                                </div>
                            </div>
                            <div x-show="open" class="absolute top-full inset-x-0 text-gray-500 sm:text-sm">
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div  class="relative bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6 pt-10 pb-12 md:grid-cols-2 lg:gap-x-8">
                                            <div class="grid grid-cols-1 gap-y-10 gap-x-6 lg:gap-x-8">
                                                <div>
                                                    <p id="clothing-heading" class="font-medium text-gray-900">
                                                        Clothing
                                                    </p>
                                                    <div  class="mt-4 border-t border-gray-200 pt-6 sm:grid sm:grid-cols-2 sm:gap-x-6">
                                                        <ul role="list" aria-labelledby="clothing-heading" class="space-y-6 sm:space-y-4">
                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Tops
                                                                </a>
                                                            </li>
                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Dresses
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Pants
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Denim
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Sweaters
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    T-Shirts
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div>
                                                    <p id="clothing-heading" class="font-medium text-gray-900">
                                                        Clothing
                                                    </p>
                                                    <div  class="mt-4 border-t border-gray-200 pt-6 sm:grid sm:grid-cols-2 sm:gap-x-6">
                                                        <ul role="list" aria-labelledby="clothing-heading" class="space-y-6 sm:space-y-4">
                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Tops
                                                                </a>
                                                            </li>
                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Dresses
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Pants
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Denim
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    Sweaters
                                                                </a>
                                                            </li>

                                                            <li class="z-40 flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    T-Shirts
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
{{--                        <div class="border-t h-14 px-4 flex space-x-8 overflow-x-auto pb-px sm:h-full sm:border-t-0 sm:justify-center sm:overflow-visible sm:pb-0">--}}
{{--                            <div class="flex">--}}
{{--                                <div class="relative flex">--}}
{{--                                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->--}}
{{--                                    <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px" aria-expanded="false">--}}
{{--                                        Women--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                                <div class="absolute top-full inset-x-0 text-gray-500 sm:text-sm">--}}
{{--                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>--}}

{{--                                    <div class="relative bg-white">--}}
{{--                                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--                                            <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6 pt-10 pb-12 md:grid-cols-2 lg:gap-x-8">--}}
{{--                                                <div class="grid grid-cols-1 gap-y-10 gap-x-6 lg:gap-x-8">--}}
{{--                                                    <div>--}}
{{--                                                        <p id="clothing-heading" class="font-medium text-gray-900">--}}
{{--                                                            Clothing--}}
{{--                                                        </p>--}}
{{--                                                        <div class="mt-4 border-t border-gray-200 pt-6 sm:grid sm:grid-cols-2 sm:gap-x-6">--}}
{{--                                                            <ul role="list" aria-labelledby="clothing-heading" class="space-y-6 sm:space-y-4">--}}
{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Tops--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Dresses--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Pants--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Denim--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Sweaters--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        T-Shirts--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                            <ul role="list" aria-label="More clothing" class="mt-6 space-y-6 sm:mt-0 sm:space-y-4">--}}
{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Jackets--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Activewear--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Shorts--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Swimwear--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}

{{--                                                                <li class="flex">--}}
{{--                                                                    <a href="#" class="hover:text-gray-800">--}}
{{--                                                                        Browse All--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="flex-1 flex items-center justify-end">
                        <!-- Search -->
                        <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Search</span>
                            <!-- Heroicon name: outline/search -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </a>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-8">
                            <a href="#" class="group -m-2 p-2 flex items-center">
                                <!-- Heroicon name: outline/shopping-bag -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
