<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
    render("home/patients", array(
        "patients" => getPatients()
    ));

}
// //function edit_patients($ID)
// {
//     render("home/editpatients", array(
//         "Data" => editPatients($ID)
//     ));

// }