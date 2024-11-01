<!-- Este codigo no sirve, pero se debe de ver la informacion de la tabla a la que se esta
    haciendo referencia, aqui el admin puede cambiar el estado de la consulta y el 
    usuario podra ver si se la aceptaron o no-->

<?php include "../includes/headerAdmin.php" ?>
<section>
    <h2>Table for the vacations</h2>
    <div>
        <table border="1" class="tableAdmin">
            <tr>
                <th>Number</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Employee</th>
                <th colspan="2">Options</th>
            </tr>
            <tr>
                <td>0</td>
                <td>0000</td>
                <td>0000</td>
                <td>----</td>
                <td>----</td>
                <td><a href="">Modify</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        </table>
    </div>
</section>

<?php include "../includes/footer.php" ?>