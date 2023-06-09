<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo1.png') }}" width="50" height="50" class="d-inline-block align-top" alt=""> Esquire
                <span>Legal</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li <?php if (@$page == 'home') { ?>class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?> ><a href="/" class="nav-link">Home</a></li>
                    <li  <?php if (@$page == 'about') { ?>class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?> ><a href="/about" class="nav-link">About</a></li>
                    <li  <?php if (@$page == 'legalservices') { ?>class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?> ><a href="/legalservices" class="nav-link">Legal Services</a></li>
                    <li  <?php if (@$page == 'team') { ?>class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?> ><a href="/team" class="nav-link">Team</a></li>
                    <li  <?php if (@$page == 'resources') { ?>class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?> ><a href="/resources" class="nav-link">Resources</a></li>
                    <li  <?php if (@$page == 'contact') { ?>class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?> ><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>