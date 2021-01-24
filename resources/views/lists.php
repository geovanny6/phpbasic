<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar productos en pdf</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Listado</h1>
                <h4>Proudvots disponibles para ser exportados en pdf</h4>
                <?php 

                foreach ($products as $product) {
                    # code...
                    echo "<strong>{$product->name}</strong> - {$product->description}<br>";
                }
                
                ?>
                <hr>
                <p><a href="pdf.php">Exportar en pdf</a></p>
                <span class="author">Geovanny Orellana mira mas información en  <a href="https://geoavanny6.wordpress.com">Geovanny blog</a> </span>
            </div>
        </div>
    </div>
</body>
</html>