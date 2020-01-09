<?php

include 'dbFunctions.php';
if(isset($_POST['table']))
{
    $tablename = $_POST['table'];
}
?>
<!DOCTYPE html>
<html>
<title>Bubblegum Tea Rooms</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body,h1,h5 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('Addons/Images/InsideStore.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>
<body>

<div class="bgimg" style="color: white">
    <div class="w3-display-middle w3-jumbo">
        <p>Bubblegum Tea Rooms</p>
    </div>
    <div style="position: relative; left: 25px; top: 25px">
        <p><button onclick="document.getElementById('Menu').style.display='block'" class="w3-button w3-black">Menu</button></p>
        <p><button onclick="document.getElementById('Order').style.display='block'" class="w3-button w3-black">Order</button></p>
    </div>
    <div style="position: relative; left: 25px; top: 750px" class=" w3-container">
        <p class="w3-xlarge">Monday - Friday 10:00 - 19:00 | Saturday 12:00 - 17:00</p>
        <p class="w3-large">15 Royal Lane, Plymouth</p>
    </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black w3-display-container">
            <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
        <div class="w3-container w3-black">
            <h1>Cakes</h1>
        </div>
        <div class="w3-container">
            <h5>Black Forrest Gatue</h5>
            <h5>Butter Cake</h5>
            <h5>Carrot Cake</h5>
        </div>
        <div class="w3-container w3-black">
            <h1>Drinks</h1>
        </div>
        <div class="w3-container">
            <h5>Jin Jun Mei Tea</h5>
            <h5>Lapsang Souchong Tea</h5>
            <h5>Earl Grey Tea</h5>
        </div>
    </div>
</div>

<!-- Order Modal -->
<div id="Order" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
            <span onclick="document.getElementById('Order').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Order</h1>
        </div>
        <div class="w3-container">
            <p>Order Food/Drinks</p>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Table Number" required TableNumber="Table"></p>
                <select>
                    <option value="BFG">Black Forrest Gatue</option>
                    <option value="BC">Butter Cake</option>
                    <option value="BC">Carrot Cake</option>
                    <option value="BC">Jin Jun Mei Tea</option>
                    <option value="BC">Lapsang Souchong Tea</option>
                    <option value="BC">Earl Grey Tea</option>
                </select>

                <p><button class="w3-button" type="submit">SEND MESSAGE</button></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>
        <?php
        $results = getAll($thistablename);
        if ($results) {
            //Hopefully if the results have been the right PDO type we should be able
            //to extract the column names with ease.
            $columns = empty($results) ? array() : array_keys($results[0]);
            $idColumn = $columns[0];

            $tableString = '<table border="1"><tr>';
            $inputString = '';
            $insertString = '';
            foreach($columns as $column)
            {
                $tableString .= '<th>'.$column.'</th>';
                $inputString .= '<th>'.$column.'</th>';
                $insertString .= '<td><input type=\'text\' name=\''.$column.'\'/></td>';

            }
            foreach($results as $row)
            {
                foreach($row as $cell)
                {

                }
            }
        }
    ?>
    </p>
</form>
</body>
</html>


