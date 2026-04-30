<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTIMONI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="form">
        <header class = "kepala">
        <table class = "head">
        <tr>
            <td>
            <h1 class="heading">HALO</h1>
            </td>

            <td class="heading">
            <a href="form.html">Testimoni</a>
            <a href="index (1).html">About</a>
            <a href="#">Contact</a>
            </td>

            <td class="icon">
                <img src="img/instagram-brands-solid-full.svg" alt="instagram" class="icon">
                <img src="img/envelope-solid-full.svg" alt="Email" class="icon">
            </td>
        </tr>
        </table>
    </header>

    <section class="gambar-aja">
        <form action="database.php" id="formData" class="formulir" novalidate method="POST">

            <label for="nama" class="form-label">Nama</label><br>
            <input type="text" name="nama" class="form-input" id="nama" required placeholder="Masukkan nama"><br><br>
            <label></label>
            
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-input" required><br><br>

            <label class="form-label">Jenis Kelamin</label><br>
            <input type="radio" name="gender" id="pria" value="Pria" required>
            <label for="pria">Pria</label>

            <input type="radio" name="gender" id="wanita" value="Wanita">
            <label for="wanita">Wanita</label><br><br>

            <label for="alamat" class="form-label">Alamat</label><br>
            <select name="alamat" id="alamat" class="form-input" required>
                <option value="">--Pilih alamat--</option>
                <option value="Mataram">Mataram</option>
                <option value="Narmada">Narmada</option>
                <option value="Kediri">Kediri</option>
            </select><br><br>

            <label for="email" class="form-label">E-mail</label><br>
            <input type="email" name="email" id="email" required placeholder="Masukkan email" class="form-input"><br><br>

            <label for="pesan" class="form-label">Pesan</label><br>
            <textarea name="pesan" id="pesan" rows="5" class="form-input" required placeholder="Masukkan pesan"></textarea>
            <br><br>

            <button type="submit" name="submit" class="tombol">Kirim</button>
            <button type="reset" name="reset" class="tombol">Reset</button>

        </form>

        <div class="flower">
            <img src="img/download (15).jpg" alt="flower">
        </div>
    </section>

<!-- Hubungkan ke JS -->
<script src="script.js"></script>
    <footer>
        <hr>
        <p>© 2026 Moh.Saqif Dendi Al Fayyed (F1D02410122)</p>
    </footer>
</body>
</html>