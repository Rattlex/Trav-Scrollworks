// public/js/contact.js

document.addEventListener('DOMContentLoaded', function() {
    // Example: Add a fade-in effect to the Contact Us content on page load
    const contactContent = document.querySelector('.contact-us-content');
    if (contactContent) {
        contactContent.style.opacity = 0;
        contactContent.style.transition = 'opacity 1s';

        window.setTimeout(function() {
            contactContent.style.opacity = 1;
        }, 100);
    }

    // Example: Smooth scroll to sections if there are any links with hashes
    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add any additional JavaScript functionality you need for the contact Us page here
});
