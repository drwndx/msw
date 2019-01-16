<?php
/* Template Name: Home Page */


get_header();
?>
<div class="container text-center full-height shady">
    <div class="row text-center">
        <div class="col-12">
            <section class="announcement"  style="padding-top : 100px;">
                <p class="w-ul">We are getting married!</p>
                <span class="h1">Sarah Kretzmer</span>
                <br>
                and
                <br>
                <span class="h1">Mike Rose</span>
            </section>

        </div>
    </div>
    <div class="row text-center">
        <div class="col-12 text-center">
            <div class="countdown-body" style="padding-top : 100px;">
                <h2>Countdown to the wedding day!</h2>
                <div id="countdown">
                    <div id="clock-c"></div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <p>#msw2019</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <section id="date" class="text-center" style="padding-top : 100px;">
                <h2 class="w-ul">When</h2>
                <strong>March 16th, 2019</strong>
                <br>
                Ceremony starts at 3pm
                <br>
                Dinner starts at 5pm
            </section>
        </div>
        <div class="col-6">
            <section id="address" class="text-center " style="padding-top : 100px;">
                <h2 class="w-ul">Where</h2>
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
</div>



<?php
get_footer();

