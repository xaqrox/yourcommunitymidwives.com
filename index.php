<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Your Community Midwives</title>
        <meta name="description" content="Proud sponsors of Call the Midwife on Maryland Public Television.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<small class="pull-right">beta</small>
			<h1>Your Community Midwives</h1>
			<em>Proud sponsors of <a href="http://www.pbs.org/call-the-midwife/home/">Call the Midwife</a> on <a href="http://www.mpt.org/home/">Maryland Public Television</a>.</em>
		</div>
	</div>
      <!-- Example row of columns -->
<?php

// Open midwives directory.
$midwives_dir = opendir('midwives');

while ($midwife_filename = readdir($midwives_dir)) {
	// If not a text file, go to the next file.
	if (strpos($midwife_filename, 'txt') === FALSE) {
		continue;
	}

	$midwife = array();

	// Get the id by stripping off the file extension.
	$midwife['id'] = array_shift(explode('.', $midwife_filename));

	// Open a file hadler for this midwife file.
	$midwife_file = fopen('midwives/' . $midwife_filename, 'r');

	// For each line in the midwife file,
	while ($line = fgets($midwife_file)) {
		// split it into a field name and a value,
		$pair = explode(':', $line);
		$field = $pair[0];
		$value = $pair[1];
		// and store it in an array.
		$midwife[$field] = $value;
	}
	fclose($midwife_file);

	// Index midwives by display name.
	$midwives[$midwife['name']] = $midwife;
}

closedir($midwives_dir);

ksort($midwives);

// Initialize counter.
$i = 0;

foreach ($midwives as $midwife) {
	// On the first go around and every fourth after, start a new row.
	if ($i % 4 == 0) { ?> <div class="row"> <?php }

	// Include the midwife template, which assumes the array built above.
	include('midwife.tpl.php');

	// Increment the counter.
	$i = $i + 1;

	// Check if a new row is about to start, and end this row.
	if ($i % 4 == 0) { ?> </div> <?php }
}

// If the last row ended on a number not divisible by 4, end the row.
if ($i % 4 != 0) { ?> </div> <?php }
?>
      <hr>

      <footer class="small">
	<ul class="list-inline">
		<li>Icons by <a href="http://glyphicons.com">Glyphicons</a></li>
		<li>Made with&nbsp;<span class="glyphicon glyphicon-heart"></span>&nbsp;by <a href="http://xaqrox.com">XAQ</a></li>
		<li>Version 1.beta4 (<a href="https://github.com/xaqrox/yourcommunitymidwives.com/tree/1.beta4" target="_blank">View on GitHub</a>)</li>
	</ul>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
