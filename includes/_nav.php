<!--
    MAIN NAVIGATION
-->
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">

        <div class="logo">
            <a href="home"><img src="img/cis-favicon.png" /></a>
        </div>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right text-center font-black">
            <li class="<?= ($_GET['p'] == 'home') ? 'active' : ''; ?>"><a href="home" >Home</a></li>
			<li class="divider"></li>

            <li class="<?= ($_GET['p'] == 'forEmployers') ? 'active' : ''; ?>"><a href="forEmployers" >For Employers</a></li>
			<li class="divider"></li>
            <li class="<?= ($_GET['p'] == 'events') ? 'active' : ''; ?>"><a href="events" >Events</a></li>
			<li class="divider"></li>
            <li class="<?= ($_GET['p'] == 'executive') ? 'active' : ''; ?>"><a href="executive" >Executives</a></li>
			<li class="divider"></li>
            <li class="has-dropdown">
                <a href="#">About</a>	
                <ul class="dropdown">
					<li class="divider"></li>
                    <li><a href="#">Executive Team</a></li>
					<li class="divider"></li>
                    <li><a href="#">What is CIS3</a></li>
					<li class="divider"></li>
                </ul>
            </li>
			<li class="divider"></li>
        </ul>
        <ul class="social-icons text-center hide-for-small">
			<li class="divider hide-for-large  hide-for-medium"></li>
            <li>
                <a href="https://www.facebook.com/groups/cis3org/" class="collapse">
                    <i class="icon-font-small fa fa-facebook-square font-black"></i>
                </a>
            </li>
			<li class="divider hide-for-large  hide-for-medium"></li>
            <li>
                <a href="https://instagram.com/cis3_mru/">
                    <i class="icon-font-small fa fa-instagram font-black"></i>
                </a>
            </li>
			<li class="divider hide-for-large  hide-for-medium"></li>
            <li>
                <a href="https://twitter.com/cis3_mru">
                    <i class="icon-font-small fa fa-twitter-square font-black"></i>
                </a>
            </li>
			<li class="divider hide-for-large  hide-for-medium"></li>
            <li>
                <a href="mailto:info@cis3.org">
                    <i class="icon-font-small fa fa-envelope font-black"></i>
                </a>
            </li>
        </ul>
		<div class="hide-for-medium hide-for-large panel text-center padding-top-none padding-bottom-none margin-top-none margin-bottom-none border-top-none">
					<div class="row">
						<a href="https://www.facebook.com/groups/cis3org/" target="_blank" class="collapse padding social-icon-small border-black-right border-black-left">
							<i class="icon-font-small fa fa-facebook-square font-black"></i>
						</a>
						<a href="https://instagram.com/cis3_mru/" target="_blank" class="collapse padding social-icon-small border-black-right">
							<i class="icon-font-small fa fa-instagram font-black"></i>
						</a>
						<a href="https://twitter.com/cis3_mru" target="_blank" class="collapse padding social-icon-small border-black-right">
							<i class="icon-font-small fa fa-twitter-square font-black"></i>
						</a>
						<a href="mailto:info@cis3.org" target="_blank" class="collapse padding social-icon-small border-black-right">
							<i class="icon-font-small fa fa-envelope font-black"></i>
						</a>
					</div>
				</div>

    </section>
</nav>