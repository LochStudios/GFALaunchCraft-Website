<?php
  if ($handle = opendir('/home2/thelaunc/public_html/download')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<a href="download/'.$file.'">'.$file.'</a><br>
                    ';
      }
    }
    closedir($handle);
  }
?>
<html>
	<head>
		<title>LaunchCraft</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../images/LaunchCraft.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="../images/LaunchCraft.png" type="image/x-icon"/>
		<link rel="stylesheet" href="../assets/css/main.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>LaunchCraft</h1>
								<p>A fully customised minecraft game launcher that auto backups.<br></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#info">Information's</a></li>
								<li><a href="#download">Download Now</a></li>
							</ul>
						</nav>
					</header>
				<!-- Main -->
					<div id="main">
						<!-- Intro -->
							<article id="info">
								<h2 class="major">Information</h2>
								<p>Backup's:<br>
                  When backing up your game, the launcher only back ups the worlds, your servers file and profile.<br>
                  If you have paid for off site backups, your data will be uploaded to one of our super fast backup servers.</p>
                    <!-- https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WLTMQBJNXDNG8 -->
                      <center><button stly="button" onclick="location.href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WLTMQBJNXDNG8'">Buy Off Site Backups</button></center>
					  <br><center><button stly="button" onclick="location.href='https://wiki.thelaunchcraft.net.au'">Visit The Wiki</button></center>
							</article>
            
            <!-- Download -->
							<article id="download">
								<h2 class="major">Download!</h2>
								<p>How To Download:<br>
                    Please click what you would like to download.</p>
                    <table>
                        <tr>
                          <th>Local Copy</th>
                          <th><a href="https://github.com/TheLaunchCraft/LaunchCraft">GitHub</a> Copy</th>
                        </tr>
                        <tr>
                            <th><?php echo $thelist; ?></th>
							<th><a href="https://github.com/TheLaunchCraft/LaunchCraft/releases/download/Alpha/LaunchCraft-A01.exe">LaunchCraft-A01.exe</a></th>
                        </tr>
                    </table>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Copyright 2018. All Rights Reserved. LaunchCraft
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
