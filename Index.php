<?php

include 'dbFunctions.php';

if(isset($_POST['table']))
{
    $tablename = $_POST['table'];
}

?>

<html>
<head>
    <title>PHP Demo : Read</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h1>Select Table</h1>

    <select name="table" id="ddTable">
        <option value="tbl_item">Products</option>
        <option value="tbl_customer">Customers</option>
        <option value="Orders">Orders</option>
        <option value="Order_Lines">Order Lines</option>
    </select>

    <input type="submit" value="Submit">
    <p>
        <?php

        $results = getAll($tablename);
        if ($results)
        {
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
                echo '<tr>';

                foreach($row as $cell)
                {
                    echo '<td>'.$cell.'</td>';
                }
            }
            echo '</table>';
        }
        ?>
    </p>
</form>
</body>
</html>


