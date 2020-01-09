<?php

const SeverHTML = 'https://proj-mysql.uopnet.plymouth.ac.uk/sql.php?db=isad251_mwilsonslider&table=tbl_customer&pos=0';
const User = 'ISAD251_MWilsonSlider';
const Pass = 'ISAD251_2220142';
const DataBase = 'ISAD251_MWilsonSlider';

function getConnection()
{
    $dataSourceName = 'mysql:dbname='.DataBase.';host='.SeverHTML;
    $dbConnection = null;
    try
    {
        $dbConnection = new PDO($dataSourceName, User, Pass);

    }  catch (PDOException $err)
    {
        echo 'Connection failed: ', $err->getMessage();
    }
    return $dbConnection;
}

function getAll($tablename)
{
    $statement = getConnection()->prepare("SELECT * FROM ".$tablename);
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

