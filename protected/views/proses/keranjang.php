<?php
/* @var $this PakaianController */
/* @var $model Pakaian */

?>

<h1>Menampilkan Keranjang Belanjaan</h1>
<a href="<?=Yii::app()->createUrl('site/index')?>" 
class="btn btn-primary">Belanja Lagi</a>
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Gambar Barang</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$data =$_SESSION['keranjang'];
			$c=1;
			$total=0;
			foreach($data as $index=>$k){
				echo '
				<tr>
					<td>'.($c++).'</td>
					<td>'.$k['nama'].'</td>
					<td><img style="width:100px;height:auto;" src="'.$k['gambar'].'"/></td>
					<td>Rp. '.number_format($k['harga'],2,',','.').'</td>
					<td>'.$k['ptJumlah'].'</td>
					<td>Rp. '.number_format($k['ptTotal'],2,',','.').'</td>
					<td><a class="btn btn-danger" href="'.Yii::app()->createUrl(
						'proses/keranjang',
						array('index'=>$index)
					).'">Hapus</a></td>
				</tr>
				';
				$total = $total + $k['ptTotal'];
			}
			?>
			<tr>	
				<td colspan="5"><b>Total</b></td>
				<td colspan="1"><b>Rp. <?php echo number_format($total,2,',','.');?></b></td>
			</tr>
		</tbody>		
	</table>
<a href="<?=Yii::app()->createUrl('proses/checkout',array('total'=>$total))?>" 
class="btn btn-primary">Check Out</a>
</div>