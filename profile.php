<?php
	include_once 'header.php';
?>
<p align="center">
<section>
    <form action="includes/profile.inc.php" method="post" align="center">

        <table border='1'>
            <tr height='15%'>
                <td width='10%'> <img src="img/logo.jpg"> </td>
                <td colspan='2' width='90%'>
                    <h2>
                        <center><strong> Επεξεργασία Λογαριασμού </strong></center>
                    </h2>
                </td>
            </tr>
            <tr height='15%'>
                <td width='10%' rowspan='5'>
                    <center><strong> Κάνε αλλαγές στα στοιχεία του λαγοριασμού σου </strong></center>
                </td>
                <td width='70%' rowspan='5'>

                    <table border="1">
                        <tr>
                            <td>Όνομα:</td>
                            <td> <input type="text" name="name" placeholder="Εισήγαγε όνομα" size="39" maxlength="33" />
                            </td>
                        </tr>
                        <tr>
                            <td>Επίθετο:</td>
                            <td> <input type="text" name="surname" placeholder="Εισήγαγε επίθετο" size="39"
                                    maxlength="33" /></td>
                        </tr>
                        <tr>
                            <td>Όνομα χρήστη:</td>
                            <td> <input type="text" name="uid" placeholder="Εισήγαγε όνομα χρήστη" size="39"
                                    maxlength="33" required></td>
                        </tr>
                        <tr>
                            <td>Νέος κωδικός πρόσβασης:</td>
                            <td> <input type="password" name="pwd" placeholder="Εισήγαγε νέο κωδικό πρόσβασης" size="39"
                                    maxlength="33" required></td>
                        </tr>
                        <tr>
                            <td>Επανάλληψη νέου κωδικού πρόσβασης:</td>
                            <td> <input type="password" name="pwdrepeat" placeholder="Επανάλληψη νέου κωδικού πρόσβασης"
                                    size="39" maxlength="33" required></td>
                        </tr>
                        <tr>
                            <td>Ηλεκτρονική διεύθυνση ταχυδρομίου:</td>
                            <td> <input type="email" name="email"
                                    placeholder="Εισήγαγε ηλεκτρονική διεύθυνση ταχυδρομίου" size="39" maxlength="33" />
                            </td>
                        </tr>
                    </table>
                    <button type="submit" name="submit">Υποβολή</button>
            </tr>
        </table>
    </form>

    <?php
	if (isset($_GET["error"])){
		if ($_GET["error"] == "emptyinput"){
			echo "<p>Συμπληρώστε όλα τα στοιχεία</p>";
		}
		else if ($_GET["error"] == "invaliduid"){
			echo "<p>Επιλέξτε άλλο όνομα χρήστη</p>";
		}
		else if ($_GET["error"] == "invalidemail"){
			echo "<p>Συμπληρώστε σωστά τη διεύθυνση ηλεκτρονικού ταχυδρομείου σας </p>";
		}
		else if ($_GET["error"] == "passwordsdontmatch"){
			echo "<p>Ο κωδικός δεν είναι ίδιος</p>";
		}
		else if ($_GET["error"] == "stmtfailed"){
			echo "<p>Κάτι πήγε στραβά, ξανά προσπαθήστε</p>";
		}
		else if ($_GET["error"] == "usernametaken"){
			echo "<p>Αυτό το όνομα χρήστη θπάρχει ήδη, επιλέξτε κάποιο άλλο</p>";
		}
		else if ($_GET["error"] == "none"){
			echo "<p>Εγγραγήκατε επιτυχώς!</p>";
		}
	}
	?>

</section>


</p>

<?php
	include_once 'footer.php';
?>