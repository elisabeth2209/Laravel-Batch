<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Contoh No 1</h3>";
        $trainer = ["Rezky", "Arya", "Farrel", "Abduh", "Abdul"];
        print_r($trainer);
        
        echo "<h3> Contoh No 2</h3>";
        echo "Total Trainer: " . count($trainer);
        echo "<ol>";
        echo "<li>" . $trainer[0] ."</li>";
        echo "<li>" . $trainer[1] ."</li>";
        echo "<li>" . $trainer[2] ."</li>";
        echo "<li>" . $trainer[3] ."</li>";
        echo "<li>" . $trainer[4] ."</li>";
        echo "</ol>";

        echo "<h3>Contoh 3</h3>";
        $biodata = [
            ["nama" => "Rezky","umur" => 25, "materi"=>"Laravel"],
            ["nama" => "Thio","umur" => 27,"materi"=>"Python"],
            ["nama" => "Fiqry","umur" => 25,"materi"=>"Digital Marketing"]
        ];

        echo "<pre>";
        print_r($biodata);
        echo "</pre>";
    ?>
</body>
</html>
