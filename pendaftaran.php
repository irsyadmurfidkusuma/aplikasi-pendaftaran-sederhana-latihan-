<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Pendaftaran Peserta</h2>
        <form action="simpan.php" method="POST">
            <table class="table" border="1">
                <tr>
                    <th colspan="2" align="left">1. Biodata</th>
                </tr>
                <tr>
                    <td>Nama Alumni :</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td><textarea name="alamat" id="" cols="50" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Agama :</td>
                    <td><select name="agama" id="">
                    <option value="Islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="khatolik">Khatolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki" id="">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" id="">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Hobi :</td>
                    <td><input type="checkbox" name="hobi" value="main musik" id="">Main Musik
                        <input type="checkbox" name="hobi" value="membaca" id="">Membaca
                        <input type="checkbox" name="hobi " value="berenang" id="">Berenang
                        <input type="checkbox" name="hobi " value="memancing" id="">Memancing
                        <input type="checkbox" name="hobi" value="menggambar" id="">Menggambar
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir :</td>
                    <td><input type="text" name="tempat_lahir" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir :</td>
                    <td><input type="date" name="tanggal_lahir" id=""></td>
                </tr>
                <tr>
                    <td>Telp :</td>
                    <td><input type="number" name="telepon"></td>
                </tr>
                <tr>
                    <th colspan="2" align="left">2. Online Status</th>
                </tr>
                <tr>
                    <td>POP 3 :</td>
                    <td><select name="pop3" id="">
                    <option value="">[pilih]</option>
                </select></td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <th colspan="2" align="left">3. User Account</th>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="pasword" id=""></td>
                </tr>
                <tr>
                    <th colspan="2" align="left">4. Foto</th>
                </tr>
                <tr>
                    <td>Foto :</td>
                    <td>
                        <input type="file" name="foto" id="" accept="image/*">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input class="submit" type="submit" name="registrasi" value="Registrasi">
                        <input class="reset" type="reset" name="batal" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>