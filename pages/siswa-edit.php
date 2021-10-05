<?php
	$id_siswa=$_GET['idsiswa'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM siswa WHERE idsiswa='$id_siswa'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
?>
<div id="label-page"><h3>Edit Data Siswa</h3></div>
<div id="content">
	<form action="proses/siswa-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">FOTO</td>
			<td class="isian-formulir">
			<img src="images/<?php echo $foto; ?>" width=70px height=75px>
			<input type="file" name="foto" class="isian-formulir isian-formulir-border">
			<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
			</td>
		</tr>
		<!-- <tr>
			<td class="label-formulir">ID Siswa</td>
			<td class="isian-formulir"><input type="text" name="idsiswa" value="<?php echo $r_tampil_anggota['id_siswa']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr> -->
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="radio" name="jeniskelamin" value="Pria">Pria</label></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="jeniskelamin" value="Wanita">Wanita</td>
		</tr>


<!-- 

		<tr>
			<td class="label-formulir">Jenis Kelamin</td>			
			<?php
			if($r_tampil_anggota['jeniskelamin']=="Pria")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jeniskelamin' value='Pria' checked>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jeniskelamin' value='Wanita'>Wanita</td>";
			}
			else if($r_tampil_anggota['jeniskelamin']=="Wanita")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jeniskelamin' value='Pria'>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jeniskelamin' value='Wanita' checked>Wanita</td>";
			}
			?>
			<input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jenis_kelamin']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr> -->
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Status</td>
			<td class="isian-formulir"><input type="radio" name="status" value="Diterima">Diterima</label></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="status" value="Cadangan">Cadangan</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="status" value="Tiadk Diterima">Tidak Diterima</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>