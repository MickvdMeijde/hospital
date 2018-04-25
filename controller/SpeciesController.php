<? 

require(ROOT . "model/SpeciesModel.php");

function species()
{
    render("home/species", array(
        "Data" => getSpecies()
    ));

}
function edit_species($ID)
{
    render("home/editspecies", array(
        "Data" => editSpecies($ID),
        "id" => $id
    ));
    if(isset($_POST['Update'])) {
        $name = $_POST['name'];
    }
}
function editConfirmSpecies($ID){
     if(isset($_POST['Update'])) {
        $name = $_POST['name'];
        updateSpecies($ID, $name);
    }
}