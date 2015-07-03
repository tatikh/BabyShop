<?php
/* @var $this GiiUserController */
/* @var $model GiiUser */

$this->breadcrumbs=array(
	'Gii Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GiiUser', 'url'=>array('index')),
	array('label'=>'Create GiiUser', 'url'=>array('create')),
	array('label'=>'Update GiiUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GiiUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GiiUser', 'url'=>array('admin')),
);
?>

<h1>View GiiUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'login',
		'email',
		'password',
		'role',
	),
)); ?>
