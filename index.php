<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Paper</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="assets/stylesheets/normalize.css">
	<link rel="stylesheet" href="assets/stylesheets/master.css">
</head>
<body>
	<div id="app" class="app">

		<div class="container-navigation padding-light padding-top-big flex-middle">
			<button id="buttonSide" class="button-menu margin-bottom-big"><i class="material-icons"></i></button>
			<nav class="container-menu">
				<ul class="menu">
					<li><a href=""><i class="material-icons">bookmarks</i></a></li>
					<li class="current-item"><a href=""><i class="material-icons">language</i></a></li>
					<li><a href=""><i class="material-icons">dns</i></a></li>
					<li><a href=""><i class="material-icons" data-number="24">calendar_today</i></a></li>
				</ul>
			</nav>
			<div class="container-account flex-bottom">
				<div class="user-avatar">
					<img src="assets/images/user-001.jpg" alt="">
				</div>
			</div>
		</div>

		<main class="container-main">
			<div class="container-side">
				<h4 class="margin-bottom-medium">Dashboard</h4>
				<ul class="menu">
					<li><a href="#">Donec vestibulum</a></li>
					<li><a href="#">Ligula pulvinar</a></li>
					<li><a href="#">Aliquet efficitur</a></li>
				</ul>
				<h4 class="margin-bottom-medium">Dashboard</h4>
				<ul class="menu">
					<li><a href="#">Donec vestibulum</a></li>
					<li><a href="#">Ligula pulvinar</a></li>
					<li><a href="#">Aliquet efficitur</a></li>
				</ul>
			</div>

			<div class="container-page">
				<div class="container-page-head">
					<h1 class="page-title">Dashboard</h1>
					<div class="container-search">
						<i class="material-icons">search</i>
						<input type="text" name="" value="" placeholder="Rechercher un projet...">
					</div>
				</div>
				<div class="container-page-content">

					<div class="modules-row">
						<div class="modules-col">
							<div class="module-container">
								<div class="module-content">
									<h2>Paper time!</h2>
									<p>This's a conceptual CRM PROJECT. It helps users to better manage the teams, projects & clients, generate reports and keep them up to date.</p>
								</div>
							</div>
							<div class="module-container">
								<div class="module-head">
									<h2 class="module-title">CRM - Management System</h2>
									<div class="module-actions">
										<a href="#" class="item"><i class="material-icons">cloud_download</i></a>
										<button class="item"><i class="material-icons">more_horiz</i></button>
									</div>
								</div>
								<div class="module-content">
									<p>This's a conceptual CRM PROJECT. It helps users to better manage the teams, projects & clients, generate reports and keep them up to date.</p>
									<button class="button">S'inscrire avec une adresse e-mail</button>
								</div>
							</div>
						</div>

						<div class="module-container">
							<div class="module-head">
								<h2 class="module-title">Calendar</h2>
								<div class="module-actions">
									<button class="item"><i class="material-icons">more_horiz</i></button>
								</div>
							</div>
							<div class="module-content">
								<?php
								$date = new \DateTime();
								$date->setTime( 0, 0, 0 );
								$start = (clone $date)->modify('first day of this month');
								$start->setTime( 0, 0, 0 );
								$end = (clone $start)->modify('+1 month -1 day');
								$end->setTime( 0, 0, 0 );
								$week = intval((clone $start)->diff($end)->days / 7) + 1;
								$lastMonday = $start->modify('last monday');
								?>
								<div class="wrap-calendar">
									<table class="calendar">
										<tr class="head">
											<?php for ($i=0; $i < 7; $i++):?>
												<th class="day"><?php echo (clone $start)->modify('+'.$i.' days')->format('D'); ?></th>
											<?php endfor;?>
										</tr>
										<?php for ($w=0; $w < $week; $w++):?>
											<tr class="week">
												<?php for ($i=0; $i < 7; $i++):?>
													<?php
														$day = (clone $lastMonday)->modify('+'.($i+($w*7)).' days');
														$diff = $date->diff($day)->days;
													?>
													<td class="day <?php echo ($diff === 0)?'today':'';?> <?php echo ($day->format('N') >= 6)?'weekend':'' ?>">
														<?php echo ($day->format('m') === $date->format('m'))?$day->format('d'):''; ?>
													</td>
												<?php endfor;?>
											</tr>
										<?php endfor;?>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="modules-row m1">
						<div class="module-container">
							<div class="module-head">
								<h2 class="module-title">Agenda</h2>
								<div class="module-actions">
									<a href="" class="button">add new event</a>
									<button class="item"><i class="material-icons">more_horiz</i></button>
								</div>
							</div>
							<div class="module-content">

								<div class="wrap-actions-agenda">
									<div class="select-user">
										<select class="select-select2" name="">
											<option value="">--</option>
											<option value="">Julien</option>
											<option value="">Louis</option>
											<option value="">Sophie</option>
										</select>
									</div>
								</div>

								<div class="wrap-agenda">
									<div class="header-agenda">
										<ul class="metas-dates">
											<li class="day current">
												<span class="meta-date-name">Lundi</span>
												<span class="meta-date-number">13.05</span>
											</li>
											<li class="day">
												<span class="meta-date-name">Mardi</span>
												<span class="meta-date-number">14.05</span>
											</li>
											<li class="day">
												<span class="meta-date-name">Mercredi</span>
												<span class="meta-date-number">15.05</span>
											</li>
											<li class="day">
												<span class="meta-date-name">Jeudi</span>
												<span class="meta-date-number">16.05</span>
											</li>
											<li class="day">
												<span class="meta-date-name">Vendredi</span>
												<span class="meta-date-number">17.05</span>
											</li>
											<li class="day">
												<span class="meta-date-name">Samedi</span>
												<span class="meta-date-number">18.05</span>
											</li>
											<li class="day">
												<span class="meta-date-name">Dimanche</span>
												<span class="meta-date-number">19.05</span>
											</li>
										</ul>
									</div>
									<div class="body-agenda">
										<ul class="metas-columns">
											<li class="day current">
												<div class="event">
													<div class="content">
														<span class="meta-title">Zapier Platform</span>
														<span class="meta-hours">10:00 - 12:00</span>
														<span class="meta-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
													</div>
													<div class="handler"></div>
												</div>
												<div class="event">
													<div class="content">
														<span class="meta-title">Blog - Paper time</span>
														<span class="meta-hours">14:00 - 18:00</span>
													</div>
													<div class="handler"></div>
												</div>
											</li>
											<li class="day"></li>
											<li class="day"></li>
											<li class="day"></li>
											<li class="day"></li>
											<li class="day day-off">
												<div class="event">
													<div class="content">
														<span class="meta-title">Meeting</span>
														<span class="meta-hours">08:00 - 10:00</span>
														<span class="meta-place">@room</span>
													</div>
													<div class="handler"></div>
												</div>
											</li>
											<li class="day day-off"></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="modules-row m1">
						<div class="module-container">
							<div class="module-head">
								<h2 class="module-title">Users</h2>
								<div class="module-actions">
									<a href="" class="button">add new user</a>
									<button class="item"><i class="material-icons">more_horiz</i></button>
								</div>
							</div>
							<div class="module-content">

								<div class="wrap-list users-list">
									<div class="item logged">
										<div class="status noshrink"></div>
										<div class="avatar noshrink">
											<div class="user-avatar">
												<img src="assets/images/user-001.jpg" alt="">
											</div>
										</div>
										<div class="email">julien@billiotte.fr</div>
										<div class="name">Julien Miclo</div>
										<div class="role">administrator</div>
										<div class="created_at">12/04/2019 20:34</div>
										<div class="ip">82.226.104.119</div>
									</div>
									<div class="item nologged">
										<div class="status noshrink"></div>
										<div class="avatar noshrink">
											<div class="user-avatar">
												<img src="assets/images/user-001.jpg" alt="">
											</div>
										</div>
										<div class="email">julien@billiotte.fr</div>
										<div class="name">Julien Miclo</div>
										<div class="role">administrator</div>
										<div class="created_at">12/04/2019 20:34</div>
										<div class="ip">82.226.104.119</div>
									</div>
									<div class="item sleeped">
										<div class="status noshrink"></div>
										<div class="avatar noshrink">
											<div class="user-avatar">
												<img src="assets/images/user-001.jpg" alt="">
											</div>
										</div>
										<div class="email">julien@billiotte.fr</div>
										<div class="name">Julien Miclo</div>
										<div class="role">administrator</div>
										<div class="created_at">12/04/2019 20:34</div>
										<div class="ip">82.226.104.119</div>
									</div>
									<div class="item sleeped">
										<div class="status noshrink"></div>
										<div class="avatar noshrink">
											<div class="user-avatar">
												<img src="assets/images/user-001.jpg" alt="">
											</div>
										</div>
										<div class="email">julien@billiotte.fr</div>
										<div class="name">Julien Miclo</div>
										<div class="role">administrator</div>
										<div class="created_at">12/04/2019 20:34</div>
										<div class="ip">82.226.104.119</div>
									</div>
								</div>

							</div>
						</div>
					</div>



					<div class="modules-row m1">
						<div class="module-container">
							<div class="module-head">
								<h2 class="module-title">Projects</h2>
								<div class="module-actions">
									<a href="" class="button">create new project</a>
									<button class="item"><i class="material-icons">more_horiz</i></button>
								</div>
							</div>
							<div class="module-content">

								<div class="wrap-list projects-list">
									<div class="item active">
										<div class="status noshrink"></div>
										<div class="email">12000</div>
										<div class="name">Powder tart muffin</div>
										<div class="domaine">cpcake donut sweet</div>
										<div class="created_at">12/04/2019 20:34</div>
									</div>
									<div class="item active">
										<div class="status noshrink"></div>
										<div class="email">12020</div>
										<div class="name">Powder tart muffin</div>
										<div class="domaine">cpcake donut sweet</div>
										<div class="created_at">12/04/2019 20:34</div>
									</div>
									<div class="item close">
										<div class="status noshrink"></div>
										<div class="email">12100</div>
										<div class="name">Powder tart muffin</div>
										<div class="domaine">cpcake donut sweet</div>
										<div class="created_at">12/04/2019 20:34</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="modules-row m1">
						<div class="module-container">
							<div class="module-head">
								<h2 class="module-title">New project</h2>
								<div class="module-actions">
									<button class="item"><i class="material-icons">more_horiz</i></button>
								</div>
							</div>
							<div class="module-content">
								<div class="inputs">
									<div class="input text success">
										<label for="">Title</label>
										<input type="text" name="" value="">
									</div>
									<div class="input text error">
										<label for="">Title</label>
										<input type="text" name="" value="">
									</div>
								</div>
								<div class="inputs">
									<div class="input text">
										<label for="">Subdomain</label>
										<div class="input-group append success">
											<input type="text" name="" value="">
											<div class="input-text">.domain.io</div>
										</div>
									</div>
									<div class="input text">
										<label for="">Subdomain</label>
										<div class="input-group append error">
											<input type="text" name="" value="">
											<div class="input-text">.domain.io</div>
										</div>
									</div>
								</div>
								<div class="input text">
									<label for="">Url</label>
									<div class="input-group prepend">
										<div class="input-text">http://</div>
										<input type="text" name="" value="">
									</div>
								</div>
								<div class="input text">
									<label for="">Collaborators</label>
									<input type="text" name="" value="">
								</div>
								<div class="input textarea">
									<label for="">Description</label>
									<textarea></textarea>
								</div>

								<div class="inputs text">
									<div class="input">
										<label for="">Title</label>
										<input type="text" name="" value="">
									</div>
									<div class="input">
										<label for="">Title 2</label>
										<input type="text" name="" value="">
									</div>
									<div class="input">
										<label for="">Title 3</label>
										<input type="text" name="" value="">
									</div>
								</div>
							</div>
						</div>
					</div>

				</div><!-- ./page-content -->
			</div><!-- ./page -->

		</main>
	</div>

	<script src="assets/javascripts/jquery.min.js" charset="utf-8"></script>
	<script src="assets/libraries/select2/select2.min.js" charset="utf-8"></script>
	<script src="assets/javascripts/master.js" charset="utf-8"></script>
</body>
</html>