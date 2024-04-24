<?php 
	$id = $_GET['produk'];
	$hasil = $lihat -> produk_edit($id);
?>
<a href="index.php?page=produk" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
<h4>Details produk</h4>
<?php if(isset($_GET['success-stok'])){?>
<div class="alert alert-success">
	<p>Tambah Stok Berhasil !</p>
</div>
<?php }?>
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
	<p>Tambah Data Berhasil !</p>
</div>
<?php }?>
<?php if(isset($_GET['remove'])){?>
<div class="alert alert-danger">
	<p>Hapus Data Berhasil !</p>
</div>
<?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td>ID produk</td>
				<td><?php echo $hasil['id_produk'];?></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><?php echo $hasil['nama_kategori'];?></td>
			</tr>
			<tr>
				<td>Nama produk</td>
				<td><?php echo $hasil['nama_produk'];?></td>
			</tr>
			<tr>
				<td>Merk produk</td>
				<td><?php echo $hasil['merk'];?></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td><?php echo $hasil['harga_beli'];?></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td><?php echo $hasil['harga_jual'];?></td>
			</tr>
			<tr>
				<td>Satuan produk</td>
				<td><?php echo $hasil['satuan_produk'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok'];?></td>
			</tr>
			<tr>
				<td>Tanggal Input</td>
				<td><?php echo $hasil['tgl_input'];?></td>
			</tr>
			<tr>
				<td>Tanggal Update</td>
				<td><?php echo $hasil['tgl_update'];?></td>
			</tr>
		</table>
	</div>
</div>