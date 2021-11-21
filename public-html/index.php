<?php
  $website = 'https://duckduckgo.com';
 ?>


<!DOCTYPE html>
<head>
 <title>Hello World!</title>
</head>

<body>
 <h1>Hello World!</h1>
 <a=href="<?php echo $website; ?>"> <?php echo "Hola mother fucker: $website"; ?>   </a>

 <p>
   <?php
    $juan=['1','12356','arst'];
    $countries = array('Finland', 'Fuck you', 'pussy' );
    print_r($countries);
    print_r($juan);
    $countries[]='Italia picolo bambino';
    print_r($countries);
    ?>
 </p>

 <p>
   <?php
     echo $countries[1];
    ?>
 </p>

 <p>
   <?php
     echo count ($countries);
    ?>
 </p>

 <p>
   <?php
     $age = array(
       'juan' => 25,
        'hernesto' => 35,
      'mickey pluto' => 1234,
    );
    print_r($age);
    ?>
 </p>

 <p>
   <?php
     echo  $age['hernesto'];
    ?>
 </p>

 <script>
   var movies=["shawshak","Inception", "MJ Demarco", "Jim Kwik"];
   for (i in movies){
      console.log("The current value of the array is " + movies[i]);
   }
 </script>

 <<?php
   $movies = ["shawshak", "Inception", "MJ Demarco", "Jim Kwik"];
   foreach ($movies as $i) {
     echo "The current value of the mother fucker is $i<br>";
   }
  ?>

<p>
  <?php
    class carBluePrint {
      // here goes properties and method
      //public $color = "Victoria Secret Model";
      //public $make = "Heidi Klum";

      //constructor
      public function __construct($newColor, $newMake){
        $this->color = $newColor;
        $this->make = $newMake;
      }


      // setter method
      public function setColor($newColor){
        $this->color = $newColor;
      }

      //getter method
      public function getColor(){
          return "<br>New color is : " . $this->color . "<br>";
      }
    }

    $firstRealCar = new carBluePrint('arbre','Space X');

    var_dump ($firstRealCar);
    echo $firstRealCar->color;


    echo $firstRealCar->getColor();

    $secondRealCar = new carBluePrint('ciel','Navidad');


    echo $secondRealCar->getColor();
    var_dump($secondRealCar);

   ?>
</p>

<p>
  <<?php
    class sportCarBluePrint extends carBluePrint {
      public function __construct($newColor, $newMake, $newSpoiler){
        parent::__construct($newColor, $newMake);
        $this->spoiler = $newSpoiler;
      }

      public function activateSpoiler(){
        return "<br><strong>SPOILER ACTIVE!</strong></br>";
      }
    }

    $firstSportCar = new sportCarBluePrint('Lelouch', 'CC', 'Kyra');
    $firstSportCar->setColor('Daito');
    var_dump($firstSportCar);
    $firstSportCar->activateSpoiler();
   ?>
</p>

<p>
  <<?php
    function divideOneByNumber($number){
      if ($number==0){
        throw new exception ("Division by ziro is not allowed.");
      }
      return 1/$number;
    }

    try{
        echo "The mother fucker pussy is" .  divideOneByNumber(0);
    }

    catch(Exception $e) {
      echo "Message;" . $e->getMessage();
    }
   ?>
</p>



</body>
