<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<!--<div class="lens-flare"></div>-->
	<div class="header-container">
		<header class="wrapper clearfix">
			<a href="http://files.championswimmer.in">
<pre style="white-space: pre;">
   __ _ _
  / _(_) |
 | |_ _| | ___  ___        ___ ___
 |  _| | |/ _ \/ __|      / __/ __|
 | | | | |  __/\__ \  _  | (__\__ \
 |_| |_|_|\___||___/ (_)  \___|___/


</pre>
			</a>
			<div class="partners">
			<?php include 'androxfer-friends.php'; ?>
			</div>
		</header>
	</div>
	<div id="devs" class="andro-column">
		<h2><i class="icon icon-groups-friends"></i>developers</h2>
		<ul>
			<?php foreach($users as $user): ?>
			<li class='<?= $currentDeveloper == $user ? "active" : "" ?>'><a href='/?developer=<?= $user ?>'><?= $user ?></a></li>
			<?php endforeach ?>
		</ul>
	</div><!-- end devs -->
