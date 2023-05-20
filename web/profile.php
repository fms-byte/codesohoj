<?php
require_once "config.php";
require_once "navigation.php";
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Add Tailwind CSS CDN link here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add any additional CSS styles or custom stylesheets here -->
    <style>
        /* Add custom CSS styles if needed */
    </style>
</head>

<body class="bg-gray-100">
    <div class="my-2">
        <h1 class="text-1xl text-center font-bold text-gray-500">Username's Profile</h1>
        <div class="flex flex-col md:flex-row bg-white p-2 rounded shadow-lg max-w-7xl mx-auto my-2">
            <div class="md:w-1/3 p-8 container mx-auto py-8">
                <div class="bg-white px-8 py-4 rounded shadow-lg">
                    <div class="flex justify-between items-center mb-8">
                        <div class="flex items-center pt-4">
                            <img src="Formal.png" alt="Profile Picture" class="h-20 w-20 rounded-full" id="profile_photo" name="profile_photo">
                            <div class="ml-4">
                                <h1 class="text-2xl font-bold " id="username" name="username">Username</h1>
                                <p class="mt-4 text-gray-600" id="rank" name="rank">Rank: #123</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button class="bg-blue-500 hover:bg-blue-600 text-gray-100 font-bold py-1 px-24 rounded mx-auto ml-2" id="edit_profile" name="edit_profile">
                            Edit Profile
                        </button>
                    </div>
                </div>
                <div class="bg-white px-8 py-4 rounded shadow-lg">
                    <hr class="border-t-2 border-gray-300 mb-4">
                    <h4 class="text-1xl text-center font-bold text-black-500">Information</h4>
                    <hr class="border-t-2 border-gray-300 my-4">

                    <p class="px-[13px] text-s font-medium text-label-3 dark:text-dark-label-3 mb-2">Country:
                        <span class="px-[13px] text-s font-medium text-label-3 dark:text-dark-label-3 mb-2" id="country" name="country"></span>Bangladesh
                        </span>
                    </p>
                    <p class="px-[13px] text-s font-medium text-label-3 dark:text-dark-label-3 mb-2">Email:
                        <span class="px-[13px] text-s font-medium text-label-3 dark:text-dark-label-3 mb-2" id="email" name="email">fsh69711@gmail.com
                        </span>
                    </p>
                    <p class="px-[13px] text-s font-medium text-label-3 dark:text-dark-label-3 mb-2">Last Visit:
                        <span class="px-[13px] text-s font-medium text-label-3 dark:text-dark-label-3 text-green-500 mb-2" id="last_visit" name="last_visit">Active Now
                        </span>
                    </p>
                </div>
            </div>

            <div class="md:w-2/3 p-6 container mx-auto py-8">
                <div class="flex">
                    <div class="w-1/2 bg-white px-8 py-4 rounded shadow-lg mx-2 h-56">
                        <h2 class="text-xl font-bold mb-2">Solved Problems by Category</h2>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <div class="mb-4">
                                    <h3 class="text-lg font-bold mb-2">Easy</h3>
                                </div>
                                <div class="mb-4">
                                    <p class="text-lg font-bold mb-2">0/999</p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="mb-4">
                                    <h3 class="text-lg font-bold mb-2">Medium</h3>
                                </div>
                                <div class="mb-4">
                                    <p class="text-lg font-bold mb-2">0/599</p>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="mb-4">
                                    <h3 class="text-lg font-bold mb-2">Hard</h3>
                                </div>
                                <div class="mb-4">
                                    <p class="text-lg font-bold mb-2">0/399</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 bg-white px-8 py-4 rounded shadow-lg mx-2 h-56 relative">
                        <h2 class="text-xl font-bold mb-2">Badges</h2>
                        <h3 class="text-7xl font-bold mb-2 mt-4 text-center">0</h3>
                        <div class="flex-grow"></div>
                        <p class="text-s font-medium text-xs absolute bottom-4 mb-2 left-0 right-0 ml-8">*rank top 100 in a contest to earn a badge.</p>
                    </div>
                </div>
                <div class="bg-white px-8 py-4 rounded shadow-lg mx-2 h-56 relative mt-4">
                    <h2 class="text-xl font-bold mb-2">Last Year activity</h2>
                </div>

            </div>
        </div>
    </div>
</body>

</html>