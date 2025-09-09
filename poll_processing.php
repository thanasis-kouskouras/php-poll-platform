<?php
	include_once 'header.php';
?>

</section>
</div>

<table border="1">
    <tr height='15%'>
        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Επεξεργασία Δημοσκόπησης: </strong></center>
            </h2>
        </td>
    </tr>
    <ul>
        <tr>
            <td>Δημοσκόπηση:</td>
            <td>Δημοσκόπηση 1 </td>
        </tr>
        <tr>
            <td>Αναδιατύπωση θέματος δημοσκόπησης:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Αναδιατύπωση θέματος" size="130"
                    maxlength="130" /> </td>
        </tr>
        <tr>
            <td>Ερώτηση 1</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 2</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 3</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 4</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 5</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 6</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 7</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 8</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 9</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
        <tr>
            <td>Ερώτηση 10</td>
            <td><button onclick="location.href='poll_processing.php'">Διαγραφή</button></td>
        </tr>
    </ul>
</table>
<table>
    <tr>
        <td><button onclick="location.href='list_poll_question.php'">Προσθήκη ερώτησης</button></td>
        <td><button onclick="location.href='poll_list.php'">Επεξεργασία</button></td>
    </tr>
</table>



<?php
	include_once 'footer.php';
?>