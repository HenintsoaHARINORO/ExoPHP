<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default navbar-expand-md navbar-light bg-light">

    <a class="navbar-brand" href="">Calcul</a>

    <button style="float: left" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon" style="display: block;float: left !important;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="multiplication.php">Multiplication</a>
            </li>
        </ul>
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="factoriel.php">Factoriel</a>
            </li>
        </ul>
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="combinaison.php">Combinaison</a>
            </li>
        </ul>
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="triangle.php">Triangle de Pascal</a>
            </li>
        </ul>
    </div>
</nav>
<h2 style="text-align: center;font-family: 'Accanthis ADF Std';color: #117a8b;font-size: 50px">Multiplication</h2>
<p></p>

<div class="row">

    <div class="column1" style="margin-top: 10px;height: 50%;margin-left: 25%;width: 50%">
        <div class="card" style="background-color: #17a2b8">
            <form action="multiplication.php" method="post">
                Nombre:<input type="text" name="vala"> <br><br>
                <input type="submit" value="Calculer"><br><br>

                <?php
                $a=$_POST["vala"];
                if(isset($a)) {
                    $i = 0;
                    $res = 0;
                    for (; $i < 11; $i++) {
                        $res = $i * $a;
                        echo " $i * $a = $res <br>";
                    }
                }
                ?>
            </form>
        </div>
    </div>





</div>

<script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>