<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="GadgetStore - Toko online terpercaya untuk smartphone dan gadget terbaru dengan harga terbaik"
    />
    <meta
      name="keywords"
      content="gadget, smartphone, iphone, samsung, xiaomi, oppo, vivo, toko online"
    />
    <title>GadgetStore - Tujuan Belanja Teknologi Anda</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <!-- Custom CSS -->
    <style>
      :root {
        --primary-color: #007bff;
        --secondary-color: #00a6ff;
        --transition-speed: 0.3s;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      a {
        text-decoration: none;
      }
      .product-card {
        transition: transform var(--transition-speed),
          box-shadow var(--transition-speed);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: none;
      }

      .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }

      .product-card img {
        height: 200px;
        object-fit: cover;
      }

      .hero-section {
        background: linear-gradient(
          45deg,
          var(--primary-color),
          var(--secondary-color)
        );
        padding: 80px 0;
        position: relative;
        overflow: hidden;
      }

      .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("pattern.png") repeat;
        opacity: 0.1;
      }

      .feature-icon {
        color: var(--primary-color);
        margin-bottom: 1rem;
        font-size: 2.5rem;
      }

      .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
      }

      .footer-link {
        transition: color var(--transition-speed);
      }

      .footer-link:hover {
        color: var(--primary-color) !important;
        text-decoration: none;
      }

      .newsletter-input {
        border-radius: 20px 0 0 20px;
        border: 2px solid var(--primary-color);
        padding: 0.75rem 1.5rem;
      }

      .newsletter-button {
        border-radius: 0 20px 20px 0;
        padding: 0.75rem 1.5rem;
      }

      .social-links a {
        transition: opacity var(--transition-speed);
      }

      .social-links a:hover {
        opacity: 0.8;
      }

      .btn {
        padding: 0.5rem 1.5rem;
        transition: all var(--transition-speed);
      }

      .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }

      .btn-primary:hover {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
        transform: translateY(-2px);
      }

      @media (max-width: 768px) {
        .hero-section {
          padding: 40px 0;
        }

        .product-card img {
          height: 180px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><i class="bi bi-phone"></i> GadgetStore</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#home" aria-current="page"
                >Beranda</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#products"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Produk
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#samsung">Samsung</a></li>
                <li><a class="dropdown-item" href="#apple">Apple</a></li>
                <li><a class="dropdown-item" href="#xiaomi">Xiaomi</a></li>
                <li><a class="dropdown-item" href="#oppo">OPPO</a></li>
                <li><a class="dropdown-item" href="#vivo">Vivo</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#products">Semua Produk</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
          </ul>
          <div class="d-flex">
              @auth
                  <a href="/keranjang/{{ Auth::user()->id }}" class="btn btn-light me-2 position-relative" aria-label="Keranjang Belanja">
                    <i class="bi bi-cart"></i>
                  </a>
              @else
                <a href="/login" class="btn btn-light me-2 position-relative" aria-label="Keranjang Belanja">
                  <i class="bi bi-cart"></i>
                </a>
              @endauth
              @auth
                <div class="dropdown">
                  <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i> {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/akun">Akun Saya</a></li>
                    <li>
                      <form action="/logout/{{ Auth::user()->id }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                          <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                      </form>
                    </li>
                  </ul>
                </div>
                </ul>
              @else
                <a href="/login" class="btn btn-primary" aria-label="Masuk">
                  <i class="bi bi-person"></i> Masuk
                </a>
              @endauth
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section text-white" id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1 class="display-4 fw-bold">Selamat Datang di GadgetStore</h1>
            <p class="lead">
              Temukan teknologi terbaru dengan harga mengagumkan!
            </p>
            <a
              href="#products"
              class="btn btn-light btn-lg"
              aria-label="Mulai Belanja"
            >
              <i class="bi bi-bag"></i> Belanja Sekarang
            </a>
          </div>
          <div class="col-md-6 mt-5">
            <img
              src="{{ asset('assets/src/elegant-smartphone-composition.jpg') }}"
              class="img-fluid rounded shadow"
              alt="Gadget Teknologi"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- Products Section -->
    <div class="container my-5 py-5" id="products">
      <h2 class="text-center my-5">Produk Unggulan</h2>

      <!-- Samsung Section -->
      <div id="samsung" class="my-5 py-5">
        <h3 class="mt-5 mb-4">Samsung</h3>
        @foreach ($produk as $item)
        @if($item->kategori->nama_kategori == 'Samsung')
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card product-card h-100">
              <div class="position-relative">
                <img
                  src="{{ asset('assets/gambarproduk/' . $item->gambar) }}"
                  class="card-img-top"
                  alt="{{ $item->nama_produk }}"
                  loading="lazy"
                />
                <span class="badge bg-danger position-absolute top-0 end-0 m-2"
                  >Baru</span
                >
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <p class="card-text">
                  {{ $item->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                </p>
                <p class="text-primary fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <form action="/keranjang/store/{{ Auth::user()->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_produk" value="{{ $item->id }}">
                  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="nama_produk" value="{{ $item->nama_produk }}">
                  <input type="hidden" name="gambar_produk" value="{{ $item->gambar }}">
                  <input type="hidden" name="jumlah" value="1">
                  <input type="hidden" name="total" value="{{ $item->harga }}">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

      <!-- Apple Section -->
      <div id="apple" class="my-5 py-5">
        <h3 class="mt-5 mb-4">Apple</h3>
        @foreach ($produk as $item)
        @if($item->kategori->nama_kategori == 'Apple')
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card product-card h-100">
              <div class="position-relative">
                <img
                  src="{{ asset('assets/gambarproduk/' . $item->gambar) }}"
                  class="card-img-top"
                  alt="{{ $item->nama_produk }}"
                  loading="lazy"
                />
                <span class="badge bg-danger position-absolute top-0 end-0 m-2"
                  >Premium</span
                >
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <p class="card-text">
                  {{ $item->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                </p>
                <p class="text-primary fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <form action="/keranjang/store/{{ Auth::user()->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_produk" value="{{ $item->id }}">
                  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="nama_produk" value="{{ $item->nama_produk }}">
                  <input type="hidden" name="gambar_produk" value="{{ $item->gambar }}">
                  <input type="hidden" name="jumlah" value="1">
                  <input type="hidden" name="total" value="{{ $item->harga }}">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

      <!-- Xiaomi Section -->
      <div id="xiaomi" class="my-5 py-5">
        <h3 class="mt-5 mb-4">Xiaomi</h3>
        @foreach ($produk as $item)
        @if($item->kategori->nama_kategori == 'Xiaomi')
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card product-card h-100">
              <div class="position-relative">
                <img
                  src="{{ asset('assets/gambarproduk/' . $item->gambar) }}"
                  class="card-img-top"
                  alt="{{ $item->nama_produk }}"
                  loading="lazy"
                />
                <span class="badge bg-success position-absolute top-0 end-0 m-2"
                  >Value</span
                >
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <p class="card-text">
                  {{ $item->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                </p>
                <p class="text-primary fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <form action="/keranjang/store/{{ Auth::user()->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_produk" value="{{ $item->id }}">
                  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="nama_produk" value="{{ $item->nama_produk }}">
                  <input type="hidden" name="gambar_produk" value="{{ $item->gambar }}">
                  <input type="hidden" name="jumlah" value="1">
                  <input type="hidden" name="total" value="{{ $item->harga }}">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

      <!-- OPPO Section -->
      <div id="oppo" class="my-5 py-5">
        <h3 class="mt-5 mb-4">OPPO</h3>
        @foreach ($produk as $item)
        @if($item->kategori->nama_kategori == 'Oppo')
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card product-card h-100">
              <div class="position-relative">
                <img
                  src="{{ asset('assets/gambarproduk/' . $item->gambar) }}"
                  class="card-img-top"
                  alt="{{ $item->nama_produk }}"
                  loading="lazy"
                />
                <span class="badge bg-info position-absolute top-0 end-0 m-2"
                  >Kamera Pro</span
                >
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <p class="card-text">
                  {{ $item->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                </p>
                <p class="text-primary fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <form action="/keranjang/store/{{ Auth::user()->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_produk" value="{{ $item->id }}">
                  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="nama_produk" value="{{ $item->nama_produk }}">
                  <input type="hidden" name="gambar_produk" value="{{ $item->gambar }}">
                  <input type="hidden" name="jumlah" value="1">
                  <input type="hidden" name="total" value="{{ $item->harga }}">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

      <!-- Vivo Section -->
      <div id="vivo" class="my-5 py-5">
        <h3 class="mt-5 mb-4">Vivo</h3>
        @foreach ($produk as $item)
        @if($item->kategori->nama_kategori == 'Vivo')
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card product-card h-100">
              <div class="position-relative">
                <img
                  src="{{ asset('assets/gambarproduk/' . $item->gambar) }}"
                  class="card-img-top"
                  alt="{{ $item->nama_produk }}"
                  loading="lazy"
                />
                <span class="badge bg-warning position-absolute top-0 end-0 m-2"
                  >Zeiss Optics</span
                >
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <p class="card-text">
                  {{ $item->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                </p>
                <p class="text-primary fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <form action="/keranjang/store/{{ Auth::user()->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_produk" value="{{ $item->id }}">
                  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="nama_produk" value="{{ $item->nama_produk }}">
                  <input type="hidden" name="gambar_produk" value="{{ $item->gambar }}">
                  <input type="hidden" name="jumlah" value="1">
                  <input type="hidden" name="total" value="{{ $item->harga }}">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      @endif
      @endforeach
    </div>

    <!-- About Section -->
    <div class="container my-5 py-5" id="about">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <h2>Tentang Kami</h2>
          <p class="lead">Mitra Teknologi Terpercaya Anda</p>
        </div>
        <div class="col-md-6">
          <p>
            GadgetStore adalah tujuan utama Anda untuk teknologi terbaru dan
            terbaik. Kami bangga menawarkan:
          </p>
          <ul>
            <li>Pilihan gadget premium yang dipilih dengan cermat</li>
            <li>Layanan pelanggan dan dukungan teknis ahli</li>
            <li>Harga bersaing dan promo rutin</li>
            <li>Produk asli dengan garansi resmi</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img
            src="{{ asset('assets/src/woman-choosing-phone-technology-store.jpg') }}"
            class="img-fluid rounded shadow"
            alt="Tentang GadgetStore"
            loading="lazy"
          />
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-light my-5 py-5" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center my-5">
            <h2>Hubungi Kami</h2>
            <p class="lead">Kami Siap Membantu</p>
          </div>
          <div class="col-md-6">
            <form id="contactForm" class="needs-validation" novalidate>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nama Anda"
                  aria-label="Nama Anda"
                  required
                />
                <div class="invalid-feedback">Mohon masukkan nama Anda</div>
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email Anda"
                  aria-label="Email Anda"
                  required
                />
                <div class="invalid-feedback">
                  Mohon masukkan email yang valid
                </div>
              </div>
              <div class="mb-3">
                <textarea
                  class="form-control"
                  rows="4"
                  placeholder="Pesan Anda"
                  aria-label="Pesan Anda"
                  required
                ></textarea>
                <div class="invalid-feedback">Mohon masukkan pesan Anda</div>
              </div>
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-send"></i> Kirim Pesan
              </button>
            </form>
          </div>
          <div class="col-md-6 mt-5">
            <div class="d-flex flex-column gap-3">
              <div>
                <h5><i class="bi bi-geo-alt"></i> Alamat</h5>
                <p>Jalan Teknologi 123, Kota Digital, 12345</p>
              </div>
              <div>
                <h5><i class="bi bi-envelope"></i> Email</h5>
                <p>info@gadgetstore.com</p>
              </div>
              <div>
                <h5><i class="bi bi-telephone"></i> Telepon</h5>
                <p>+62 234 567-8900</p>
              </div>
              <div>
                <h5><i class="bi bi-clock"></i> Jam Operasional</h5>
                <p>
                  Senin - Jumat: 09:00 - 21:00<br />Sabtu - Minggu: 10:00 -
                  20:00
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="bg-light py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-4 text-center">
            <i class="bi bi-truck display-4 feature-icon"></i>
            <h4>Gratis Pengiriman</h4>
            <p>Untuk pembelian di atas Rp 750.000</p>
          </div>
          <div class="col-md-4 text-center">
            <i class="bi bi-shield-check display-4 feature-icon"></i>
            <h4>Pembayaran Aman</h4>
            <p>100% pembayaran aman</p>
          </div>
          <div class="col-md-4 text-center">
            <i class="bi bi-headset display-4 feature-icon"></i>
            <h4>Dukungan 24/7</h4>
            <p>Layanan dukungan dedicated</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5><i class="bi bi-phone"></i> GadgetStore</h5>
            <p>Toko serba ada untuk semua kebutuhan teknologi Anda.</p>
            <div class="social-links">
              <a href="#" class="text-white me-3" aria-label="Facebook">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="#" class="text-white me-3" aria-label="Twitter">
                <i class="bi bi-twitter"></i>
              </a>
              <a href="#" class="text-white me-3" aria-label="Instagram">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="#" class="text-white me-3" aria-label="YouTube">
                <i class="bi bi-youtube"></i>
              </a>
              <a href="#" class="text-white me-3" aria-label="LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <h5>Tautan Cepat</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#about" class="text-white text-decoration-none hover-underline">
                  <i class="bi bi-chevron-right"></i> Tentang Kami
                </a>
              </li>
              <li class="mb-2">
                <a href="#contact" class="text-white text-decoration-none hover-underline">
                  <i class="bi bi-chevron-right"></i> Kontak
                </a>
              </li>
              <li class="mb-2">
                <a href="#privacy" class="text-white text-decoration-none hover-underline">
                  <i class="bi bi-chevron-right"></i> Kebijakan Privasi
                </a>
              </li>
              <li class="mb-2">
                <a href="#terms" class="text-white text-decoration-none hover-underline">
                  <i class="bi bi-chevron-right"></i> Syarat & Ketentuan
                </a>
              </li>
              <li class="mb-2">
                <a href="#faq" class="text-white text-decoration-none hover-underline">
                  <i class="bi bi-chevron-right"></i> FAQ
                </a>
              </li>
            </ul>
          </div>
        </div>
        <hr class="my-4" />
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="mb-md-0">
              &copy; 2023 Moh. iqbal rasuli Hak cipta dilindungi undang-undang.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
      // Form validation
      (function () {
        "use strict";
        var forms = document.querySelectorAll(".needs-validation");
        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add("was-validated");
            },
            false
          );
        });
      })();

      // Smooth scrolling
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
          });
        });
      });
    </script>
  </body>
</html>
