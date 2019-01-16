<?php
/**
 * Created by PhpStorm.
 * User: drwnd
 * Date: 12/11/2018
 * Time: 9:42 PM
 */
?>
<style>

    html, body {
        height: 100%;
        margin: 0;
    }

    nav, .page-footer {
       background-color:  rgba(236, 164, 166, 1);
    }
    .full-height {
        height: 100%;
        min-height: 800px;
    }
	* {
		font-family: 'Roboto', sans-serif;
        color: black;
	}

    .home * {
        font-family: 'Roboto', sans-serif;
        color: white;
    }

    .home .page-footer * {
        color: black;
    }

	body {
		background-color: rgba(249, 213, 211, 1);
	}

	.navbar a, h1, h2, h3, h4, h5, h6 {
		font-family: 'Carme' , sans-serif;
	}

    a, a:hover, a:visited {
        color: white;
    }

    .cdt-sm {
        font-size: 12px;
    }

    .home {
        background : url("/wp-content/themes/webby/assets/20150904_194649.jpg") no-repeat center center fixed;
        background-size: cover;
    }

    .shady {
        background-color: rgba(0, 0, 0, 0.50);

    }
    .card {
        background-color: rgba(187, 199, 186, 1);
        border: none;
    }

    h1 {
        padding-top: 100px;
        text-align: center;
        padding-bottom: 25px;
    }

    h1:after {
        background: none repeat scroll 0 0 #BBC7BA;
        bottom: -5px;
        content: "";
        display: block;
        height: 2px;
        position: relative;
        margin: 0;
        width: 100%;
    }

    .home h1 {
        font-size : 5rem;
    }

    .w-ul:after {
        background : none repeat scroll 0 0 white;
        bottom: -5px;
        content: "";
        display: block;
        height: 2px;
        position: relative;
        margin: 0 auto;
        width : 20px;
    }

    .no-dot {
        list-style:none;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">MSW2019</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/information/">The Deets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/couple/">The Couple</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bridal-party/">The Bridal Party</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clementine/">The Clementine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/registry">The Registry</a>
                </li>
            </ul>
        </div>
    </div>
</nav>