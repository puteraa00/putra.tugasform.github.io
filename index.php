<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Tugas Form</h1>
    <form action="process_form.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email">

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" placeholder="Tulis pesan disini"></textarea>

        <label>Jenis Kelamin:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label class="center" for="male">Laki-laki</label>
        <input type="radio" id="female" name="gender" value="female">
        <label class="center" for="female">Perempuan</label>

        <label for="subscription">Berlangganan Netflix:</label>
        <input type="checkbox" id="subscription" name="subscription" value="subscribe">

        <label for="country">Pilih Negara:</label>
        <select id="country" name="country">
            <option value="indonesia">Indonesia</option>
            <option value="usa">Amerika Serikat</option>
            <option value="uk">Inggris</option>
            <option value="japan">Jepang</option>
        </select>

        <input type="submit" value="Kirim">
    </form>
</div>

</body>
</html>
