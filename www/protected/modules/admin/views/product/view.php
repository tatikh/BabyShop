<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		
		//'type'=>'raw',							//без 2-х этих строк картинка отобр-ся, нужно ли???
		//'value' => 'CHtml::image(Yii::app()->baseUrl."../images/product/ '.$data->image'")', //
		
		'attributes'=>array(
			'id',
			'name',
			'description',
			'price',
			'quantity',
			'image',
		),
	)); ?>




