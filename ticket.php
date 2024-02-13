<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirTicket - Skrydžio bilieto forma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="ticket-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $asmensKodas = $_POST["asmensKodas"];
            $vardas = $_POST["vardas"];
            $pavarde = $_POST["pavarde"];
            $isKurSkrenda = $_POST["isKurSkrenda"];
            $iKurSkrenda = $_POST["iKurSkrenda"];
            $kaina = $_POST["kaina"];
            $bagazas = $_POST["bagazas"];
            $pastabos = $_POST["pastabos"];

            $papildomaKaina = ($bagazas > 20) ? 30 : 0;
        
            $galutineKaina = $kaina + $papildomaKaina;

            $bilietaiTekstas = "
                <div class='ticket-info'>
                    <h1 class='container bg-secondary mt-3'>Jūsų skrydžio bilietas</h1>
                    <div class='container'>
                        <p><strong>Asmens kodas:</strong> $asmensKodas</p>
                        <p><strong>Vardas:</strong> $vardas</p>
                        <p><strong>Pavardė:</strong> $pavarde</p>
                        <p><strong>Skrydis:</strong>  $isKurSkrenda → $iKurSkrenda</p>
                        <p><strong>Bagažas:</strong> $bagazas kg</p>
                        <p><strong>Pastabos:</strong> $pastabos</p>
                        <p class='d-flex justify-content-end'><strong>Kaina:</strong> $galutineKaina &#8364</p>
                    </div>
                </div>";
        ?>
            <div class="ticket-wrapper">
                <?php echo $bilietaiTekstas; ?>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>