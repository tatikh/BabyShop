<?php
/* @var $this GiiUserController */
/* @var $model GiiUser */

$this->breadcrumbs=array(
	'Gii Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GiiUser', 'url'=>array('index')),
	array('label'=>'Create GiiUser', 'url'=>array('create')),
	array('label'=>'View GiiUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GiiUser', 'url'=>array('admin')),
);
?>

<h1>Update GiiUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>