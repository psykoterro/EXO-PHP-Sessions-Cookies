<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 10:41
 */
echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP - global Variable</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
        <form method="post" action="page1.php">
            <table>
                <tr>
                    <td align="right">
                        <label for="prenom">Prénom</label>
                    </td>
                    <td>
                        <input type="text" name="prenom" placeholder="Ton prénom..." id="prenom">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="genref">Femme </label>
                        <input type="radio" name="genre" value="Femme" id="genref">
                    </td>
                    <td>
                        <label for="genreh">Homme </label>
                        <input type="radio" name="genre" value="Homme" id="genref">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pays">Pays</label>
                        <select name="pays" id="pays">
                            <option value="France">France</option>
                            <option value="Espagne">Espagne</option>
                            <option value="Allemagne">Allemagne</option>
                            <option value="Italie">Italie</option>
                            <option value="Suisse">Suisse</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="newsletter">Inscription Newsletter : </label>
                        <input type="checkbox" name="newsletter" value="oui" id="newsletter">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><button type="submit">Valider</button></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>';
?>