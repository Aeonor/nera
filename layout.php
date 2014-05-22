<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="application-name" content="Neralind"/>
        <meta name="description" content="Maquettes de Neralind.com " />
        <link rel="image_src" href="/ico.png" />
        <link rel="icon" type="image/png" href="/ico.png" />

        <title>Neralind.com</title>
        <link rel="canonical" href="http://www.neralind.com"/>

        <link rel="stylesheet" type="text/css"  href="/stylesheets/styles.css" media="screen, projection" />
        <!--<link rel="stylesheet" type="text/css"  href="/stylesheets/print.css" media="print" />-->
        <!--<link rel="stylesheet" type="text/css"  href="/stylesheets/ie.css" />-->
        <?php
        if (isset($_stylesheets) && is_array($_stylesheets)):
            foreach ($_stylesheets AS $css):
                ?>
                <link rel="stylesheet/less" type="text/css" href="<?php echo $css ?>" />
                <?php
            endforeach;
        endif;
        ?>
    </head>

    <body class="<?php echo str_replace('-', ' ', $_page); ?><?php
    if (isset($_class) && is_array($_class)):
        echo implode(' ', $_class);
    endif;
    ?>">
        <?php include 'l-header.php'; ?>
        <?php echo $_content; ?>
        <?php include 'l-footer.php'; ?>


        
        <!-- JAVASCRIPTS -->
    </body>
</html>