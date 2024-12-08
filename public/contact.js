document.addEventListener('DOMContentLoaded', function() {
    // Select all dropdown menus and the necessary elements for expanding and collapsing
    const dropdownMenus = document.querySelectorAll('.dropdown-menu');
    const toggle = document.querySelector('.dropdown-toggle');
    const container2 = document.querySelector('.container2');

    
    // Function to handle the dropdown click for expansion
    dropdownMenus.forEach(function(menu) {
        menu.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            // Toggle the 'expan' class on the clicked menu
            menu.classList.toggle('expan');

            // Adjust the margin of container2 when a dropdown is expanded
            if (menu.classList.contains('expan')) {
                const dropdownHeight = menu.scrollHeight;
                container2.style.marginTop = `${20}px`; // Adjust as needed
            } else {
                container2.style.marginTop = '0px';
            }

            // Manage the checked state for input elements
            let targetLabel = e.target.closest('label');
            if (targetLabel) {
                let targetInput = document.getElementById(targetLabel.getAttribute('for'));
                if (targetInput) {
                    targetInput.checked = true;
                }
            }
        });
    });

    // Handle the toggle button click to expand/collapse the dropdown
    toggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        // Toggle the 'expan' class on the dropdown to show/hide it
        const dropdown = document.querySelector('.dropdown-menu');
        dropdown.classList.toggle('expan');

        // Adjust the margin of container2 when dropdown is expanded
        if (dropdown.classList.contains('expan')) {
            const dropdownHeight = dropdown.scrollHeight;
            container2.style.marginTop = `${dropdownHeight + 20}px`;
        } else {
            container2.style.marginTop = '0px';
        }
    });
    

    // Click outside the dropdown menus to collapse them
    document.addEventListener('click', function() {
        dropdownMenus.forEach(function(menu) {
            menu.classList.remove('expan');
        });
        container2.style.marginTop = '0px';
    });

    // Prevent clicks inside the dropdown menu from closing it
    dropdownMenus.forEach(function(menu) {
        menu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});
