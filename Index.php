<?php

include 'dbFunctions.php';

if(isset($_POST['table']))
{
    $tablename = 'tbl_item';
}

?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h5 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .backgroundimg {
        background-image: url('Addons/Images/InsideStore.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>
<body>

<div class="backgroundimg w3-display-container w3-text-white">
    <div class="w3-display-middle w3-jumbo">
        <p>Bubblegum Tea Rooms</p>
    </div>
    <div class="w3-display-topleft w3-container w3-xlarge">
        <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">Menu</button></p>
        <p><button onclick="document.getElementById('order').style.display='block'" class="w3-button w3-black">Order</button></p>
    </div>
    <div class="w3-display-bottomleft w3-container">
        <p class="w3-xlarge">Monday - Friday 10:00 - 19:00 | Saturday 12:00 - 17:00 </p>
        <p class="w3-large">5 Morgan St, Plymouth</p>
    </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black w3-display-container">
            <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Foodk</h1>
        </div>
        <div class="w3-container">
                <?php
                $tablename = 'tbl_food';
                $results = getAll($tablename);
                    $columns = empty($results) ? array() : array_keys($results[0]);
                    $idColumn = $columns[0];
                    $tableString = '<table border="1"><tr>';
                    $inputString = '';
                    $insertString = '';
                    if ($columns != "Food_Name") {
                        foreach ($columns as $column) {
                            $tableString .= '<h5>' . $column . '</h5>';
                            $inputString .= '<h5>' . $column . '</h5>';
                            $insertString .= '<td><input type=\'text\' name=\'' . $column . '\'/></td>';
                        }
                        foreach ($results as $row) {
                            echo '<h5>' . "\n" . '</h5>';
                            foreach ($row as $cell) {
                                if ($cell == '1') {
                                } else {
                                    if ($cell == '2') {
                                    } else {
                                        if ($cell == '3') {
                                        } else {
                                            echo '<h5>' . $cell . '</h5>';
                                        }
                                    }
                                }
                                echo '</table>';
                            }
                        }
                    }
                ?>
        </div>
        <div class="w3-container w3-black">
            <h1>Drinks</h1>
        </div>
        <div class="w3-container">
            <?php
            $tablename = 'tbl_drink';
            $results = getAll($tablename);
            $columns = empty($results) ? array() : array_keys($results[0]);
            $idColumn = $columns[0];
            $tableString = '<table border="1"><tr>';
            $inputString = '';
            $insertString = '';
            if ($columns != "Drink_Id") {
                foreach ($columns as $column) {
                    $tableString .= '<h5>' . $column . '</h5>';
                    $inputString .= '<h5>' . $column . '</h5>';
                    $insertString .= '<td><input type=\'text\' name=\'' . $column . '\'/></td>';
                }
                foreach ($results as $row) {
                    echo '<h5>' . "\n" . '</h5>';
                    foreach ($row as $cell) {
                        if ($cell == '1') {
                        } else {
                            if ($cell == '2') {
                            } else {
                                if ($cell == '3') {
                                } else {
                                    echo '<h5>' . $cell . '</h5>';
                                }
                            }
                        }
                        echo '</table>';
                    }
                }
            }
            ?>


        </div>
    </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
            <span onclick="document.getElementById('order').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Contact</h1>
        </div>
        <div class="w3-container">
            <p>Reserve a table, ask for today's special or just send us a message:</p>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Table Number" required name="Name"></p>
                <select>
                    <option value="BFG">Black Forrest Gatue</option>
                    <option value="BC">Butter Cake</option>
                    <option value="CC">Carrot Cake</option>
                    <option value="JJMT">Jin Jun Mei Tea</option>
                    <option value="LS">Lapsang Souchong Tea</option>
                    <option value="EGT">Earl Grey Tea</option>
                </select>
                <p><button class="w3-button" type="order">Place Order</button></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>
</form>
</body>
</html>