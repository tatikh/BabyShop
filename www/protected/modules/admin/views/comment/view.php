<?php
/* @var $this CommentController */
/* @var $model Comment */



$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Update Comment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),

);
?>

<h1>View Comment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',
	array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
		'label'=>'Product',
		'type'=>'raw',
		'value'=>$model->product->name,
		),
		//чтобы показывало не id, а название, вместо этой строки пишем то, что выше : $model->product->name вместо 'product_id',
		'comment',
	),
)); ?>
