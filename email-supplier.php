<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="telephone=no" /> <!-- disable auto telephone linking in iOS -->
<title>mail</title>
<style type="text/css">
/* RESET STYLES */
@font-face {
font-family: JTEnergyVariable;
src: url(assets/fonts/jt-bold.ttf);
}
@font-face {
font-family: JTEnergyVariable;
src: url(assets/fonts/jt-placard.ttf);
}
html {
background-color: #fff;
margin: 0;
padding: 0;
font-family: 'JTEnergyVariable', sans-serif;
}
a
{
    text-decoration:none;
}
.custom1-table td,
.custom1-table th
{
    padding: .75rem;
    vertical-align: center;
}
.custom2-table
{
    padding-bottom:15px;
    color:#7d7d7d;
    letter-spacing: 0.28px;
    font-size:14px;
}
.custom2-table td
{
    width:30%;
}
.custom1-table
{
    border-bottom:1px solid #1c1c1c
}
.custom1-table td
{
    padding-bottom:0;
    color:#1c1c1c;
}
.custom1-table th
{
    color:#1c1c1c;
    font-weight:bold;
}
.custom1-table td.right-td
{
    border-left: 2px solid #dee2e6;
}
.custom-table td,
.custom-table th
{
    padding: .75rem;
    vertical-align: center;
    border: 2px solid #dee2e6;
}
.custom-table td
{
    color:#1c1c1c;
}
.custom-table th
{
    background-color:#f5f5f5;
    color: #7d7d7d;
}
body,
#bodyTable,
#bodyCell,
#bodyCell {
height: 100% !important;
margin: 0;
padding: 0;
width: 100% !important;
font-family: 'JTEnergyVariable', sans-serif;
}

table {
border-collapse: collapse;
}

table[id=bodyTable] {
width: 100% !important;
margin: auto;
max-width: 500px !important;
color: #7A7A7A;
font-weight: normal;
}

img,
a img {
border: 0;
outline: none;
text-decoration: none;
height: auto;
line-height: 100%;
}

h1,
h2,
h3,
h4,
h5,
h6 {
color: #5F5F5F;
font-weight: normal;
font-family: JTEnergyVariable;
font-size: 20px;
line-height: 125%;
text-align: Left;
letter-spacing: normal;
margin-top: 0;
margin-right: 0;
margin-bottom: 10px;
margin-left: 0;
padding-top: 0;
padding-bottom: 0;
padding-left: 0;
padding-right: 0;
}

/* CLIENT-SPECIFIC STYLES */
.ReadMsgBody {
width: 100%;
}

.ExternalClass {
width: 100%;
}

/* Force Hotmail/Outlook.com to display emails at full width. */
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
line-height: 100%;
}

/* Force Hotmail/Outlook.com to display line heights normally. */
table,
td {
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
}

/* Remove spacing between tables in Outlook 2007 and up. */
#outlook a {
padding: 0;
}

/* Force Outlook 2007 and up to provide a "view in browser" message. */
img {
-ms-interpolation-mode: bicubic;
display: block;
outline: none;
text-decoration: none;
}

/* Force IE to smoothly render resized images. */
body,
table,
td,
p,
a,
li,
blockquote {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

/* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
.ExternalClass td[class="ecxflexibleContainerBox"] h3 {
padding-top: 10px !important;
}

/* Force hotmail to push 2-grid sub headers down */

/* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

/* ========== Page Styles ========== */
h1 {
display: block;
font-size: 26px;
font-style: normal;
font-weight: normal;
line-height: 100%;
}

h2 {
display: block;
font-size: 20px;
font-style: normal;
font-weight: normal;
line-height: 120%;
}

h3 {
display: block;
font-size: 17px;
font-style: normal;
font-weight: normal;
line-height: 110%;
}

h4 {
display: block;
font-size: 18px;
font-style: italic;
font-weight: normal;
line-height: 100%;
}

.flexibleImage {
height: auto;
}

.linkRemoveBorder {
border-bottom: 0 !important;
}

table[class=flexibleContainerCellDivider] {
padding-bottom: 0 !important;
padding-top: 0 !important;
}

body,
#bodyTable {
background-color: #fff;
}

#emailHeader {
background-color: #fff;
}

#emailBody {
background-color: #FFFFFF;
background-image: url(images/mark-bg.png);
background-size: 100% 100%;
}

#emailFooter {
background-color: #fff;
}

.nestedContainer {
background-color: fff;
border: 1px solid #CCCCCC;
}

.emailButton {
background-color: #205478;
border-collapse: separate;
}

.buttonContent {
color: #FFFFFF;
font-family: JTEnergyVariable;
font-size: 18px;
font-weight: bold;
line-height: 100%;
padding: 15px;
text-align: center;
}

.buttonContent a {
color: #FFFFFF;
display: block;
text-decoration: none !important;
border: 0 !important;
}

.emailCalendar {
background-color: #FFFFFF;
border: 1px solid #CCCCCC;
}

.emailCalendarMonth {
background-color: #205478;
color: #FFFFFF;
font-family: JTEnergyVariable, sans-serif;
font-size: 16px;
font-weight: bold;
padding-top: 10px;
padding-bottom: 10px;
text-align: center;
}

.emailCalendarDay {
color: #205478;
font-family: JTEnergyVariable, sans-serif;
font-size: 60px;
font-weight: bold;
line-height: 100%;
padding-top: 20px;
padding-bottom: 20px;
text-align: center;
}

.imageContentText {
margin-top: 10px;
line-height: 0;
}

.imageContentText a {
line-height: 0;
}

#invisibleIntroduction {
display: none !important;
}

/* Removing the introduction text from the view */

/*FRAMEWORK HACKS & OVERRIDES */
span[class=ios-color-hack] a {
color: #275100 !important;
text-decoration: none !important;
}

/* Remove all link colors in IOS (below are duplicates based on the color preference) */
span[class=ios-color-hack2] a {
color: #205478 !important;
text-decoration: none !important;
}

span[class=ios-color-hack3] a {
color: #8B8B8B !important;
text-decoration: none !important;
}

/* A nice and clean way to target phone numbers you want clickable and avoid a mobile phone from linking other numbers that look like, but are not phone numbers.  Use these two blocks of code to "unstyle" any numbers that may be linked.  The second block gives you a class to apply with a span tag to the numbers you would like linked and styled.
Inspired by Campaign Monitor's article on using phone numbers in email: http://www.campaignmonitor.com/blog/post/3571/using-phone-numbers-in-html-email/.
*/
.a[href^="tel"],
a[href^="sms"] {
text-decoration: none !important;
color: #606060 !important;
pointer-events: none !important;
cursor: default !important;
}

.mobile_link a[href^="tel"],
.mobile_link a[href^="sms"] {
text-decoration: none !important;
color: #606060 !important;
pointer-events: auto !important;
cursor: default !important;
}


/* MOBILE STYLES */
@media only screen and (max-width: 480px) {

/*////// CLIENT-SPECIFIC STYLES //////*/
body {
width: 100% !important;
min-width: 100% !important;
}

/* Force iOS Mail to render the email at full width. */

/* FRAMEWORK STYLES */
/*
CSS selectors are written in attribute
selector format to prevent Yahoo Mail
from rendering media query styles on
desktop.
*/
/*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
table[id="emailHeader"],
table[id="emailBody"],
table[id="emailFooter"],
table[class="flexibleContainer"],
td[class="flexibleContainerCell"] {
width: 100% !important;
}

td[class="flexibleContainerBox"],
td[class="flexibleContainerBox"] table {
display: block;
width: 100%;
text-align: left;
}

table[id="emailBody"] {
background-image: url(images/mark-bg.png);
background-size: 100% 100%;
}

/*

The following style rule makes any
image classed with 'flexibleImage'
fluid when the query activates.
Make sure you add an inline max-width
to those images to prevent them
from blowing out.
*/
td[class="imageContent"] img {
height: auto !important;
width: 100% !important;
max-width: 100% !important;
}

img[class="flexibleImage"] {
height: auto !important;
width: 100% !important;
max-width: 100% !important;
}

img[class="flexibleImageSmall"] {
height: auto !important;
width: auto !important;
}


/*
Create top space for every second element in a block
*/
table[class="flexibleContainerBoxNext"] {
padding-top: 10px !important;
}

/*
Make buttons in the email span the
full width of their container, allowing
for left- or right-handed ease of use.
*/
table[class="emailButton"] {
width: 100% !important;
}

td[class="buttonContent"] {
padding: 0 !important;
}

td[class="buttonContent"] a {
padding: 15px !important;
}

}

/*  CONDITIONS FOR ANDROID DEVICES ONLY
*   http://developer.android.com/guide/webapps/targeting.html
*   http://pugetworks.com/2011/04/css-media-queries-for-targeting-different-mobile-devices/ ;
=====================================================*/

@media only screen and (-webkit-device-pixel-ratio:.75) {
/* Put CSS for low density (ldpi) Android layouts in here */
}

@media only screen and (-webkit-device-pixel-ratio:1) {
/* Put CSS for medium density (mdpi) Android layouts in here */
}

@media only screen and (-webkit-device-pixel-ratio:1.5) {
/* Put CSS for high density (hdpi) Android layouts in here */
}

/* end Android targeting */

/* CONDITIONS FOR IOS DEVICES ONLY
=====================================================*/
@media only screen and (min-device-width : 320px) and (max-device-width:568px) {}

/* end IOS targeting */
</style>
<!--
Outlook Conditional CSS

These two style blocks target Outlook 2007 & 2010 specifically, forcing
columns into a single vertical stack as on mobile clients. This is
primarily done to avoid the 'page break bug' and is optional.

More information here:
http://templates.mailchimp.com/development/css/outlook-conditional-css
-->
<!--[if mso 12]>
<style type="text/css">
.flexibleContainer{display:block !important; width:100% !important;}
</style>
<![endif]-->
<!--[if mso 14]>
<style type="text/css">
.flexibleContainer{display:block !important; width:100% !important;}
</style>
<![endif]-->
</head>

<body bgcolor="#fff" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<!-- CENTER THE EMAIL // -->
<!--
1.  The center tag should normally put all the
content in the middle of the email page.
I added "table-layout: fixed;" style to force
yahoomail which by default put the content left.

2.  For hotmail and yahoomail, the contents of
the email starts from this center, so we try to
apply necessary styling e.g. background-color.
-->
<center style="background-color:#fff;">
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable"
style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
<tr>
<td align="center" valign="top" id="bodyCell">

<!-- EMAIL HEADER // -->
<!--
The table "emailBody" is the email's container.
Its width can be set to 100% for a color band
that spans the width of the page.
-->
<table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">

<!-- HEADER ROW // -->
<tr>
<td align="center" valign="top">
<!-- CENTERING TABLE // -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" valign="top">
<!-- FLEXIBLE CONTAINER // -->
<table border="0" cellpadding="10" cellspacing="0" width="500"
class="flexibleContainer">
<tr>
<td valign="top" width="500" class="flexibleContainerCell">

<!-- CONTENT TABLE // -->
<table align="left" border="0" cellpadding="0" cellspacing="0"
width="100%">
<tr>
<!--
        The "invisibleIntroduction" is the text used for short preview
        of the email before the user opens it (50 characters max). Sometimes,
        you do not want to show this message depending on your design but this
        text is highly recommended.

        You do not have to worry if it is hidden, the next <td> will automatically
        center and apply to the width 100% and also shrink to 50% if the first <td>
        is visible.
    -->
<td align="left" valign="middle"
    id="invisibleIntroduction"
    class="flexibleContainerBox"
    style="display:none !important; mso-hide:all;">
    <table border="0" cellpadding="0" cellspacing="0"
        width="100%" style="max-width:100%;">
        <tr>
            <td align="left" class="textContent">
                <div
                    style="font-family:'JTEnergyVariable', sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                    The introduction of your message
                    preview goes here. Try to make it
                    short.
                </div>
            </td>
        </tr>
    </table>
</td>
<td align="right" valign="middle"
    class="flexibleContainerBox">
    <table border="0" cellpadding="0" cellspacing="0"
        width="100%" style="max-width:100%;">
    </table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<!-- // FLEXIBLE CONTAINER -->
</td>
</tr>
</table>
<!-- // CENTERING TABLE -->
</td>
</tr>
<!-- // END -->

</table>
<!-- // END -->
<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="600" id="emailBody"
style="box-shadow:0 0 6px 0 rgba(0, 0, 0, 0.16); background-image: url(images/mark-bg.png);background-size:100% 100%;">
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;"
        bgcolor="transparent">
        <tr>
        <td align="center" valign="top">
        <table border="0" cellpadding="0" cellspacing="0" width="600"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell"
        style="margin-top:0;padding-top:0%">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="left" valign="top" class="textContent" style="padding-bottom:15px;">
            <img src="assets/images/logo.svg" alt="logo"
                style="width:210px;height:60px" />
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
    </tr>
    <!-- end tr -->
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
        <td align="right" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="left" valign="top"
            style="margin-top:0;padding-top:2%;margin-bottom: 1%;padding-bottom:0%;">
        <table border="0" cellpadding="0" cellspacing="0"
            width="100%" style="background-color:transparent;">
            <tr style="margin-bottom:0;padding-bottom:0%">
                <td valign="top" class="textContent">
                    <div mc:edit="body"
                        style="text-align:left;font-family:'JTEnergyVariable', sans-serif;;margin-bottom:0;;padding:0px 26px">
                        <p style="font-size:18px;text-align:left;letter-spacing: 0.56px;color:#1c1c1c;margin:0px;margin-bottom:0px;font-weight:bold"> 
                        Dear Team,
                        </p>     
                        <p style="font-size:14px;text-align:left;letter-spacing: 0.48px;color:#1c1c1c;margin:0px;font-weight:normal;margin-bottom:4px;"> 
                        Greetings from Arabia Horizons Tours!!!
                        </p>  
                        <p style="font-size:24px;font-weight:bold;text-align:left;letter-spacing: 0.48px;color:#1c1c1c;margin:0px;margin-top:15px;margin-bottom:30px;"> 
                        Please <span style="color:#008ed3"> CONFIRM </span>the below booking.
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        <!-- // CONTENT TABLE -->
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
    </tr>
    <!-- end tr -->
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
        <td align="right" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="right" valign="top"
        style="margin-top:0;padding-top:0%;margin-bottom: 1%;padding-bottom:1%;">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0"
            width="100%">
            <tr style="margin-bottom:0;padding-bottom:0%">
                <td valign="top" class="textContent">
                    <div mc:edit="body"
                        style="text-align:left;font-family:'JTEnergyVariable', sans-serif;font-size:14px;margin-top:0px;background-color: #008ed3;padding:6px 26px">
                        <p style="font-weight: normal;font-size: 18px;color: #fff;margin:0px;letter-spacing: 0.36px;">Booking Reference: B2E-116-160220
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
    </tr>
    <!-- end tr -->
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
        <td align="right" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="right" valign="top"
        style="margin-top:0;padding-top:0%;margin-bottom: 1%;padding-bottom:1%;">
        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0"
            width="100%">
            <tr style="margin-bottom:0;padding-bottom:0%">
                <td valign="top" class="textContent">
                    <div mc:edit="body"
                        style="text-align:left;font-family:'JTEnergyVariable', sans-serif;font-size:14px;margin-top:15px;background-color:#f5f5f5;padding:26px;padding-bottom:14px;">
                        <table class="custom2-table" style="width:100%">
                            <tbody>
                                <tr>
                                    <td>Tour Date : </td>
                                    <td style="color:#1c1c1c;">17 Feb 2020</td>
                                </tr>  
                                <tr>
                                    <td>Tour Name : </td>
                                    <td style="color:#1c1c1c;">Evening Desert Safari With BBQ - Sharing</td>
                                </tr> 
                                <tr>
                                    <td>No. of Pax : </td>
                                    <td style="color:#1c1c1c;">1 Adults, 2 Child, 0 Infant</td>
                                </tr>        
                                <tr style="border-bottom:1px solid #7d7d7d;height:40px;vertical-align:top">
                                    <td>Additional Service :  </td>
                                    <td style="color:#1c1c1c;">x Pick up time 2:00-2:30PM</td>
                                </tr>        
                                <tr style="height:40px;vertical-align:bottom">
                                    <td>Guest Name :</td>
                                    <td style="color:#1c1c1c">Baranton Cecily</td>
                                </tr>                                  
                                <tr>
                                    <td>Nationality :</td>
                                    <td style="color:#1c1c1c;">France</td>
                                </tr>                                 
                                <tr>
                                    <td>Contact No. :</td>
                                    <td style="color:#1c1c1c;">+33637391902</td>
                                </tr>                                 
                                <tr>
                                    <td>Pick-up Location :</td>
                                    <td style="color:#1c1c1c;">Habtoor grand Resort Autograph Collection room number 2323</td>
                                </tr>                                  
                                <tr>
                                    <td>Collection :   </td>
                                    <td style="color:#1c1c1c;">NONE</td>
                                </tr>  
                </tr>     
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </table>
        </td>
        </tr>
    <!-- end tr -->
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
        <td align="right" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="right" valign="top"
        style="margin-top:0;padding-top:0%;margin-bottom: 1%;padding-bottom:1%;">
        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0"
            width="100%">
            <tr style="margin-bottom:0;padding-bottom:0%">
                <td valign="top" class="textContent">
                    <div mc:edit="body"
                        style="text-align:left;font-family:'JTEnergyVariable', sans-serif;font-size:14px;margin-top:15px;background-color:transparent;padding:5px 26px;color:#1c1c1c;margin-bottom:20px;">
                        <button type="submit" style="width: 204px;height: 52.4px;font-size: 16px;font-weight: bold;letter-spacing: 0.32px;text-align: center;color: #008ed3;border-radius: 2.5px;
                        border: solid 1.7px #008ed3;background-color:transparent;cursor:pointer">
                            Confirm the booking
                        </button>
                    </div>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </table>
        </td>
        </tr>
    <!-- end tr -->
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top"
        style="margin-top:0;padding-top:0%;margin-bottom: 1%;padding-bottom:1%;">
        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0"
            width="100%">
            <tr style="margin-bottom:0;padding-bottom:0%">
                <td valign="top" class="textContent">
                    <div mc:edit="body"
                        style="text-align:center;font-family:'JTEnergyVariable', sans-serif;font-size:14px;margin-top:0px;background-color:transparent;padding:5px 26px;color:#1c1c1c;">
                        <p style="font-weight:bold;font-size:18px;margin-top:0px;margin-bottom:0px;">
                            <img src="assets/images/support.png" alt="support" style="display:block;margin:auto;width:30px;">
                        </p>
                        <p style="font-size:14px;margin-top:0px;letter-spacing: 0.28px;width:101%">
                            <strong style="text-align:center;display:block;font-size:14px;padding-bottom:15px;">Need help with your reservation?</strong>
                            If you need to amend or cancel your booking, simply reply to this email and we'll send help your way asap.
                            You can also chat with us or call us on one of these numbers.
                        </p>
                        <p>
                            <strong>
                            +971 (4) 294 6060 | +971 (0) 50 540 2520 | +971 (0) 55 797 4121
                            </strong>
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </table>
        </td>
        </tr>
    <!-- end tr -->
    <!-- start tr -->
    <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500"
        class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top"
        style="margin-top:0;padding-top:0%;margin-bottom: 1%;padding-bottom:1%;">
        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0"
            width="100%">
            <tr style="margin-bottom:0;padding-bottom:0%">
                <td valign="top" class="textContent">
                    <div mc:edit="body"
                        style="text-align:center;font-family:'JTEnergyVariable', sans-serif;font-size:14px;margin:0px;background-color:#f5f5f5;padding:15px 26px;color:#1c1c1c;font-size:14px;">
                        <p style="font-size:14px;margin-top:0px;letter-spacing: 0.28px;">
                            <strong style="text-align:center;display:block;font-size:14px;padding-bottom:0px;">Arabia Horizons Tours LLC</strong>
                                P.O Box: 115 815, Business Bay, Dubai, UAE
                        </p>
                        <p style="margin-bottom:0px;font-size: 14px;letter-spacing: 0.28px;color:#1c1c1c">
                            <a href="#" style="color: #008ed3;text-decoration:underline">Facebook</a> 
                            <span>|</span>
                            <a href="#" style="color: #008ed3;text-decoration:underline">Twitter</a>
                            <span>|</span>
                            <a href="#" style="color: #008ed3;text-decoration:underline">YouTube</a>
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </table>
        </td>
        </tr>
    <!-- end tr -->
</table>
<!-- // END -->
</td>
</tr>
</table>
</center>
</body>

</html>