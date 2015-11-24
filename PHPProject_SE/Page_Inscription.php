<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Share Eat</title>
        <link rel="stylesheet" href="Inscription_Css.css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <!-- En tête réduite php-->
        
        <h2>Inscription</h2>
        <form> <!--envoyer à la page de connexion?ou back office plutot?en utilisant le php avec post-->
            <table>
              <tr>
                  <td>Nom* :</td> <td><input type="text" name="nom" required ></td><br/>
              </tr>
              <tr>
                  <td>Prénom* :</td> <td><input type="text" name="prenom" required></td><br/>
              </tr>
              <tr>
                  <td>Sexe :</td>
                  <td><input type="radio" name="sexe" value="Masculin"/> Masculin<br/>
                      <input type="radio" name="sexe" value="Feminin"/> Feminin</td><br/>
              </tr>
              <tr>
                  <td>Date de naissance* :</td> <td><input type="date" name="datedenaissance" required></td><br/>
              </tr>
              <tr>
                  <td>Pays* :</td> <td><input type="text" name="pays" required></td><br/>
              </tr>
              <tr>
                  <td>Région* :</td> <td><input type="text" name="region" required></td><br/>
              </tr>
              <tr>
                  <td>Ville :</td> <td><input type="text" name="ville"></td><br/>
              </tr>
              <tr>
                  <td>Adresse mail* :</td> <td><input type="email" required name="adressemail"></td><br/>
              </tr>
              <tr>
                  <td>Nom d'utilisateur* :</td> <td><input type="text" name="nomutilisateur" required></td><br/>
              </tr>
              <tr>
                  <td>Mot de passe* :</td> <td><input type="password" required name="mdp"></td><br/>
              </tr>
              <tr>
                  <td>Répéter mot de passe* :</td> <td><input type="password" required name="mdpbis"></td><br/>
              </tr>
            </table>
        </form><br/>
        <form>
            <table id="tableau2">
              <!--check boxes required à peut être enlever-->
              <tr>
                  <td><input type="checkbox" name="envoiemail" value="accepter"> M'envoyer un mail pour me tenir au courant des actualités.</td></tr><br/> 
              <tr>
                  <td><input type="checkbox" required name="conditionsd'utilisation" value="accepter" checked > J'accepte les conditions d'utilisation.*</td></tr><br/>
              <tr>
                  <td><br/>*champs obligatoires.<td></tr><br/>
             </table> 
            <p>
                <br/><input type="submit" value="Devenir Share Eater" style="color: #680000 " ><br/>
            </p>
        </form>
               <!-- Bas de page php-->
    </body>
</html>
