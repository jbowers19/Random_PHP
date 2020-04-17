<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) && is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) ){ 
        
        $gallons = $_POST['distance'] / $_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance']/65;

        echo '<div class="page-header"><h1>Total Estimated Cost</h1></div><p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . number_format($dollars, 2) . '. If you drive at an average of 65 miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours.</p>';



    } else {
        echo '<div class="page-header"><h1>Error!</h1></div><p class="text-danger">Please enter a valid distance, price per gallon and fuel efficiency.</p>';
    }
}





?>


<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="trip_calc.php" method="post">
<p>Distance (in miles): <input type="number" name="distance"></p>
<p>Average Price per Gallon: <input type="radio" name="gallon_price" value="2.00"> 2.00
                <input type="radio" name="gallon_price" value="2.50"> 2.50
                <input type="radio" name="gallon_price" value="3.00"> 3.00
                </p>
                <p>Fuel Efficiency : <select name="efficiency">
                    <option value="10">Terrible</option>
                    <option value="20">Decent</option>
                    <option value="30">Very Good</option>
                    <option value="50">Outstanding</option>
                </select></p>

    <input type="submit" name="submit" value="Calculate">            
</form>




