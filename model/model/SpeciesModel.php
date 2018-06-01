<?php

function getSpecies() 
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM species";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function editSpecies($ID) 
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM species WHERE species_id = '$ID'";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetch();
}

function updateSpecies($ID, $name){
    $db = openDatabaseConnection();
    $sql = "UPDATE species SET species_description='$name' WHERE species_id='$ID'";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return true;
}

function insertSpecies($ID, $name){
    $db = openDatabaseConnection();
    $sql = "INSERT species SET species_description='$name' WHERE species_id='$ID'";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return true;  
}