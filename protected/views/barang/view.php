<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barang'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Create Barang', 'url'=>array('create')),
	array('label'=>'Update Barang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Barang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>View Barang #<?php echo $model->id; ?></h1>
<div class="fb-share-button" 
data-href="http://192.168.43.148/pakardi/index.php?r=barang/view&amp;id=1" 
data-layout="button" data-size="large" data-mobile-iframe="true">
<a class="fb-xfbml-parse-ignore" target="_blank" 
href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F192.168.43.148%2Fpakardi%2Findex.php%3Fr%3Dbarang%252Fview%26id%3D<?Php echo $model->id?>&amp;src=sdkpreparse"><img src=http://localhost/pakardi/images/share.jpg width=100 height=40></a></div><br>
	
	
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'harga',
		'deskripsi',
		array('type'=>'raw', 
		'label'=>'Gambar',
		'value'=>html_entity_decode(CHtml::image(Yii::app()->baseUrl.'/images/'.$model->gambar,'alt',
			array('width'=>150, 'height'=>150)))
		),
	),
));
	
?>
	
