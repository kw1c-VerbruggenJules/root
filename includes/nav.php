<?php
/**
 * User: J. Verbruggen
 * Date: 15/06/2022
 * File: nav.php
 */
//header
include '../includes/header.php';
?>
<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container">
        <a href="../index.php" class="navbar-brand mb-0 h1">
            <img class="d-inline-block align-top" src="../images/logo_transparent.png" width="50" height="50" />
            Barberitos 
        </a>
        <!-- Hamburger button -->
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- NAV items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="../index.php" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../pages/algemeneInformatie.php" class="nav-link">
                        Algemene informatie 
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../pages/overzichtsPagina.php" class="nav-link">
                        Overzichtspagina
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../pages/nieuws.php" class="nav-link">
                        Nieuws
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../pages/contactFormulier.php" class="nav-link">
                        ContactFormulier
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>