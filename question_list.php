<?php
	include_once 'header.php';
?>

<table border="1">
    <tr height='15%'>
        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Λίστα ερωτήσεων: </strong></center>
            </h2>
        </td>
        <td width='10%'><img src="img/logo.jpg"></td>
    </tr>
    <ul>
        <tr>
            <td>
                <li> Ερώτηση 1 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button> </td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>
                <li> Ερώτηση 2 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>
                <li> Ερώτηση 3 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>
                <li> Ερώτηση 4 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>
                <li> Ερώτηση 5 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>
                <li> Ερώτηση 6 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>
                <li> Ερώτηση 7 </li>
            </td>
            <td><button onclick="location.href='question_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='question_list.php'">Διαγραφή</button></td>
        </tr>
    </ul>
</table>
<table>
    <tr>
        <td><button onclick="location.href='new_question.php'">Εισαγωγή νέας ερώτησης</button></td>
</table>
</tr>

<?php
	include_once 'footer.php';
?>