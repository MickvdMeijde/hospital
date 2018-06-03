<?php

require(ROOT . "model/ClientModel.php");

function index()
{
    render("home/clients", array(
        "client" => getClients()
    ));

}

function edit_clients($id)
{
    render("home/editclients", array(
        "Data" => editSpecies($id),
        "id" => $id
    ));
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
    }
}
function editConfirmClients($id){
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
        updateSpecies($id, $name);
    }
    render("home/species", array(
        "Data" => getSpecies()
    ));
}