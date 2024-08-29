<?php
$host = "localhost";
$user = "rushmi0";
$password = "sql@min";
$database = "staff";

$conn = new mysqli($host, $user, $password, $database);

$str = "SELECT * FROM student";
$obj = mysqli_query($conn, $str);
?>

<table border="1">
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Midterm</th>
        <th>Final</th>
        <th>Total</th>
        <th>Grade</th>
    </tr>


    <?php
    while ($row = mysqli_fetch_array($obj)) {
        echo "<tr>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['nname'] . "</td>";
        echo "<td>" . $row['mid_score'] . "</td>";
        echo "<td>" . $row['final_score'] . "</td>";

        $score = $row['final_score'] + $row['mid_score'];

        echo "<td>" . $score . "</td>";

        $grade = 'F';
        if ($score >= 80) {
            $grade = 'A';
        } else if ($score >= 75) {
            $grade = 'B';
        } else if ($score >= 65) {
            $grade = 'C';
        } else if ($score >= 50) {
            $grade = 'D';
        }

        echo "<td>" . $grade . "</td>";

        echo "</tr>";
    }
    ?>

</table>