<?php
// Global Site Settings
$siteName = "Trippnology";
$siteDomain = "http://trippnology.com/"; // Be sure to include trailing slash
$siteTagline = "We're good with technology";

// Back end stuff
$adminEmail = "";
$adminDevMode = true; // Load development stuff?
$adminGoogleAnalID = "UA-18721203-1";
$userIP = $_SERVER['REMOTE_ADDR'];

// External sites
$socialTwitterName = "Trippnology";
$socialFacebookURL = "http://www.facebook.com/Trippnology";

// Form to email
// Server Setup
$strFromName = $siteName;
$strFromAdd = $adminEmail;
$strMailHost = "";
$strRecipientName = "Trippnology";
$strRecipientEmail = $adminEmail;
$strSubject = "Contact from your website";
$strMsgHeader = "Someone has sent you a message:";

// Set fields to use here
@$strName = $_REQUEST["Name"];
@$strEmail = $_REQUEST["Email"];
@$strTelephone = $_REQUEST["Telephone"];
@$strMessage = $_REQUEST["Message"];
?>
