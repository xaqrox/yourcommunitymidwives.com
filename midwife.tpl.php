<div class="col-md-3 midwife" id="<?php print($midwife['id']) ?>">
	<div class="header-wrapper row text-center">
		<div class="header <?php if (isset($midwife['titleinlogo'])) print('no-title'); ?>">
			<?php if (isset($midwife['img'])): ?>
				<div class="logo">
					<?php if (isset($midwife['web'])): ?>
						<a href="http://<?php print($midwife['web']); ?>">
					<?php endif; ?>

					<img title="<?php print(strip_tags($midwife['name'])); ?>" class="img-responsive" src="midwives/logo/<?php print($midwife['img']); ?>" />

					<?php if (isset($midwife['web'])): ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

				<h2 class="<?php if (isset($midwife['titleinlogo'])) print('sr-only'); ?>">
					<?php if (isset($midwife['web'])): ?>
						<a href="http://<?php print($midwife['web']); ?>">
					<?php endif; ?>

					<?php print($midwife['name']); ?>

					<?php if (isset($midwife['web'])): ?>
						</a>
					<?php endif; ?>
				</h2>

		</div>
	</div>

	<div class="address clearfix">
		<span class="glyphicon glyphicon-home"></span>
		<address class="content small">
			<?php print($midwife['addr1']); ?>
			<br/>
			<?php if (isset($midwife['addr2'])): ?>
				<?php print($midwife['addr2']); ?>
			<?php endif; ?>
		</address>
	</div>

	<div class="phone small clearfix">
		<span class="glyphicon glyphicon-earphone"></span>
		<div class="content">
			<?php print($midwife['phone']); ?>
		</div>
	</div>

	<?php if (isset($midwife['fax'])): ?>
		<div class="fax small clearfix">
			<span class="glyphicon glyphicon-print"></span>
			<div class="content">
				<?php print($midwife['fax']); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php if (isset($midwife['email'])): ?>
		<div class="email small clearfix">
			<span class="glyphicon glyphicon-envelope"></span>
			<div class="content">
				<a href="mailto:<?php print($midwife['email']); ?>"><?php print($midwife['email']); ?></a>
			</div>
		</div>
	<?php endif; ?>

	<?php if (isset($midwife['web'])): ?>
		<div class="web small clearfix">
			<span class="glyphicon glyphicon-globe"></span>
			<div class="content">
				<a href="http://<?php print($midwife['web']); ?>"><?php print($midwife['web']); ?></a>
			</div>
		</div>
	<?php endif; ?>

	<div class="tag small clearfix">
		<span class="glyphicon glyphicon-comment"></span>
		<div class="content">
			<?php print($midwife['tag']); ?>
		</div>
	</div>
</div>
