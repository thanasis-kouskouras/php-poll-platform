<?php
	session_start();
?>

<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">

<head>
    <title>ΑΡΧΙΚΗ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/reset.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

    <div class="wrapper row1">
        <section class="hoc clear">

            <nav id="mainav">
                <div class="wrapper">
                    <ul class="clear">
                        <?php
					if (isset($_SESSION["useruid"])){
						echo "<li><a href='indexmain.php'>ΑΡΧΙΚΗ</a></li>";
						echo "<li><a href='profile.php'>ΕΠΕΞΕΡΓΑΣΙΑ ΠΡΟΦΙΛ</a></li>";
						echo "<li><a href='admin_verification.php'>ΠΡΟΒΟΛΗ ΧΡΗΣΤΩΝ</a></li>";
						echo "<li><a href='admin_verification2.php'>ΠΡΟΒΟΛΗ ΕΡΩΤΗΣΕΩΝ</a></li>";
						echo "<li><a class='drop' href=''>ΠΡΟΒΟΛΗ ΔΗΜΟΣΚΟΠΗΣΕΩΝ</a>";
						echo "<ul>";
						echo "	<li><a href='admin_verification3.php'>ΔΗΣΚΟΠΗΣΕΙΣ</a></li>";
						echo "	<li><a href='poll_answer.php'>ΑΠΑΝΤΗΣΗ ΔΗΜΟΣΚΟΠΗΣΕΩΝ</a></li>";
						echo "</ul>";
						echo "</li>";
						echo "<li><a href='includes/logout.inc.php'>ΑΠΟΣΥΝΔΕΣΗ</a></li>";
					}
					else {
						echo "<li><a href='login.php'>ΣΥΝΔΕΣΗ</a></li>";
						echo "<li><a href='signup.php'>ΕΓΓΡΑΦΗ</a></li>";
					}
				?>
                    </ul>
            </nav>

        </section>
    </div>