<?php
	include_once 'header.php';
?>

</section>
</div>

<table border="1">
    <tr height='15%'>
        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Επεξεργασία ερώτησης: </strong></center>
            </h2>
        </td>
    </tr>
    <ul>
        <tr>
            <td>Ερώτηση:</td>
            <td>"Ερώτηση" </td>
        </tr>
        <tr>
            <td>Αναδιατυπωμένη ερώτηση:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Αναδιατύπωση ερώτησης" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α1:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Δώσε πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α2:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Δώσε πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α3:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Δώσε πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
        <tr>
            <td>Απάντηση Α4:</td>
            <td><input type="text" name="pedio_keimenou" placeholder="Δώσε πιθανή απάντηση" size="40" maxlength="40" />
            </td>
        </tr>
    </ul>
</table>
<table>
    <tr>
        <td><button onclick="location.href='question_list.php'">Επεξεργασία</button></td>
    </tr>
</table>


<?php
	include_once 'footer.php';
?>