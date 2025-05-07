<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Sistem Pengajar</title>
        <link rel="shortcut icon" href="Screenshot_2025-03-22_002912-removebg-preview.png" type="image/x-icon">
        <link
            rel="shortcut icon"
            href="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}"
            type="image/x-icon"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(to right, #014705, #006407, #029b0c);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
            .login-container {
                background: white;
                padding: 2rem;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }
            .logo-container {
                text-align: center;
                margin-bottom: 2rem;
            }
            .logo-container img {
                width: 80px;
                height: 80px;
            }
            .logo-container h1 {
                margin: 10px 0;
                font-size: 24px;
            }
            .form-group {
                margin-bottom: 1rem;
            }
            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
                color: #333;
            }
            .form-group input {
                width: 100%;
                padding: 0.75rem;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }
            .login-btn {
                width: 100%;
                padding: 0.75rem;
                background: linear-gradient(to right, #014705, #006407, #029b0c);
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                margin-top: 1rem;
            }
            .login-btn:hover {
                background: #094223;
            }
            .alert {
                padding: 0.75rem;
                margin-bottom: 1rem;
                border-radius: 4px;sx
                color: #721c24;
                background-color: #f8d7da;
                border: 1px solid #f5c6cb;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="logo-container">
                <img
                    src="{{ asset('vendor/assets/Screenshot_2025-03-22_002912-removebg-preview.png') }}"
                    alt="Logo MDT Al-Barokah"
                />
                <h1>MDT Al-Barokah</h1>
            </div>

            @if($errors->has('username'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "{{ $errors->first('email') }}",
                            confirmButtonText: "Coba Lagi"
                        });
                    });
                </script>
            @endif
            @if(Session::has('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: "Sukses",
                                text: "{{ Session::get('success') }}",
                                icon: "success",
                                confirmButtonText: "Lanjutkan"
                        });
                    });
                </script>
            @endif

            <form action="/login" method="POST">
                 @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        @error('username') is-invalid @enderror
                        name="username"
                        required
                        placeholder="Masukkan username"
                        required autofocus value="{{ old('username') }}"
                    />
                    @error('username')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        @error('password') is-invalid @enderror"
                        name="password"
                        required
                        placeholder="Masukkan password"
                    />
                    @error('password')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <script>
                const togglePassword = document.getElementById('togglePassword');
                const password = document.getElementById('password');

                togglePassword.addEventListener('click', function() {
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);

                    const icon = this.querySelector('i');
                    icon.classList.toggle('bi-eye');
                    icon.classList.toggle('bi-eye-slash');
                });
            </script>
        </div>
    </body>
</html>
