@extends('dashboard')
@section('body-dashboard')
    <div>
    <section aria-labelledby="filter-heading" class="grid items-center border-t border-b border-gray-200">
        <h2 id="filter-heading" class="sr-only">Filters</h2>
        <div class="relative col-start-1 row-start-1 py-4">
            <div class="mx-auto flex max-w-7xl space-x-6 divide-x divide-gray-200 px-4 text-sm sm:px-6 lg:px-8">
                <div>
                    <button
                        id="btn-Filter"
                        type="button" class="group flex items-center font-medium text-gray-700"
                        aria-controls="disclosure-1" aria-expanded="false">
                        <!-- Heroicon name: mini/funnel -->
                        <svg class="mr-2 h-5 w-5 flex-none text-gray-400 group-hover:text-gray-500" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                  clip-rule="evenodd"/>
                        </svg>
                        2 Filters
                    </button>
                </div>
                <div class="pl-6">
                    <button type="button" class="text-gray-500">Clear all</button>
                </div>
            </div>
        </div>
        <div class=" hidden border-t border-gray-200 py-10" id="disclosure-1">
            <div class="mx-auto grid max-w-7xl grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
                <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
                    <fieldset>
                        <legend class="block font-medium">Account</legend>
                        <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="admin" name="admin" value="0" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="admin" class="ml-3 min-w-0 flex-1 text-gray-600">Admin</label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="user" name="user" value="0" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="user" class="ml-3 min-w-0 flex-1 text-gray-600">User</label>
                            </div>


                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="block font-medium">Type Account</legend>
                        <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="facebook" name="facebook" value="white" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="facebook" class="ml-3 min-w-0 flex-1 text-gray-600">Facebook</label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="Google" name="Google" value="white" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="Google" class="ml-3 min-w-0 flex-1 text-gray-600">Google</label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="Normal" name="Normal" value="white" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="Normal" class="ml-3 min-w-0 flex-1 text-gray-600">Normal</label>
                            </div>


                        </div>
                    </fieldset>
                </div>
                <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
                    <fieldset>
                        <legend class="block font-medium">Vip</legend>
                        <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="Vip0" name="Vip0" value="xs" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="Vip0" class="ml-3 min-w-0 flex-1 text-gray-600">Vip0</label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="Vip1" name="Vip0" value="xs" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="Vip1" class="ml-3 min-w-0 flex-1 text-gray-600">Vip1</label>
                            </div>
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="Vip2" name="Vip0" value="xs" type="checkbox"
                                       class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="Vip2" class="ml-3 min-w-0 flex-1 text-gray-600">Vip2</label>
                            </div>

                        </div>
                    </fieldset>

                </div>
            </div>
            <button class="bg-gray-100">Submet</button>
        </div>

        <div class="col-start-1 row-start-1 py-4">
            <div class="mx-auto flex max-w-7xl justify-end px-4 sm:px-6 lg:px-8">
                <button id="search-click">
                <svg  aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                </button>

                    <div
                        id="search-form"
                        class="relative hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                               class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Search Mockups, Logos..." required>
                    </div>

            </div>

        </div>

    </section>
    <div class="py-6">
        <div class="flex flex-wrap -m-2">
            <!--items-->
            @foreach($users as $user)
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                         class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                         src="https://dummyimage.com/80x80">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">{{$user->name}}</h2>
                        <p class="text-gray-500">#{{$user->id}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!--enditems-->
        </div>
    </div>
    </div>
    <button
        id="psk"
        class="fixed bottom-10 right-10 z-10 bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full shadow-lg">
        +
    </button>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div
        id="tt"
        class="hidden relative z-10" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="  fixed inset-0 overflow-hidden">
            <div class="  absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div class="pointer-events-auto relative w-96">
                        <div class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 sm:-ml-10 sm:pr-4">
                            <button
                                id="btn_close_add"
                                type="button" class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                <span class="sr-only">Close panel</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Slide-over panel, show/hide based on slide-over state. -->
                        <div class="h-full overflow-y-auto bg-white p-8">
                            <div class="space-y-6 pb-16">
                                <form method="post" action="{{ route('newAdmin') }}">
                                    @csrf
                                <div
                                     class="aspect-w-10 aspect-h-7 block w-full overflow-hidden rounded-lg">
                                        <img  id="preview-image" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="" class="object-cover">
                                        <input type="file" hidden id="upload" name="upload" onchange="previewImage(event)">
                                    </div>
                            </div>
                                <div>


                                    <h3 class="font-medium text-gray-900">Information</h3>


                                    <dl class="mt-2 divide-y divide-gray-200 border-t border-b border-gray-200">


                                        <div class="flex justify-between py-3 text-sm font-medium">
                                            <label for="name" class="sr-only">Name</label>
                                            <input type="text" name="name" id="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Name">
                                        </div>

                                        <div class="flex justify-between py-3 text-sm font-medium">
                                            <label for="email" class="sr-only">Email</label>
                                            <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com">
                                        </div>

                                    <div class="flex">
                                        <button type="submit" class="flex-1 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Download</button>
                                        <button type="button" class="ml-3 flex-1 rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Delete</button>
                                    </div>
                                </form>

                                    </dl>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script-ss')
    <script>
        const searchs = document.getElementById('search-click');
        const searchform = document.getElementById('default-search');

        searchs.addEventListener('click', () => {
            console.log("cclick");
            searchform.classList.toggle('hidden');

        });

        const btnFilter = document.getElementById('btn-Filter');
        const disclosure = document.getElementById('disclosure-1');
        btnFilter.addEventListener('click', () => {

            disclosure.classList.toggle('hidden');

        });
    </script>
    <script>
        const uus = document.querySelector('#psk');
        const  uut=document.querySelector('#tt')
        uus.addEventListener('click', function() {
            uut.classList.toggle('hidden');
        });
        const btn_close_add = document.querySelector('#btn_close_add');
        btn_close_add.addEventListener('click', function() {
            uut.classList.toggle('hidden');
        });
    </script>
    <script>
        const image = document.getElementById('preview-image');
        const fileInput = document.getElementById('upload');

        image.addEventListener('click', () => {
            fileInput.click();
        });
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview-image');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
