<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sistem Pengajar - MDT Al-Barokah</title>
        <link rel="shortcut icon" href="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}" type="image/x-icon">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link rel="stylesheet" href="{{ asset('vendor/assets/css/halaman pengajar/styles.css') }}">

    </head>
    <body>
        <div class="burger-menu" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>

        <div class="container">
            <div class="sidebar" id="sidebar">
                <div class="header-sidebar">
                    <div class="logo-container">
                        <img
                            src="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}"
                            alt="Logo MDT"
                        />
                        <div class="name">
                            <h3>Sistem Pengajar</h3>
                            <h4>MDT Al-Barokah</h4>
                        </div>
                    </div>
                    <div class="close-sidebar" onclick="closeSidebarOnMobile()">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <nav>
                    <a
                        href="/pengajar/{id}"
                        onclick="closeSidebarOnMobile()"
                    >
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="/profil/{id}" onclick="closeSidebarOnMobile()">
                        <i class="fas fa-user"></i> Profil Saya
                    </a>
                    <a href="/input-nilai" onclick="closeSidebarOnMobile()">
                        <i class="fas fa-star"></i> Input Nilai
                    </a>
                    <a
                        href="/jadwal-mengajar/{id}"
                        onclick="closeSidebarOnMobile()"
                    >
                        <i class="fas fa-book"></i> Jadwal Mengajar
                    </a>
                    <a href="" onclick="closeSidebarOnMobile">
                        <i class="fas fa-phone"></i>Hubungi Admin
                    </a>
                    <a href="/logout/{id}" onclick="closeSidebarOnMobile()">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </nav>
            </div>

            <div class="content" id="content">
                <div class="header">
                    <div class="theme-admin">
                        <button class="theme-switch" onclick="toggleTheme()">
                            <i class="fas fa-moon"></i>
                        </button>
                        <div class="admin">
                            <img
                                src="{{ asset('vendor/assets/download.jpeg') }}"
                                alt="Profile"
                            />
                            @if ( Auth::user()->gender=='laki-laki' )
                            <p>Hi, Ustadz {{ Auth::user()->name }}</p>
                            @else
                            <p>Hi, Ustadzah {{ Auth::user()->name }}</p>
                            @endif
                            {{-- <p>Hi, {{ Auth::user()->name }}</p> --}}
                        </div>
                    </div>
                </div>

                @yield('content')

                <!-- Content goes here -->

                <footer class="footer">
                    <div class="copyright">
                        <p>
                            Copyright © Designed & Developed by Moh. Iqbal
                            Rasuli 2025
                        </p>
                    </div>
                </footer>
            </div>
        </div>

        <script>
            function toggleSidebar() {
                const sidebar = document.getElementById("sidebar");
                const content = document.getElementById("content");
                sidebar.classList.toggle("active");
                content.classList.toggle("active");
            }

            function closeSidebarOnMobile() {
                const sidebar = document.getElementById("sidebar");
                const content = document.getElementById("content");
                sidebar.classList.remove("active");
                content.classList.remove("active");
            }

            function toggleTheme() {
                const body = document.body;
                const themeButton = document.querySelector(".theme-switch i");
                body.classList.toggle("dark-theme");

                if (body.classList.contains("dark-theme")) {
                    themeButton.classList.remove("fa-moon");
                    themeButton.classList.add("fa-sun");
                } else {
                    themeButton.classList.remove("fa-sun");
                    themeButton.classList.add("fa-moon");
                }
            }

            // Close sidebar when clicking outside
            document.addEventListener("click", function (event) {
                const sidebar = document.getElementById("sidebar");
                const burgerMenu = document.querySelector(".burger-menu");
                if (
                    !sidebar.contains(event.target) &&
                    !burgerMenu.contains(event.target)
                ) {
                    sidebar.classList.remove("active");
                    content.classList.remove("active");
                }
            });
        </script>
    </body>
</html>
