<?php
/* @var $this PakaianController */
/* @var $model Pakaian */

$this->breadcrumbs=array(
	'Pakaians'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pakaian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mengelola Pakaians</h1>
<hr>

<?php echo CHtml::link('Tambah',array('create'),array('class'=>'btn btn-primary')); ?>&nbsp;
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pakaian-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table',
	'pager' => array(                
		'class'=>'CLinkPagerCustom'
    ),
	//'filter'=>$model,
	'summaryText' => 'Menampilkan {start}-{end} dari {count} data',
    'emptyText'=>'Data tidak ditemukan',
	
	'columns'=>array(
		array(
			'header'=>'No.',
			'type'=>'raw',
			'value'=>'($this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1)',       //  row is zero based
		),
		'nm_pakaian',
		'hrg_pakaian',
		'gmbr_pakaian',		
		array(
			'header'=>'Gambar',
			'type'=>'raw',
			//'value'=>'"<img src=\"$data->gmbr_pakaian\" class=\"img-fluid\">"',       
			'value'=>function($data){
				return '<img src="'.$data->gmbr_pakaian.'" class="img-fluid">';
			}
		),
		array(
			'template'=>'<div style="width:200px">{view} {update} {delete}</div>',
			'class'=>'CButtonColumn',
			'buttons'=>array(
				'view'=>array(
				   'label'=>'<i class="bi bi-search"></i>',
				   'imageUrl'=>false,
				   'options'=>array('class'=>'btn btn-info'),
				),
				'update'=>array(				   
				   'label'=>'<i class="bi bi-pen-fill"></i>',
				   'imageUrl'=>false,
				   'options'=>array('class'=>'btn btn-warning'),
				),
				'delete'=>array(
				   'label'=>'<i class="bi bi-trash-fill"></i>',
				   'imageUrl'=>false,
				   'options'=>array('class'=>'btn btn-danger'),				   
				),
			)
			
		),
	),
)); ?>
