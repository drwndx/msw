<?php
/**
 * Created by PhpStorm.
 * User: drwnd
 * Date: 12/11/2018
 * Time: 9:40 PM
 */


get_header();
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <section id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-80" src="https://via.placeholder.com/800x400?text=First slide" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-80" src="https://via.placeholder.com/800x400?text=Second slide" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-80" src="https://via.placeholder.com/800x400?text=Third slide" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </main>
            </section>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col">
            <section id="date">
                <h2>When</h2>
                <p>March 16th, 2019</p>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <section id="address">
                <h2>Where</h2>
                    <address>
                        <strong>Palm Lane Manor</strong>
                        <br>
                        56 E Palm Ln
                        <br>
                        Phoenix, AZ 85004
                    </address>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <section id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1037.9006794029558!2d-112.07198407075026!3d33.46972529879801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b135896720955%3A0x328bd84855878fc5!2sPalm+Lane+Manor!5e1!3m2!1sen!2sus!4v1544592788920" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
        </div>
    </div>
</div>





<?php
get_footer();

