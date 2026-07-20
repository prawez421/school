<?php

session_start();

if (!isset($_SESSION['student_login'])) {

    header("Location:../components/student-login.php");
    exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admission</title>

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
            <p class="text-gray-300 text-sm">Admin Panel</p>
        </div>

        <nav class="mt-6">

            <a href="index.php"
               class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-dashboard-fill"></i>
                Dashboard
            </a>

            <a href="admission.php"
               class="flex items-center gap-3 px-6 py-4 bg-blue-700">
                <i class="ri-user-add-fill"></i>
                Add Admission
            </a>

            <a href="admission-list.php"
               class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">
                <i class="ri-file-list-3-fill"></i>
                Admission List
            </a>

        </nav>

    </aside>


    <!-- Main -->
    <div class="ml-72 flex-1">

        <!-- Header -->
        <header class="bg-white shadow px-8 py-5 flex justify-between items-center">

            <h2 class="text-3xl font-bold text-gray-700">
                Add New Admission
            </h2>

            <button class="bg-blue-700 text-white px-5 py-2 rounded-lg">
                Back
            </button>

        </header>


        <!-- Form -->
        <section class="p-8">

            <div class="bg-white rounded-2xl shadow p-8">

                <h2 class="text-3xl font-bold text-blue-700 mb-8">
                    Student Details
                </h2>

                <form class="grid md:grid-cols-2 gap-6">

                    <!-- Student Name -->
                    <div>
                        <label class="font-semibold block mb-2">
                            Student Name
                        </label>

                        <input
                            type="text"
                            placeholder="Enter Student Name"
                            class="w-full border rounded-xl p-4 outline-blue-600">
                    </div>

                    <!-- DOB -->
                    <div>
                        <label class="font-semibold block mb-2">
                            Date of Birth
                        </label>

                        <input
                            type="date"
                            class="w-full border rounded-xl p-4 outline-blue-600">
                    </div>

                    <!-- Gender -->
                    <div>

                        <label class="font-semibold block mb-2">
                            Gender
                        </label>

                        <select
                            class="w-full border rounded-xl p-4">

                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>

                        </select>

                    </div>

                    <!-- Class -->

                    <div>

                        <label class="font-semibold block mb-2">
                            Admission Class
                        </label>

                        <select
                            class="w-full border rounded-xl p-4">

                            <option>Select Class</option>
                            <option>Nursery</option>
                            <option>LKG</option>
                            <option>UKG</option>
                            <option>Class 1</option>
                            <option>Class 2</option>
                            <option>Class 3</option>
                            <option>Class 4</option>
                            <option>Class 5</option>

                        </select>

                    </div>

                    <!-- Previous School -->

                    <div>

                        <label class="font-semibold block mb-2">
                            Previous School
                        </label>

                        <input
                            type="text"
                            placeholder="Previous School Name"
                            class="w-full border rounded-xl p-4">

                    </div>

                    <!-- Student Photo -->

                    <div>

                        <label class="font-semibold block mb-2">
                            Student Photo
                        </label>

                        <input
                            type="file"
                            class="w-full border rounded-xl p-3">

                    </div>

                    <!-- Blood Group -->

                    <div>

                        <label class="font-semibold block mb-2">
                            Blood Group
                        </label>

                        <select
                            class="w-full border rounded-xl p-4">

                            <option>Select</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>

                        </select>

                    </div>

                    <!-- Religion -->

                    <div>

                        <label class="font-semibold block mb-2">
                            Religion
                        </label>

                        <input
                            type="text"
                            placeholder="Religion"
                            class="w-full border rounded-xl p-4">

                    </div>
        
<!-- ===========================
     Parent Details
============================ -->
<div class="md:col-span-2 mt-10">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">
        Parent Details
    </h2>
</div>

<!-- Father's Name -->
<div>
    <label class="block font-semibold mb-2">
        Father's Name
    </label>

    <input
        type="text"
        placeholder="Enter Father's Name"
        class="w-full border rounded-xl p-4">
</div>

<!-- Mother's Name -->
<div>
    <label class="block font-semibold mb-2">
        Mother's Name
    </label>

    <input
        type="text"
        placeholder="Enter Mother's Name"
        class="w-full border rounded-xl p-4">
</div>

<!-- Mobile -->
<div>
    <label class="block font-semibold mb-2">
        Mobile Number
    </label>

    <input
        type="tel"
        placeholder="9876543210"
        class="w-full border rounded-xl p-4">
</div>

<!-- Email -->
<div>
    <label class="block font-semibold mb-2">
        Email Address
    </label>

    <input
        type="email"
        placeholder="example@gmail.com"
        class="w-full border rounded-xl p-4">
</div>

<!-- Father's Occupation -->
<div>
    <label class="block font-semibold mb-2">
        Father's Occupation
    </label>

    <input
        type="text"
        placeholder="Occupation"
        class="w-full border rounded-xl p-4">
</div>

<!-- Mother's Occupation -->
<div>
    <label class="block font-semibold mb-2">
        Mother's Occupation
    </label>

    <input
        type="text"
        placeholder="Occupation"
        class="w-full border rounded-xl p-4">
</div>

<!-- Guardian -->
<div class="md:col-span-2">
    <label class="block font-semibold mb-2">
        Guardian Name (Optional)
    </label>

    <input
        type="text"
        placeholder="Guardian Name"
        class="w-full border rounded-xl p-4">
</div>

<!-- ===========================
     Address Details
============================ -->

<div class="md:col-span-2 mt-10">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">
        Address Details
    </h2>
</div>

<div class="md:col-span-2">
    <label class="block font-semibold mb-2">
        Full Address
    </label>

    <textarea
        rows="5"
        placeholder="Enter Full Address"
        class="w-full border rounded-xl p-4"></textarea>
</div>

<div>
    <label class="block font-semibold mb-2">
        City
    </label>

    <input
        type="text"
        placeholder="City"
        class="w-full border rounded-xl p-4">
</div>

<div>
    <label class="block font-semibold mb-2">
        State
    </label>

    <input
        type="text"
        placeholder="State"
        class="w-full border rounded-xl p-4">
</div>

<div>
    <label class="block font-semibold mb-2">
        PIN Code
    </label>

    <input
        type="number"
        placeholder="825108"
        class="w-full border rounded-xl p-4">
</div>

<div>
    <label class="block font-semibold mb-2">
        Country
    </label>

    <input
        type="text"
        value="India"
        class="w-full border rounded-xl p-4">
</div>

<!-- ===========================
     Emergency Contact
============================ -->

<div class="md:col-span-2 mt-10">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">
        Emergency Contact
    </h2>
</div>

<div>
    <label class="block font-semibold mb-2">
        Emergency Contact Name
    </label>

    <input
        type="text"
        placeholder="Contact Person"
        class="w-full border rounded-xl p-4">
</div>

<div>
    <label class="block font-semibold mb-2">
        Emergency Mobile
    </label>

    <input
        type="tel"
        placeholder="9876543210"
        class="w-full border rounded-xl p-4">
</div>

<div>
    <label class="block font-semibold mb-2">
        Relationship
    </label>

    <input
        type="text"
        placeholder="Uncle, Brother, etc."
        class="w-full border rounded-xl p-4">
</div>

<!-- ===========================
     Upload Documents
============================ -->

<div class="md:col-span-2 mt-10">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">
        Upload Documents
    </h2>
</div>

<!-- Student Photo -->
<div>
    <label class="block font-semibold mb-2">
        Student Passport Size Photo
    </label>

    <input
        type="file"
        class="w-full border rounded-xl p-3">
</div>

<!-- Birth Certificate -->
<div>
    <label class="block font-semibold mb-2">
        Birth Certificate
    </label>

    <input
        type="file"
        class="w-full border rounded-xl p-3">
</div>

<!-- Aadhaar -->
<div>
    <label class="block font-semibold mb-2">
        Aadhaar Card
    </label>

    <input
        type="file"
        class="w-full border rounded-xl p-3">
</div>

<!-- Transfer Certificate -->
<div>
    <label class="block font-semibold mb-2">
        Transfer Certificate
    </label>

    <input
        type="file"
        class="w-full border rounded-xl p-3">
</div>

<!-- Report Card -->
<div>
    <label class="block font-semibold mb-2">
        Previous Report Card
    </label>

    <input
        type="file"
        class="w-full border rounded-xl p-3">
</div>

<!-- Other Document -->
<div>
    <label class="block font-semibold mb-2">
        Other Document (Optional)
    </label>

    <input
        type="file"
        class="w-full border rounded-xl p-3">
</div>

<!-- ===========================
     Medical Information
============================ -->

<div class="md:col-span-2 mt-10">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">
        Medical Information
    </h2>
</div>

<div class="md:col-span-2">
    <label class="block font-semibold mb-2">
        Medical Details / Special Notes
    </label>

    <textarea
        rows="5"
        placeholder="Mention allergy, disability or any medical condition..."
        class="w-full border rounded-xl p-4"></textarea>
</div>

<!-- ===========================
     Declaration
============================ -->

<div class="md:col-span-2 mt-6 flex items-start gap-3">
    <input
        type="checkbox"
        required
        class="mt-1 w-5 h-5">

    <p class="text-gray-700">
        I hereby declare that all the information provided above is true and
        correct to the best of my knowledge. I understand that providing false
        information may result in cancellation of admission.
    </p>
</div>

<!-- ===========================
     Buttons
============================ -->

<div class="md:col-span-2 flex flex-wrap gap-4 mt-8">

    <button
        type="submit"
        class="bg-blue-700 hover:bg-blue-800 text-white px-8 py-4 rounded-xl font-bold">

        <i class="ri-save-fill mr-2"></i>
        Submit Admission

    </button>

    <button
        type="reset"
        class="bg-gray-500 hover:bg-gray-700 text-white px-8 py-4 rounded-xl font-bold">

        <i class="ri-refresh-line mr-2"></i>
        Reset Form

    </button>

</div>

</form>

</div>

</section>

</div>

</div>

</body>

</html>