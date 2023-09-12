<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        <?php include  "style.css"?>
    </style>
</head>
<body class="container"></body>


<div class="mt-5" >
    <h1 class="text-center text-primary" >Task 01</h1>
    <h5 class="text-center text-dark" >Personal Information Page</h5>
    <?php 
        echo"My name is Md Farid Hossain. I am 21 years old. I live in Bangladesh. I am a student. Besides studying, I am learning web development from Ostad website.";
    ?>
</div>
<h1 class="text-center text-primary" >Task 02</h1>
<h5 class="text-center text-dark" >Temperature Converter</h5>
    <div class="col-md-6 m-auto card p-3">
       <form method="post" >
            <div class="mb-3">
                <label  class="form-label">Enter your F,C number :</label>
                <input type="number" name="num1" class="form-control">
            </div>
            <div class="mb-3">
            <select name="ope" class="form-select" >
            <option selected>Open this select menu</option>
            <option value="f" >F</option>
            <option value="c" >C</option>
            </select>
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">Convert</button>
            </div>
            </form>
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $val1 =$_POST["num1"];
                $val3 =$_POST["ope"];
                switch ($val3) {
                    case "f":
                    $results = ($val1-32)*5/9;
                    echo "Restult:$results";
                    break;
                    case "c":
                    $results = ($val1*1.8)+32;
                    echo "Restult:$results";
                    break;
                    default:
                    echo "No Result";
                }
            }
        ?>
            </div>
       </div>


      


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
