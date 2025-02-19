<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cenotvorba</title>
        
        <link rel="stylesheet" href="styles.css">
        <link rel="prev" href="Cenotvorba.html">
       
    </head>
    <body>
        <?php
         
        $mnozstviPoOrezuV = $_POST["mnozstviVeprove"] - $_POST["odhadOrezuV"];
        $mnozstviPoOrezuH = $_POST["mnozstviHovezi"] - $_POST["odhadOrezuH"];
        $soucetMnozMasaPoOrezu = $mnozstviPoOrezuV + $mnozstviPoOrezuH;
        
       
        $potrebaSul = $soucetMnozMasaPoOrezu * 7;
        $potrebaCesnek = $soucetMnozMasaPoOrezu * 7;
        $potrebaPepr = $soucetMnozMasaPoOrezu * 6;
        $potrebaSojovka = ($mnozstviPoOrezuV * 50)+($mnozstviPoOrezuH * 100);
        $potrebaOcet = ($mnozstviPoOrezuV * 50)+($mnozstviPoOrezuH * 100);
        
       echo("<div class=\"odhad\">
               <table>
                    <tr>
                        <th>Potřebné suroviny</th>
                        <th>Množství</th>
                    </tr>
                    <tr>
                        <td>Sůl</td> 
                        <td>" . $potrebaSul . " g</td> 
                    </tr>
                    <tr>
                        <td>Česnek</td> 
                        <td>" . $potrebaCesnek . " g</td> 
                    </tr>
                    <tr>
                        <td>Pepř</td> 
                        <td>" . $potrebaPepr . " g</td> 
                    </tr>
                    <tr>
                        <td>Sojovka</td> 
                        <td>" . $potrebaSojovka . " ml</td> 
                    </tr>
                    <tr>
                        <td>Ocet</td> 
                        <td>" . $potrebaOcet . " ml</td> 
                    </tr>
                    
                </table>
            </div>");
       
       
       ?>
        
        
            <form  method="POST" action="Cenotvorba.html">
                <input class="back" type="submit" value="Zpět" >
                <input class="tlacitko" type="hidden" value="Reset">
            </form>
        <!-- <button type="button" class="tlacitko" onclick="link('Cenotvorba.html')">Zpět</button> -->
        
        
    </body>
</html>