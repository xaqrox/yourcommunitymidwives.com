<div class="col-md-3" id="<?php print($midwife_id) ?>">
	<h2><?php print($midwife['name']); ?></h2>
	<p class="address"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php print($midwife['addr1']); ?><br/><?php print($midwife['addr2']); ?></p>
	<p class="phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php print($midwife['phone']); ?></p>
	<?php if (isset($midwife['fax'])): ?>
		<p class="fax"><span class="glyphicon glyphicon-print"></span>&nbsp;<?php print($midwife['fax']); ?></p>
	<?php endif; ?>
	<p class="email"><span class="glyphicon glyphicon-envelope"></span>&nbsp;<a href="mailto:<?php print($midwife['email']); ?>"><?php print($midwife['email']); ?></a></p>
	<?php if (isset($midwife['web'])): ?>
		<p class="web"><span class="glyphicon glyphicon-globe"></span>&nbsp;<a href="http://<?php print($midwife['web']); ?>"><?php print($midwife['web']); ?></a></p>
	<?php endif; ?>
	<p class="tag"><?php print($midwife['tag']); ?>
</div>
