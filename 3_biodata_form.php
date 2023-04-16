<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="3_biodata_hasil.php" method="get">
        <table>
            <tr>
                <td>Nama Lengkap </td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tgllahir" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="kelamin" value="Laki-Laki">Laki - Laki</td>
                <td><input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="20" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="Simpan" align="center"></td>
            </tr>
        </table>
    </form>
</body>
</html>