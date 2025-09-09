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
    <title>ΣΥΝΔΕΣΗ</title>
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
                        <li><a href="login.php">ΣΥΝΔΕΣΗ</a></li>
                        <li><a href="signup.php">ΕΓΓΡΑΦΗ</a></li>
                    </ul>
            </nav>

        </section>
    </div>


    <section>
        <form action="includes/login.inc.php" method="post" align="center">
            <table border='1'>
                <tr height='15%'>
                    <td width='10%'> <img src="img/logo.jpg"> </td>
                    <td colspan='2' width='90%'>
                        <h2>
                            <center><strong> Σύνδεση Λογαριασμού </strong></center>
                        </h2>
                    </td>
                </tr>
                <tr height='15%'>
                    <td width='10%' rowspan='5'>
                        <center><strong> Συνδεθείτε και βοηθήστε σε έρευνες απαντώντας σε δημοσκοπήσεις </strong>
                        </center>
                    </td>
                    <td width='70%' rowspan='5'>
                        <table border="1">
                            <tr>
                                <td>Όνομα χρήστη:</td>
                                <td> <input type="text" name="uid" placeholder="Εισήγαγε όνομα χρήστη" size="39"
                                        maxlength="33" required></td>
                            </tr>
                            <tr>
                                <td>Kωδικός πρόσβασης:</td>
                                <td> <input type="password" name="pwd" placeholder="Εισήγαγε κωδικό πρόσβασης" size="39"
                                        maxlength="33" required></td>
                            </tr>
                        </table>
                        <button type="submit" name="submit">Σύνδεση</button>
                </tr>
            </table>
        </form>
        <?php
	if (isset($_GET["error"])){
		if ($_GET["error"] == "emptyinput"){
			echo "<p>Συμπληρώστε όλα τα στοιχεία</p>";
		}
		else if ($_GET["error"] == "wronglogin"){
			echo "<p>Μη έγκυρα στοιχεία εισόδου</p>";
		}
	}
	?>
    </section>


    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>