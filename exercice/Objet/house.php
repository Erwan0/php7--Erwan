<?php

$house = [
    'name' => 'house_of_my_dreams',
    'area' => '500',
    'number_of_floors' => '2',
    'number_of_people_in_the_house' => '4',

];

class House
{
    public $name;
    public $area;
    public $number_of_floors;
    public $number_of_people_in_the_house;


    public function __toString()
    {
        return "La maison s'appelle : ".$this->name;
    }

    public function printNameUpper()
    {
        print strtoupper($this->name);
    }
 }

$house_of_my_dreams = new House();
$house_of_my_dreams->area = 500;
$house_of_my_dreams->name = "house_of_my_dreams";
$house_of_my_dreams->number_of_floors = "2";
$house_of_my_dreams->number_of_people_in_the_house = "4";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Objet Maison</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">House</h1>
                <pre>
                    <?php print $house_of_my_dreams; ?>
                    <?php $house_of_my_dreams->printNameUpper(); ?>
                    <?php var_dump($house_of_my_dreams); ?>
                </pre>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
