<?php
/* @var $this GiiUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gii Users',
);

$this->menu=array(
	array('label'=>'Create GiiUser', 'url'=>array('create')),
	array('label'=>'Manage GiiUser', 'url'=>array('admin')),
);
?>

<h1>Gii Users :-)</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
