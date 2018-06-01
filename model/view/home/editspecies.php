<form method="POST" action="<?= URL . "species/editConfirmSpecies/".$Data["species_id"] ?>">
_    <div class="create">
        <h1 style="color: black;"><b>Update</b></h1>
        <label class="createLabel"><b>Species</b></label>
        <input type="text" placeholder="Dog" name="name" value="<?php echo $Data['species_description']; ?>" autocomplete="off" required>
        <br>
        <button class="button button-primary createButton" type="submit" name="Update">Update</button><a class="button button-primary" href="<?= URL . "species"?>">Cancel</a>
    </div>
</form>