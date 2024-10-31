<?php include "includes/header.php" ?>
<?php
    require "../examenDesarrollo/includes/config/connectdb.php";

    $db = connectdb();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        $description = $_POST["description"];
        $num_rooms = $_POST["num_rooms"];
        $num_wc = $_POST["num_wc"];
        $num_garage = $_POST["num_garage"];
        $created = $_POST["created"];
        $seller_id = $_POST["seller_id"];

        $query = "insert into propierties (title, price, image, description, num_rooms, num_wc, num_garage, created, seller_id) values('$title', '$price', '$image', '$description', '$num_rooms', '$num_wc', '$num_garage', '$created', '$seller_id');";

        $response = mysqli_query($db, $query);

        if($response){
            echo "Registro correcto";
        }else{
            echo "Fallo en el registro";
        }

    }
?>

<section>
    <h2>Crear Propiertie Form</h2>
    <div>
        <form action="crearPropierties.php" method="POST">
            <fieldset>
                <legend>Fill all Form Fields to Create a New Propiertie</legend>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Title">
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="text" step="0.01" id="price" name="price" placeholder="Price of the house">
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="text" id="image" name="image" placeholder="Localitation of the image of the house">
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="longtext" id="description" name="description" placeholder="Description of the house">
                </div>
                <div>
                    <label for="num_rooms">Number of rooms</label>
                    <input type="text" id="num_rooms" name="num_rooms" placeholder="1,2,3,4...">
                </div>
                <div>
                    <label for="num_wc">Number of wcs</label>
                    <input type="text" id="num_wc" name="num_wc" placeholder="1,2,3,4...">
                </div>
                <div>
                    <label for="num_garage">Number of garages</label>
                    <input type="text" id="num_garage" name="num_garage" placeholder="1,2,3,4...">
                </div>
                <div>
                    <label for="created">Date of the creation of the house</label>
                    <input type="date" id="created" name="created" placeholder="9999/12/31">
                </div>
                <div>
                    <label for="seller_id">Who is the seller</label>
                    <input type="number" id="seller_id" name="seller_id" placeholder="1,2">
                </div>
                <div>
                    <button type="submit">Create a New propiertie</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>


<?php
    include "includes/footer.php";
?>





