document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");

    // Check URL Parameters for Backend Error Message
    const params = new URLSearchParams(window.location.search);
    if (params.get("error") === "1") {
        showToast("❌ Invalid Username or Password", "error");
    }

    // Client side Validation before Submit
    if (form) {
        form.addEventListener("submit", function (e) {
            const username = document.querySelector('input[name="UserName"]').value.trim();
            const password = document.querySelector('input[name="Password"]').value.trim();

            usernameError.classList.add("hidden");
            passwordError.classList.add("hidden");

            let isValid = true;

            if (username === "") {
                usernameError.textContent = "Username is required.";
                usernameError.classList.remove("hidden");
                isValid = false;
            }

            if (password === "") {
                passwordError.textContent = "Password is required.";
                passwordError.classList.remove("hidden");
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault(); // Stop Form Submit
            }
        });
    }
});

// Toast Function
function showToast(message, type = "success") {
    const toast = document.getElementById("toast");
    if (!toast) return;

    toast.textContent = message;

    toast.classList.remove("bg-green-600", "bg-red-600");
    if (type === "success") {
        toast.classList.add("bg-green-600");
    } else {
        toast.classList.add("bg-red-600");
    }

    toast.classList.remove("translate-x-full", "opacity-0");
    toast.classList.add("translate-x-0", "opacity-100");

    setTimeout(() => {
        toast.classList.remove("translate-x-0", "opacity-100");
        toast.classList.add("translate-x-full", "opacity-0");
    }, 3000);
}

// Password Eye Toggle
function togglePassword() {
    const password = document.getElementById("loginPassword");
    const eyeIcon = document.getElementById("eyeIcon");

    if (password.type === "password") {
        password.type = "text";
        eyeIcon.className = "ri-eye-off-line";
    } else {
        password.type = "password";
        eyeIcon.className = "ri-eye-line";
    }
}