<!-- Footer -->
<footer class="bg-black text-white px-6 md:px-14 py-14">

    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            <!-- Left -->
            <div class="space-y-6">

                <!-- Logo -->
                <div class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded-full border-[5px] border-white border-r-orange-500 rotate-45"></div>

                    <h1 class="text-3xl font-semibold">
                        Blog<span class="text-orange-500">One</span>
                    </h1>

                </div>

                <!-- Social -->
                <div class="flex items-center gap-4">

                    <a 
                        href="#"
                        class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-2xl hover:scale-110 transition"
                    >
                        f
                    </a>

                    <a 
                        href="#"
                        class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-2xl hover:scale-110 transition"
                    >
                        t
                    </a>

                    <a 
                        href="#"
                        class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-2xl hover:scale-110 transition"
                    >
                        ⬚
                    </a>

                </div>

            </div>

            <!-- Contact -->
            <div class="space-y-5">

                <h2 class="text-2xl font-semibold uppercase">
                    Contact Us
                </h2>

                <p class="text-gray-300 leading-relaxed">
                    BlogOne@gmail.com
                </p>

                <p class="text-gray-300 leading-relaxed">
                    Jl. Gajah Mada No. 45, Pontianak,
                    Kalimantan Barat, Indonesia
                </p>

                <p class="text-gray-300 leading-relaxed">
                    +62 812-3456-7890
                </p>

            </div>

            <!-- Right -->
            <div class="space-y-5">

                <h2 class="text-2xl font-semibold uppercase">
                    Satu Blog
                </h2>

                <p class="text-gray-300 leading-relaxed">
                    Semua cerita, ide, dan insight berkumpul
                    di satu tempat. Satu blog untuk berbagi
                    hal-hal menarik.
                </p>

            </div>

        </div>

        <!-- Bottom Line -->
        <div class="border-t border-gray-700 mt-12 pt-6 text-center text-gray-400">

            © 2026 BlogOne. All Rights Reserved.

        </div>

    </div>

</footer>
</div>

<script>
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    const lines = document.querySelectorAll('.menu-line');

    let isOpen = false;

    menuButton.addEventListener('click', () => {

        isOpen = !isOpen;

        if (isOpen) {

            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');

            overlay.classList.remove('opacity-0', 'invisible');
            overlay.classList.add('opacity-100', 'visible');

            lines[0].classList.add('rotate-45', 'translate-y-2');
            lines[1].classList.add('opacity-0');
            lines[2].classList.add('-rotate-45', '-translate-y-2');

        } else {

            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');

            overlay.classList.add('opacity-0', 'invisible');
            overlay.classList.remove('opacity-100', 'visible');

            lines[0].classList.remove('rotate-45', 'translate-y-2');
            lines[1].classList.remove('opacity-0');
            lines[2].classList.remove('-rotate-45', '-translate-y-2');

        }

    });

    overlay.addEventListener('click', () => {

        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('flex');

        overlay.classList.add('opacity-0', 'invisible');
        overlay.classList.remove('opacity-100', 'visible');

        lines[0].classList.remove('rotate-45', 'translate-y-2');
        lines[1].classList.remove('opacity-0');
        lines[2].classList.remove('-rotate-45', '-translate-y-2');

        isOpen = false;

    });
</script>
</body>
</html>