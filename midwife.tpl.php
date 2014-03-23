<div class="col-md-3" id="<?php print($midwife_id) ?>">
	<h2><?php print($midwife['name']); ?></h2>
	<p class="address"><?php print($midwife['addr1']); ?><br/><?php print($midwife['addr2']); ?></p>
	<p class="phone"><?php print($midwife['phone']); ?></p>
	<p class="fax"><?php print($midwife['fax']); ?></p>
	<a class="email"><a href="mailto:<?php print($midwife['email']); ?>"><?php print($midwife['email']); ?></a>
	<a class="web"><a href="http://<?php print($midwife['web']); ?>"><?php print($midwife['web']); ?></a>
	<p class="tag"><?php print($midwife['tag']); ?>
</div>
