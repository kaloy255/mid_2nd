<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Card -->
            <div class="shadow-xl rounded-2xl p-6">
                <h1 class="text-3xl font-semibold mb-2">Welcome back 👋</h1>
                <p class="text-base">{{ __("You're logged in!") }}</p>
            </div>

            <!-- Quick Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Stat Card 1 -->
                <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 p-6 rounded-xl shadow-lg transition">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Total Projects</h2>
                    <p class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mt-2">12</p>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 p-6 rounded-xl shadow-lg transition">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Tasks Completed</h2>
                    <p class="text-3xl font-bold text-green-600 dark:text-green-400 mt-2">89%</p>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 p-6 rounded-xl shadow-lg transition">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Notifications</h2>
                    <p class="text-3xl font-bold text-red-600 dark:text-red-400 mt-2">3</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
