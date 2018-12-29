<?php /** @var \ViewAdminLTE $this */ ?>
<header class="main-header">
	<a href="<?php echo Router::url(Configure::read('Croogo.dashboardUrl')); ?>" class="logo">
		<span class="logo-mini"><b>A</b>LT</span>
		<span class="logo-lg"><?php echo Configure::read('Site.title'); ?></span>
	</a>

	<nav class="navbar navbar-static-top">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li>
					<a href="/" target="_blank" title="<?php echo __d('croogo', 'Visit website'); ?>">
						<i class="fa fa-external-link"></i>
					</a>
				</li>
			</ul>
		</div>


	</nav>

</header>
