<div class="col-md-3" id="<?php print($midwife_id) ?>">
	<?php if (isset($midwife['img'])): ?>
		<a href="http://<?php print($midwife['web']); ?>">
			<img title="<?php print(strip_tags($midwife['name'])); ?>" class="img-responsive" src="midwives/logo/<?php print($midwife['img']); ?>" />
		</a>
	<?php endif; ?>

	<?php if (!isset($midwife['titleinlogo'])): ?>
		<h2><a href="http://<?php print($midwife['web']); ?>"><?php print($midwife['name']); ?></a></h2>
	<?php endif; ?>
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

	<div class="email small">
		<p>
			<span class="glyphicon glyphicon-envelope">&nbsp;</span><a href="mailto:<?php print($midwife['email']); ?>"><?php print($midwife['email']); ?></a>
		</p>
	</div>

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
