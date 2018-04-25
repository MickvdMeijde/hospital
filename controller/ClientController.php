<?

require(ROOT . "model/ClientModel.php");

function index()
{
    render("home/clients", array(
        "Data" => getClients()
    ));

}

function index_edit($ID)
{
    render("home/editclients", array(
        "Data" => editClients($ID)
    ));

}