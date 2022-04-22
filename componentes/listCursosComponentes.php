<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre curso</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once "../db/conexion.php";
        $sql = "SELECT * FROM curso";
        $result = mysqli_query($con, $sql);
        $contador = 0;
        while ($data = mysqli_fetch_assoc($result)) {
            $contador++;
        ?>
            <tr>
                <th scope="row"><?php echo $contador ?></th>
                <td><?php echo $data["nombre_curso"] ?></td>
                <td>
                    <button class="btn btn-success" onclick="obtener('<?php echo $data["nombre_curso"] ?>', '<?php echo $data["id_curso"] ?>')">Actualizar</button>
                    <button class="btn btn-danger">Eliminar</button>
                    <a href="agregartemas.php?id_curso=<?php echo $data["id_curso"] ?>">agregar temas</a>
                </td>
            </tr>
        <?php }  ?>
    </tbody>
</table>
