<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
    'Transaksis'=>array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#transaksi-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1>Mengelola Transaksis</h1>
<hr>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'transaksi-grid',
    'dataProvider'=>$model->search(),
    'itemsCssClass' => 'table',
    'pager' => array(                
        'class'=>'CLinkPagerCustom'
    ),
    //'filter'=>$model,
    'summaryText' => 'Menampilkan {start}-{end} dari {count} data',
    'emptyText'=>'Data tidak ditemukan',
    
    'columns'=>array(
        'traId',
        'traNoFaktur',
        'traTotal',
        'traTgl',
        'traUser',
        array(
			'type'=>'raw',
			'value'=>function($data){
				echo $data->traStatus==0?'Belum Bayar':'Lunas';
			}
		),
        array(
            'template'=>'<div style="width:200px">{view}</div>',
            'class'=>'CButtonColumn',
            'buttons'=>array(
                'view'=>array(
                   'label'=>'<i class="bi bi-search"></i>',
                   'imageUrl'=>false,
                   'options'=>array('class'=>'btn btn-info'),
                ),
            )
            
        ),
    ),
)); ?>