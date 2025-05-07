<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard MDT Al-Barokah</title>
    <link
      rel="shortcut icon"
      href="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/styles.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <!-- Burger Menu Button -->
    <div class="burger-menu" onclick="toggleSidebar()">
      <i class="fas fa-bars"></i>
    </div>

    <div class="container">
      <!-- side bar -->
      <div class="sidebar" id="sidebar">
        <div class="cardlogo">
          <img
            src="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}"
            alt="Logo MDT Al-Barokah"
            width="60px"
            height="60px"
          />
          <div class="name">
            <h3>SISTEM</h3>
            <h4>MDT Al-Barokah</h4>
          </div>
        </div>
        <nav>
          <a href="/dashboard/{name}" onclick="closeSidebarOnMobile()"><i class="fas fa-home"></i> Dashboard</a>
          <a href="/data-guru" onclick="closeSidebarOnMobile()"
            ><i class="fas fa-chalkboard-teacher"></i> Data Guru</a
          >
          <a href="/data-murid" onclick="closeSidebarOnMobile()"><i class="fas fa-user-graduate"></i> Data Murid </a>
          <a href="/data-kelas" onclick="closeSidebarOnMobile()"><i class="fas fa-school"></i> Data Kelas </a>
          <div class="nilai-submenu">
            <a href="#" onclick="toggleNilaiMenu(event)"><i class="fas fa-star"></i> Data Nilai <i class="fas fa-chevron-down"></i></a>
            <div class="submenu" id="nilaiSubmenu" style="display: none;">
              <a href="/nilai-kelas-shifir-A" onclick="closeSidebarOnMobile()">Kelas Shifir A</a>
              <a href="/nilai-kelas-shifir-B" onclick="closeSidebarOnMobile()">Kelas Shifir B</a>
              <a href="/nilai-kelas-1" onclick="closeSidebarOnMobile()">Kelas 1</a>
              <a href="/nilai-kelas-2" onclick="closeSidebarOnMobile()">Kelas 2</a>
              <a href="/nilai-kelas-3" onclick="closeSidebarOnMobile()">Kelas 3</a>
              <a href="/nilai-kelas-4" onclick="closeSidebarOnMobile()">Kelas 4</a>
            </div>
          </div>
        <a href="/data-fan" onclick="toggleFanMenu(event)"><i class="fas fa-book"></i> Data Fan </a>
        <a href="/jadwal-pelajaran" onclick="closeSidebarOnMobile()"><i class="fas fa-calendar"></i> Jadwal Pelajaran</a>
        <a href="/data-alumni" onclick="toggleAlumniMenu(event)"><i class="fas fa-user-graduate"></i> Data Alumni </a>
        <a href="/setting" onclick="closeSidebarOnMobile(event)"><i class="fas fa-cog"></i> Pengaturan </a>
        </nav>
      </div>
      <!-- main content -->
      <div class="content" onclick="closeSidebarOnMobile()">
        <div class="main-content">
            <div class="header">
                <h2>Sistem Akademik MDT Al-Barokah</h2>
                <div class="theme-admin">
                    <!-- Theme Switch Button -->
                    <button class="theme-switch" onclick="toggleTheme()">
                        <i class="fas fa-moon"></i>
                    </button>
                    <div class="admin">
                        <img src="{{ asset('vendor/assets/download.jpeg') }}" alt="" />
                    <p>hi {{ Auth::user()->name }}</p>
                    </div>
                </div>

            </div>
        @yield('content')
        <footer class="footer" style="padding: 20px 0; text-align: center; bottom: 0; width: 100%;">
            <div class="copyright">
                <p style="margin: 0; color: #6c757d; font-size: 14px;">Copyright © Designed &amp; Developed by Moh. Iqbal Rasuli 2025</p>
            </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script>
        // nilai
      function toggleNilaiMenu(event) {
        event.preventDefault();
        const submenu = document.getElementById('nilaiSubmenu');
        if(submenu.style.display === 'none') {
          submenu.style.display = 'block';
        } else {
          submenu.style.display = 'none';
        }
      }

      function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
      }

      function closeSidebarOnMobile() {
        if (window.innerWidth <= 768) {
          const sidebar = document.getElementById('sidebar');
          sidebar.classList.remove('active');
        }
      }

      // Close sidebar when clicking outside on mobile
      document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768) {
          const sidebar = document.getElementById('sidebar');
          const burgerMenu = document.querySelector('.burger-menu');
          if (!sidebar.contains(event.target) && !burgerMenu.contains(event.target)) {
            sidebar.classList.remove('active');
          }
        }
      });

      // Theme toggle functionality
      function toggleTheme() {
        const body = document.body;
        const themeButton = document.querySelector('.theme-switch i');

        body.classList.toggle('dark-theme');

        // Change icon based on theme
        if (body.classList.contains('dark-theme')) {
          themeButton.classList.remove('fa-moon');
          themeButton.classList.add('fa-sun');
          localStorage.setItem('theme', 'dark');
        } else {
          themeButton.classList.remove('fa-sun');
          themeButton.classList.add('fa-moon');
          localStorage.setItem('theme', 'light');
        }
      }

      // Check for saved theme preference
      document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme');
        const themeButton = document.querySelector('.theme-switch i');

        if (savedTheme === 'dark') {
          document.body.classList.add('dark-theme');
          themeButton.classList.remove('fa-moon');
          themeButton.classList.add('fa-sun');
        }
      });
    </script>
  </body>
</html>
