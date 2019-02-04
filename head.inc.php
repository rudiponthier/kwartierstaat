<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="" lang="nl">
<!--<![endif]-->

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $description ?>">
<meta name="author" content="Rudi Ponthier">

<title><?php echo $title ?></title>

<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/ico" href="favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Exo+2:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Gabriela" rel="stylesheet">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
<script
    src="https://code.jquery.com/jquery-1.12.4.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous">
</script>
<script src="js/respond.min.js"></script>
<script src="js/stickyheader.js"></script>

<!-- start script google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39166615-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- end script google analytics -->

</head>

<body>

    <div class="gridContainer clearfix" id="page">
        <div id="headerwrapper">
            <div id="headerinnerwrapper">
                <header>
                    <h1>
                        <?php if ($thisPage!=="home") echo "<a href=\"index.php\" title=\"Homepage\">"; ?>
                        Kwartierstaat<br /><span>Rudi Ponthier</span>
                        <?php if ($thisPage!=="home") echo "</a>"; ?>
                    </h1>
                </header>
                <nav id="my-menu">
                    <ul>
                        <li<?php if ($thisPage=="kwartierstaat") echo " class=\"active\""; ?>>
                            <a href="kwartierbladen.php" title="Kwartierstaat met kwartierbladen">Kwartierstaat</a>
                        </li>
                        <li<?php if ($thisPage=="pdf") echo " class=\"active\""; ?>>
                            <a href="pdf.php" title="Kwartierstaat als PDF">Waaiervorm</a> 
                        </li>
                        <li<?php if ($thisPage=="boek") echo " class=\"active\""; ?>>
                            <a href="boek.php" title="Boek Clerx-Biesmans">Boek</a> 
                        </li>
                        <li<?php if ($thisPage=="links") echo " class=\"active\""; ?>>
                            <a href="links.php" title="Genealogiesites uit de buurt van Bilzen">Links</a>
                        </li>
                        <li<?php if ($thisPage=="contact") echo " class=\"active\""; ?>>
                            <a href="contact.php" title="Contactformulier">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>