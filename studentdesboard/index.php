<?php

session_start();

if (!isset($_SESSION['login'])) {

    header("Location:../components/student-login.php");
    exit();

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Dashboard</title>


<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


<link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">


</head>



<body class="bg-gray-100 overflow-hidden">


<div class="flex">



<!-- Sidebar -->

<aside class="w-72 bg-blue-900 text-white h-screen fixed overflow-y-auto">



<div class="p-6 border-b border-blue-700">

<h1 class="text-3xl font-bold">
Alibros School
</h1>

<p class="text-gray-300 mt-1">
Student Panel
</p>

</div>





<nav class="mt-6">



<a href="index.php"
class="flex items-center gap-3 px-6 py-4 bg-blue-700">

<i class="ri-dashboard-fill text-xl"></i>

Dashboard

</a>





<a href="profile.php"
class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">

<i class="ri-user-fill text-xl"></i>

My Profile

</a>





<a href="attendance.php"
class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">


<i class="ri-calendar-check-fill text-xl"></i>

Attendance

</a>





<a href="result.php"
class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">


<i class="ri-file-chart-fill text-xl"></i>

Result

</a>





<a href="fees.php"
class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">


<i class="ri-money-rupee-circle-fill text-xl"></i>

Fees

</a>





<a href="courses.php"
class="flex items-center gap-3 px-6 py-4 hover:bg-blue-800">


<i class="ri-book-open-fill text-xl"></i>

Courses

</a>





<a href="../backend/student-logout.php"
class="flex items-center gap-3 px-6 py-4 hover:bg-red-600">


<i class="ri-logout-box-r-fill text-xl"></i>

Logout

</a>




</nav>


</aside>







<!-- Right Content -->


<div class="ml-72 flex-1 h-screen overflow-y-auto">





<!-- Header -->


<header class="bg-white shadow px-8 py-5 flex justify-between items-center sticky top-0 z-50">


<h2 class="text-3xl font-bold text-gray-800">

Student Dashboard

</h2>




<div class="flex items-center gap-5">


<i class="ri-notification-3-fill text-2xl"></i>


<img src="https://i.pravatar.cc/100"
class="w-12 h-12 rounded-full">


</div>



</header>









<!-- Student Profile Card -->


<section class="p-8">


<div class="bg-white rounded-xl shadow p-6 flex items-center gap-6">


<img src="https://i.pravatar.cc/150"
class="w-28 h-28 rounded-full">



<div>


<h1 class="text-3xl font-bold">

<?php echo $_SESSION['student_name'] ?? "Student"; ?>

</h1>



<p class="text-gray-600 mt-2">

Class : 
<?php echo $_SESSION['student_class'] ?? "10th"; ?>

</p>



<p class="text-gray-600">

Roll No :
<?php echo $_SESSION['student_roll'] ?? "1025"; ?>

</p>


</div>


</div>


</section>









<!-- Cards -->


<section class="px-8 grid md:grid-cols-2 xl:grid-cols-4 gap-6">





<div class="bg-white rounded-xl shadow p-6">


<div class="flex justify-between">


<div>

<p class="text-gray-500">

Attendance

</p>


<h1 class="text-4xl font-bold mt-3">

92%

</h1>


</div>



<i class="ri-calendar-check-fill text-4xl text-green-600"></i>


</div>


</div>







<div class="bg-white rounded-xl shadow p-6">


<div class="flex justify-between">


<div>

<p class="text-gray-500">

Result

</p>


<h1 class="text-4xl font-bold mt-3">

85%

</h1>


</div>



<i class="ri-award-fill text-4xl text-blue-600"></i>


</div>


</div>







<div class="bg-white rounded-xl shadow p-6">


<div class="flex justify-between">


<div>

<p class="text-gray-500">

Fees Status

</p>


<h1 class="text-2xl font-bold mt-3 text-green-600">

Paid

</h1>


</div>



<i class="ri-wallet-3-fill text-4xl text-purple-600"></i>


</div>


</div>







<div class="bg-white rounded-xl shadow p-6">


<div class="flex justify-between">


<div>

<p class="text-gray-500">

Subjects

</p>


<h1 class="text-4xl font-bold mt-3">

8

</h1>


</div>



<i class="ri-book-open-fill text-4xl text-yellow-600"></i>


</div>


</div>





</section>









<!-- Notice -->


<section class="p-8">


<div class="bg-white rounded-xl shadow">


<div class="p-5 border-b">


<h2 class="text-2xl font-bold">

Latest Notice

</h2>


</div>





<div class="p-5">


<ul class="space-y-4">


<li>

<i class="ri-notification-fill text-blue-600"></i>

Monthly test will start from 25 July

</li>



<li>

<i class="ri-notification-fill text-blue-600"></i>

Submit assignment before Friday

</li>



<li>

<i class="ri-notification-fill text-blue-600"></i>

Parent meeting on Sunday

</li>



</ul>


</div>



</div>


</section>







</div>


</div>


<!-- Toast Component -->
<div id="toast"
    class="fixed top-5 right-5 bg-green-600 text-white px-5 py-3 rounded-lg shadow-lg opacity-0 translate-x-full transition-all duration-500 z-50">
</div>

<script>
function showToast(message) {
    const toast = document.getElementById("toast");
    toast.textContent = message;

    toast.classList.remove("opacity-0", "translate-x-full");
    toast.classList.add("opacity-100", "translate-x-0");

    setTimeout(() => {
        toast.classList.remove("opacity-100", "translate-x-0");
        toast.classList.add("opacity-0", "translate-x-full");
    }, 3000);
}
</script>

<?php if(isset($_SESSION['success'])): ?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        showToast("<?= $_SESSION['success']; ?>");
    });
</script>
<?php 
    // Message ek baar dikhne ke baad clear karne ke liye
    unset($_SESSION['success']); 
endif; 
?>
</body>

</html>