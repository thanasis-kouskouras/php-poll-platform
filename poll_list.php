<?php
	include_once 'header.php';
?>

<table border="1">
    <tr height='15%'>
        <td colspan='2' width='90%'>
            <h2>
                <center><strong> Λίστα Δημοσκοπήσεων: </strong></center>
            </h2>
        </td>
        <td></td>
        <td width='10%'><img src="img/logo.jpg"></td>
    </tr>
    <ul>
        <tr>
            <td>
                <li> Δημοσκόπηση 1 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button> </td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
        <tr>
            <td>
                <li> Δημοσκόπηση 2 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
        <tr>
            <td>
                <li> Δημοσκόπηση 3 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
        <tr>
            <td>
                <li> Δημοσκόπηση 4 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
        <tr>
            <td>
                <li> Δημοσκόπηση 5 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
        <tr>
            <td>
                <li> Δημοσκόπηση 6 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
        <tr>
            <td>
                <li> Δημοσκόπηση 7 </li>
            </td>
            <td><button onclick="location.href='poll_processing.php'">Επεξεργασία</button></td>
            <td><button onclick="location.href='poll_list.php'">Διαγραφή</button></td>
            <td><button onclick="location.href='poll_results.php'">Προβολή</button>
        </tr>
    </ul>
</table>
<table>
    <tr>
        <td><button onclick="location.href='new_poll.php'">Εισαγωγή νέας δημοσκόπησης</button></td>
    </tr>
</table>


<?php
	include_once 'footer.php';
?>