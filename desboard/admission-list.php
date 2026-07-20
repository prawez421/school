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
    <title>Admission List</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-72 bg-blue-900 text-white min-h-screen fixed">

        <div class="p-6 border-b border-blue-700">
            <h1 class="text-3xl font-bold">Alibros School</h1>
            <p class="text-gray-300 text-sm">Admin Panel</p>
        </div>

        <nav class="mt-6">

            <a href="index.php"
                class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-dashboard-fill"></i>
                Dashboard
            </a>

            <a href="admission.php"
                class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-user-add-fill"></i>
                Add Admission
            </a>

            <a href="admission-list.php"
                class="flex items-center gap-3 px-6 py-4 bg-blue-700">
                <i class="ri-file-list-3-fill"></i>
                Admission List
            </a>

        </nav>

    </aside>

    <!-- Main Content -->
    <div class="ml-72 flex-1">

        <!-- Header -->
        <header class="bg-white shadow px-8 py-5 flex justify-between items-center">

            <h2 class="text-3xl font-bold">
                Admission List
            </h2>

            <a href="add-admission.html"
                class="bg-blue-700 text-white px-5 py-3 rounded-lg">

                <i class="ri-add-line"></i>
                Add Admission

            </a>

        </header>

        <!-- Content -->
        <section class="p-8">

            <!-- Search & Filter -->
            <div class="bg-white rounded-xl shadow p-6 mb-6">

                <div class="grid md:grid-cols-4 gap-4">

                    <input
                        type="text"
                        placeholder="Search Student..."
                        class="border rounded-lg p-3">

                    <select class="border rounded-lg p-3">
                        <option>All Classes</option>
                        <option>Nursery</option>
                        <option>LKG</option>
                        <option>UKG</option>
                        <option>Class 1</option>
                        <option>Class 2</option>
                    </select>

                    <select class="border rounded-lg p-3">
                        <option>All Status</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>

                    <button
                        class="bg-blue-700 text-white rounded-lg">

                        Search

                    </button>

                </div>

            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-blue-700 text-white">

                        <tr>

                            <th class="p-4">ID</th>
                            <th class="p-4">Photo</th>
                            <th class="p-4">Student</th>
                            <th class="p-4">Class</th>
                            <th class="p-4">Father</th>
                            <th class="p-4">Mobile</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr class="border-b hover:bg-gray-50">

                            <td class="p-4">1</td>

                            <td class="p-4">
                                <img
                                src="https://i.pravatar.cc/60?img=5"
                                class="w-12 h-12 rounded-full">
                            </td>

                            <td class="p-4 font-semibold">
                                Ali Khan
                            </td>

                            <td class="p-4">
                                Class 1
                            </td>

                            <td class="p-4">
                                Imran Khan
                            </td>

                            <td class="p-4">
                                9876543210
                            </td>

                            <td class="p-4">

                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">

                                    Pending

                                </span>

                            </td>

                            <td class="p-4 flex gap-2">

                                <button
                                class="bg-green-600 text-white p-2 rounded">

                                    <i class="ri-eye-fill"></i>

                                </button>

                                <button
                                class="bg-blue-600 text-white p-2 rounded">

                                    <i class="ri-edit-fill"></i>

                                </button>

                                <button
                                class="bg-red-600 text-white p-2 rounded">

                                    <i class="ri-delete-bin-fill"></i>

                                </button>

                            </td>

                        </tr>

    <!-- Record 2 -->
<tr class="border-b hover:bg-gray-50">
    <td class="p-4">2</td>
    <td class="p-4">
        <img src="https://i.pravatar.cc/60?img=8"
             class="w-12 h-12 rounded-full">
    </td>
    <td class="p-4 font-semibold">Ahmed Ali</td>
    <td class="p-4">Nursery</td>
    <td class="p-4">Rahman Ali</td>
    <td class="p-4">9876543211</td>
    <td class="p-4">
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
            Approved
        </span>
    </td>
    <td class="p-4 flex gap-2">
        <button class="bg-green-600 text-white p-2 rounded"><i class="ri-eye-fill"></i></button>
        <button class="bg-blue-600 text-white p-2 rounded"><i class="ri-edit-fill"></i></button>
        <button class="bg-red-600 text-white p-2 rounded"><i class="ri-delete-bin-fill"></i></button>
    </td>
</tr>

<!-- Record 3 -->
<tr class="border-b hover:bg-gray-50">
    <td class="p-4">3</td>
    <td class="p-4">
        <img src="https://i.pravatar.cc/60?img=12"
             class="w-12 h-12 rounded-full">
    </td>
    <td class="p-4 font-semibold">Sara Khan</td>
    <td class="p-4">UKG</td>
    <td class="p-4">Akram Khan</td>
    <td class="p-4">9876543212</td>
    <td class="p-4">
        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
            Rejected
        </span>
    </td>
    <td class="p-4 flex gap-2">
        <button class="bg-green-600 text-white p-2 rounded"><i class="ri-eye-fill"></i></button>
        <button class="bg-blue-600 text-white p-2 rounded"><i class="ri-edit-fill"></i></button>
        <button class="bg-red-600 text-white p-2 rounded"><i class="ri-delete-bin-fill"></i></button>
    </td>
</tr>

<!-- Record 4 -->
<tr class="border-b hover:bg-gray-50">
    <td class="p-4">4</td>
    <td class="p-4">
        <img src="https://i.pravatar.cc/60?img=15"
             class="w-12 h-12 rounded-full">
    </td>
    <td class="p-4 font-semibold">Mohd Arman</td>
    <td class="p-4">Class 2</td>
    <td class="p-4">Javed Ansari</td>
    <td class="p-4">9876543213</td>
    <td class="p-4">
        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
            Pending
        </span>
    </td>
    <td class="p-4 flex flex-wrap gap-2">
        <button class="bg-green-600 text-white p-2 rounded" title="View">
            <i class="ri-eye-fill"></i>
        </button>

        <button class="bg-blue-600 text-white p-2 rounded" title="Edit">
            <i class="ri-edit-fill"></i>
        </button>

        <button class="bg-emerald-600 text-white p-2 rounded" title="Approve">
            <i class="ri-check-line"></i>
        </button>

        <button class="bg-orange-500 text-white p-2 rounded" title="Reject">
            <i class="ri-close-line"></i>
        </button>

        <button class="bg-red-600 text-white p-2 rounded" title="Delete">
            <i class="ri-delete-bin-fill"></i>
        </button>
    </td>
</tr>

<!-- Record 5 -->
<tr class="border-b hover:bg-gray-50">
    <td class="p-4">5</td>
    <td class="p-4">
        <img src="https://i.pravatar.cc/60?img=18"
             class="w-12 h-12 rounded-full">
    </td>
    <td class="p-4 font-semibold">Fatima Noor</td>
    <td class="p-4">Class 1</td>
    <td class="p-4">Yusuf Noor</td>
    <td class="p-4">9876543214</td>
    <td class="p-4">
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
            Approved
        </span>
    </td>
    <td class="p-4 flex flex-wrap gap-2">
        <button class="bg-green-600 text-white p-2 rounded"><i class="ri-eye-fill"></i></button>
        <button class="bg-blue-600 text-white p-2 rounded"><i class="ri-edit-fill"></i></button>
        <button class="bg-red-600 text-white p-2 rounded"><i class="ri-delete-bin-fill"></i></button>
    </td>
</tr>

                    </tbody>
                </table>
            </div>

            <!-- Bottom Actions -->
            <div class="mt-6 flex flex-col md:flex-row justify-between items-center gap-4">

                <!-- Showing Entries -->
                <p class="text-gray-600">
                    Showing <strong>1</strong> to <strong>5</strong> of
                    <strong>120</strong> Admissions
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-3">

                    <button
                        class="bg-blue-700 text-white px-5 py-3 rounded-lg hover:bg-blue-800">
                        <i class="ri-printer-fill mr-2"></i>
                        Print
                    </button>

                    <button
                        class="bg-green-700 text-white px-5 py-3 rounded-lg hover:bg-green-800">
                        <i class="ri-file-pdf-fill mr-2"></i>
                        Export PDF
                    </button>

                    <button
                        class="bg-orange-600 text-white px-5 py-3 rounded-lg hover:bg-orange-700">
                        <i class="ri-file-excel-2-fill mr-2"></i>
                        Export Excel
                    </button>

                </div>

            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">

                <div class="flex gap-2">

                    <button
                        class="px-4 py-2 border rounded-lg hover:bg-gray-200">
                        <i class="ri-arrow-left-s-line"></i>
                    </button>

                    <button
                        class="px-4 py-2 bg-blue-700 text-white rounded-lg">
                        1
                    </button>

                    <button
                        class="px-4 py-2 border rounded-lg hover:bg-gray-200">
                        2
                    </button>

                    <button
                        class="px-4 py-2 border rounded-lg hover:bg-gray-200">
                        3
                    </button>

                    <button
                        class="px-4 py-2 border rounded-lg hover:bg-gray-200">
                        4
                    </button>

                    <button
                        class="px-4 py-2 border rounded-lg hover:bg-gray-200">
                        5
                    </button>

                    <button
                        class="px-4 py-2 border rounded-lg hover:bg-gray-200">
                        <i class="ri-arrow-right-s-line"></i>
                    </button>

                </div>

            </div>

        </section>

        <!-- Footer -->
        <footer class="bg-white border-t mt-10 px-8 py-5 text-center text-gray-600">
            © 2026 Alibros School Admin Panel. All Rights Reserved.
        </footer>

    </div>

</div>

</body>
</html>