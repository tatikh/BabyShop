<?php
/* @var $this CommentController */
/* @var $model Comment */



$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<h1>Create Comment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>