import './bootstrap';

import * as bootstrap from 'bootstrap';

// app.js

document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.btn-read');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action of the anchor link
            event.stopPropagation(); // Prevent event from bubbling up to parent (the <a> tag)

            const notificationItem = event.target.closest('.notification-item');

            // Add the 'read' class to change the background color
            notificationItem.classList.add('read');

            // Hide the "Mark as Read" button
            event.target.style.display = 'none';
        });
    });
});
