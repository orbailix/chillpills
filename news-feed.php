<?php   

include "session.php";

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Sep 2021 10:22:05 GMT -->

<head>
	<title>Newsfeed</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="css/main.min.css">



	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>
</head>

<body class="page-has-left-panels page-has-right-panels">

	<div id="hellopreloader">
		<div class="preloader">
			<svg width="45" height="45" stroke="#fff">
				<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite"
							values="6;22" />
						<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
							values="6;22" />
						<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="8">
						<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite"
							values="6;1;2;3;4;5;6" />
					</circle>
				</g>
			</svg>
			<div class="text">Loading ...</div>
		</div>
	</div>


	<div class="fixed-sidebar left">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
			<a href="02-ProfilePage.html" class="logo">
				<div class="img-wrap">
					<img loading="lazy" src="img/logo.html" alt="Olympus" width="34" height="34">
				</div>
			</a>
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<svg class="olymp-menu-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="OPEN MENU">
								<use xlink:href="#olymp-menu-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="03-Newsfeed.html">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-newsfeed-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="16-FavPagesFeed.html">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="17-FriendGroups.html">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="18-MusicAndPlaylists.html">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-headphones-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="19-WeatherWidget.html">
							<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="WEATHER APP">
								<use xlink:href="#olymp-weather-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="20-CalendarAndEvents-MonthlyCalendar.html">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="24-CommunityBadges.html">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="25-FriendsBirthday.html">
							<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Friends Birthdays">
								<use xlink:href="#olymp-cupcake-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="26-Statistics.html">
							<svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Account Stats">
								<use xlink:href="#olymp-stats-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="27-ManageWidgets.html">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
			<a href="02-ProfilePage.html" class="logo">
				<div class="img-wrap">
					<img loading="lazy" src="img/logo.html" alt="Olympus" width="34" height="34">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon">
								<use xlink:href="#olymp-close-icon"></use>
							</svg>
							<span class="left-menu-title">Collapse Menu</span>
						</a>
					</li>
					<li>
						<a href="03-Newsfeed.html">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-newsfeed-icon"></use>
							</svg>
							<span class="left-menu-title">Newsfeed</span>
						</a>
					</li>
					<li>
						<a href="16-FavPagesFeed.html">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span class="left-menu-title">Fav Pages Feed</span>
						</a>
					</li>
					<li>
						<a href="17-FriendGroups.html">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
							<span class="left-menu-title">Friend Groups</span>
						</a>
					</li>
					<li>
						<a href="18-MusicAndPlaylists.html">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-headphones-icon"></use>
							</svg>
							<span class="left-menu-title">Music & Playlists</span>
						</a>
					</li>
					<li>
						<a href="19-WeatherWidget.html">
							<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="WEATHER APP">
								<use xlink:href="#olymp-weather-icon"></use>
							</svg>
							<span class="left-menu-title">Weather App</span>
						</a>
					</li>
					<li>
						<a href="20-CalendarAndEvents-MonthlyCalendar.html">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
							<span class="left-menu-title">Calendar and Events</span>
						</a>
					</li>
					<li>
						<a href="24-CommunityBadges.html">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
							<span class="left-menu-title">Community Badges</span>
						</a>
					</li>
					<li>
						<a href="25-FriendsBirthday.html">
							<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Friends Birthdays">
								<use xlink:href="#olymp-cupcake-icon"></use>
							</svg>
							<span class="left-menu-title">Friends Birthdays</span>
						</a>
					</li>
					<li>
						<a href="26-Statistics.html">
							<svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Account Stats">
								<use xlink:href="#olymp-stats-icon"></use>
							</svg>
							<span class="left-menu-title">Account Stats</span>
						</a>
					</li>
					<li>
						<a href="27-ManageWidgets.html">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
							<span class="left-menu-title">Manage Widgets</span>
						</a>
					</li>
				</ul>
				<div class="profile-completion">
					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Profile Completion</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000"
									data-refresh-interval="50" data-to="76" data-from="0"></span><span
									class="units">76%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
						</div>
					</div>
					<span>Complete <a href="#">your profile</a> so people can know more about you!</span>
				</div>
			</div>
		</div>
	</div>


	<div class="fixed-sidebar left fixed-sidebar-responsive">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
			<a href="#" class="logo js-sidebar-open">
				<img loading="lazy" src="img/logo.html" alt="Olympus" width="34" height="34">
			</a>
		</div>
		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
			<a href="#" class="logo">
				<div class="img-wrap">
					<img loading="lazy" src="img/logo.html" alt="Olympus" width="34" height="34">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="control-block">
					<div class="author-page author vcard inline-items">
						<div class="author-thumb">
							<img alt="author" src="img/author-page.html" width="36" height="36" class="avatar">
							<span class="icon-status online"></span>
						</div>
						<a href="02-ProfilePage.html" class="author-name fn">
							<div class="author-title">
								James Spiegel <svg class="olymp-dropdown-arrow-icon">
									<use xlink:href="#olymp-dropdown-arrow-icon"></use>
								</svg>
							</div>
							<span class="author-subtitle">SPACE COWBOY</span>
						</a>
					</div>
				</div>
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">MAIN SECTIONS</h6>
				</div>
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon">
								<use xlink:href="#olymp-close-icon"></use>
							</svg>
							<span class="left-menu-title">Collapse Menu</span>
						</a>
					</li>
					<li>
						<a href="mobile-index.html">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-newsfeed-icon"></use>
							</svg>
							<span class="left-menu-title">Newsfeed</span>
						</a>
					</li>
					<li>
						<a href="Mobile-28-YourAccount-PersonalInformation.html">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span class="left-menu-title">Fav Pages Feed</span>
						</a>
					</li>
					<li>
						<a href="mobile-29-YourAccount-AccountSettings.html">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
							<span class="left-menu-title">Friend Groups</span>
						</a>
					</li>
					<li>
						<a href="Mobile-30-YourAccount-ChangePassword.html">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-headphones-icon"></use>
							</svg>
							<span class="left-menu-title">Music & Playlists</span>
						</a>
					</li>
					<li>
						<a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
							<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="WEATHER APP">
								<use xlink:href="#olymp-weather-icon"></use>
							</svg>
							<span class="left-menu-title">Weather App</span>
						</a>
					</li>
					<li>
						<a href="Mobile-32-YourAccount-EducationAndEmployement.html">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
							<span class="left-menu-title">Calendar and Events</span>
						</a>
					</li>
					<li>
						<a href="Mobile-33-YourAccount-Notifications.html">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
							<span class="left-menu-title">Community Badges</span>
						</a>
					</li>
					<li>
						<a href="Mobile-34-YourAccount-ChatMessages.html">
							<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Friends Birthdays">
								<use xlink:href="#olymp-cupcake-icon"></use>
							</svg>
							<span class="left-menu-title">Friends Birthdays</span>
						</a>
					</li>
					<li>
						<a href="Mobile-35-YourAccount-FriendsRequests.html">
							<svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Account Stats">
								<use xlink:href="#olymp-stats-icon"></use>
							</svg>
							<span class="left-menu-title">Account Stats</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
							<span class="left-menu-title">Manage Widgets</span>
						</a>
					</li>
				</ul>
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">YOUR ACCOUNT</h6>
				</div>
				<ul class="account-settings">
					<li>
						<a href="#">
							<svg class="olymp-menu-icon">
								<use xlink:href="#olymp-menu-icon"></use>
							</svg>
							<span>Profile Settings</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span>Create Fav Page</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-logout-icon">
								<use xlink:href="#olymp-logout-icon"></use>
							</svg>
							<span>Log Out</span>
						</a>
					</li>
				</ul>
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">About Olympus</h6>
				</div>
				<ul class="about-olympus">
					<li>
						<a href="#">
							<span>Terms and Conditions</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>FAQs</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>Careers</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>Contact</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="fixed-sidebar right">
		<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar67-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar62-sm.html" width="34" height="34"
								class="avatar">
							<span class="icon-status online"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar68-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar69-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar70-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status disconected"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" loading="lazy" src="img/avatar64-sm.html" width="34" height="34"
								class="avatar">
							<span class="icon-status online"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar63-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status status-invisible"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
					</li>
				</ul>
			</div>
			<div class="search-friend inline-items">
				<a href="#" class="js-sidebar-open">
					<svg class="olymp-menu-icon">
						<use xlink:href="#olymp-menu-icon"></use>
					</svg>
				</a>
			</div>
			<a href="#" class="olympus-chat inline-items js-chat-open">
				<svg class="olymp-chat---messages-icon">
					<use xlink:href="#olymp-chat---messages-icon"></use>
				</svg>
			</a>
		</div>
		<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">Close Friends</a>
					<a href="#">Settings</a>
				</div>
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar67-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Carol Summers</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar62-sm.html" width="34" height="34"
								class="avatar">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Mathilda Brinker</a>
							<span class="status">AT WORK!</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar68-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Carol Summers</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar69-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Michael Maximoff</a>
							<span class="status">AWAY</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar70-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status disconected"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Rachel Howlett</a>
							<span class="status">OFFLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">MY FAMILY</a>
					<a href="#">Settings</a>
				</div>
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" loading="lazy" src="img/avatar64-sm.html" width="34" height="34"
								class="avatar">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Sarah Hetfield</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">UNCATEGORIZED</a>
					<a href="#">Settings</a>
				</div>
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Bruce Peterson</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Chris Greyson</a>
							<span class="status">AWAY</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar63-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status status-invisible"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Nicholas Grisom</a>
							<span class="status">INVISIBLE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Chris Greyson</a>
							<span class="status">AWAY</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Bruce Peterson</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="search-friend inline-items">
				<form class="form-group">
					<input class="form-control" placeholder="Search Friends..." value="" type="text">
				</form>
				<a href="29-YourAccount-AccountSettings.html" class="settings">
					<svg class="olymp-settings-icon">
						<use xlink:href="#olymp-settings-icon"></use>
					</svg>
				</a>
				<a href="#" class="js-sidebar-open">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
			</div>
			<a href="#" class="olympus-chat inline-items js-chat-open">
				<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
				<svg class="olymp-chat---messages-icon">
					<use xlink:href="#olymp-chat---messages-icon"></use>
				</svg>
			</a>
		</div>
	</div>


	<div class="fixed-sidebar right fixed-sidebar-responsive" id="sidebar-right-responsive">
		<div class="fixed-sidebar-right sidebar--small">
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-menu-icon">
					<use xlink:href="#olymp-menu-icon"></use>
				</svg>
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
		</div>
		<div class="fixed-sidebar-right sidebar--large">
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">Close Friends</a>
					<a href="#">Settings</a>
				</div>
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar67-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Carol Summers</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar62-sm.html" width="34" height="34"
								class="avatar">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Mathilda Brinker</a>
							<span class="status">AT WORK!</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar68-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Carol Summers</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar69-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Michael Maximoff</a>
							<span class="status">AWAY</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar70-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status disconected"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Rachel Howlett</a>
							<span class="status">OFFLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">MY FAMILY</a>
					<a href="#">Settings</a>
				</div>
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" loading="lazy" src="img/avatar64-sm.html" width="34" height="34"
								class="avatar">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Sarah Hetfield</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">UNCATEGORIZED</a>
					<a href="#">Settings</a>
				</div>
				<ul class="chat-users">
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Bruce Peterson</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Chris Greyson</a>
							<span class="status">AWAY</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar63-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status status-invisible"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Nicholas Grisom</a>
							<span class="status">INVISIBLE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status away"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Chris Greyson</a>
							<span class="status">AWAY</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34"
								height="34">
							<span class="icon-status online"></span>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name">Bruce Peterson</a>
							<span class="status">ONLINE</span>
						</div>
						<div class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-icons">
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="ADD TO CONVERSATION"
										class="olymp-add-to-conversation-icon">
										<use xlink:href="#olymp-add-to-conversation-icon"></use>
									</svg>
								</li>
								<li>
									<svg data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
										<use xlink:href="#olymp-block-from-chat-icon"></use>
									</svg>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="search-friend inline-items">
				<form class="form-group">
					<input class="form-control" placeholder="Search Friends..." value="" type="text">
				</form>
				<a href="29-YourAccount-AccountSettings.html" class="settings">
					<svg class="olymp-settings-icon">
						<use xlink:href="#olymp-settings-icon"></use>
					</svg>
				</a>
				<a href="#" class="js-sidebar-open">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
			</div>
			<a href="#" class="olympus-chat inline-items js-chat-open">
				<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
				<svg class="olymp-chat---messages-icon">
					<use xlink:href="#olymp-chat---messages-icon"></use>
				</svg>
			</a>
		</div>
	</div>


	<header class="header" id="site-header">
		<div class="page-title">
			<h6>Newsfeed</h6>
		</div>
		<div class="header-content-wrapper">
			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					<button>
						<svg class="olymp-magnifying-glass-icon">
							<use xlink:href="#olymp-magnifying-glass-icon"></use>
						</svg>
					</button>
				</div>
			</form>
			<a href="#" class="link-find-friend">Find Friends</a>
			<div class="control-block">
				<div class="control-icon more has-items">
					<svg class="olymp-happy-face-icon">
						<use xlink:href="#olymp-happy-face-icon"></use>
					</svg>
					<div class="label-avatar bg-blue">6</div>
					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">FRIEND REQUESTS</h6>
							<a href="#">Find Friends</a>
							<a href="#">Settings</a>
						</div>
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list friend-requests">
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar55-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
										<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
									</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="#olymp-happy-face-icon"></use>
												</svg>
											</span>
										</a>
										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="#olymp-happy-face-icon"></use>
												</svg>
											</span>
										</a>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar56-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Tony Stevens</a>
										<span class="chat-message-item">4 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="#olymp-happy-face-icon"></use>
												</svg>
											</span>
										</a>
										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="#olymp-happy-face-icon"></use>
												</svg>
											</span>
										</a>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
								<li class="accepted">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar57-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just
										became friends. Write on <a href="#" class="notification-link">her wall</a>.
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar58-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Stagg Clothing</a>
										<span class="chat-message-item">9 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="#olymp-happy-face-icon"></use>
												</svg>
											</span>
										</a>
										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="#olymp-happy-face-icon"></use>
												</svg>
											</span>
										</a>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
							</ul>
						</div>
						<a href="#" class="view-all bg-blue">Check all your Events</a>
					</div>
				</div>
				<div class="control-icon more has-items">
					<svg class="olymp-chat---messages-icon">
						<use xlink:href="#olymp-chat---messages-icon"></use>
					</svg>
					<div class="label-avatar bg-purple">2</div>
					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Chat / Messages</h6>
							<a href="#">Mark all as read</a>
							<a href="#">Settings</a>
						</div>
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list chat-message">
								<li class="message-unread">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar59-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Diana Jameson</a>
										<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you
											know that we have to reschedule...</span>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar60-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Jake Parker</a>
										<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar61-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
										<span class="chat-message-item">We’ll have to check that at the office and see
											if the client is on board with...</span>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
								<li class="chat-group">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar11-sm.html" alt="author" width="16"
											height="16">
										<img loading="lazy" src="img/avatar12-sm.html" alt="author" width="16"
											height="16">
										<img loading="lazy" src="img/avatar13-sm.html" alt="author" width="16"
											height="16">
										<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36"
											height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
										<span class="last-message-author">Ed:</span>
										<span class="chat-message-item">Yeah! Seems fine by me!</span>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
							</ul>
						</div>
						<a href="#" class="view-all bg-purple">View All Messages</a>
					</div>
				</div>
				<div class="control-icon more has-items"  onclick="showNotification()">
					<svg class="olymp-thunder-icon">
						<use xlink:href="#olymp-thunder-icon"></use>
					</svg>
					<div class="label-avatar bg-primary" id="notificationCount"></div>
					<div id="reveal"  class="more-dropdown more-with-triangle triangle-top-center ">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notifications</h6>
							<a href="#">Mark all as read</a>
							<a href="#">Settings</a>
						</div>
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list"  id="showNotification" onmouseleave="removeClass()">
								<!-- <li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34"
											alt="author">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented
											on your new <a href="#" class="notification-link">profile status</a>.</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon">
											<use xlink:href="#olymp-comments-post-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg>
									</div>
								</li> -->
								<!-- <li class="un-read">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar63-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a>
											just became friends. Write on <a href="#" class="notification-link">his
												wall</a>.</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">9 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg>
									</div>
								</li>
								<li class="with-comment-photo-wrap">
									<div class="with-comment-photo">
										<div class="author-thumb"> <img loading="lazy" src="img/avatar64-sm.html"
												width="34" height="34" alt="author"> </div>
										<div class="notification-event">
											<div> <a href="#" class="h6 notification-friend">Sarah Hetfield</a>
												commented on your <a href="#" class="notification-link">photo</a>.
											</div> <span class="notification-date"><time class="entry-date updated"
													datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
										</div> <span class="notification-icon"> <svg class="olymp-comments-post-icon">
												<use xlink:href="#olymp-comments-post-icon"></use>
											</svg> </span>
									</div>
									<div class="comment-photo"> <img loading="lazy" src="img/comment-photo1.html"
											alt="photo" width="40" height="40"> <span>“She looks incredible in that
											outfit! We should see each...”</span> </div>
									<div class="more"> <svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg> <svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg> </div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar65-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you
											to attend to his event Goo in <a href="#" class="notification-link">Gotham
												Bar</a>.</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar66-sm.html" alt="author" width="34"
											height="34">
									</div>
									<div class="notification-event">
										<div><a href="#" class="h6 notification-friend">James Summers</a> commented on
											your new <a href="#" class="notification-link">profile status</a>.</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon">
											<use xlink:href="#olymp-heart-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg>
									</div>
								</li> -->
							</ul>
						</div>
						<a href="#" class="view-all bg-primary">View All Notifications</a>
					</div>
				</div>
				<div class="author-page author vcard inline-items more">
					<div class="author-thumb">
						<img alt="author" src="img/author-page.html" width="36" height="36" class="avatar">
						<span class="icon-status online"></span>
						<div class="more-dropdown more-with-triangle">
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Your Account</h6>
								</div>
								<ul class="account-settings">
									<li>
										<a href="29-YourAccount-AccountSettings.html">
											<svg class="olymp-menu-icon">
												<use xlink:href="#olymp-menu-icon"></use>
											</svg>
											<span>Profile Settings</span>
										</a>
									</li>
									<li>
										<a href="36-FavPage-SettingsAndCreatePopup.html">
											<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
												data-bs-placement="right" data-bs-original-title="FAV PAGE">
												<use xlink:href="#olymp-star-icon"></use>
											</svg>
											<span>Create Fav Page</span>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="olymp-logout-icon">
												<use xlink:href="#olymp-logout-icon"></use>
											</svg>
											<span>Log Out</span>
										</a>
									</li>
								</ul>
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Chat Settings</h6>
								</div>
								<ul class="chat-settings">
									<li>
										<a href="#">
											<span class="icon-status online"></span>
											<span>Online</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="icon-status away"></span>
											<span>Away</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="icon-status disconected"></span>
											<span>Disconnected</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="icon-status status-invisible"></span>
											<span>Invisible</span>
										</a>
									</li>
								</ul>
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Custom Status</h6>
								</div>
								<form class="form-group with-button custom-status">
									<input class="form-control" placeholder="" type="text" value="Space Cowboy">
									<button class="bg-purple">
										<svg class="olymp-check-icon">
											<use xlink:href="#olymp-check-icon"></use>
										</svg>
									</button>
								</form>
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">About Olympus</h6>
								</div>
								<ul>
									<li>
										<a href="#">
											<span>Terms and Conditions</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>FAQs</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>Careers</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>Contact</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="02-ProfilePage.html" class="author-name fn">
						<div class="author-title">
							James Spiegel <svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="#olymp-dropdown-arrow-icon"></use>
							</svg>
						</div>
						<span class="author-subtitle">SPACE COWBOY</span>
					</a>
				</div>
			</div>
		</div>
	</header>


	<header class="header header-responsive" id="site-header-responsive">
		<div class="header-content-wrapper">
			<ul class="nav nav-tabs mobile-notification-tabs" id="mobile-notification-tabs" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="request-tab" data-bs-toggle="tab" href="#request" role="tab"
						aria-controls="request" aria-selected="false">
						<div class="control-icon has-items">
							<svg class="olymp-happy-face-icon">
								<use xlink:href="#olymp-happy-face-icon"></use>
							</svg>
							<div class="label-avatar bg-blue">6</div>
						</div>
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab" aria-controls="chat"
						aria-selected="false">
						<div class="control-icon has-items">
							<svg class="olymp-chat---messages-icon">
								<use xlink:href="#olymp-chat---messages-icon"></use>
							</svg>
							<div class="label-avatar bg-purple">2</div>
						</div>
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab"
						aria-controls="notification" aria-selected="false">
						<div class="control-icon has-items">
							<svg class="olymp-thunder-icon">
								<use xlink:href="#olymp-thunder-icon"></use>
							</svg>
							<div class="label-avatar bg-primary">8</div>
						</div>
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="search-tab" data-bs-toggle="tab" href="#search" role="tab"
						aria-controls="search" aria-selected="false">
						<svg class="olymp-magnifying-glass-icon">
							<use xlink:href="#olymp-magnifying-glass-icon"></use>
						</svg>
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>

		<div class="tab-content tab-content-responsive">
			<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<a href="#">Settings</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar55-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
								<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar56-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tony Stevens</a>
								<span class="chat-message-item">4 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar57-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								You and
								<a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends.
								Write on
								<a href="#" class="notification-link">her wall</a>.
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar58-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
					</ul>
					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>
			</div>
			<div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>
					<ul class="notification-list chat-message">
						<li class="message-unread">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar59-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Diana Jameson</a>
								<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that
									we have to reschedule...</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar60-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Jake Parker</a>
								<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar61-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
								<span class="chat-message-item">We’ll have to check that at the office and see if the
									client is on board with...</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li class="chat-group">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar11-sm.html" alt="author" width="16" height="16">
								<img loading="lazy" src="img/avatar12-sm.html" alt="author" width="16" height="16">
								<img loading="lazy" src="img/avatar13-sm.html" alt="author" width="16" height="16">
								<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
								<span class="last-message-author">Ed:</span>
								<span class="chat-message-item">Yeah! Seems fine by me!</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
					</ul>
					<a href="#" class="view-all bg-purple">View All Messages</a>
				</div>
			</div>
			<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>
					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your
									new
									<a href="#" class="notification-link">profile status</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
						<li class="un-read">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar63-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<div>You and
									<a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends.
									Write on
									<a href="#" class="notification-link">his wall</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
						<li class="with-comment-photo-wrap">
							<div class="with-comment-photo">
								<div class="author-thumb"><img loading="lazy" src="img/avatar64-sm.html" width="34"
										height="34" alt="author"></div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
										<a href="#" class="notification-link">photo</a>.
									</div>
									<span class="notification-date"><time class="entry-date updated"
											datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
								<span class="notification-icon"> <svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg> </span>
							</div>
							<div class="comment-photo"><img loading="lazy" src="img/comment-photo1.html" alt="photo"
									width="40" height="40">
								<span>“She looks incredible in that outfit! We should see each...”</span></div>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar65-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<div>
									<a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend
									to his event Goo in
									<a href="#" class="notification-link">Gotham Bar</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar66-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new
									<a href="#" class="notification-link">profile status</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
					</ul>
					<a href="#" class="view-all bg-primary">View All Notifications</a>
				</div>
			</div>
			<div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..."
							type="text">
					</div>
				</form>
			</div>
		</div>

	</header>

	<div class="header-spacer"></div>
	<div class="container">
		<div class="row">

			<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
				<div class="ui-block">

					<div class="news-feed-form">

						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active inline-items" data-bs-toggle="tab" href="#home-1" role="tab"
									aria-expanded="true">
									<svg class="olymp-status-icon">
										<use xlink:href="#olymp-status-icon"></use>
									</svg>
									<span>Status</span>
								</a>
							</li>

						</ul>

						<div class="tab-content">
							<div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-expanded="true">
								<form id="form-post" action="api/process.php" enctype="multipart/form-data">
									<div class="author-thumb">
										<img loading="lazy" src="img/author-page.html" width="36" height="36"
											alt="author">
									</div>
									<div class="form-group with-icon label-floating is-empty">
										<label class="control-label">Share what you are thinking here...</label>
										<textarea class="form-control"  id="post-caption" name="caption" placeholder=""></textarea>
									</div>
									<div class="add-options-message">
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="ADD PHOTOS">
											<svg class="olymp-camera-icon" data-bs-toggle="modal"
												data-bs-target="#update-header-photo">
												<use xlink:href="#olymp-camera-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="TAG YOUR FRIENDS">
											<svg class="olymp-computer-icon">
												<use xlink:href="#olymp-computer-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="ADD LOCATION">
											<svg class="olymp-small-pin-icon">
												<use xlink:href="#olymp-small-pin-icon"></use>
											</svg>
										</a>
										<input type="hidden" name="action" value="addPost">
										<button class="btn btn-primary btn-md-2" type="submit" id="post-button">Post Status</button>

									</div>
									<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog"
										aria-labelledby="update-header-photo" aria-hidden="true">
										<div class="modal-dialog window-popup update-header-photo" role="document">
											<div class="modal-content">
												<a href="#" class="close icon-close" data-bs-dismiss="modal"
													aria-label="Close">
													<svg class="olymp-close-icon">
														<use xlink:href="#olymp-close-icon"></use>
													</svg>
												</a>
												<div class="modal-header">
													<h6 class="title">Update Header Photo</h6>
												</div>
												<div class="modal-body">
													<a href="#" class="upload-photo-item">
														<svg class="olymp-computer-icon">
															<use xlink:href="#olymp-computer-icon"></use>
														</svg>
														<h6>Upload Photo</h6>
														<input type="file" id="post-image" id="post-image" name="image[]" multiple>
														<span>Browse your computer.</span>
													</a>
													<a href="#" class="upload-photo-item" data-bs-toggle="modal"
														data-bs-target="#choose-from-my-photo">
														<svg class="olymp-photos-icon">
															<use xlink:href="#olymp-photos-icon"></use>
														</svg>
														<h6>Choose from My Photos</h6>
														<span>Choose from your uploaded photos</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-expanded="true">
								<form>
									<div class="author-thumb">
										<img loading="lazy" src="img/author-page.html" width="36" height="36"
											alt="author">
									</div>
									<div class="form-group with-icon label-floating is-empty">
										<label class="control-label">Share what you are thinking here...</label>
										<textarea class="form-control" placeholder=""></textarea>
									</div>
									<div class="add-options-message">
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="ADD PHOTOS">
											<svg class="olymp-camera-icon" data-bs-toggle="modal"
												data-bs-target="#update-header-photo">
												<use xlink:href="#olymp-camera-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="TAG YOUR FRIENDS">
											<svg class="olymp-computer-icon">
												<use xlink:href="#olymp-computer-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="ADD LOCATION">
											<svg class="olymp-small-pin-icon">
												<use xlink:href="#olymp-small-pin-icon"></use>
											</svg>
										</a>
										<button class="btn btn-primary btn-md-2">Post Multimedia</button>
										<button
											class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
									</div>
								</form>
							</div>
							<div class="tab-pane fade" id="blog" role="tabpanel" aria-expanded="true">
								<form>
									<div class="author-thumb">
										<img loading="lazy" src="img/author-page.html" width="36" height="36"
											alt="author">
									</div>
									<div class="form-group with-icon label-floating is-empty">
										<label class="control-label">Share what you are thinking here...</label>
										<textarea class="form-control" placeholder=""></textarea>
									</div>
									<div class="add-options-message">
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="ADD PHOTOS">
											<svg class="olymp-camera-icon" data-bs-toggle="modal"
												data-bs-target="#update-header-photo">
												<use xlink:href="#olymp-camera-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="TAG YOUR FRIENDS">
											<svg class="olymp-computer-icon">
												<use xlink:href="#olymp-computer-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip"
											data-bs-placement="top" data-bs-original-title="ADD LOCATION">
											<svg class="olymp-small-pin-icon">
												<use xlink:href="#olymp-small-pin-icon"></use>
											</svg>
										</a>
										<button class="btn btn-primary btn-md-2">Post</button>
										<button
											class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
									</div>
								</form>
							</div> -->
						</div>
					</div>
				</div>
				<div id="newsfeed-items-grid">
					<!-- <div class="ui-block">
						<article class="hentry post video">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar7-sm.html" alt="author" width="42" height="42">
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a
										href="#">link</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											March 4 at 2:05pm
										</time>
									</div>
								</div>
								<div class="more"><svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
							</div>
							<p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron Maid. The
								next time they come to the city we should totally go!</p>
							<div class="post-video">
								<div class="video-thumb">
									<img loading="lazy" src="img/video-youtube1.html" alt="photo" width="197"
										height="194">
									<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
										<svg class="olymp-play-icon">
											<use xlink:href="#olymp-play-icon"></use>
										</svg>
									</a>
								</div>
								<div class="video-content">
									<a href="#" class="h4 title">Iron Maid - ChillGroves</a>
									<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor
										incididunt
										ut labore et dolore magna aliqua...
									</p>
									<a href="#" class="link-site">YOUTUBE.COM</a>
								</div>
							</div>
							<div class="post-additional-info inline-items">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>18</span>
								</a>
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic9.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic10.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic11.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									<a href="#">Jenny</a>, <a href="#">Robert</a> and
									<br>18 more liked this
								</div>
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="#olymp-speech-balloon-icon"></use>
										</svg>
										<span>0</span>
									</a>
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="#olymp-share-icon"></use>
										</svg>
										<span>16</span>
									</a>
								</div>
							</div>
							<div class="control-block-button post-control-button">
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="#olymp-like-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
								</a>
							</div>
						</article>
					</div>
					<div class="ui-block">
						<article class="hentry post">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											9 hours ago
										</time>
									</div>
								</div>
								<div class="more"><svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt
								ut
								labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
								ullamco laboris consequat.
							</p>
							<div class="post-additional-info inline-items">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>24</span>
								</a>
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic9.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic10.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic11.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									<a href="#">You</a>, <a href="#">Elaine</a> and
									<br>22 more liked this
								</div>
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="#olymp-speech-balloon-icon"></use>
										</svg>
										<span>17</span>
									</a>
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="#olymp-share-icon"></use>
										</svg>
										<span>24</span>
									</a>
								</div>
							</div>
							<div class="control-block-button post-control-button">
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="#olymp-like-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
								</a>
							</div>
						</article>

						<ul class="comments-list">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author">
									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
										<div class="post__date">
											<time class="published" datetime="2004-07-24T18:18">
												38 mins ago
											</time>
										</div>
									</div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg></a>
								</div>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der
									doloremque laudantium.</p>
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>3</span>
								</a>
								<a href="#" class="reply">Reply</a>
							</li>
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img loading="lazy" src="img/avatar1-sm.html" alt="author" width="42" height="42">
									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
										<div class="post__date">
											<time class="published" datetime="2004-07-24T18:18">
												1 hour ago
											</time>
										</div>
									</div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg></a>
								</div>
								<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem
									ipsum
									quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum.
								</p>
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>8</span>
								</a>
								<a href="#" class="reply">Reply</a>
							</li>
						</ul>

						<a href="#" class="more-comments">View more comments <span>+</span></a>

						<form class="comment-form inline-items">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author">
								<div class="form-group with-icon-right ">
									<textarea class="form-control" placeholder=""></textarea>
									<div class="add-options-message">
										<a href="#" class="options-message" data-bs-toggle="modal"
											data-bs-target="#update-header-photo">
											<svg class="olymp-camera-icon">
												<use xlink:href="#olymp-camera-icon"></use>
											</svg>
										</a>
									</div>
								</div>
							</div>
							<button class="btn btn-md-2 btn-primary">Post Comment</button>
							<button
								class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
						</form>

					</div> -->
					<?php    
                    include "api/auth-post.php";
                    $post=new post();
                    $result=$post->fetchFriendspost($_SESSION['userId']);					
                       foreach ($result as $row) {
						$res=$post->fetchPostuser($row['userId']);
                        $name=$res['firstName']." ".$res['lastName'];
						

                           ?>
						   <div id="news-feed">
					<div class="ui-block">
						<article class="hentry post has-post-thumbnail">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="<?php $image=trim($ress['image'],'\.\./');echo $image;?>" alt="author" width="42" height="42">
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#"><?php echo $name;
									?></a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
										<?php echo $row['created_on'];
									?>
										</time>
									</div>
								</div>
								<div class="more"><svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
							</div>
							<p><?php echo $row['caption'];?>
							</p>
							<div class="post-thumb">
								<img loading="lazy" src="<?php $image=trim($row['image'],'\.\./');echo $image;?>" alt="photo" width="518" height="762">
							</div>
							<div class="post-additional-info inline-items">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>49</span>
								</a>
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic9.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic10.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic11.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
									<br>47 more liked this
								</div>
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="#olymp-speech-balloon-icon"></use>
										</svg>
										<span>264</span>
									</a>
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="#olymp-share-icon"></use>
										</svg>
										<span>37</span>
									</a>
								</div>
							</div>
							<div class="control-block-button post-control-button">

								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="#olymp-like-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
								</a>
							</div>
						</article>
					</div></div>
					<?php
                       }?>
					<!-- <div class="ui-block">
						<article class="hentry post has-post-thumbnail">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar3-sm.html" alt="author" width="42" height="42">
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Sarah Hetfield</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											March 2 at 9:06am
										</time>
									</div>
								</div>
								<div class="more"><svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
							</div>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
								nulla
								pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
								deserunt
								mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
								voluptatem accusantium doloremque.
							</p>
							<div class="post-additional-info inline-items">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>0 Likes</span>
								</a>
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="#olymp-speech-balloon-icon"></use>
										</svg>
										<span>0 Comments</span>
									</a>
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="#olymp-share-icon"></use>
										</svg>
										<span>2 Shares</span>
									</a>
								</div>
							</div>
							<div class="control-block-button post-control-button">
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="#olymp-like-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
								</a>
							</div>
						</article>
					</div>
					<div class="ui-block">
						<article class="hentry post has-post-thumbnail">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar2-sm.html" alt="author" width="42" height="42">
								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Nicholas Grissom</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											March 2 at 8:34am
										</time>
									</div>
								</div>
								<div class="more"><svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>
							</div>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
								nulla
								pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
								deserunt
								mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
								voluptatem
								accusantium doloremque.
							</p>
							<div class="post-additional-info inline-items">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="#olymp-heart-icon"></use>
									</svg>
									<span>22</span>
								</a>
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic9.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic10.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic11.html" alt="friend" width="28"
												height="28">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
									<br>47 more liked this
								</div>
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="#olymp-speech-balloon-icon"></use>
										</svg>
										<span>0</span>
									</a>
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="#olymp-share-icon"></use>
										</svg>
										<span>2</span>
									</a>
								</div>
							</div>
							<div class="control-block-button post-control-button">
								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="#olymp-like-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg>
								</a>
								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
								</a>
							</div>
						</article>
					</div>
				</div> -->
				<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
					data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon">
						<use xlink:href="#olymp-three-dots-icon"></use>
					</svg></a>
			</main>


			<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<div class="widget w-weather">
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
						<div class="wethear-now inline-items">
							<div class="temperature-sensor">64°</div>
							<div class="max-min-temperature">
								<span>58°</span>
								<span>76°</span>
							</div>
							<svg class="olymp-weather-partly-sunny-icon">
								<use xlink:href="#olymp-weather-partly-sunny-icon"></use>
							</svg>
						</div>
						<div class="wethear-now-description">
							<div class="climate">Partly Sunny</div>
							<span>Real Feel: <span>67°</span></span>
							<span>Chance of Rain: <span>49%</span></span>
						</div>
						<ul class="weekly-forecast">
							<li>
								<div class="day">sun</div>
								<svg class="olymp-weather-sunny-icon">
									<use xlink:href="#olymp-weather-sunny-icon"></use>
								</svg>
								<div class="temperature-sensor-day">60°</div>
							</li>
							<li>
								<div class="day">mon</div>
								<svg class="olymp-weather-partly-sunny-icon">
									<use xlink:href="#olymp-weather-partly-sunny-icon"></use>
								</svg>
								<div class="temperature-sensor-day">58°</div>
							</li>
							<li>
								<div class="day">tue</div>
								<svg class="olymp-weather-cloudy-icon">
									<use xlink:href="#olymp-weather-cloudy-icon"></use>
								</svg>
								<div class="temperature-sensor-day">67°</div>
							</li>
							<li>
								<div class="day">wed</div>
								<svg class="olymp-weather-rain-icon">
									<use xlink:href="#olymp-weather-rain-icon"></use>
								</svg>
								<div class="temperature-sensor-day">70°</div>
							</li>
							<li>
								<div class="day">thu</div>
								<svg class="olymp-weather-storm-icon">
									<use xlink:href="#olymp-weather-storm-icon"></use>
								</svg>
								<div class="temperature-sensor-day">58°</div>
							</li>
							<li>
								<div class="day">fri</div>
								<svg class="olymp-weather-snow-icon">
									<use xlink:href="#olymp-weather-snow-icon"></use>
								</svg>
								<div class="temperature-sensor-day">68°</div>
							</li>
							<li>
								<div class="day">sat</div>
								<svg class="olymp-weather-wind-icon-header">
									<use xlink:href="#olymp-weather-wind-icon-header"></use>
								</svg>
								<div class="temperature-sensor-day">65°</div>
							</li>
						</ul>
						<div class="date-and-place">
							<h5 class="date">Saturday, March 26th</h5>
							<div class="place">San Francisco, CA</div>
						</div>
					</div>
				</div>
				<div class="ui-block">

					<div class="w-calendar">
						<div class="calendar">
							<header>
								<h6 class="month">May</h6>
							</header>
							<table>
								<thead>
									<tr>
										<td>Mon</td>
										<td>Tue</td>
										<td>Wed</td>
										<td>Thu</td>
										<td>Fri</td>
										<td>Sat</td>
										<td>San</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-month="12" data-day="1">1</td>
										<td data-month="12" data-day="2">
											2
										</td>
										<td data-month="12" data-day="3">3</td>
										<td data-month="12" data-day="4">4</td>
										<td data-month="12" data-day="5">5</td>
										<td data-month="12" data-day="6">6</td>
										<td data-month="12" data-day="7">7</td>
									</tr>
									<tr>
										<td data-month="12" data-day="8">8</td>
										<td data-month="12" data-day="9">9</td>
										<td data-month="12" data-day="10">10</td>
										<td data-month="12" data-day="11">11</td>
										<td data-month="12" data-day="12">12</td>
										<td data-month="12" data-day="13">13</td>
										<td data-month="12" data-day="14">14</td>
									</tr>
									<tr>
										<td data-month="12" data-day="15">15</td>
										<td data-month="12" data-day="16">16</td>
										<td data-month="12" data-day="17">17</td>
										<td data-month="12" data-day="18">18</td>
										<td data-month="12" data-day="19">19</td>
										<td data-month="12" data-day="20">20</td>
										<td data-month="12" data-day="21">21</td>
									</tr>
									<tr>
										<td data-month="12" data-day="22">22</td>
										<td data-month="12" data-day="23">23</td>
										<td data-month="12" data-day="24">24</td>
										<td data-month="12" data-day="25">25</td>
										<td data-month="12" data-day="26">26</td>
										<td data-month="12" data-day="27">27</td>
										<td data-month="12" data-day="28">28</td>
									</tr>
									<tr>
										<td data-month="12" data-day="29">29</td>
										<td data-month="12" data-day="30">30</td>
										<td data-month="12" data-day="31">31</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Pages You May Like</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>

					<ul class="widget w-friend-pages-added notification-list friend-requests">
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar41-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">The Marina Bar</a>
								<span class="chat-message-item">Restaurant / Bar</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar42-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tapronus Rock</a>
								<span class="chat-message-item">Rock Band</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar43-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
								<span class="chat-message-item">Company</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar44-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
								<span class="chat-message-item">Clothing Store</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar45-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Crimson Agency</a>
								<span class="chat-message-item">Company</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar46-sm.html" alt="author" width="38" height="38">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Mannequin Angel</a>
								<span class="chat-message-item">Clothing Store</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
					</ul>

				</div>
			</aside>


			<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<div class="widget w-birthday-alert">
						<div class="icons-block">
							<svg class="olymp-cupcake-icon">
								<use xlink:href="#olymp-cupcake-icon"></use>
							</svg>
							<a href="#" class="more"><svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg></a>
						</div>
						<div class="content">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar48-sm.html" alt="author" width="28" height="28">
							</div>
							<span>Today is</span>
							<a href="#" class="h4 title">Marina Valentine’s Birthday!</a>
							<p>Leave her a message with your best wishes on her profile page!</p>
						</div>
					</div>
				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Friend Suggestions</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>

					<ul class="widget w-friend-pages-added notification-list friend-requests">
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar38-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Francine Smith</a>
								<span class="chat-message-item">8 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar39-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Hugh Wilson</a>
								<span class="chat-message-item">6 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
						</li>
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar40-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Karen Masters</a>
								<span class="chat-message-item">6 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
						</li>
					</ul>

				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Activity Feed</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>

					<ul class="widget w-activity-feed notification-list">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s
								<a href="#" class="notification-link">photo.</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">2 mins ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar9-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a
									href="#" class="notification-link">status update.</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">5 mins ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar50-sm.html" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to
								her <a href="#" class="notification-link">gallery album.</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">12 mins ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar51-sm.html" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a
									href="#" class="notification-link">photo</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">1 hour ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar48-sm.html" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris
								Greyson’s <a href="#" class="notification-link">status update</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">1 hour ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar52-sm.html" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#"
									class="notification-link">status update</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">1 hour ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss </a> liked your <a href="#"
									class="notification-link">blog post</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">2 hours ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss </a> commented on your <a
									href="#" class="notification-link">blog post</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">2 hours ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar53-sm.html" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#"
									class="notification-link">profile picture</a>.
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">15 hours ago</time></span>
							</div>
						</li>
					</ul>

				</div>
				<div class="ui-block">

					<div class="widget w-action">
						<img loading="lazy" src="img/logo.html" alt="Olympus" width="34" height="34">
						<div class="content">
							<h4 class="title">OLYMPUS</h4>
							<span>THE BEST SOCIAL NETWORK THEME IS HERE!</span>
							<a href="01-LandingPage.html" class="btn btn-bg-secondary btn-md">Register Now!</a>
						</div>
					</div>

				</div>
			</aside>

		</div>
	</div>




	<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo"
		aria-hidden="true">
		<div class="modal-dialog window-popup choose-from-my-photo" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Choose from My Photos</h6>

					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab"
								aria-expanded="true">
								<svg class="olymp-photos-icon">
									<use xlink:href="#olymp-photos-icon"></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-expanded="false">
								<svg class="olymp-albums-icon">
									<use xlink:href="#olymp-albums-icon"></use>
								</svg>
							</a>
						</li>
					</ul>
				</div>
				<div class="modal-body">

					<div class="tab-content">
						<div class="tab-pane fade active show" id="home" role="tabpanel" aria-expanded="true">
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo1.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo2.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo3.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo4.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo5.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo6.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo7.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo8.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item">
								<div class="radio">
									<label class="custom-radio">
										<img loading="lazy" src="img/choose-photo9.html" alt="photo" width="247"
											height="166">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-expanded="false">
							<div class="choose-photo-item">
								<figure>
									<img loading="lazy" src="img/choose-photo10.html" alt="photo" width="225"
										height="180">
									<figcaption>
										<a href="#">South America Vacations</a>
										<span>Last Added: 2 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item">
								<figure>
									<img loading="lazy" src="img/choose-photo11.html" alt="photo" width="225"
										height="180">
									<figcaption>
										<a href="#">Photoshoot Summer 2016</a>
										<span>Last Added: 5 weeks ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item">
								<figure>
									<img loading="lazy" src="img/choose-photo12.html" alt="photo" width="225"
										height="180">
									<figcaption>
										<a href="#">Amazing Street Food</a>
										<span>Last Added: 6 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item">
								<figure>
									<img loading="lazy" src="img/choose-photo13.html" alt="photo" width="224"
										height="179">
									<figcaption>
										<a href="#">Graffity & Street Art</a>
										<span>Last Added: 16 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item">
								<figure>
									<img loading="lazy" src="img/choose-photo14.html" alt="photo" width="225"
										height="180">
									<figcaption>
										<a href="#">Amazing Landscapes</a>
										<span>Last Added: 13 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item">
								<figure>
									<img loading="lazy" src="img/choose-photo15.html" alt="photo" width="225"
										height="180">
									<figcaption>
										<a href="#">The Majestic Canyon</a>
										<span>Last Added: 57 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="back-to-top" href="#">
		<svg class="back-icon" width="14" height="18">
			<use xlink:href="#olymp-back-to-top"></use>
		</svg>
	</a>

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog"
		aria-labelledby="popup-chat-responsive" aria-hidden="true">
		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title">Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon">
						<use xlink:href="#olymp-three-dots-icon"></use>
					</svg>
					<svg class="olymp-little-delete js-chat-open">
						<use xlink:href="#olymp-little-delete"></use>
					</svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
									class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
									I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author"
									class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
									class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
									I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>
				<form class="need-validation">
					<div class="form-group">
						<textarea class="form-control" placeholder="Press enter to post..."></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-computer-icon">
									<use xlink:href="#olymp-computer-icon"></use>
								</svg>
							</a>
							<div class="options-message smile-block">
								<svg class="olymp-happy-sticker-icon">
									<use xlink:href="#olymp-happy-sticker-icon"></use>
								</svg>
								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat1.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat2.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat3.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat4.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat5.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat6.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat7.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat8.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat9.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat10.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat11.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat12.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat13.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat14.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat15.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat16.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat17.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat18.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat19.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat20.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat21.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat22.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat23.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat24.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat25.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat26.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat27.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var webpMachine = new webpHero.WebpMachine()
			webpMachine.polyfillDocument()
		});
	</script>
	<script src="js/jQuery/jquery-3.5.1.min.js"></script>
	<script src="js/libs/jquery.mousewheel.min.js"></script>
	<script src="js/libs/perfect-scrollbar.min.js"></script>
	<script src="js/libs/imagesloaded.pkgd.min.js"></script>
	<script src="js/libs/material.min.js"></script>
	<script src="js/libs/selectize.min.js"></script>
	<script src="js/libs/isotope.pkgd.min.js"></script>
	<script src="js/libs/ajax-pagination.min.js"></script>
	<script src="js/libs/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/libs-init/libs-init.js"></script>
	<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<script src="js/svg-loader.js"></script>

</body>


<script>
	$(document).ready(function () {
		$("#form-post").submit(function (e) {
			e.preventDefault();
			var form = $("#form-post")[0];
            console.log(form);
			var formData = new FormData(this);
			console.log(formData);
			// let postImage=$("#post-image").val();
			// console.log(postImage);
			// let data=$("#form-post").serialize()+'image='+postImage+'action=post-newsfeed';
			$.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "api/process.php",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    // timeout: 800000,
                    success: function (data) {
						if(data=="hi"){
                      $("#post-image").val(null);
					  $("#post-caption").val(null);
					  $("#news-feed").load(location.href + " #news-feed");
                      }
					  
                        // $("#btnSubmit").prop("disabled", false);
                    },
                    // error: function (e) {
                    //     $("#output").text(e.responseText);
                    //     console.log("ERROR : ", e);
                    //     $("#btnSubmit").prop("disabled", false);
                    // }
                });


		})
notificationCount();
function notificationCount(){
	$.ajax({
		type: "POST",
                    enctype: 'multipart/form-data',
                    url: "api/process.php",
                    data: {'action':'countNotification'},
                    
                    success: function (data) {
					  
                       $("#notificationCount").text(data);
                    }
                    // error: function (e) {
                    //     $("#output").text(e.responseText);
                    //     console.log("ERROR : ", e);
                    //     $("#btnSubmit").prop("disabled", false);
                    // }
                });
	}
	setInterval(notificationCount, 5000);



})
   function showNotification(){
	$.ajax({
		type: "POST",
                   
                    url: "api/process.php",
                    data: {'action':'showNotification'},
                    
                    success: function (data) {
						// console.log(data)
						$("#reveal").addClass("reveal");

                       $("#showNotification").html(data);
                    }
                   
                });
				$.ajax({
		type: "POST",
                   
                    url: "api/process.php",
                    data: {'action':'updateNotificationstatus'},
                    
                    success: function (data) {
						// console.log(data)
						notificationCount();
						
                    }
                   
                });
   }

function removeClass(){
	$("#reveal").removeClass("reveal");
	
}



	
</script>



<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Sep 2021 10:22:21 GMT -->

</html>