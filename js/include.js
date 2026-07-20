fetch("components/navbar.html")
  .then(res => res.text())
  .then(data => {
    document.getElementById("navbar").innerHTML = data;

 

    // ==========================
    // Footer
    // ==========================

    fetch("components/footer.html")
      .then(res => res.text())
      .then(data => {
        document.getElementById("footer").innerHTML = data;
      });

    // ==========================
    // Active Menu
    // ==========================

    const currentPage =
      window.location.pathname.split("/").pop() || "index.html";

    document.querySelectorAll(".nav-link").forEach(link => {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
      }
    });

    // ==========================
    // Mobile Menu
    // ==========================

    const openIcon = document.getElementById("menuopen");
    const closeIcon = document.getElementById("menuclose");
    const menu = document.getElementById("mobileMenu");

    if (openIcon && closeIcon && menu) {

      openIcon.addEventListener("click", () => {
        openIcon.classList.add("hidden");
        closeIcon.classList.remove("hidden");
        menu.classList.remove("hidden");
      });

      closeIcon.addEventListener("click", () => {
        closeIcon.classList.add("hidden");
        openIcon.classList.remove("hidden");
        menu.classList.add("hidden");
      });

    }

  });