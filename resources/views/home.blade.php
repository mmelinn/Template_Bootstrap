<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>portofolio</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="about.html">Tentang</a></li>
                    <li><a href="portofolio.html">portofolio</a></li>
                    <li><a href="contact.html">Hubungi Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container">
            <h2>Selamat Datang di Portofolio saya</h2>
            <p>Temukan Karya-karya terbaru saya di sini</p>
            <p>Nama : <?php echo $nama; ?></p>
            <p>Umur : <?php echo $umur; ?></p>
            <p>Mata Kuliah :</p>
            <ul>
                <?php foreach ($mapel as $mp): ?>
                    <li><?php echo $mp; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- Other sections for returned projects, testimonials, etc. -->

    <footer>
        <div class="container">
            <p>&copy; 2024 portofolio. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>