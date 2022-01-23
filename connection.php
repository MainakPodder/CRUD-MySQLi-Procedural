<!-- 🎯 MySQLi Procedural -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Bootstrap Links -->
    <?php include "links/links.php" ?>

</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center">
            <?php
            $server = "localhost";
            $userName = "root";
            $password = "";
            $database = "collage1";

            $conn = mysqli_connect($server, $userName, $password, $database);

            // if (!$conn) {
            //     die("CONNECTION FAILED" . mysqli_connect_error());
            // }else {
            //     echo("SUCCESSFULL");
            // }
            echo (!$conn) ? "😪OOPS,CONNECTION FAILED<hr>" . mysqli_connect_error() : "🕺CONNECTION SUCCESSFULL<hr>";
            ?>
        </h1>
    </div>
</body>

</html>