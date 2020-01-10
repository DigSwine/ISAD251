<?php

const SeverHTML = 'proj-mysql.uopnet.plymouth.ac.uk';
const User = 'ISAD251_MWilsonSlider';
const Pass = 'ISAD251_22201420';
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

