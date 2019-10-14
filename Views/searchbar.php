<?php

if (isset($_SESSION["loggedUser"])) {

    if ($_SESSION["loggedUser"]->getId_Rol() === 1) {

        require_once "user-navbar.php";
    } else
        header("Location: ../Cine/ShowListView");
} else {
    require_once 'anon-navbar.php';
}

/*El último header es para reestringir entradas de Admins*/

?>





<div class="container">
    <div class="jumbotron mt-5">
        <form action="<?php echo FRONT_ROOT ?>Pelicula/ShowFilteredMovies" method="POST">
            <div class="col-md-6">
                <h3>Elije una categoria o una fecha: </h3>
            </div>
            <br>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group col-md-6" role="group" aria-label="First group">
                    <select name="id" class="form-control ">
                        <option disabled selected>Elije una categoria...</option>
                        <?php
                        foreach ($generoList as $generoValue) {
                            ?>
                            <option value="<?php echo $generoValue->getId(); ?>"> <?php echo $generoValue->getNombre(); ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group col-md-3" role="group" aria-label="Second group">
                    <input type="date" min="1000-01-01" class="form-control">
                </div>
                <div class="btn-group col-md-3" role="group" aria-label="Third group">
                    <button type="submit" class="btn  btn-info">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>