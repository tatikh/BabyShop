<?php
/* @var $this CommentController */
/* @var $model Comment */


$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'View Comment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<h1>Update Comment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>