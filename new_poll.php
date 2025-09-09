<?php
	include_once 'header.php';
?>

</section>
</div>

<table border="1">
    <tr height='15%'>
        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Δημιουργία Νέας Δημοσκόπησης: </strong></center>
            </h2>
        </td>
    </tr>
    <ul>
        <tr>
            <td>Δημοσκόπηση:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Όνομα νέας δημοσκόπησης" size="50"
                    maxlength="50" /> </td>
        </tr>
        <tr>
            <td>Θέμα δημοσκόπησης:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Διατύπωση θέματος" size="130" maxlength="130" />
            </td>
        </tr>
    </ul>
</table>
<table>
    <tr>
        <td><button onclick="location.href='new_poll_question.php'">Προσθήκη ερώτησης</button></td>
        <td><button onclick="location.href='poll_list.php'">Δημιουργία</button></td>
    </tr>
</table>



<?php
	include_once 'footer.php';
?>