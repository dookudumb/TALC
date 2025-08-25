<style id="floating-cta">
    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(37, 99, 235, 0);
        }

        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(37, 99, 235, 0);
        }
    }

    .floating-cta {
        animation: pulse 2s infinite;
    }

    .floating-cta:hover {
        animation: none;
    }
</style>
<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-4">
    <a href="tel:0123456789"
        class="w-14 h-14 bg-blue-600 text-white rounded-full flex items-center justify-center shadow-lg floating-cta hover:bg-blue-700 transition-colors">
        <i class="ri-phone-fill text-2xl"></i>
    </a>
    <a href="https://zalo.me/0123456789" target="_blank"
        class="w-14 h-14 bg-blue-600 text-white rounded-full flex items-center justify-center shadow-lg floating-cta hover:bg-blue-700 transition-opacity">
        <i class="ri-chat-1-fill text-2xl"></i>
    </a>
    <button id="scrollToTop"
        class="w-14 h-14 bg-blue-600 text-white rounded-full flex items-center justify-center shadow-lg floating-cta hover:bg-blue-700 transition-colors opacity-0 invisible cursor-pointer">
        <i class="ri-arrow-up-line text-2xl"></i>
    </button>
</div>

<script id="smooth-scroll">
    document.addEventListener('DOMContentLoaded', function() {
        const scrollToTopBtn = document.getElementById('scrollToTop');

        // Handle scroll event to toggle button visibility
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        // Handle click event for scroll to top
        scrollToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Ensure smooth scrolling for anchor links
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>