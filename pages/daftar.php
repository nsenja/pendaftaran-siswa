<div id="label-page"><h3>Tampil Informasi Pendaftaran</h3></div>
<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=daftar-input" class="tombol">Tambah Pendaftaran</a>
	<a target="_blank" href="pages/cetak_buku.php"><img src="print.png" height="50px" height="50px"></a>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>

	</FORM>
	<!-- </p> -->
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Daftar</th>
			<th>First Name</th>
			<th>Last Name</th>
            <th>Tanggal Daftar</th>
			<th id="label-opsi">Opsi</th>
		</tr>


		<?php
$batas = 5;
extract($_GET);
if (empty($hal)) {
    $posisi = 0;
    $hal = 1;
    $nomor = 1;
} else {
    $posisi = ($hal - 1) * $batas;
    $nomor = $posisi + 1;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
    if ($pencarian != "") {
        $sql = "SELECT * FROM pendaftaran WHERE id_daftar LIKE '%$pencarian%'
						OR first_name LIKE '%$pencarian%'";
						

        $query = $sql;
        $queryJml = $sql;
    } else {
        $query = "SELECT * FROM pendaftaran LIMIT $posisi, $batas";
        $queryJml = "SELECT * FROM pendaftaran";
        $no = $posisi * 1;
    }
} else {
    $query = "SELECT * FROM pendaftaran LIMIT $posisi, $batas";
    $queryJml = "SELECT * FROM pendaftaran";
    $no = $posisi * 1;
}

//$sql="SELECT * FROM tbanggota ORDER BY idbuku DESC";
$q_tampil_buku = mysqli_query($db, $query);
if (mysqli_num_rows($q_tampil_buku) > 0) {
    while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
        if (empty($r_tampil_buku['foto']) or ($r_tampil_buku['foto'] == '-')) {
            $foto = "admin-no-photo.jpg";
        } else {
            $foto = $r_tampil_buku['foto'];
        }?>
		<tr>
			<td><?php echo $nomor; ?>
			</td>
			<td><?php echo $r_tampil_buku['id_daftar']; ?>
			</td>
			<td><?php echo $r_tampil_buku['first_name']; ?>
			</td>
			<td><?php echo $r_tampil_buku['last_name']; ?>
			</td>
            <td><?php echo $r_tampil_buku['tgldaftar']; ?>
			</td>
			<td>
				<div class="tombol-opsi-container"><a target="_blank"
						href="pages/cetak_kartu_buku.php?id=<?php echo $r_tampil_buku['id_daftar']; ?>"
						class="tombol">Cetak Kartu</a></div>
				<div class="tombol-opsi-container"><a
						href="index.php?p=daftar-edit&id=<?php echo $r_tampil_buku['id_daftar']; ?>"
						class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a
						href="proses/datfar-hapus-proses.php?id=<?php echo $r_tampil_buku['id_daftar']; ?>"
						onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a>
				</div>
			</td>
		</tr>
		<?php $nomor++;
    }
} else {
    echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
}?>
	</table>
	<?php
if (isset($_POST['pencarian'])) {
    if ($_POST['pencarian'] != '') {
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
    }
} else {?>
	<div style="float: left;">
		<?php
$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
    echo "Jumlah Data : <b>$jml</b>";
    ?>
	</div>
	<div class="pagination" style="float: right;">
		<?php
$jml_hal = ceil($jml / $batas);
    for ($i = 1; $i <= $jml_hal; $i++) {
        if ($i != $hal) {
            echo "<a href=\"?p=daftar&hal=$i\">$i</a>";
        } else {
            echo "<a class=\"active\">$i</a>";
        }
    }
    ?>
	</div>
	<?php
}
?>
</div>