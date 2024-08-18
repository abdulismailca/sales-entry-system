<?php


    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $open = !empty($_POST['open']) ? (float) $_POST['open'] : 0;
    $close = !empty($_POST['close']) ? (float) $_POST['close'] : 0;
    $tdrate = !empty($_POST['tdrate']) ? (float) $_POST['tdrate'] : 0;
    $cashoff = !empty($_POST['cashoff']) ? (float) $_POST['cashoff'] : 0;
    $cashhand = !empty($_POST['cashhand']) ? (float) $_POST['cashhand'] : 0;
    $credit = !empty($_POST['credit']) ? (float) $_POST['credit'] : 0;
    $upi = !empty($_POST['upi']) ? (float) $_POST['upi'] : 0;
    $swipe = !empty($_POST['swipe']) ? (float) $_POST['swipe'] : 0;
    $test = !empty($_POST['test']) ? (float) $_POST['test'] : 0;
    $other = !empty($_POST['other']) ? (float) $_POST['other'] : 0;
    $fueltype = !empty($_POST['fueltype']) ? $_POST['fueltype'] : '';

    $totalltr = $close - $open;
    $totalcash = $totalltr * $tdrate;
    $tally = $cashoff + $cashhand + $credit + $upi + $swipe + $test + $other;
    $short = $tally - $totalcash;

    if ($short > 0) {
        $short = "+ " . $short;
    } elseif ($short == 0) {
        $short = 0;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>collected</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/test.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="navbar">
    <div id="left">
        <img src="assets/images/bpcllogo.jpeg" alt="logo" />
    </div>
    <div id="right">
        <nav>
            <a href="index.php">Go back</a>
            <a href="display_data.php">Display all</a>
            <a href="http://www.linkedin.com/in/abdulismailca">Contact</a>
        </nav>
    </div>
</div>
<div class="main-lf">
 
    <div class="table">
        <form method="post" action="database\Database.php" >
            <table>
                <tr>
                    <th>Name:</th>
                    <td><?php echo htmlspecialchars($name); ?></td>
                </tr>
                <tr>
                    <th>Opening Read:</th>
                    <td><?php echo htmlspecialchars($open); ?></td>
                </tr>
                <tr>
                    <th>Closing Read:</th>
                    <td><?php echo htmlspecialchars($close); ?></td>
                </tr>
                <tr>
                    <th>Total Ltr:</th>
                    <td><?php echo htmlspecialchars($totalltr); ?></td>
                </tr>
                <tr>
                    <th>Today Rate:</th>
                    <td><?php echo htmlspecialchars($tdrate); ?></td>
                </tr>
                <tr>
                    <th>Ltr x Rate =</th>
                    <td><?php echo htmlspecialchars($totalcash); ?></td>
                </tr>
                <tr>
                    <th>Fuel Type:</th>
                    <td><?php echo htmlspecialchars($fueltype); ?></td>
                </tr>
                <tr>
                    <th>Cash in Office:</th>
                    <td><?php echo htmlspecialchars($cashoff); ?></td>
                </tr>
                <tr>
                    <th>Cash in Your Hand:</th>
                    <td><?php echo htmlspecialchars($cashhand); ?></td>
                </tr>
                <tr>
                    <th>Credit:</th>
                    <td><?php echo htmlspecialchars($credit); ?></td>
                </tr>
                <tr>
                    <th>UPI:</th>
                    <td><?php echo htmlspecialchars($upi); ?></td>
                </tr>
                <tr>
                    <th>Swipe:</th>
                    <td><?php echo htmlspecialchars($swipe); ?></td>
                </tr>
                <tr>
                    <th>Test:</th>
                    <td><?php echo htmlspecialchars($test); ?></td>
                </tr>
                <tr>
                    <th>Other:</th>
                    <td><?php echo htmlspecialchars($other); ?></td>
                </tr>
                <tr>
                    <th>Short:</th>
                    <td><?php echo htmlspecialchars($short); ?></td>
                </tr>
                
            </table>
        </form>
    </div>
</div>

<?php



// Initialize variables



    // Sanitize and assign POST data
    

    // Perform calculations
    

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bpcl";
    $tableName = "salesdata";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database if not exists
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Select the database
    $conn->select_db($dbname);

    // Create table if not exists
    $sql = "CREATE TABLE IF NOT EXISTS $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        open FLOAT NOT NULL,
        close FLOAT NOT NULL,
        tdrate FLOAT NOT NULL,
        cashoff FLOAT NOT NULL,
        cashhand FLOAT NOT NULL,
        credit FLOAT NOT NULL,
        upi FLOAT NOT NULL,
        swipe FLOAT NOT NULL,
        test FLOAT NOT NULL,
        other FLOAT NOT NULL,
        fueltype VARCHAR(50) NOT NULL,
        totalltr FLOAT NOT NULL,
        totalcash FLOAT NOT NULL,
        tally FLOAT NOT NULL,
        short VARCHAR(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO $tableName (name, open, close, tdrate, cashoff, cashhand, credit, upi, swipe, test, other, fueltype, totalltr, totalcash, tally, short) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdddddddddddddds", $name, $open, $close, $tdrate, $cashoff, $cashhand, $credit, $upi, $swipe, $test, $other, $fueltype, $totalltr, $totalcash, $tally, $short);

    // Execute the statement
    if ($stmt->execute()) {
        
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();


?>
</body>
</html>
