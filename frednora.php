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
            .core {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                border-radius: .33rem;
                padding: 10px;
                background-color: lightyellow; /*#44ab44;*/
                box-shadow: 10px 10px lightgray;
                text-align: center;
            }

            .button {
                border: solid black 1px;
                border-radius: .25rem;
                padding: 10px;
                color: black;
                text-decoration: auto;
                text-align: center;
            }

            .button:hover{
                background-color: lightyellow;
            }

            .iconpos {
            }

            .noicon {
                padding-left: 30px;
            }
</style>


<!-- Prefetch -->
<link rel="dns-prefetch" href="https://github.com/"/>

<!-- Includes -->
<link href="./assets/img/favicon.jpg" rel="shortcut icon" type="image/jpg"/>
<link href="./assets/css/gramado.css" rel="stylesheet">

</head>

<body>

    <div class="core">
    <!-- Header -->
    <h1>Fred Nora's webpage</h1>

    <br>
    <?php
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
        <br/>
        <br/>
        <a 
            class="button" 
            href="https://github.com/frednora/frednora.github.io">
            <img class="iconpos" 
                width="20" 
                height="20" 
                src="https://github.com/fluidicon.png"> See code at GitHub
        </a>
        
        <br/>
        <br/>
        <br/>
    </div>

<!-- Cool scripts goes here! -->
<script src="./assets/js/frednora.js"></script>
</body>

</html>