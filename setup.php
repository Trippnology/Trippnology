<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php $strPageName & " | " & $strSiteName ?></title>
    <meta name="description" content="<?php $strDescription ?>">
    <meta name="keywords" content="<?php $strKeywords ?>">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Are there any Google Fonts to load? -->
    <?php If $strGoogleFonts <> "" Then ?>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<%=strGoogleFonts%>">
    <?php End If ?>
    
    <!-- Is there a Bootswatch theme to load? -->
    <?php If strBootswatch <> "" Then ?>
        <link rel="stylesheet" href="http://bootswatch.com/<%=strBootswatch%>/bootstrap.min.css">
        <!-- Or use the default -->
        <?php Else ?>
        <link rel="stylesheet" href="<?php $strBSCSS ?>bootstrap.css">
    <?php End If ?>

    <!-- Should we load the responsive stylesheet? -->
    <?php If strResponsive = true Then ?>
        <link rel="stylesheet" href="<?php $strBSCSS ?>bootstrap-responsive.css">
    <?php End If ?>

    <link rel="stylesheet" href="css/style.css"><!-- Placed last to override all other styles -->
    <link rel="canonical" href="<%=strDomain & strCanonical%>">
    <link rel="author" href="<?php $strDomain ?>humans.txt">
    
    <script src="js/libs/modernizr.min.js"></script>
</head>