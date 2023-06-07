<?php
include 'lavageesManager.php';



if (isset($_POST['modify'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];
    $salary = $_POST['salary'];
    $matricule = $_POST['matricule'];
    $id = $_GET['id'];

    $lavageeManager = new lavageEdit($first_name, $last_name, $age, $occupation, $salary, $matricule, $id);
    $result = $lavageeManager->LavageUpdate($connect);
    if($result){
        header('location:admin.php');
    }else{
        echo "not update";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Edit lavagee Information</title>


</head>

<body>
    <header>
        <nav class="navBarContainer">
            <div>
                <section class="navbar w-100   bg-light d-flex flex-row  justify-content-evenly ">
                    <div>

                        <a class="cursor-pointer" href="index.php"><img class="img" src="../img/car wash (4).png"></a>

                    </div>

                    <a class="btn   btn-md rounded-3 btn-danger" href="logout.php">log out</a>



        </nav>
    </header>
    <main>

        <section id="replaceClass" class=" editForm  w-100 ">
            <div class="  w-100  h-75 bg-white">
                <form method="post" class="w-100  h-75 bg-white" enctype="multipart/form-data">
                    <?php
                    $id = $_GET['id'];
                    $query_edit = "SELECT * FROM client WHERE ID = '$id'";
                    $result = $connect->query($query_edit);
                    $row = $result->fetch_assoc();
                    ?>
                    <input type="text" name="first_name" class="d-block form-control w-50 mt-2" value=<?php echo $row["last_name"]  ?>><br>
                    <input type="text" name="last_name" class="d-block form-control w-50 mt-2" value=<?php echo $row["last_name"]  ?>><br>
                    <input type="date" class="d-block form-control w-50 mt-2" name="age" value=<?php echo $row["age"] ?>><br>
                    <input class="d-block form-control w-50 mt-2" type="text" name="occupation" placeholder="occupation" required value=<?php echo $row["occupation"] ?>>
                    <input class="d-block form-control w-50 mt-2" type="text" name="salary" placeholder="salary" required value=<?php echo $row["salary"] ?>>
                    <input class="form-control w-50 mt-2" type="text" name="matricule" value=<?php echo $row["matricule"] ?>>
                    <div class="buttonContainer mt-2">
                        <input class=" buttonModify btn-md d-inline btn btn-info mt-2 mb-2 ms-2  " type="submit" value="modify" name="modify">
                        <a href="index.php" class=" buttonCancel btn btn-secondary mt-2 mb-2 border rounded-2">Cancel</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>