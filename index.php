<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>AirTicket</title>
</head>
<body class="container">
    <h1 class="d-flex justify-content-center">Skrydžio bilieto forma</h1>

    <form action="ticket.php" method="post">
    <div>
        <label for="asmensKodas">Asmens kodas:</label>
        <input type="text" name="asmensKodas" class="form-control" required><br>
    </div>
    <div>
        <label for="vardas">Vardas:</label>
        <input class="form-control" type="text" name="vardas" required><br>
    </div>
    <div >
        <label for="pavarde">Pavardė:</label>
        <input class="form-control" type="text" name="pavarde" required><br>
    </div>
    <div>
        <label for="isKurSkrenda">Iš kur skrenda:</label>
        <select name="isKurSkrenda" class="form-control">
            <?php include 'functions.php'; echoAirportsOptions(getDepartureAirports()); ?>
        </select><br>
    </div>
    <div>
        <label for="iKurSkrenda">Į kur skrenda:</label>
        <select name="iKurSkrenda" class="form-control">
            <?php include 'functions.php'; echoAirportsOptions(getDestinationAirports()); ?>
        </select><br>
    </div>
    <div>
        <label for="kaina">Kaina:</label>
        <input type="text"class="form-control" name="kaina" required><br>
    </div>
    <div>
        <label for="bagazas">Bagažas:</label>
        <input type="text" class="form-control" name="bagazas" required><br>
    </div>
    <div>
        <label for="pastabos">Pastabos:</label>
        <textarea name="pastabos" class="form-control"></textarea><br>
    </div>
    <div>
        <button type="submit" class="btn btn-primary center">Spausdinti bilietą</button>
    </div>
    </form>
</body>
</html>