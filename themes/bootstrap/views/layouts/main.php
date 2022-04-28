<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?=Yii::app()->theme->baseUrl?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=Yii::app()->theme->baseUrl?>/css/bootstrap-icons.css" rel="stylesheet">
	<?php 
	$ac=Yii::app()->theme->baseUrl;
	$maps['jquery.js']=$ac.'/js/jquery-3.6.0.min.js';  
	$maps['jquery.min.js']=$ac.'/js/jquery-3.6.0.min.js';  
	$maps['popper']=$ac.'/js/popper.min.js';  
	$maps['bootstrap']=$ac.'/js/bootstrap.min.js';  
	$cs=Yii::app()->clientScript;    
	$cs->scriptMap=array_merge($cs->scriptMap,$maps);
	Yii::app()->clientScript->registerScriptFile('jquery.min.js', 
							CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('popper', 
							CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('bootstrap', 
							CClientScript::POS_END);
        
	?>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-light">
	<div class="container-fluid ">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'navbar-nav me-auto mb-2 mb-lg-0'),
			'items'=>array(
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'Home', 'url'=>array('/site/index')),
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'Contact', 'url'=>array('/site/contact')),
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'Barang', 'url'=>array('/barang/admin')),
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'Pakaian', 'url'=>array('/pakaian/admin')),
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('linkOptions'=>['class'=>'nav-link'],'itemOptions'=>['class'=>'nav-item'],'label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>		
	  </div>
	</div>
</nav>
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
