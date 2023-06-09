<?php
$judul = "Biodata";

$biodata = [
    "name" => "Alex",
    "age" => 20,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ],
];

$biodata2 = [
    "name" => "Siska",
    "age" => 22,
    "address" => [
        "city" => "Bekasi",
        "country" => "Indonesia"
    ],
];

$biodata3 = [
    "name" => "Light Yagami",
    "age" => 18,
    "address" => [
        "city" => "Tokyo",
        "country" => "Japan"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Biodata</title>
</head>

<body>
    <h2>
        <?php echo $judul; ?>
    </h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $biodata["name"] . "<br>";?></td>
      <td><?php echo $biodata["age"] . "<br>";?></td>
      <td><?php echo $biodata["address"]["city"] . "<br>";?></td>
      <td><?php echo $biodata["address"]["country"] . "<br>";?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $biodata2["name"] . "<br>";?></td>
      <td><?php echo $biodata2["age"] . "<br>";?></td>
      <td><?php echo $biodata2["address"]["city"] . "<br>";?></td>
      <td><?php echo $biodata2["address"]["country"] . "<br>";?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><?php echo $biodata3["name"] . "<br>";?></td>
      <td><?php echo $biodata3["age"] . "<br>";?></td>
      <td><?php echo $biodata3["address"]["city"] . "<br>";?></td>
      <td><?php echo $biodata3["address"]["country"] . "<br>";?></td>
    </tr>
  </tbody>
</table>

    <?php
    // ini string output
    echo "Hello Muzammil";

    echo "<br> <br>";

    //ini variable
    // nama mobil aja biar gampang hehe
    $mobil1 = "Mercedes";
    $mobil2 = "BMW";
    $mobil3 = "JEEP";
    $mobil4 = "TOYOTA";
    $mobil5 = "NISSAN";

    echo $mobil1, "<br>";
    echo $mobil2, "<br>";
    echo $mobil3, "<br>";
    echo $mobil4, "<br>";
    echo $mobil5, "<br>";

    echo "<br>";

    //ini constant
    define("Halo", "Konnichiwa Minna");
    echo Halo;


    ?>
</body>

</html>