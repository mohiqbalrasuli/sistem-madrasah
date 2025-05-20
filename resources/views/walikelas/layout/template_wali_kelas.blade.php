<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard Wali Kelas - MDT Al-Barokah</title>
        <link
            rel="shortcut icon"
            href="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}"
            type="image/x-icon"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link rel="stylesheet" href="{{ asset('vendor/assets/css/wali kelas/styles.css') }}">
    </head>
    <body>
        <div class="burger-menu" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>

        <div class="container">
            <div class="sidebar" id="sidebar">
                <nav>
                    <a href="#" title="Beranda"><i class="fas fa-home"></i></a>
                    <a href="#" title="Data Kelas"><i class="fas fa-user"></i></a>
                    <a href="#" title="Nilai Imda"
                        ><i class="fas fa-star"></i
                    ></a>
                    <a href="#" title="Jadwal Pelajaran"><i class="fas fa-book"></i></a>
                    <a href="#" title="Hubungi Admin    "><i class="fas fa-phone"></i></a>
                    <a href="#" title="Logout"
                        ><i class="fas fa-sign-out-alt"></i
                    ></a>
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
                            <p>Hi, Wali Kelas 1</p>
                        </div>
                    </div>
                </div>

                <!-- Content goes here -->
                @yield('content')

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
                    document
                        .getElementById("content")
                        .classList.remove("active");
                }
            });
        </script>
    </body>
</html>
