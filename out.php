<?php
$cm = $_GET['cm'] / 100;
$kg = $_GET['kg'];
$kmi = round($kg / $cm / $cm, 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI Skaičiuoklė</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col">
                <div class="w-50 m-auto mt-5">
                    <div class="card text-center mb-5">
                        <div class="card-header">
                            <h5>KMI Skaičiuoklė</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <h4 class="mb-3">
                                    Jūsų kūno masės indeksas:
                                </h4>
                                <h3 class="mb-3">
                                    <?php echo $kmi ?>
                                </h3>
                                <p>
                                    <?php if ($kmi < 18.5) {
                                        echo "<span class='text-primary'>Per mažas svoris</span>";
                                    } else if (18.5 <= $kmi && $kmi < 24.9) {
                                        echo "<span class='text-success'>Normalus svoris</span>";
                                    } elseif (25.0 <= $kmi && $kmi < 29.9) {
                                        echo "<span class='text-warning'>Viršsvoris</span>";
                                    } elseif (30.0 <= $kmi) {
                                        echo "<span class='text-danger'>Nutukimas</span>";
                                    }
                                    ?>
                                </p>
                                <table class="table table-bordered mt-5">
                                    <tr>
                                        <th>KMI apskaičiavimas</th>
                                        <th>Įvertinimas</th>
                                        <th>Lydinčių, lėtinių ligų rizikos</th>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Mažiau nei 18,5</th>
                                        <td>Per mažas svoris</td>
                                        <td>Dėl mitybos nepakankamumo padidėjusi sergamumo rizika</td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>18,5 - 24,9</th>
                                        <td>Normalus svoris</td>
                                        <td>Nėra rizikos</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>25,0 - 29,9</th>
                                        <td class="table-warning">Antsvoris</td>
                                        <td>Nedidelė rizika</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>Daugiau nei 30</th>
                                        <td>Nutukimas</td>
                                        <td>Didelė rizika</td>
                                    </tr>
                                </table>
                                <a href="index.php" class="btn btn-warning" role="button">Grįžti atgal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>