<div class="col-md-3" id="<?php print($midwife_id) ?>">
	<h2><?php print($midwife['name']); ?></h2>

	<div class="address"><span class="glyphicon glyphicon-home"></span>&nbsp;
		<p>
			<?php print($midwife['addr1']); ?>
			<br/>
			<?php if (isset($midwife['addr2'])): ?>
				<?php print($midwife['addr2']); ?>
			<?php endif; ?>
		</p>
	</div>

	<div class="phone">
		<p>
			<span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php print($midwife['phone']); ?>
		</p>
	</div>

	<?php if (isset($midwife['fax'])): ?>
		<div class="fax">
			<p>
				<span class="glyphicon glyphicon-print"></span>&nbsp;<?php print($midwife['fax']); ?>
			</p>
		</div>
	<?php endif; ?>

	<div class="email">
		<p>
			<span class="glyphicon glyphicon-envelope"></span>&nbsp;<a href="mailto:<?php print($midwife['email']); ?>"><?php print($midwife['email']); ?></a>
		</p>
	</div>

	<?php if (isset($midwife['web'])): ?>
		<div class="web">
			<p>
				<span class="glyphicon glyphicon-globe"></span>&nbsp;<a href="http://<?php print($midwife['web']); ?>"><?php print($midwife['web']); ?></a>
			</p>
		</div>
	<?php endif; ?>

	<div class="tag">
		<p>
			<span class="glyphicon glyphicon-comment"></span>&nbsp;<?php print($midwife['tag']); ?>
		</p>
	</div>
</div>
