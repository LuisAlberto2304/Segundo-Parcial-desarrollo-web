<?php
    include "includes/header.php";

    require "../examenDesarrollo/includes/config/connectdb.php";

    $db = connectdb();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $query = "insert into sellers (name, email, phone) values('$name', '$email', '$phone');";

        $response = mysqli_query($db, $query);

        if($response){
            echo "Registro correcto";
        }else{
            echo "Fallo en el registro";
        }
    }  
?>

<section>
    <h2>Crear Seller Form</h2>
    <div>
        <form action="crearSeller.php" method="POST">
            <fieldset>
                <legend>Fill all Form Fields to Create a New Seller</legend>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="your@email.com">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="555 5 5555 55">
                </div>
                <div>
                    <button type="submit">Create a New Seller</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>


<?php
    include "includes/footer.php";
?>