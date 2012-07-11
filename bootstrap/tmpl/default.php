<?php
/**
 * User: Oli Griffiths
 * Date: 24/06/2012
 * Time: 13:39
 */

$spans = new KConfig();
$spans->left = $this->countModules('left') ? 2 : 0;
$spans->right = $this->countModules('right') ? 2 : 0;
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

		<?php if($this->countModules('top')): ?>
			<div id="mod_top">
				<jdoc:include type="modules" name="top" style="XHTML" />
			</div>
		<?php endif ?>

		<div class="row">

			<?php if($spans->left): ?>
			<div id="mod_left" class="span<?= $spans->left ?>">
				<jdoc:include type="modules" name="left" style="XHTML" />
			</div>
			<?php endif; ?>

			<div id="main" class="span<?= $spans->content ?>">

				<?php if($this->countModules('content_top')): ?>
				<div id="mod_content_top">
					<jdoc:include type="modules" name="content_top" style="XHTML" />
				</div>
				<?php endif ?>

				<?php if($this->countModules('breadcrumbs')): ?>
				<div id="mod_breadcrumbs">
					<jdoc:include type="modules" name="breadcrumbs" style="raw" />
				</div>
				<?php endif ?>

				<div id="messages">
					<jdoc:include type="message" />
				</div>

				<div id="component">
					<jdoc:include type="component" />
				</div>

				<?php if($this->countModules('content_bottom')): ?>
				<div id="mod_content_bottom">
					<jdoc:include type="modules" name="content_bottom" style="XHTML" />
				</div>
				<?php endif ?>
			</div>

			<?php if($spans->right): ?>
			<div id="mod_right" class="span<?= $spans->right ?>">
				<jdoc:include type="modules" name="right" style="XHTML" />
			</div>
			<?php endif; ?>

		</div>
	</div>

</body>