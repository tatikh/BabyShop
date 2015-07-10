<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!-- blueprint CSS framework -
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
    <![endif]-->

    <link href="<?php echo Yii::app()->request->baseUrl; ?> /css/dcaccordion.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo Yii::app()->request->baseUrl; ?> /css/skins/blue.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/skins/graphite.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/skins/grey.css" rel="stylesheet" type="text/css" />


    <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection"> -->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js"></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.hoverIntent.minified.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dcjqaccordion.2.7.min.js'></script>
    <script type="text/javascript">
        $(document).ready(function($){
            $('#accordion-1').dcAccordion({
                eventType: 'click',
                autoClose: true,
                saveState: true,
                disableLink: true,
                speed: 'slow',
                showCount: true,
                autoExpand: true,
                cookie	: 'dcjq-accordion-1',
                classExpand	 : 'dcjq-current-parent'
            });
        });
    </script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Контакты', 'url'=>array('/site/contact')),
				array('label'=>'Админка', 'url'=>array('/admin'), 'visible' => Yii::app()->user->checkAccess('admin')),
				array('label'=>'Магазин', 'url'=>array('/shop')),
				array('label'=>'Войти', 'url'=>array('/site/login'), 'visible' => Yii::app()->user->isGuest),
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
				array('label'=>'Регистрация', 'url'=>array('/site/registration'), 'visible' => Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	
		
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by TatiTa.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
