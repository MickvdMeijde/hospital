<?php 

require(ROOT . "model/SpeciesModel.php");

function index()
{
    render("home/species", array(
        "Data" => getSpecies()
    ));

}
function edit_species($id)
{
    render("home/editspecies", array(
        "Data" => editSpecies($id),
        "id" => $id
    ));
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
    }
}
function editConfirmSpecies($id){
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
        updateSpecies($id, $name);
         render("home/species", array(
        "Data" => getSpecies()
    ));
    }
}

function insert_species($id){
    render("home/insertspecies", array(
        "Data" => insertSpecies($id), 
        "id" => $id
    ));
    if(isset($_POST['Insert'])) {
        $name = $_POST['name'];
    }

}