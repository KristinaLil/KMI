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
                    <div class="card text-center">
                        <div class="card-header">
                            <h5>KMI Skaičiuoklė</h5>
                        </div>
                        <div class="card-body">
                            Pats populiariausias svorio įvertinimo būdas - kūno masės indeksas (KMI). Šis svorio indeksas padeda įvertinti mitybos būklę - svorio nepakankamumą, antsvorį, nutukimo laipsnį, o taip pat su tai susijusių lėtinių ligų rizikos laipsnį. Savo kūno masės indeksą Jums padės apsiskaičiuoti mūsų KMI skaičiuoklė:
                            <form action="out.php" method="get">
                                <div class="mb-3 mt-5 row">
                                    <label class="col-sm-4 col-form-label">Kūno svoris (kg):</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kg" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 mt-3 row">
                                    <label class="col-sm-4 col-form-label">Ūgis (cm):</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cm" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 mt-5">
                                    <button type="submit" class="btn btn-warning">Skaičiuoti</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>