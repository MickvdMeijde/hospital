<?php

function getPatients()
{
    $db = openDatabaseConnection();
    $sql = "SELECT patients.patient_id AS ID, patients.patient_name AS Name, species.species_description AS Species, clients.client_firstname AS FirstName, clients.client_lastname AS LastName, patients.patient_status AS PatientStatus FROM patients INNER JOIN species ON species.species_id = patients.species_id INNER JOIN clients ON clients.client_id = patients.client_id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll(); 
}

function editPatients($ID) 
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM patients WHERE ID = '$id'";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetch();
}