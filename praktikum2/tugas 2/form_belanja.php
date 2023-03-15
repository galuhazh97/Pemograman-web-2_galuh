<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container fluid">
<h2>Belanja Online</h2><br>
	<div class="row">
		<div class="col-md-8">
			<form role="form" action="form_belanja.php" method="POST" >
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                <label for="produk_1" class="custom-control-label">Mesin Cuci</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                <label for="produk_2" class="custom-control-label">Kulkas</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="text" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
		</div>
		<div class="col-md-4">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
        <li class="list-group-item">Mesin Cuci : Rp 5.000.000</li>
        <li class="list-group-item">Kulkas : Rp 4.000.000</li>
        <li class="list-group-item">TV : Rp 3.500.000</li>
        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Sewaktu waktu</li>
</ul>
    </div>
			</div>
		</div>
	</div>
</div>
<hr>
<div>
<div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-primary">
                <th>Nama Customer</th>
                <th>Nama Produk</th>
                <th>Jumlah Produk</th>
                <th>Total Harga</th>
            </tr>
            <?php require_once "proses_belanja.php"; ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $produk;?></td>
                <td><?= $jumlah;?></td>
                <td>Rp<?= $harga;?></td>
            </tr>
</div>

</body>
</html>