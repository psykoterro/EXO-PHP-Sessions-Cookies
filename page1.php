<?php
session_start();
$prenom = $_POST["prenom"];
if (!$prenom){
    $erreur .= "Veuillez entrer votre nom...";
}elseif (preg_match("/[0-9]+/", $prenom)){
    $erreur .= "Vôtre nom ne peut contenir de chiffre !...";
}else{
    $NbLettresPrenom = mb_strlen(str_replace("-","",$prenom),'UTF-8');
    $_SESSION["prenom"] = $_POST["prenom"];
    setcookie("prenom",$_POST["prenom"], time()+3600, "/", "localhost");
}
$genre = $_POST["genre"];
if (!$genre){
    $erreur .= "Veuillez selectionner votre genre...";
}else{
    $_SESSION["genre"] = $_POST["genre"];
    setcookie("genre",$_POST["genre"], time()+3600, "/", "localhost");
}
$pays = $_POST["pays"];
if (!$pays){
    $erreur .= "Veuillez selectionner votre pays...";
}else{
    $_SESSION["pays"] = $_POST["pays"];
    setcookie("pays",$_POST["pays"], time()+3600, "/", "localhost");
}
$newsletter = $_POST["newsletter"];
if (!$newsletter){
    $newsletter = "non";
}else{
    $_SESSION["newsletter"] = $_POST["newsletter"];
    setcookie("newsletter",$_POST["newsletter"], time()+3600, "/", "localhost");
}

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP - global Variable</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>';
if ($erreur != ""){
    echo '<div>
            <table>
                <tr>
                    <td>'.str_replace("...", "<br />", $erreur).'</td>
                </tr>
            </table>
        </div>';
}else {
    echo '<div>
        <h1>Vos données :</h1>
        <table>
            <tr>
                <td><span>*</span> Vous vous appelez <span>'.$prenom.'</span> (en '.$NbLettresPrenom.' lettres)</td>
            </tr>
            <tr>';
                if ($genre == "Homme") {
                    echo '<td><span>*</span> Vous êtes un <span>' . $genre . '</span></td>';
                }else{
                    echo '<td><span>*</span> Vous êtes une <span>' . $genre . '</span></td>';
                }
            echo '</tr>
            <tr>
                <td><span>*</span> Vous vivez en <span>'.$pays.'</span></td>
            </tr>
            <tr>';
                if ($newsletter == "non") {
                    echo '<td><span>*</span> Vous <span>ne voulez pas</span> recevoir la <span>Newsletter</span></td>';
                }else{
                    echo '<td><span>*</span> Vous <span>voulez</span> recevoir la <span>Newsletter</span></td>';
                }
            echo '</tr>
            <tr>
                <td align="center"><a href="page2.php">Page Session</a></td>
            </tr>
            <tr>
                <td align="center"><a href="page3.php">Page Cookies</a></td>
            </tr>
        </table>
    </div>';
}
echo '</body>
</html>';