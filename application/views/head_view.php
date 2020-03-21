<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="stylesheet" 		href="<?= base_url(); ?>MDB/css/my.css">
		<link rel="stylesheet" 		href="<?= base_url(); ?>MDB/css/bootstrap.min.css">
		<link rel="stylesheet"	 	href="<?= base_url(); ?>MDB/css/mdb.min.css">
		<link rel="stylesheet" 		href="<?= base_url(); ?>MDB/css/style.css">
		<link rel="stylesheet" 		href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
		<link rel="stylesheet" 		href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" 		href="https://js.api.here.com/v3/3.1/mapsjs-ui.css?dp-version=1549984893" type="text/css">
		<script src="<?= base_url(); ?>MDB/js/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>rateyo/jquery.rateyo.min.css">
    <script type="text/javascript" src="<?= base_url(); ?>rateyo/jquery.rateyo.js"></script>
		<title>ProgHab</title>
	</head>
	<body>
<!--Navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark default-color wow fadeIn">
			<a class="navbar-brand" href="<?= base_url(); ?>">ProgHub</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    			<ul class="navbar-nav mr-auto">
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Записаться</a>
        			<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
			          <a class="dropdown-item" href="<?= base_url(); ?>Main_controllers/club">Через выбор центра</a>
			          <a class="dropdown-item" href="<?= base_url(); ?>Main_controllers/sections">Через выбор секции</a>
        			</div>
      			</li>
						<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Рейтинг</a>
        			<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="<?= base_url(); ?>Main_controllers/club">Молодёжных центров</a>
			          <a class="dropdown-item" href="<?= base_url(); ?>Main_controllers/sections">Кружков(секций)</a>
								<a class="dropdown-item" href="<?= base_url(); ?>Main_controllers/trainers">Преподователей(тренеров)</a>
        			</div>
      			</li>
						<li class="nav-item">
			        <a class="nav-link" href="<?= base_url(); ?>Admin_controllers/my_statistick">Статистика
			          <span class="sr-only">(current)</span>
			        </a>
			      </li>
    			</ul>
					<ul class="navbar-nav ml-auto nav-flex-icons">
						<li class="nav-item avatar">
							<?= @$userData; ?>
						</li>
					</ul>
  			</div>
			</nav>
<!--/.Navbar -->
