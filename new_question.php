<?php
	include_once 'header.php';
?>

</section>
</div>

<table border="1">
    <tr height='15%'>
        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Δημιουργία νέας ερώτησης: </strong></center>
            </h2>
        </td>
    </tr>
    <ul>
        <tr>
            <td>Νέα ερώτηση:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Εισαγωγή ερώτησης" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α1:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="1η πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α2:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="2η πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α3:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="3η πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α4:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="4η πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
    </ul>
</table>
<table>
    <tr>
        <td><button onclick="location.href='question_list.php'">Δημιουργία ερώτησης</button></td>
    </tr>
</table>


<?php
	include_once 'footer.php';
?>