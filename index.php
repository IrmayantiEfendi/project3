<html>
	<head>
		<title>Web</title>
		<style type="text/css">
			.tengah{
				color: white;
				text-align: center;
				display: block;
				background-color: silver;
				margin-top: 50px;
			}

		</style>
	</head>
		<body>
		<div class="tengah">
			<form action="" method="POST">
				Nisn :<input type="text" name="nis" placeholder="Masukan Nisn"><br>
				Nama Siswa :<input type="text" name="nama" placeholder="Masukan Nama"><br>
				Alamat :<input type="text" name="alamat" placeholder="Masukan Alamat"><br>
				<input type="radio" name="jk" value="Laki-Laki">Laki-Laki<input type="radio" name="jk" value="Perempuan">Perempuan<br>
				Hobby :<select name="hobi">
				<option value="Basket">Basket</option>
				<option value="Sepak bola">Sepak bola</option>
				<option value="Voli">Voli</option>
				<option value="Berenang">Berenang</option>
				<option value="Makan">Makan</option>
				<option value="Tenis">Tenis</option>
				<option value="Balapan">Balapan</option>
				<option value="Barbie">Barbie</option>
				</select><br>
				Pelajaan Favorit: <select name="pel">
				<option value="Matematika">Matematika</option>
				<option value="Bahasa Inggris">Bahasa Inggris</option>
				<option value="Bahasa Indonesia">Bahasa Indonesia</option>
				<option value="Kejuruan">Kejuruan</option>
				</select><br>
				<input type="submit" name="simpan" value="Simpan"> &nbsp <input type="reset" name="reset" value="Hapus">
			</form>
			</div>
			
		</body>
</html>