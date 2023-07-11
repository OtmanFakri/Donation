@extends('layouts.master')
@section('content')

    <div>
        <div class="flex justify-center">
            <div class="flex border-b border-gray-200 dark:border-gray-700">
                <button id="profile-tab" class="flex items-center h-10 px-2 py-2 -mb-px text-center text-blue-600 bg-transparent border-b-2 border-blue-500 sm:px-4 -px-1 dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none">
                <span class="mx-1 text-sm sm:text-base">
                    Profile
                </span>
                </button>

                <button id="account-tab" class="flex items-center h-10 px-2 py-2 -mb-px text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
                <span class="mx-1 text-sm sm:text-base">
                    Account
                </span>
                </button>

                <button id="notification-tab" class="flex items-center h-10 px-2 py-2 -mb-px text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
                <span class="mx-1 text-sm sm:text-base">
                    Notification
                </span>
                </button>
            </div>
        </div>

        <div id="profile-content" class="tab-content hidden">
            <p>Profile Content</p>
        </div>

        <div id="account-content" class="tab-content hidden">
            <p>Account Content</p>
        </div>

        <div id="notification-content" class="tab-content hidden">
            <p>Notification Content</p>
        </div>
    </div>

@endsection

@section('scripte')

    <script>
        $(document).ready(function() {
            // Handle tab click event
            $('button').on('click', function() {
                // Remove active class from all buttons
                $('button').removeClass('border-blue-500 text-blue-600');
                $('button').addClass('border-transparent text-gray-700');

                // Add active class to the clicked button
                $(this).removeClass('border-transparent text-gray-700');
                $(this).addClass('border-blue-500 text-blue-600');
            });
        });

        $(document).ready(function() {
            // Show initial tab
            $('#profile-content').show();

            // Tab click event
            $('.flex button').click(function() {
                // Get the clicked tab's ID
                var tabId = $(this).attr('id');

                // Hide all tab contents
                $('.tab-content').hide();

                // Show the corresponding tab content
                $('#' + tabId + '-content').show();
            });
        });

    </script>
    <script>
        // Get references to the buttons and content divs
        const profileTab = document.getElementById("profile-tab");
        const accountTab = document.getElementById("account-tab");
        const notificationTab = document.getElementById("notification-tab");
        const profileContent = document.getElementById("profile-content");
        const accountContent = document.getElementById("account-content");
        const notificationContent = document.getElementById("notification-content");

        // Add event listeners to the buttons
        profileTab.addEventListener("click", () => {
            showTab(profileContent);
        });

        accountTab.addEventListener("click", () => {
            showTab(accountContent);
        });

        notificationTab.addEventListener("click", () => {
            showTab(notificationContent);
        });

        // Function to show the selected tab content and hide others
        function showTab(tabContent) {
            // Hide all tab contents
            const tabContents = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].style.display = "none";
            }

            // Show the selected tab content
            tabContent.style.display = "block";
        }
    </script>

@endsection
