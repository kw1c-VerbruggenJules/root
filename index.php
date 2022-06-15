<?php
/**
 * User: J. Verbruggen
 * Date: 15/06/2022
 * File: index.php
 */
//header
include 'includes/header.php';
//header
include 'includes/nav.php';
?>
<!--body-->
<body>
    <!-- SLIDER -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <!-- slide buttons -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <!-- slide content -->
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/Kapsel1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kapsel een</h5>
                    <p>Een beschrijving en prijs van kapsel een.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/Kapsel2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kapsel twee</h5>
                    <p>Een beschrijving en prijs van kapsel twee.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Kapsel3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kapsel drie</h5>
                    <p>Een beschrijving en prijs van kapsel drie.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Kapsel4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kapsel vier</h5>
                    <p>Een beschrijving en prijs van kapsel vier.</p>
                </div>
            </div>
        </div>
        <!-- scroll buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- <div class="newArticle">
        <h1 class="newsTitle">Artikel 1</h1>
        <p id="newsText">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin porta orci ut eleifend. Duis iaculis, nulla sit amet mattis vulputate, lacus nibh rhoncus massa, et mollis libero dui at quam. Vivamus vitae enim sed elit rutrum vulputate. Donec eu quam iaculis lacus consequat mollis sit amet non orci. Vestibulum cursus turpis at varius lacinia. Donec eu porttitor nisl, nec facilisis justo. Vestibulum commodo justo tellus, eget imperdiet elit efficitur a. Donec ultricies sed tellus ut feugiat. In commodo mattis aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nisi magna, bibendum at hendrerit eget, facilisis at ex. Proin quam nulla, condimentum id blandit in, consectetur eu odio. Praesent id sapien eu dui laoreet mattis id vel urna.
        </p>
        <img src="../images/newsImage1.jpg" alt="newsImage1" class="newsImage">
    </div>
    <div class="newArticle">
        <h1 class="newsTitle">Artikel 2</h1>
        <p id="newsText">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin porta orci ut eleifend. Duis iaculis, nulla sit amet mattis vulputate, lacus nibh rhoncus massa, et mollis libero dui at quam. Vivamus vitae enim sed elit rutrum vulputate. Donec eu quam iaculis lacus consequat mollis sit amet non orci. Vestibulum cursus turpis at varius lacinia. Donec eu porttitor nisl, nec facilisis justo. Vestibulum commodo justo tellus, eget imperdiet elit efficitur a. Donec ultricies sed tellus ut feugiat. In commodo mattis aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nisi magna, bibendum at hendrerit eget, facilisis at ex. Proin quam nulla, condimentum id blandit in, consectetur eu odio. Praesent id sapien eu dui laoreet mattis id vel urna.
        </p>
        <img src="../images/newsImage2.jpg" alt="newsImage2" class="newsImage">
    </div> -->
    <div class="news">
        <h1 class="newsTitle">Artikel 1</h1>
        <p class="newsText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin porta orci ut eleifend. Duis iaculis, nulla sit amet mattis vulputate, lacus nibh rhoncus massa, et mollis libero dui at quam. Vivamus vitae enim sed elit rutrum vulputate. Donec eu quam iaculis lacus consequat mollis sit amet non orci. Vestibulum cursus turpis at varius lacinia. Donec eu porttitor nisl, nec facilisis justo. Vestibulum commodo justo tellus, eget imperdiet elit efficitur a. Donec ultricies sed tellus ut feugiat. In commodo mattis aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nisi magna, bibendum at hendrerit eget, facilisis at ex. Proin quam nulla, condimentum id blandit in, consectetur eu odio. Praesent id sapien eu dui laoreet mattis id vel urna.</p>
        <img class="newsImage" src="../images/newsImage1.jpg" alt="newsImage">
        <p id="newsdate">15-06-2022</p>
    </div>
    <div class="news">
        <h1 class="newsTitle">Artikel 2</h1>
        <p class="newsText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin porta orci ut eleifend. Duis iaculis, nulla sit amet mattis vulputate, lacus nibh rhoncus massa, et mollis libero dui at quam. Vivamus vitae enim sed elit rutrum vulputate. Donec eu quam iaculis lacus consequat mollis sit amet non orci. Vestibulum cursus turpis at varius lacinia. Donec eu porttitor nisl, nec facilisis justo. Vestibulum commodo justo tellus, eget imperdiet elit efficitur a. Donec ultricies sed tellus ut feugiat. In commodo mattis aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nisi magna, bibendum at hendrerit eget, facilisis at ex. Proin quam nulla, condimentum id blandit in, consectetur eu odio. Praesent id sapien eu dui laoreet mattis id vel urna.</p>
        <img class="newsImage" src="../images/newsImage2.jpg" alt="newsImage">
        <p id="newsdate">15-06-2022</p>
    </div>
</body>
<!--footer-->
<?php
    include 'includes/footer.php';
?>