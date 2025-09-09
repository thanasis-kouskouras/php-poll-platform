<?php
	include_once 'header.php';
?>
<p align="center">
<table border='1'>
    <tr height='15%'>

        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Επιβεβαίωση στοιχείων διαχειριστή </strong></center>
            </h2>
        </td>
    </tr>
    <tr height='15%'>
        <td width='10%' rowspan='5'><img src="img/logo.jpg" alt="Avatar" class="avatar"> </td>
        <td width='70%' rowspan='5'>


            <table>
                <tr>
                    <th> Όνομα διαχειριστή: </th>
                    <td> <input type='text' value='' id='unmae' /> </td>
                </tr>
                <tr>
                    <th> Κωδικός πρόσβασης: </th>
                    <td> <input type='password' value='' id='pass' /> </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        <button onclick="location.href='user_list.php'">Συνέχεια</button></li>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</p>
</body>

</html>

<?php
	include_once 'footer.php';
?>