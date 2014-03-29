<div class="col-md-3" id="<?php print($midwife_id) ?>">
	<?php if (isset($midwife['img'])): ?>
		<?php if (isset($midwife['web'])): ?>
			<a href="http://<?php print($midwife['web']); ?>">
		<?php endif; ?>

		<img title="<?php print(strip_tags($midwife['name'])); ?>" class="img-responsive" src="midwives/logo/<?php print($midwife['img']); ?>" />

		<?php if (isset($midwife['web'])): ?>
			</a>
		<?php endif; ?>
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

	<div class="clearfix"></div>

	<div class="address">
		<span class="glyphicon glyphicon-home">&nbsp;</span>
		<address class="small">
			<?php print($midwife['addr1']); ?>
			<br/>
			<?php if (isset($midwife['addr2'])): ?>
				<?php print($midwife['addr2']); ?>
			<?php endif; ?>
		</address>
	</div>
	<div class="clearfix"></div>

	<div class="phone small">
		<p>
			<span class="glyphicon glyphicon-earphone">&nbsp;</span><?php print($midwife['phone']); ?>
		</p>
	</div>

	<?php if (isset($midwife['fax'])): ?>
		<div class="fax small">
			<p>
				<span class="glyphicon glyphicon-print">&nbsp;</span><?php print($midwife['fax']); ?>
			</p>
		</div>
	<?php endif; ?>

	<?php if (isset($midwife['email'])): ?>
		<div class="email small">
			<p>
				<span class="glyphicon glyphicon-envelope">&nbsp;</span><a href="mailto:<?php print($midwife['email']); ?>"><?php print($midwife['email']); ?></a>
			</p>
		</div>
	<?php endif; ?>

	<?php if (isset($midwife['web'])): ?>
		<div class="web small">
			<p>
				<span class="glyphicon glyphicon-globe">&nbsp;</span><a href="http://<?php print($midwife['web']); ?>"><?php print($midwife['web']); ?></a>
			</p>
		</div>
	<?php endif; ?>

	<div class="tag small">
		<p>
			<span class="glyphicon glyphicon-comment">&nbsp;</span><?php print($midwife['tag']); ?>
		</p>
	</div>
</div>
