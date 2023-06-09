<?php

include "lavageesManager.php";
$lavageeManager = new LavageesManager();

if(!empty($_POST)){      
    $searchInput = $_POST["search"] ;
    $data = $lavageeManager->searchByInput($searchInput);
}
    else
    {

        $data = $lavageeManager->getAllLavagees();
    
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
    <title>Search Lavagee</title>
</head>
<body>
<header>
        <nav  class="navBarContainer">
            <div>
                <section class="navbar w-100    bg-light d-flex flex-row  justify-content-evenly ">
                    <div >
                        
                        <a class="cursor-pointer" href="admin.php"><img class="img" src="../img/car wash (4).png"></a>

                    </div>
                   
                    <a class="btn   btn-md rounded-3 btn-danger" href="logout.php">log out</a>



        </nav>
    </header>
    <main>
        <section class=" w-100 text-center mt-5">
            <form method="post" >
                <input type= "text" class="w-25 searchBar ps-3  rounded-3 border-1" name="search" >
                <input type="submit" value ="search" class="btn btn-info mb-2">
            </form>
        </section>
        <section>
            
            <table class="container bg-light border broder-rounded w-100 px-5 mt-5">
                
                <div class='tableTittles ms-2'>
                    <tr class=''>
                        <th >Image</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>La date</th>
                        <th>Etat</th>
                        <th>Le prix<th>
                        <th>Action</th>
                    </tr> 
                <div>

                
                <?php
                foreach($data as $lavagee){

                
            ?>
                <div class="tableElements mt-2">
                    <tr>

                        <td > <img class="border rounded-circle" style="max-width:50px;" src="<?php echo '../img/' . $lavagee->getImage() ?>"></td>
                        <td><?php echo $lavagee->getfirstName()?></td>
                        <td><?php echo $lavagee->getlastName() ?></td>
                        <td><?php echo $lavagee->getAge() ?></td>
                        <td><?php echo $lavagee->getOccupation() ?></td>
                        <td><?php echo $lavagee->getSalary() ?></td>
                        <td><a class= ' mt-2 mb-2  btn btn-success' id="buttonEdit" " href="edit.php?id=<?php echo $lavagee->getId() ?>" >edit</a></td>
                        <td><a class=' btn  mt-2 mb-2 btn-md btn-danger' href="delete.php?id=<?php echo $lavagee->getId() ?>">delete</a></td>
                    
                    
                    </tr>      
                    <?php }?>
                <div>

            </table>
       


    </main>
</body>
</html>