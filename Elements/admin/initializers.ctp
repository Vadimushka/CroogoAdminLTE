<?php /** @var \ViewAdminLTE $this */

$adminThemeScripts =<<<EOF
	$('.sidebar-menu').tree()
EOF;
$this->Js->buffer($adminThemeScripts);
