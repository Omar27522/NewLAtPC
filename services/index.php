<?php

$title="Services";
$dir = '../';
//$about ='active';
//$keywords ='<meta name="keywords" content="California, Los Angeles County, San Bernardino county, Riverside County, Orange County, computer service and repair">';
//$description ='<meta name="description" content="We want to bring families and individuals, the experience of a fully working computer system; laptops and desktops. We offer mostly on-site and remote services, but we will work on a physical location soon.">';


function content(){
    echo '<h2 style="margin-left:20%;margin-top:3%">Hello, This is the services page!</h2>';
    $title = "<h2>Your Trusted IT Solution Partner</h2>";
 $reliable ="Reliable, fast, and professional computer repair and IT services.";
 $services ='<h2>Our Services</h2>
                <ul>
                    <li>Custom PC Builds for Offices, Home Labs, and Gamers</li>
                    <li>Program Installation and Configuration</li>
                    <li>Managed Services (Weekly, Monthly, Quarterly, Bi-annually)</li>
                    <li>Computer Protection and Best Practices</li>
                    <li>Hardware Diagnosis and Solutions</li>
                    <li>Virus and Malware Removal</li>
                    <li>Backup Solutions (Local, Offsite, Cloud)</li>
                    <li>System Cleanups</li><img src="https://latinospc.com/images/button2.jpg" height="150px" width="350px" class="fl">
                    <li style="list-style-type: none">Remote Support and Phone Consultations</li><br />
                    <li style="list-style-type: none">Software/Hardware Upgrades and Buying Guides</li><br />
                    <li style="list-style-type: none">Bilingual Support:<br />(Tambien Hablamos Español)</li>
                </ul>';
 $specialOffers ='<h2>Special Offers</h2>
            <ul>
                <li>Small Business Service Plans</li>
                <li>In-person and Online Computer Classes for Beginners and Intermediate Users</li>
                <li>Remote and Phone-based Support</li>
                <li>Reasonable Rates: $35 Diagnosis Fee (added to cost of service/repair)</li>
                <img src="https://latinospc.com/images/storefront.png" class="rtl">
            </ul>';
 $contact ="<h2>Contact Us</h2>
            <p><span style=\"font-size:x-large;\">Call:<a href=\"tel:+19092767214\">909-276-7214</a><br />or<br />text</span> us for a free quote,<br />
            or to schedule a service appointment.</p>
            <p>We work with individuals, students, small-to-medium businesses, gamers, and professionals.</p>";
    include_once('../content/services.php');
}
include_once('../code/functions.php');
include ('../code/html_structure/page.php');
?>