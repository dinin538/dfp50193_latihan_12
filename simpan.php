<?php
$nama = 'Ali';
$alamat = 'Pauh';
$negeri = 'Perlis';
$hobi = 'Memancing';
$jantina = 'Lelaki';

$gagal = false;
if ($nama == '') {
    $gagal = true;
}
if ($gagal) {
    ?>
    <script>
        alert('Sila isi semua butiran hingga lengkap');
        window.location='./';
        </script>
        <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Maklumat Pendaftaran</h1>

    <table>
        <tr>
            <td>Nama:</td>

            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>

            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Negeri:</td>

            <td><?php echo $negeri; ?></td>
        </tr>
        <tr>
            <td>Hobi:</td>
            <td><?php echo $jantina; ?></td>
        </tr>
        <tr>
            <td>Jantina:</td>
            <td><?php echo $jantina; ?></td>
        </tr>
    </table>

    <p><a href="./">Borang</a></p>


</body>
</html>