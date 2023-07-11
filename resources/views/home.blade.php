@extends('layouts.master')
@section('content')
    <div class="flex items-center h-screen">
        <div class="flex-grow">
            <div class="max-w-7xl mx-auto">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex justify-center">
                        <button id="tab1"
                                class="tab-btn py-4 px-6 bg-white text-gray-700 font-medium border-b-2 border-transparent hover:border-blue-500 focus:outline-none">
                            Object
                        </button>
                        <button id="tab2"
                                class="tab-btn py-4 px-6 bg-white text-gray-700 font-medium border-b-2 border-transparent hover:border-blue-500 focus:outline-none">
                            Food
                        </button>
                    </nav>
                </div>

                <div id="tab-content-1" >
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="flex flex-wrap -m-4">

                                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                    <a class="block relative h-48 rounded overflow-hidden">
                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </a>
                                    <div class="mt-2">
                                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                        <div
                                            class="mt-1 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-bell-off mr-2"
                                            >
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                <path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path>
                                                <path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path>
                                                <path d="M18 8a6 6 0 0 0-9.33-5"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                            Tag
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                    <a class="block relative h-48 rounded overflow-hidden">
                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </a>
                                    <div class="mt-2">
                                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                        <div
                                            class="mt-1 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-bell-off mr-2"
                                            >
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                <path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path>
                                                <path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path>
                                                <path d="M18 8a6 6 0 0 0-9.33-5"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                            Tag
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                    <a class="block relative h-48 rounded overflow-hidden">
                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </a>
                                    <div class="mt-2">
                                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                        <div
                                            class="mt-1 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-bell-off mr-2"
                                            >
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                <path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path>
                                                <path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path>
                                                <path d="M18 8a6 6 0 0 0-9.33-5"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                            Tag
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                    <a class="block relative h-48 rounded overflow-hidden">
                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </a>
                                    <div class="mt-2">
                                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                        <div
                                            class="mt-1 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-bell-off mr-2"
                                            >
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                <path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path>
                                                <path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path>
                                                <path d="M18 8a6 6 0 0 0-9.33-5"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                            Tag
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="flex flex-row flex-wrap -mx-4">
                                <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                    <!-- Single Product Box -->
                                    <div class="bg-white rounded-lg hover:shadow-xl overflow-hidden my-4">
                                        <div class="relative">
                                            <img src="assets/images/unsplash_6V-vJpPzvh8.png" alt="Product Image" class="w-full">
                                            <div class="absolute inset-0 bg-black opacity-25"></div>

                                        </div>
                                        <div class="p-2">
                                            <h1 class="text-gray-900 font-bold text-2xl text-center">Item name</h1>
                                            <div class="px-2 py-4">
                                                <ul class="flex  justify-between space-x-2 ">
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/ellipse-1.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">Admin</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/clock-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">3 days ago</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/map-location-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">300 m</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Single Product Box -->
                                    </div>

                                </div>
                                <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                    <!-- Single Product Box -->
                                    <div class="bg-white rounded-lg hover:shadow-xl overflow-hidden my-4">
                                        <div class="relative">
                                            <img src="assets/images/unsplash_6V-vJpPzvh8.png" alt="Product Image" class="w-full">
                                            <div class="absolute inset-0 bg-black opacity-25"></div>

                                        </div>
                                        <div class="p-2">
                                            <h1 class="text-gray-900 font-bold text-2xl text-center">Item name</h1>
                                            <div class="px-2 py-4">
                                                <ul class="flex  justify-between space-x-2 ">
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/ellipse-1.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">Admin</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/clock-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">3 days ago</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/map-location-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">300 m</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Single Product Box -->
                                    </div>

                                </div>
                                <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                    <!-- Single Product Box -->
                                    <div class="bg-white rounded-lg hover:shadow-xl overflow-hidden my-4">
                                        <div class="relative">
                                            <img src="assets/images/unsplash_6V-vJpPzvh8.png" alt="Product Image" class="w-full">
                                            <div class="absolute inset-0 bg-black opacity-25"></div>

                                        </div>
                                        <div class="p-2">
                                            <h1 class="text-gray-900 font-bold text-2xl text-center">Item name</h1>
                                            <div class="px-2 py-4">
                                                <ul class="flex  justify-between space-x-2 ">
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/ellipse-1.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">Admin</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/clock-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">3 days ago</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/map-location-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">300 m</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Single Product Box -->
                                    </div>

                                </div>
                                <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                    <!-- Single Product Box -->
                                    <div class="bg-white rounded-lg hover:shadow-xl overflow-hidden my-4">
                                        <div class="relative">
                                            <img src="assets/images/unsplash_6V-vJpPzvh8.png" alt="Product Image" class="w-full">
                                            <div class="absolute inset-0 bg-black opacity-25"></div>

                                        </div>
                                        <div class="p-2">
                                            <h1 class="text-gray-900 font-bold text-2xl text-center">Item name</h1>
                                            <div class="px-2 py-4">
                                                <ul class="flex  justify-between space-x-2 ">
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/ellipse-1.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">Admin</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/clock-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">3 days ago</p>
                                                    </li>
                                                    <li class="flex flex-col items-center">
                                                        <img src="assets/images/map-location-icon.png" alt="" class="w-8 h-8">
                                                        <p class="ml-2">300 m</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Single Product Box -->
                                    </div>

                                </div>

                            </div>


                        </div>
                    </section>
                </div>

                <div id="tab-content-2" class="py-8 hidden">
                    <h2 class="text-2xl font-semibold">Tab 2 Content</h2>
                    <p>Ut ultricies rhoncus metus, a ultrices velit fringilla id. Nullam at lacinia est. Praesent condimentum
                        enim a sagittis euismod. Vestibulum id nunc lacus. Fusce dapibus nisl nunc, a facilisis urna mattis
                        vitae.</p>
                </div>

            </div>
        </div>
        <div class="w-64 overflow-y-auto">
            <div id="sidebar" class="align-center">
                <form class="p-4 items-center bg-white rounded-md">
                    <form class="p-4  items-center bg-white  rounded-md">
                        <div class="mb-4">
                            <label class="block mb-1 font-semibold">Type of ad</label>
                            <div class="flex space-x-4">
                                <label>
                                    <input type="radio" name="typeOfAd" value="" checked>
                                    <span class="ml-2">All</span>
                                </label>
                                <label>
                                    <input type="radio" name="typeOfAd" value="donation">
                                    <span class="ml-2">Donation</span>
                                </label>
                                <label>
                                    <input type="radio" name="typeOfAd" value="request">
                                    <span class="ml-2">Request</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-1 font-semibold">Category</label>
                            <select class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="">All</option>
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-1 font-semibold">Object's condition</label>
                            <div class="flex space-x-4">
                                <label>
                                    <input type="radio" name="objectCondition" value="" checked>
                                    <span class="ml-2">All</span>
                                </label>
                                <label>
                                    <input type="radio" name="objectCondition" value="condition1">
                                    <span class="ml-2">Condition 1</span>
                                </label>
                                <label>
                                    <input type="radio" name="objectCondition" value="condition2">
                                    <span class="ml-2">Condition 2</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-1 font-semibold">Distance (km)</label>
                            <input type="range" min="1" max="50" step="1" class="w-full">
                        </div>
                        <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Search</button>
                    </form>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('scripte')
    <script>
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('[id^="tab-content-"]');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('id');
                activateTab(tabId);
            });
        });

        function activateTab(tabId) {
            tabBtns.forEach(btn => {
                btn.classList.remove('border-blue-500');
                btn.classList.add('border-transparent');
            });

            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            const selectedBtn = document.getElementById(tabId);
            const selectedContent = document.getElementById(`tab-content-${tabId.substring(3)}`);

            selectedBtn.classList.remove('border-transparent');
            selectedBtn.classList.add('border-blue-500');
            selectedContent.classList.remove('hidden');
        }
    </script>

    <script>
        const showSidebarBtn = document.getElementById('showSidebarBtn');
        const sidebar = document.getElementById('sidebar');

        showSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
@endsection
