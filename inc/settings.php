<?php
// Global
//Dim strDomain, strAdminEmail, strSiteName, strTagline, strBootswatch, strResponsive, strUserIP
$strDomain = "http://localhost/projects/bootstraPHP/";
$strAdminEmail = "";
$strSiteName = "BootstraPHP";
$strTagline = "Twitter Bootstrap based modular framework";
$strBootswatch = ""; // Should we load a Bootswatch? Leave blank for no.
$strResponsive = true; // Load responsive stylesheet?
$devmode = true; // Load developments stuff?
$strUserIP = $_SERVER['REMOTE_ADDR'];

// Page Specific
// You could set default values here and overide them per page
//Dim strPageName, strCanonical, strDescription, strKeywords

//Bootstrap
//Dim strBSCSS, strBSImg, strBSJS
$strBSCSS = "bs/docs/assets/css/";
$strBSImg = "bs/docs/assets/img/";
$strBSJS = "bs/docs/assets/js/";

// External sites
//Dim strTwitterName, strTweetText, strFacebookURL, strGoogleAnalID, strGoogleFonts
$strTwitterName = "Trippnology";
$strFacebookURL = "http://www.facebook.com/Trippnology";
$strGoogleAnalID = "UA-XXXXX-X";
$strGoogleFonts = 'Source+Code+Pro';

// Form to email
// Server Setup
//Dim Mailer, strMsgHeader, qryItem, strMsgInfo
//Dim strFromName, strFromAdd, strMailHost, strRecipientName, strRecipientEmail, strSubject
$strFromName = $strSiteName;
$strFromAdd = $strAdminEmail;
$strMailHost = "";
$strRecipientName = "Trippnology";
$strRecipientEmail = $strAdminEmail;
$strSubject = "Contact from your website";
$strMsgHeader = "Someone has sent you a message:";

// Set fields to use here
//DIM strName, strEmail, strTelephone, strMessage
$strName = $_REQUEST["Name"];
$strEmail = $_REQUEST["Email"];
$strTelephone = $_REQUEST["Telephone"];
$strMessage = $_REQUEST["Message"];
?>