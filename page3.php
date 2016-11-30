<?php
session_start();

$prenom = $_COOKIE["prenom"];
$genre = $_COOKIE["genre"];
$pays = $_COOKIE["pays"];
$newsletter = $_COOKIE["newsletter"];
if (!$newsletter){
    $newsletter = "non";
}
echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP - global Variable Cookies</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
        <h1>Utilisation des variables Cookies</h1>
        <table>
            <tr>
                <td>
                    Bonjour ' . $prenom . '!
                </td>
            </tr>
            <tr>
                <td>';
if ($genre == "Homme") {
    echo 'Que c\'est bon d\'être un ' . $genre . '!';
}else{
    echo 'Que c\'est bon d\'être une ' . $genre . '!';
}
echo '</td>
            </tr>
            <tr>
                <td>
                    J\'espère qu\'il fait beau en ' . $pays . '!
                </td>
            </tr>
            <tr>
                <td>';
if ($newsletter == "non") {
    echo 'Alors comme ça on aime pas lire les Newsletters dommage!';
} else {
    echo 'Bonne lecture de la Newsletter';
}
echo '</td>
            </tr>
        </table>
        </div>
    </body>
</html>';