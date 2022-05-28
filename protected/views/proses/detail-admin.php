<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
    'Transaksis'=>array('index'),
    $model->traId,
);

?>

<h1>Menampilkan Transaksi #<?php echo $model->traId; ?></h1>
<div class="row">
	<div class="col-4">
<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'tagName'=>'ul',
    'htmlOptions'=>array('class'=>'list-group'),
    'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
    'attributes'=>array(
        'traId',
        'traNoFaktur',
        'traTotal',
        'traTgl',
        'traUser',
        array(
			'name'=>'Status Pembayaran',
			'value'=>$model->traStatus==0?'Belum Bayar':'Sudah Bayar'
		),
    ),
)); 
$daftar = PakaiTrans::model()->findAll('ptTraId='.$model->traId);
?>
	</div>
	<div class="col-3">	
	<a class="btn btn-success" href="<?=Yii::app()->createurl('proses/validasi',array('id'=>$model->traId,'bayar'=>'1'))?>">Update Status Telah Bayar</a>
	<a class="btn btn-danger" href="<?=Yii::app()->createurl('proses/validasi',array('id'=>$model->traId,'bayar'=>'0'))?>">Batalkan Pembayaran</a>
	</div>
	<div class="col-5">	
		<?php 
		if($model->traBuktiBayar!=''){
			echo '<img src="'.$model->traBuktiBayar.'" style="width:300px;height:auto">';
		}
		?>
	</div>
</div>
<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Gambar Barang</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$c=1;
			$total=0;
			foreach($daftar  as $index=>$k){
				$pakaian = Pakaian::model()->findByPk($k->ptKdPakaian);
				echo '
				<tr>
					<td>'.($c++).'</td>
					<td>'.$pakaian->nm_pakaian.'</td>
					<td><img style="width:100px;height:auto;" src="'.$pakaian->gmbr_pakaian.'"/></td>
					<td>Rp. '.number_format($pakaian->hrg_pakaian,2,',','.').'</td>
					<td>'.$k->ptJumlah.'</td>
					<td>Rp. '.number_format($k->ptTotal,2,',','.').'</td>					
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
<?php echo CHtml::link('Kembali',array('daftarpesan'),array('class'=>'btn btn-primary')); ?>