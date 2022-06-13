<!-- <?php
/**
 * User: J. Verbruggen
 * Date: 15/06/2022
 * File: nav.php
 */
//header
include '../includes/header.php';
?> -->
<nav class="navbar navbar-expand-sm navbar-light" style="background-color:gray">
    <div class="container">
        <a href="#" class="navbar-brand mb-0 h1">
            <img class="d-inline-block align-top" src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png" width="30" height="30" />
            Navbar
        </a>
        <!-- Hamburger button -->
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- NAV items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Features
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="#" class="dropdown-item">
                                Feature #1
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                Feature #2
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                Feature #3
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        Pricing
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>