<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Register form</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script type="text/javascript">
		
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">HEADER</a>
				</div>
				<div id="menu">
					<p><?if($_COOKIE["username"])echo "Hello ".$_COOKIE["username"];?></p>
					<!-- <ul>
						<li class="first active"><a href="/">HOME</a></li>
					</ul> -->
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>SIDEBAR</h3>
					</div>
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">HOME</a></li>
							<?if($_COOKIE["username"]){ ?>
							<li><a href="/logout">LOGOUT</a></li>
							<?}else{ ?>
							<li><a href="/login">LOGIN </a> | <a href="/register"> REGISTER</a></li>
							<? }?>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>CONTACTS</h3>
					<ul class="list">
						<li>skypeid: </li>
						<li class="last">email: </li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>INFORMATION</h3>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos mollitia, dignissimos ullam dolores quia, expedita sint at beatae fuga asperiores cupiditate velit, culpa nisi accusamus atque ipsa minus excepturi reiciendis.
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">FOOTER</a>
		</div>
	</body>
</html>