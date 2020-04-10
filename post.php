<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo Selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <form action="post.php" method="post">
        Masukan Nama :
        <input type="text" name="nama">
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>