<?php

    if(isset($_POST['Create'])) {
        createPatients();
        header('location: ' . URL . 'home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>