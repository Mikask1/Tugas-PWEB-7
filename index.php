<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Siswa Baru di SMA XYZ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <header>
        <h1>Pendaftaran Siswa Baru di SMA XYZ</h1>
    </header>

    <main>
        <p>Selamat datang di website pendaftaran siswa baru di SMA XYZ.</p>

        <section id="menu-panel">
            <h2>Menu</h2>
            <section id="menu-items">
                <p><a href="form-daftar.php">Daftar Baru</a></p>
                <p><a href="list-siswa.php">Pendaftar</a></p>
                <?php if (isset($_GET['status'])): ?>
                    <p>
                        <?php
                        if ($_GET['status'] == 'sukses') {
                            echo "Pendaftaran siswa baru berhasil!";
                        } else {
                            echo "Pendaftaran gagal!";
                        }
                        ?>
                    </p>
                <?php endif; ?>
            </section>
        </section>
    </main>
</body>

</html>