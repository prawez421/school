<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex justify-center items-center">

    <div class="bg-white rounded-xl shadow-lg w-[95%] max-w-md">

        <!-- Header -->
        <div class="bg-blue-600 px-5 py-4 rounded-t-xl flex items-center gap-2 text-white text-xl font-semibold">
            <i class="ri-user-fill"></i>
            Student Login
        </div>

        <!-- Form -->
        <form action="../backend/login.php" method="post" class="p-5">

            <!-- Username -->
            <label class="font-semibold">Username</label>
            <div class="border rounded flex mt-1">
                <i class="ri-user-fill px-3 py-3 bg-gray-100"></i>
                <input type="text" name="UserName" placeholder="Enter Username" class="w-full outline-none px-3">
            </div>
            <p id="usernameError" class="hidden text-red-600 text-sm mt-1"></p>

            <!-- Password -->
            <label class="font-semibold mt-4 block">Password</label>
            <div class="border rounded flex mt-1 relative">
                <i class="ri-lock-fill px-3 py-3 bg-gray-100"></i>
                <input id="loginPassword" type="password" name="Password" placeholder="Enter Password"
                    class="w-full outline-none px-3 pr-10">
                <span onclick="togglePassword()" class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer">
                    <i id="eyeIcon" class="ri-eye-line"></i>
                </span>
            </div>
            <p id="passwordError" class="hidden text-red-600 text-sm mt-1"></p>

            <!-- Login Button -->
            <button type="submit"
                class="w-full mt-5 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Login
            </button>

            <!-- Links -->
            <a href="singUp/sing.html" class="block text-center mt-4 text-blue-600 font-semibold">
                Create Account
            </a>
            <div class="text-center mt-3">
                <a href="#" class="text-gray-600 hover:text-blue-600">Forgot Password?</a>
            </div>

        </form>
    </div>

    <!-- Toast Component -->
    <div id="toast"
        class="fixed top-5 right-5 bg-green-600 text-white px-5 py-3 rounded-lg shadow-lg opacity-0 translate-x-full transition-all duration-500 z-50">
    </div>

    <!-- JS File Load -->
    <script src="login.js"></script>

    <?php if(isset($_SESSION['success'])): ?>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            showToast("<?= $_SESSION['success']; ?>", "success");
        });
    </script>
    <?php unset($_SESSION['success']); endif; ?>

</body>
</html>