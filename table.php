<?php
$conn=mysqli_connect("localhost","root","","web");

if($conn){
    echo"connected successfully";
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        $sql="select*from student";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            echo '<table class="table">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>NAME</th>";
            echo "<th>ROLL</th>";
            echo "<th>ADDRESS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" .$row["ID"]."</td>";
                echo "<td>" .$row["NAME"]."</td>";
                echo "<td>" .$row["ROLL"]."</td>";
                echo "<td>" .$row["ADDRESS"]."</td>";
                echo "</tr>";
            }echo "</tbody>";
            echo '</table>';
        }
        ?>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
