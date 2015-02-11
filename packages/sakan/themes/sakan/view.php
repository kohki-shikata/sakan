<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); 
?>
	<main>
		<div id="breadcrumbArea">
		<?php 
		$a = new GlobalArea('Breadcrumb');
		$a->display($c);
		?>
		</div>
		<div id="mainArea" class="container">
			<div class="row">
				<div class="main-contents col-sm-12 clearfix">
					<h1 class="page-title"><?php echo $c->getCollectionName(); ?></h1>
					<?php 
					Loader::element('system_errors', array('error' => $error));
					print $innerContent;
					?>
				</div>
			</div>
		</div>
	</main>

<?php  $this->inc('elements/footer.php'); ?>