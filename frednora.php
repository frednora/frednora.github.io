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
        background: var(--gramado-color-bg);
        color: var(--gramado-color-text);
        text-align: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: .33rem;
        padding: 10px;
        box-shadow: 10px 10px lightgray;
    }
</style>

<!-- Prefetch -->
<link rel="dns-prefetch" href="https://github.com/"/>

<!-- Includes -->
<link href="./assets/css/gramado.css" rel="stylesheet">
<link href="./assets/img/favicon.jpg" rel="shortcut icon" type="image/jpg"/>
</head>

<body>

    <div class="popup_container">
    <!-- Header -->
    <h1>Fred Nora's webpage</h1>

    <br>
    <?php
        $thing = "world";
        //printf ("Hello %s!\n", $thing);
        echo ("Hello {$thing}! <br>\n");
        $cwd = getcwd();
        $files = scandir($cwd);
        sort($files); //Sort the Directory List Alphabetically
        // List directories
        foreach ($files as $file)
        {
            if ( is_dir($file) && 
                 ctype_alnum($file) && 
                 $file != 'assets' )
            {
    ?>

                <!-- Link -->
                <!-- We use htmlspecialchars to avoid XSS attacks. -->
                <br/>
                <a href="/<?php echo htmlspecialchars($file); ?>/index.html"><?php echo htmlspecialchars($file); ?>/</a>

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

        <!-- Button 2: Test Dummy JSON API-->
        <div class="gramado-container">
            <br>
            <button 
                class="gramado-button"
                id="main-button" 
                onclick="frednoraTestAPI()">
                Test API
            </button>
        </div>

        <br/>
    </div>

<!-- Cool scripts goes here! -->
<script src="./assets/js/frednora.js"></script>
</body>

</html>