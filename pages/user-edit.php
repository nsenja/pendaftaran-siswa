<?php
	$iduser =$_GET['iduser'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbuser WHERE iduser='$iduser'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);
?>
<div id="label-page"><h3>Edit Data</h3></div>
<div id="content">
	<form action="proses/user-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID User</td>
			<td class="isian-formulir"><input type="text" name="iduser" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Username</td>
			<td class="isian-formulir"><input type="text" name="username" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Email</td>
			<td class="isian-formulir"><input type="text" name="email" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Password</td>
			<td class="isian-formulir"><input type="text" name="password" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>