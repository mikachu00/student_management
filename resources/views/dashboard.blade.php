<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Existing Welcome Message Card -->
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex items-center justify-center p-6 h-40 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Additional UI Elements with integrated styles and effects -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Students Card with Hover Effect and Icon -->
                <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Students</h2>
                    </div>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 mt-2">
                        <li>Total Students: </li>
                        <li>Active Courses: </li>
                    </ul>
                </div>

                <!-- Recent Activity Card-->
                <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Recent Activity</h2>
                    </div>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 mt-2">
                        <li>New student enrolled: </li>
                        <li>Student Dropped: </li>
                        <li>Student Withdraw: </li>
                    </ul>
                </div>

                <!-- Support Card -->
                <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l4 4" />
                        </svg>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Support</h2>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Need help? Contact support for assistance.</p>

                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>