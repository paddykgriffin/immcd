<!-- Theme slider toggle: accessible checkbox styled as a slider using Tailwind utilities -->
<label aria-label="Toggle light and dark mode" class="inline-flex items-center lg:inline-block">
    <input id="darkModeToggle" type="checkbox" class="sr-only peer" />

    <div class="w-20 h-9 rounded-full bg-black dark:bg-gray-700 relative flex items-center justify-between px-2 transition-colors duration-200">
        <!-- Left icon (sun) in circular background -->
        <span class="inline-flex items-center justify-center w-7 h-7  rounded-full text-white text-[16px]">
            <span class="material-symbols-outlined">sunny</span>
        </span>

        <!-- Right icon (moon) in circular background -->
        <span class="inline-flex items-center justify-center w-7 h-7 rounded-full text-white text-[16px]">
            <span class="material-symbols-outlined">dark_mode</span>
        </span>

        <!-- Thumb (absolute so it slides above track) -->
        <span class="theme-toggle-thumb absolute left-1 top-1 block w-7 h-7 bg-white dark:bg-black rounded-full shadow transform transition-transform duration-200 ring-1 ring-gray-200 dark:ring-gray-700" aria-hidden="true"></span>
    </div>
</label>

<!-- Script moved to theme/js/theme-toggle.js and enqueued via functions.php -->