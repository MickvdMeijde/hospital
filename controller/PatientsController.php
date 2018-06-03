<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
    render("home/patients", array(
        "patients" => getPatients()
    ));

}

function edit_patients($id)
{
    render("home/editsnatients", array(
        "Data" => editSpecies($id),
        "id" => $id
    ));
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
    }
}
function editConfirmPatients($id){
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
        updateSpecies($id, $name);
    }
    render("home/species", array(
        "Data" => getSpecies()
    ));
}