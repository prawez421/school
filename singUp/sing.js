document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector("form");

    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");
    const confirmPasswordError = document.getElementById("confirmPasswordError");

    form.addEventListener("submit", function (e) {

        e.preventDefault();

        const username = document.querySelector('input[name="UserName"]').value.trim();
        const password = document.querySelector('input[name="Password"]').value;
        const confirmPassword = document.querySelector('input[name="C_Password"]').value;

        // Hide errors
        usernameError.classList.add("hidden");
        passwordError.classList.add("hidden");
        confirmPasswordError.classList.add("hidden");

        const usernamePattern = /^[a-z0-9_]{5,20}$/;

        // Username
        if (username === "") {
            usernameError.innerText = "Username is required!";
            usernameError.classList.remove("hidden");
            return;
        }

        if (!usernamePattern.test(username)) {
            usernameError.innerText =
                "Username me sirf small letters (a-z), numbers (0-9) aur underscore (_) allow hai.";
            usernameError.classList.remove("hidden");
            return;
        }

        // Password
        if (password.length < 8) {
            passwordError.innerText = "Password kam se kam 8 characters ka hona chahiye.";
            passwordError.classList.remove("hidden");
            return;
        }

        // Confirm Password
        if (password !== confirmPassword) {
            confirmPasswordError.innerText = "Passwords match nahi kar rahe.";
            confirmPasswordError.classList.remove("hidden");
            return;
        }

        // ✅ Sab validation pass
        showToast();

        setTimeout(() => {
            form.submit();
        }, 3000);

    });

});

function showToast() {
    const toast = document.getElementById("toast");

    toast.classList.remove("translate-x-full", "opacity-0");
    toast.classList.add("translate-x-0", "opacity-100");

    setTimeout(() => {
        toast.classList.remove("translate-x-0", "opacity-100");
        toast.classList.add("translate-x-full", "opacity-0");
    }, 3000);
}