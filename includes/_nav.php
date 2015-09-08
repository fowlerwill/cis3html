<!--
    MAIN NAVIGATION
-->
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">

        <div class="logo nav-transition">
            <a href="home"><img src="img/cis-favicon.png" /></a>
        </div>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right text-center font-black">
            <li class="animate-hover <?= ($_GET['p'] == 'home') ? 'active' : ''; ?>"><a href="home" class="nav-box">Home</a></li>
			<li class="divider"></li>

            <li class="animate-hover <?= ($_GET['p'] == 'forEmployers') ? 'active' : ''; ?>"><a href="forEmployers" class="nav-box">For Employers</a></li>
			<li class="divider"></li>
            <li class="animate-hover <?= ($_GET['p'] == 'events') ? 'active' : ''; ?>"><a href="events" >Events</a></li>
			<li class="divider"></li>
            <li class="<?= ($_GET['p'] == 'executive') ? 'active' : ''; ?>"><a href="executive" >Executives</a></li>
			<li class="divider"></li>
			<li class="<?= ($_GET['p'] == 'about') ? 'active' : ''; ?>"><a href="about" >About Us</a></li>
               
        </ul>
        <ul class="social-icons text-center hide-for-small">
			<li class="divider hide-for-large-up  hide-for-medium"></li>
            <li>
                <a href="https://www.facebook.com/groups/cis3org/" class="nav-transition">
                    <i class="icon-font-small fa fa-facebook-square font-black"></i>
                </a>
            </li>
			<li class="divider hide-for-large-up  hide-for-medium"></li>
            <li>
                <a href="https://instagram.com/cis3_mru/" class="nav-transition">
                    <i class="icon-font-small fa fa-instagram font-black"></i>
                </a>
            </li>
			<li class="divider hide-for-large-up  hide-for-medium"></li>
            <li>
                <a href="https://twitter.com/cis3_mru" class="nav-transition">
                    <i class="icon-font-small fa fa-twitter-square font-black"></i>
                </a>
            </li>
			<li class="divider hide-for-medium-up"></li>
            <li>
                <a href="mailto:info@cis3.org" class="nav-transition">
                    <i class="icon-font-small fa fa-envelope font-black"></i>
                </a>
            </li>
        </ul>
		<div class="hide-for-medium-up panel text-center padding-top-none padding-bottom-none margin-top-none margin-bottom-none border-top-none">
					<div class="row">
						<a href="https://www.facebook.com/groups/cis3org/" target="_blank" class="nav-transition collapse padding social-icon-small border-black-right border-black-left">
							<i class="icon-font-small fa fa-facebook-square font-black"></i>
						</a>
						<a href="https://instagram.com/cis3_mru/" target="_blank" class="nav-transition collapse padding social-icon-small border-black-right">
							<i class="icon-font-small fa fa-instagram font-black"></i>
						</a>
						<a href="https://twitter.com/cis3_mru" target="_blank" class="nav-transition collapse padding social-icon-small border-black-right">
							<i class="icon-font-small fa fa-twitter-square font-black"></i>
						</a>
						<a href="mailto:info@cis3.org" target="_blank" class="nav-transition collapse padding social-icon-small border-black-right">
							<i class="icon-font-small fa fa-envelope font-black"></i>
						</a>
					</div>
				</div>

    </section>
</nav>