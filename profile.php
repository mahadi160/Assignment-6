<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Assignment 6</title>
</head>
<body>
<div class="container">
    <a class="btn btn-light mt-5" href="index.php" role="button">Back</a>
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Puofile Picture</th>
                    </tr>
                    <?php
                        if (($handle = fopen("users.csv", "r")) !== false){
                            while (($data = fgetcsv($handle, 1000, ",")) !== false){
                                echo "<tr>";
                                echo "<td>" .$data[0]. "</td>";
                                echo "<td>" .$data[1]. "</td>";
                                echo "<td><img src='".$data[2]."' height='100px' width='100px' style='border-radius: 50%;'></td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </thead>
            <tbody>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>