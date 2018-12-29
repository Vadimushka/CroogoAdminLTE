<?php /** @var \ViewAdminLTE $this */ ?>
<!doctype html>
<html lang="en"> <!--//TODO change lang from croogo settings -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title_for_layout; ?> - <?php echo __d('croogo', 'Croogo'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php echo $this->Html->css([
		'/bower_components/bootstrap/dist/css/bootstrap.min',
		'/bower_components/font-awesome/css/font-awesome.min',
		'/bower_components/Ionicons/css/ionicons.min',
	], ['inline' => true]); ?>
	<?php echo $this->fetch('bowerComponentsCss'); ?>
	<?php echo $this->Html->css([
		'adminlte.min',
		'skins/_all-skins.min',
	], ['inline' => true]); ?>
	<?php echo $this->fetch('css'); ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php echo $this->element('admin/header'); ?>
</div>
<div id="scriptsBlock" style="display: none">
	<?php
	echo $this->Layout->js();
	echo $this->Html->script([
		'/bower_components/jquery/dist/jquery.min',
		'/bower_components/bootstrap/dist/js/bootstrap.min',
		'/bower_components/jquery-slimscroll/jquery.slimscroll.min',
		'/bower_components/fastclick/lib/fastclick',
	], ['inline' => true]);
	echo $this->fetch('bowerComponentsJs');
	echo $this->Html->script([
		'adminlte.min',
	], ['inline' => true]);
	echo $this->fetch('script');
	echo $this->element('admin/initializers');
	echo $this->Blocks->get('scriptBottom');
	echo $this->Js->writeBuffer();
	?>
</div>
</body>
</html>
