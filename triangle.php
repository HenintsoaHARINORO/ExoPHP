<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/tyle1.css">
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
<h2 style="text-align: center;font-family: 'Accanthis ADF Std';color: #117a8b;font-size: 50px">Triangle de Pascal</h2>
<p></p>

<div class="row">

    <div class="column1" style="margin-top: 10px;height: 50%;margin-left: 25%;width: 50%">
        <div class="card" style="background-color: #17a2b8">
            <?php
            $a=$_POST["vala"];

            function factoriel($a)
            {
                $i = 2;
                for ($fact = 1; $i <= $a; $i++) {
                    $fact = $fact * $i;
                }
                return $fact;
            }

            ?>
            <?php
            $a=$_POST["vala"];
            $b=$_POST["valb"];
            function combinaison($a,$b)
            {

                if ($a >= $b)
                    $comb = factoriel($a) / (factoriel($b) * factoriel($a - $b));
                else
                    echo "Maths Error";

                return $comb;
            }



            ?>

            <form action="triangle.php" method="post">

                n:<input type="text" name="valc"> <br><br>
                <input type="submit" value="Calculer"><br><br>
                <?php
                $c=$_POST["valc"];
                if(isset($c)) {
                    for ($j = 0; $j <= $c; $j++) {
                        for ($i = 0; $i <= $c; $i++) {

                            if ($j >= $i) {
                                echo '' . combinaison($j, $i) . ' ';
                            }

                        }
                        echo "<br>";
                    }
                }
                ?>
            </form>
        </div>
    </div>





<script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
