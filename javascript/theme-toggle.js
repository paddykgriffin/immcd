(function(){
    function initThemeToggle(){
        var toggle = document.getElementById('darkModeToggle');
        if(!toggle) return;

        function applyTheme(theme){
            if(theme === 'dark') document.documentElement.classList.add('dark');
            else document.documentElement.classList.remove('dark');
        }

        var saved = null;
        try { saved = localStorage.getItem('theme'); } catch(e) { /* ignore */ }

        if(saved === 'dark' || saved === 'light'){
            applyTheme(saved);
        } else {
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(prefersDark ? 'dark' : 'light');
        }

        // Ensure the checkbox reflects the actual document theme (thumb left = light, right = dark)
        try {
            toggle.checked = document.documentElement.classList.contains('dark');
        } catch (e) { /* ignore */ }

        // Helper: update thumb transform to match checked state
        function updateThumbState(t){
            try {
                var track = t.nextElementSibling; // the div track
                if(!track) return;
                var thumb = track.querySelector('.theme-toggle-thumb');
                if(!thumb) return;
                // Set translate to 2rem to match the updated track/thumb sizes
                if(t.checked) thumb.style.transform = 'translateX(2.75rem)';
                else thumb.style.transform = 'translateX(2px)';
            } catch (e) { /* ignore */ }
        }

        // Initialize thumb position
        updateThumbState(toggle);

        toggle.addEventListener('change', function(){
            var theme = this.checked ? 'dark' : 'light';
            applyTheme(theme);
            try { localStorage.setItem('theme', theme); } catch(e) { /* ignore */ }
            updateThumbState(this);
        });
    }

    if(document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initThemeToggle);
    else initThemeToggle();
})();
