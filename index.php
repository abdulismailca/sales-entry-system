<!DOCTYPE html>
<html>
<head>
    <title>Sales Data</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body> 
    <div id="navbar">
        <div id="left">
            <img src="assets/images/bpcllogo.jpeg" alt="logo" />
        </div>
        <div id="right">
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="display_data.php">Display all</a>
                <a href="http://www.linkedin.com/in/abdulismailca">Contact</a>

            </nav>
        </div>
    </div>
    <div class="main">
        
        <div class="main-rg">
    
            <form class="form-grid" method="post" action="collected.php"  id="myForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name">Salesman Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="open">Opening Read:</label>
                    <input type="number" id="open" name="open" step="any" placeholder="Enter opening read">
                </div>
                <div class="form-group">
                    <label for="close">Closing Read:</label>
                    <input type="number" id="close" name="close" step="any" placeholder="Enter closing read">
                </div>
                <div class="form-group">
                    <label for="tdrate">Enter Today Rate:</label>
                    <input type="number" id="tdrate" name="tdrate" step="any" placeholder="Enter Today Rate">
                </div>
                <div class="form-group">
                    <label for="cashoff">Cash in Office:</label>
                    <input type="number" id="cashoff" name="cashoff" step="any" placeholder="Enter Cash in Office">
                </div>
                <div class="form-group">
                    <label for="cashhand">Cash in Your Hand:</label>
                    <input type="number" id="cashhand" name="cashhand" step="any" placeholder="Cash in your hand">
                </div>
                <div class="form-group">
                    <label for="credit">Credit:</label>
                    <input type="number" id="credit" name="credit" step="any" placeholder="Enter Credit">
                </div>
                <div class="form-group">
                    <label for="upi">UPI:</label>
                    <input type="number" id="upi" name="upi" step="any" placeholder="Enter UPI">
                </div>
                <div class="form-group">
                    <label for="swipe">Swipe:</label>
                    <input type="number" id="swipe" name="swipe" step="any" placeholder="Enter Swipe">
                </div>
                <div class="form-group">
                    <label for="test">Test:</label>
                    <input type="number" id="test" name="test" step="any" placeholder="Enter Test">
                </div>
                <div class="form-group">
                    <label for="other">Other:</label>
                    <input type="number" id="other" name="other" step="any" placeholder="Enter Other">
                </div>
                <div class="form-group">
                    <label for="fuel-type">Select Fuel Type:</label>
                    <select id="fueltype" name="fueltype">
                        <option value="petrol">Petrol</option>
                        <option value="diesel">Diesel</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Calculate">
                </div>
            </form>
        </div>
    </div>


   

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var open = document.getElementById("open").value;
            var close = document.getElementById("close").value;
            var tdrate = document.getElementById("tdrate").value;
            var cashoff = document.getElementById("cashoff").value;


            if (name === "" || open === "" || close== "" || tdrate=="" || cashoff=="") {
                alert("All fields must be filled out before calculate.");
                return false; // Prevents form submission
            }

            return true; // Allows form submission
        }
    </script>


</body>
</html>

    
</body>
</html>
