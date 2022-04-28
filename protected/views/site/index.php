<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
$data = Pakaian::model()->findAll();

$div = '
<div class="col">
    <div class="card h-100">
      <img src="%s" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">%s</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<br>
		Harga : %s
		</p>
      </div>
      <div class="card-footer">
        <a href="%s">Beli</a><br>
      </div>
    </div>
  </div>
';

foreach($data as $pakaian){
	printf($div,
			$pakaian->gmbr_pakaian,
			$pakaian->nm_pakaian,
			$pakaian->hrg_pakaian,
			Yii::app()->createUrl(
				'pakaian/view', // [controller]/[action]
				array('id'=>$pakaian->kd_pakaian) //get
			)
	);	
}
?>
</div>