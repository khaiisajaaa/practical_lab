<?php
include 'process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <table>
            <h1>Calculate Electricity House Bill</h1>

            <?php
            if ($error != "") {
                echo "<h3 style='color: red;'>" . $error . "</h3    >";
            }
            ?>

            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.218</td>
            </tr>
            <tr>
                <td>For the next 100 kWh (201 – 300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (301 – 600 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (601 – 900 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <tr>
                <td colspan="3">The minimum monthly charge is RM300</td>
            </tr>
        </table>
    </div>

    <div>
        <form action"" method="post">
            <label for="">Enter your first 200 kwh (1 - 200 kwh) per month:</label>
            <input type="number" name="first" id="">

            <br><br>

            <label for="">Enter next 100 kWh (201 - 300 kWh) per month :</label>
            <input type="number" name="second" id="">

            <br><br>

            <label for="">Enter next 300 kWh (301 - 600 kWh) per month :</label>
            <input type="number" name="third" id="">

            <br><br>

            <label for="">Enter next 300 kWh (601 - 900 kWh) per month :</label>
            <input type="number" name="fourth" id="">

            <br><br>

            <label for="">Enter next kWh (901 kWh onwards) per month :</label>
            <input type="number" name="fifth" id="">

            <br><br>

            <input type="submit" name="calculate" value="calculate">
            <input type="reset" value="reset">
        </form>
    </div>
</body>

</html>

<?php
if ($showBill) {
    echo "<hr>";//horizontal line
    echo "<h1>Electricity Bill</h1>";
    echo "<table>";

    echo "<tr><th>Details</th></tr>";
    echo "<tr><td>First input: " . $firstkwh . " * 0.218 = RM" . $firstcharge . "</td></tr>";
    echo "<tr><td>Second input: " . $secondkwh . " * 0.218 = RM" . $secondcharge . "</td></tr>";
    echo "<tr><td>Third input: " . $thirdkwh . " * 0.218 = RM" . $thirdcharge . "</td></tr>";
    echo "<tr><td>Fourth input: " . $fourthkwh . " * 0.218 = RM" . $fourthcharge . "</td></tr>";
    echo "<tr><td>Fifth input: " . $fifthkwh . " * 0.218 = RM" . $fifthcharge . "</td></tr>";

    echo "<tr><td><strong>Total kwh: " . $totalkwh . "kwh</strong></td></tr>";
    echo "<tr><td><strong>Total charge: RM" . $totalcharge . "</strong></td></tr>";
    echo "<tr><td><strong>SST: RM" . $sst . "</strong></td></tr>";
    echo "<tr><td><strong>Total Bill: RM" . $totalBill . "</strong></td></tr>";
}
?>