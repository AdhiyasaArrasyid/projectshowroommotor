<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="Assets/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <!-- Content here -->
  <div class="row">
  <form action="ProsesDataBarang.php" method="Post" enctype="Multipart/Form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Barang</label>
    <input type="email" class="form-control" id="Nama Barang" Name="Nama Barang">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Barang</label>
    <select class="form-control" id="Jenis Barang" Nama="Jenis Barang">
      <option>Padat</option>
      <option>Cair</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga</label>
    <input type="email" class="form-control" id="Harga" Name="Harga">
  </div>
<div>
<label>Foto</label>
    <input type="file" class="form-control" id="Foto" Name="Foto">
</div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <button type="submit" class="btn btn-primary">Cancel</button>
</form>
  </div>
</div>
<script src="Assets/dist/js/bootstrap.min.js"></script>
</body>
</html>