<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bpcl";
$tableName = "salesdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <link rel="stylesheet" href="assets/css/test.css">
</head>
<body>
<div id="navbar">
    <div id="left">
        <img src="assets/images/bpcllogo.jpeg" alt="logo" />
        
        
    </div>
    <div id="right">
        <nav>
            <a href="index.php">Go back</a>
            <a href="#">About</a>
            <a href="http://www.linkedin.com/in/abdulismailca">Contact</a>
        </nav>
    </div>
</div>
<div class="main-lf">
           
    <div class="table">
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Opening Read</th>
                <th>Closing Read</th>
                <th>Total Ltr</th>
                <th>Today Rate</th>
                <th>Ltr x Rate</th>
                <th>Fuel Type</th>
                <th>Cash in Office</th>
                <th>Cash in Your Hand</th>
                <th>Credit</th>
                <th>UPI</th>
                <th>Swipe</th>
                <th>Test</th>
                <th>Other</th>
                <th>Short</th>
                <th>Timestamp</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['open']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['close']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['totalltr']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tdrate']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['totalcash']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['fueltype']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cashoff']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cashhand']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['credit']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['upi']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['swipe']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['test']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['other']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['short']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['reg_date']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='16'>No data found</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php
// Close connection
$conn->close();
?>
</body>
</html>
