<?php

    echo 'lol';
    var_dump($_POST);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Allo Ciné</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="content">

    <!-- Navbar -->
        
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.html">Allo Ciné</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="members.html">Members<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Films ..." id="search_film">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Find Film !</button>
            </form>
        </nav>
    
     <!-- Films Cards -->

        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                <h4 class="card-title">Secondary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
        </div>
    </div>
    
</body>
</html>

