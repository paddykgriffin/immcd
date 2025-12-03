import './theme-toggle.js';


 // Sidebar Toggle
 function openNav() {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");

    if (!sidebar || !overlay) return; // Ensure elements exist before proceeding

    const isOpen = sidebar.getAttribute("data-state") === "open";

    sidebar.setAttribute("data-state", isOpen ? "closed" : "open");
    overlay.setAttribute("data-state", isOpen ? "closed" : "open");

    sidebar.classList.toggle("translate-x-full", isOpen);
    sidebar.classList.toggle("translate-x-0", !isOpen);

    overlay.classList.toggle("opacity-0", isOpen);
    overlay.classList.toggle("opacity-100", !isOpen);
    overlay.classList.toggle("hidden", isOpen);
    overlay.classList.toggle("block", !isOpen);
    overlay.classList.toggle("pointer-events-none", isOpen);
}

// Wait for the DOM to load before adding event listeners
document.addEventListener("DOMContentLoaded", () => {
    const homeBtn = document.getElementById("homeBtn");
    const menuBtn = document.getElementById("menuBtn");
    const closeBtn = document.getElementById("closeBtn");
    const overlay = document.getElementById("overlay");

    if (homeBtn) homeBtn.addEventListener("click", openNav);
    if (menuBtn) menuBtn.addEventListener("click", openNav);
    if (closeBtn) closeBtn.addEventListener("click", openNav);
    if (overlay) overlay.addEventListener("click", openNav);
});

// Apply Padding to Main
document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById('masthead');
    const siteMain = document.getElementById('main');

    if (header && siteMain) {
        siteMain.style.marginTop = `${header.offsetHeight}px`
    }
});

// Accordion (Contact Page)
document.addEventListener("DOMContentLoaded", () => {
  const toggleBtns = document.querySelectorAll('.imml-accordion .accordion-btn');
  toggleBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      this.classList.toggle('active'); // Toggle class on button
      const nextDiv = this.nextElementSibling;
      if (nextDiv && nextDiv.tagName === 'DIV') {
        nextDiv.classList.toggle('active');
      }
    });
  });
});


// Toggle (submenus)
document.addEventListener('DOMContentLoaded', function() {
  const toggleButtons = document.querySelectorAll('.submenu-toggle');

  toggleButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Find the next sibling submenu
      const submenu = button.nextElementSibling;

      if (submenu && submenu.classList.contains('sub-menu')) {
        const isOpen = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !isOpen);
        submenu.classList.toggle('open', !isOpen);

        // Optional: change the icon (add/remove)
        const icon = button.querySelector('.material-symbols-outlined');
        if (icon) icon.textContent = isOpen ? 'add' : 'remove';
      }
    });
  });
});