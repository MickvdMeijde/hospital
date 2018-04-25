<?php

    if(isset($_POST['Update'])) {
        editConfirmSpecies($id);
        header('location: ' . URL . 'home/species');
    }
?>
<form method="POST" action="<?= URL . "home/">
    <div class="create">
        <h1 style="color: black;"><b>Update</b></h1>
        <label class="createLabel"><b>Species</b></label>
        <input type="text" placeholder="Dog" name="name" value="<?php echo $Data['species_description']; ?>" autocomplete="off" required>
        <br>
        <button class="button button-primary createButton" type="submit" name="Update">Update</button><a class="button button-primary" href="http://localhost/hospital/home/species/">Cancel</a>
    </div>
</form>