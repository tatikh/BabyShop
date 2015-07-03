<?php
/* @var $this GiiUserController */
/* @var $model GiiUser */

$this->breadcrumbs=array(
	'Gii Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GiiUser', 'url'=>array('index')),
	array('label'=>'Manage GiiUser', 'url'=>array('admin')),
);
?>

<h1>Create GiiUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>