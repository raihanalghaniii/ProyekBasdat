<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquid - Platform Kuis Online</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="container text-center main-container">
            <h1>Selamat Datang di Liquid - Platform Kuis Online</h1>
            <p>
                Liquid adalah platform kuis online yang memudahkan Anda dalam mengelola dan mengikuti kuis secara daring.
                Belajar dengan cara yang menyenangkan dan pantau perkembangan Anda.
            </p>
            <p>
                Dengan Liquid, Anda dapat membuat kuis, mengelola soal-soal, dan melihat hasil kuis dengan mudah.
                Platform ini dirancang untuk mendukung proses belajar Anda.
            </p>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Login Mahasiswa</h2>
                            <form action="process_mahasiswa_login.php" method="post">
                                <!-- Form untuk login mahasiswa -->
                                <div class="form-group">
                                    <label for="username_mahasiswa">Username:</label>
                                    <input type="text" class="form-control" id="username_mahasiswa" name="username_mahasiswa" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_mahasiswa">Password:</label>
                                    <input type="password" class="form-control" id="password_mahasiswa" name="password_mahasiswa" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <p class="mt-3">Belum punya akun? Silahkan <a href="register_mahasiswa.php">register sebagai mahasiswa</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Login Dosen</h2>
                            <form action="process_dosen_login.php" method="post">
                                <!-- Form untuk login dosen -->
                                <div class="form-group">
                                    <label for="username_dosen">Username:</label>
                                    <input type="text" class="form-control" id="username_dosen" name="username_dosen" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_dosen">Password:</label>
                                    <input type="password" class="form-control" id="password_dosen" name="password_dosen" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <p class="mt-3">Belum punya akun? Silahkan<a href="register_dosen.php"> register sebagai dosen</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
