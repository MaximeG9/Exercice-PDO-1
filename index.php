<?php
$dns = 'mysql:host=localhost;dbname=colyseum';
$user = 'root';
$password = '';


try {
    $db = new PDO($dns, $user, $password);
    // echo "connexion établie" ;

} catch (Exception $message) {
    // echo "ya un blem <br>" . "<pre>$message</pre>" ;
}



// EXERCICE 1


// $request = $db->query('SELECT * FROM clients');
// $clients = $request->fetchAll();

// foreach($clients as $client){
//     echo $client['lastName']." ";
//     echo $client['firstName']."<br>";
// }



// EXERCICE 2


// $request = $db->query('SELECT * FROM showtypes');
// $showTypes = $request->fetchAll();

// foreach($showTypes as $showType){
//     echo $showType['type']."<br>";
// }



// EXERCICE 3

// foreach($clients as $client){
//     if ($client['id'] <= 20){
//         echo $client['lastName']." ";
//         echo $client['firstName']."<br>";
//     }
// }



// EXERCICE 4

// foreach($clients as $client){
//     if ($client['card'] == 1){
//         echo $client['lastName']." ";
//         echo $client['firstName']."<br>";
//     }
// }



// EXERCICE 5

// $request = $db->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName');
// $clients = $request->fetchAll();

// foreach($clients as $client){
//         echo "Nom : ".$client['lastName']."  ";
//         echo "Prénom : ".$client['firstName']."<br>";
//     }



// EXERCICE 6

// $request = $db->query('SELECT * FROM shows ORDER BY title');
// $shows = $request->fetchAll();

// foreach($shows as $show){
//         echo $show['title']." par ".$show['performer'].", le ".$show['date']." à ".$show['startTime']."."."<br>";
//     }


// EXERCICE 7


// $request = $db->query('SELECT * FROM clients');
// $clients = $request->fetchAll();

// foreach($clients as $client){
//     if ($client['card'] == 1){
//         echo "Nom : ".$client['lastName']."<br>";
//         echo "Prénom : ".$client['firstName']."<br>";
//         echo "Date de naissance : ".$client['birthDate']."<br>";
//         echo "Carte de fidelité : Oui"."<br>";
//         echo "Numéro de carte : ".$client['cardNumber']."<br>";
//         echo "<br>";
//     } else {
//         echo "Nom : ".$client['lastName']."<br>";
//         echo "Prénom : ".$client['firstName']."<br>";
//         echo "Date de naissance : ".$client['birthDate']."<br>";
//         echo "Carte de fidelité : Non"."<br>";
//         echo "<br>";
//     }

// }
