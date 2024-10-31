<?php include "includes/header.php" ?>
<?php 
    require "../examenDesarrollo/includes/config/connectdb.php";

    $db = connectdb();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $phone = $_POST["phone"];
        $id_propiertie = $_POST["id_propiertie"];
        $id_seller = $_POST["id_seller"];

        $query = "insert into sales (name, lastName, phone, id_seller, id_propiertie) values('$name', '$lastName', '$phone', '$id_seller', '$id_propiertie');";

        $response = mysqli_query($db, $query);

        if($response){
            echo "Registro correcto";
        }else{
            echo "Fallo en el registro";
        }

    }
?>


<section>
    <h2>Crear Sale Form</h2>
    <div>
        <form action="crearSales.php" method="POST">
            <fieldset>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Buyer's name">
                </div>
                <div>
                    <label for="lastName">LastName</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Buyer's lastname">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="555 5 5555 55">
                </div>
                <div>
                    <label for="id_propiertie">Propiertie</label>
                    <input type="number" id="id_propiertie" name="id_propiertie" placeholder="1,2,3,4,...">
                </div>
                <div>
                    <label for="id_seller">Seller</label>
                    <input type="number" id="id_seller" name="id_seller" placeholder="1,2">
                </div>
                <div>
                    <button type="submit">Create a New Sale</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php" ?>