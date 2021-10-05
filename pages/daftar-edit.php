<?php
    $id_daftar = $_GET['id_daftar'];
    $q_tampil_buku=mysqli_query($db, "SELECT * FROM pendaftaran WHERE id_daftar='$id_daftar'");
    $r_tampil_buku=mysqli_fetch_array($q_tampil_buku);
    if (empty($r_tampil_buku['foto'])or($r_tampil_buku['foto']=='-')) {
        $foto = "admin-no-photo.jpg";
    } else {
                $foto = $r_tampil_buku['foto'];
            }
?>
<div id="label-page"><h3>Edit Data</h3></div>
<div id="content">
    <form action="proses/daftar-edit-proses.php" method="post" enctype="multipart/form-data" class="editt">
        <table id="tabel-input">
            <tr>
                <td class="label-formulir">ID Daftar</td>
                <td class="isian-formulir"><input type="text" name="id_daftar"
                        value="<?php echo $r_tampil_buku['id_daftar']; ?>"
                        readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
            </tr>
            <tr>
                <td class="label-formulir">First Name</td>
                <td class="isian-formulir"><input type="text" id="isi" name="first_name"
                        value="<?php echo $r_tampil_buku['first_name']; ?>"
                        class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Last Name</td>
                <td class="isian-formulir"><input type="text" id="isi" name="last_name"
                        value="<?php echo $r_tampil_buku['last_name']; ?>"
                        class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Tanggal Daftar</td>
                <td class="isian-formulir"><input type="date" id="isi" name="tgldaftar"
                        value="<?php echo $r_tampil_buku['tgldaftar']; ?>"
                        class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol-simpan"
                        id="btn"></td>
            </tr>
        </table>
    </form>
</div>