<!DOCTYPE html>
<!-- Document created by Fred Nora -->
<!-- Credits: A. de Regt -->

<html lang="en">

<head>
<meta charset="UTF-8">
<meta 
    name="viewport" 
    content="width=device-width, initial-scale=1.0">
<meta 
    name="description" 
    content="This is the Fred Nora's web page">
<meta 
    name="author" 
    content="Fred Nora">

<title>Fred Nora</title>

<style>

    /* Container */
    .popup_container {
        text-align: center;
        background-color: lightyellow; /*#44ab44;*/
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: .33rem;
        padding: 10px;
        box-shadow: 10px 10px lightgray;
    }

    /* Button */
    .button {
        text-align: center;
        text-decoration: auto;
        color: black;
        border: solid black 1px;
        border-radius: .25rem;
        padding: 10px;
    }
    .button:hover{
        background-color: lightyellow;
    }

    /* Icon */
    .iconpos {
        padding-left: 100px;
        padding-top: 100px;
    }
    .noicon {
    }
</style>

<!-- Prefetch -->
<link rel="dns-prefetch" href="https://github.com/"/>

<!-- Includes -->
<link href="./assets/img/favicon.jpg" rel="shortcut icon" type="image/jpg"/>
<link href="./assets/css/gramado.css" rel="stylesheet">

</head>

<body>

    <div class="popup_container">
    <!-- Header -->
    <h1>Fred Nora's webpage</h1>

    <br>
    <?php
        $thing = "world";
        //printf ("Hello %s!\n", $thing);
        echo ("Hello {$thing}!\n");
        $cwd = getcwd();
        $files = scandir($cwd);
        foreach ($files as $file)
        {
            if ( is_dir($file) && ctype_alnum($file) )
            {
    ?>

                <!-- Button -->
                <br/>
                <a href="/<?php echo $file; ?>/index.html"><?php echo $file; ?>/</a>

    <?php
            }
        }
    ?>

        <!-- Button -->
        <div class="gramado-container">
            <br>
            <button 
                class="gramado-button"
                id="main-button" 
                onclick="frednoraReloadPage()">
                Refresh Page
            </button>
        </div>

        <br/>
        <br/>
    </div>

<!-- Cool scripts goes here! -->
<script src="./assets/js/frednora.js"></script>
</body>

</html>