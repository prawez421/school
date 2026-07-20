<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location:../components/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-72 bg-blue-900 text-white min-h-screen fixed">

        <div class="p-6 border-b border-blue-700">
            <h1 class="text-3xl font-bold">Alibros School</h1>
            <p class="text-sm text-gray-300 mt-1">Admin Panel</p>
        </div>

        <nav class="mt-6">

            <a href="index.php" class="flex items-center gap-3 px-6 py-4 bg-blue-700">
                <i class="ri-dashboard-fill text-xl"></i>
                Dashboard
            </a>

            <a href="admission.php" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-user-add-fill text-xl"></i>
                Add Admission
            </a>

            <a href="admission-list.php" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-file-list-3-fill text-xl"></i>
                Admission List
            </a>

            <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-graduation-cap-fill text-xl"></i>
                Students
            </a>

            <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-user-star-fill text-xl"></i>
                Teachers
            </a>

          

            <a href="../backend/logout.php"
   class="flex items-center gap-3 px-6 py-4 hover:bg-red-600">
    <i class="ri-logout-box-r-fill text-xl"></i>
    Logout
</a>

            

        </nav>

    </aside>


    <!-- Main Content -->
    <div class="ml-72 flex-1">

        <!-- Header -->
        <header class="bg-white shadow px-8 py-5 flex justify-between items-center">

            <div>
                <h2 class="text-3xl font-bold text-gray-800">
                    Dashboard
                </h2>
            </div>

            <div class="flex items-center gap-5">

                <button class="text-2xl">
                    <i class="ri-notification-3-fill"></i>
                </button>

                <img
                src="https://i.pravatar.cc/100"
                class="w-12 h-12 rounded-full">

            </div>

        </header>


        <!-- Cards -->
        <section class="p-8 grid md:grid-cols-2 xl:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Total Students</p>
                        <h1 class="text-4xl font-bold mt-3">1250</h1>
                    </div>

                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="ri-graduation-cap-fill text-3xl text-blue-700"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Admissions</p>
                        <h1 class="text-4xl font-bold mt-3">320</h1>
                    </div>

                    <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center">
                        <i class="ri-user-add-fill text-3xl text-green-700"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Pending</p>
                        <h1 class="text-4xl font-bold mt-3">42</h1>
                    </div>

                    <div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center">
                        <i class="ri-time-fill text-3xl text-yellow-700"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Teachers</p>
                        <h1 class="text-4xl font-bold mt-3">55</h1>
                    </div>

                    <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center">
                        <i class="ri-user-star-fill text-3xl text-purple-700"></i>
                    </div>
                </div>
            </div>

        </section>


        <!-- Recent Admissions -->
        <section class="px-8 pb-10">

            <div class="bg-white rounded-xl shadow">

                <div class="p-6 border-b">
                    <h2 class="text-2xl font-bold">
                        Recent Admission Applications
                    </h2>
                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-100">

                        <tr>

                            <th class="p-4 text-left">ID</th>
                            <th class="p-4 text-left">Student</th>
                            <th class="p-4 text-left">Class</th>
                            <th class="p-4 text-left">Father</th>
                            <th class="p-4 text-left">Mobile</th>
                            <th class="p-4 text-left">Status</th>
                            <th class="p-4 text-center">Action</th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr class="border-b">

                            <td class="p-4">1</td>
                            <td class="p-4">Ali Khan</td>
                            <td class="p-4">Class 1</td>
                            <td class="p-4">Imran Khan</td>
                            <td class="p-4">9876543210</td>

                            <td class="p-4">
                                <span class="bg-yellow-100 text-yellow-700 px-4 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>

                            <td class="p-4 text-center">

                                <button class="bg-green-600 text-white px-3 py-2 rounded">
                                    <i class="ri-eye-fill"></i>
                                </button>

                                <button class="bg-blue-600 text-white px-3 py-2 rounded">
                                    <i class="ri-edit-fill"></i>
                                </button>

                                <button class="bg-red-600 text-white px-3 py-2 rounded">
                                    <i class="ri-delete-bin-fill"></i>
                                </button>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </div>

</div>

</body>
</html>