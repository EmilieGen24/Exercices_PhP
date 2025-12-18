<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Cours PhP -->
<?php
$backgroundColorCustom = "maClasse";
$number = 2;
?>
<h1><?php echo "coucou";?></h1>
    <h2>
        <?php
        if($number == 1){
            echo "coucou";
        }else{
            echo "salut";
        }
        ?>
    </h2>
<section class="<?php echo $backgroundColorCustom?>">
    <p>Lorem ipsum</p>
</section>

<!-- Exercices PHP -->

<body>
    <h1>Exo 1 - Boucle for {...}</h1>
        <p>
            <?php
            for($number = 1 ; $number <26 ; $number ++){
                echo $number ." ";
            }
            ?>
        </p>

    <h1>Exo 2 - Boucle while {...}</h1> 
        <p>
            <?php
            $number = 25;
            while($number>0 ){
                echo $number . " ";
                $number-- ;
            }
            ?>
        </p>

    <h1>Exo 3 - Boucle for {...}</h1>
        <p>
            <?php
            $count = 0;
            for($number = 1; $number <=25 ; $number ++){
                $count = $count. $number . " "; 
                echo "<p>{$count}</p>";
            }
            ?>
        </p>

        <h1>Exo 4 - Somme multiple</h1>
        <p>
            <?php
            $count = 0;
            for($number = 1; $number <=30 ; $number ++){
                $count += $number; 
                echo $count. " ";
            }
            ?>
        </p>

         <h1>Exo 5 - Fonction Pair</h1>
        <p>
            <?php
            function EstPair($number){
               if($number % 2 == 0){
                echo $number ." c'est un chiffre pair";
               }else {
                echo " c'est un chiffre impair";
               }
            }
            EstPair(8);
            ?>
        </p>

        <h1>Exo 6 - Boucle Pair</h1>
        <p>
            <?php
            for($number=1 ; $number<= 20; $number ++){
                if ($number % 2 == 0){
                    echo $number;
               }
            }
            ?>
        </p>

        <h1>Exo 7 - Fonction pythagore</h1>
        <p>
            <?php
            function Pythagore($b, $c){
               $result*$result= $b*$b + $c*$c;
               return $result;
            }
            echo Pythagore (2,3);
            ?>
        </p>

        <h1>Exo 8 - Condition heure</h1>
        <p>
            <?php
            function heure($heure){
               if($heure<=12){
                echo "C'est le matin";
               } else if ($heure >13 && $heure <19){
                echo "C'est l'après-midi";
               } else{
                echo " C'est le soir";
               }
            }
            heure(14);
            ?>
        </p>

        <h1>Exo 9 - Condition ternaire</h1>
        <p>
            <?php
            function Pair($number){
                echo ($number % 2 == 0) ? " c'est un chiffre pair" : " c'est un chiffre impair";
               }
            Pair(8);
            ?>
        </p>

        <h1>Exo 10 - Foobar</h1>
        <p>
            <?php
            for ($number=0; $number<=100; $number++){
                if($number % 5 == 0 && $number % 3 == 0){
                    echo "foobar";
                }
                if($number % 5 == 0){
                    echo "bar";
                }
                if($number % 3 == 0){
                    echo "foo";
                }
               }
            ?>
        </p>

        <h1>Exo 11 - Affichage de tableau</h1>
        <p>
            <?php
            $identitePersonne = [
                "nom" => "Croft",
                "prenom" => "Lara",
                "metier" => "Archéologue"
            ];
            echo "C'est un plaisir de vous voir " . $identitePersonne["prenom"]. $identitePersonne["nom"] . "! " . "(". $identitePersonne["metier"] . ")";
            
            ?>
        </p>

        <h1>Exo 12 - Affichage de tableau</h1>
        <p>
            <?php
            $fighters = ["Zelda","Samus","Bowser", "Peach", "Lucina"];

            foreach($fighters as $fightersPerso){
                if(strlen($fightersPerso) == 6){
                    echo $fightersPerso . "<br>";
                }
            }
            ?>
        </p>

        <h1>Exo 13 - Recherche de la plus petite valeur dans un tableau d’entiers</h1>
        <p>
            <?php
            $tableau = ["2","6","12","32"];
            echo $min = min($tableau);
            
            ?>
        </p>

        <h1>Exo 14 - Tri d’un tableau d’entiers par ordre croissant</h1>
        <p>
            <?php
            $tableau = ["2","6","12","32"];
            sort($tableau);
            foreach($tableau as $val){
                echo $val . "<br>";
            }
                        
            ?>
        </p>

        <h1>Exo 15 - Table des multiplications</h1>
        <table border = 1>
            <?php
            for ($x = 1 ; $x <=9 ; $x++){
                echo "<tr>";
                for ($y = 1 ; $y <=9 ; $y++){
                    echo "<td>" . $result = $x * $y . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>

</body>
</html>