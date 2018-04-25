<?php

function getClients() 
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM clients";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function editClients($id) 
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM clients WHERE client_id = '$id'";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetch();
}