<?php
/**
 * User: Oli Griffiths
 * Date: 24/06/2012
 * Time: 13:39
 */

$spans = new KConfig();
$spans->left = $document->countModules('left') ? 2 : 0;
$spans->right = $document->countModules('right') ? 2 : 0;
$spans->content = 12 - $spans->left - $spans->right;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="media://bootstrap/js/jquery.js" type="text/javascript"></script>
	<script src="media://bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<link href="media://bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link href="media://bootstrap/css/responsive.css" type="text/css" rel="stylesheet" />
	<link href="tmpl://css/template.css" type="text/css" rel="stylesheet" />
</head>

<body class="bootstrap">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="./index.html" class="brand">Brand</a>
				<div class="nav-collapse collapse">
					<jdoc:include type="modules" name="menu" />
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php if($spans->left): ?>
			<div class="span<?= $spans->left ?>">
				<jdoc:include type="modules" name="left" style="rounded" />
			</div>
			<?php endif; ?>
			<div class="span<?= $spans->content ?>">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
			<?php if($spans->right): ?>
			<div class="span<?= $spans->right ?>">
				<jdoc:include type="modules" name="right" style="rounded" />
			</div>
			<?php endif; ?>
		</div>
	</div>

</body>