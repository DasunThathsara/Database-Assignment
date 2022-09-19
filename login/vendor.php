<!--------------- PHP Code --------------->
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hospital";
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if($connection->connect_error){
        die("Connection failed : " . $connection->connect_error);
    }

    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $password = $_POST['regNo'];

        $sql = "SELECT * FROM vendor WHERE name='{$name}' AND regNo='{$password}' LIMIT 1";

        $result = $connection->query($sql);
        if(mysqli_num_rows($result) == 1){
            echo "Successffully logged";
            exit();
        }
        else{
            echo "Invalid username or password";
            exit();
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasun Thathsara</title>

    <!-------------------  external js  ------------------->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-------------------  external css  ------------------->
    <link rel="stylesheet" href="/Database%20Assignment/CSS/style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <section class="showcase-area container-fluid full" id="home">
        <div class="container anmd" id="home">
            <h3 class="heading" style="font-size: 40px; margin-bottom: 90px;">Vendor Login</h3>
            <div class="container my-5">
            <form method="post">
                <div class="row mb-3">
                    <lable class="col-sm-3 col-form-lable">Name</lable>
                    <div class="col-sm-6">
                        <input required type="text" class="form-control" name="name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <lable class="col-sm-3 col-form-lable">Password</lable>
                    <div class="col-sm-6">
                        <input required type="text" class="form-control" name="regNo" />
                    </div>
                </div>
                <?php
                ?>                    
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>

    <script src="/Database%20Assignment/JavaScript/script.js"></script>
</body>
</html>
