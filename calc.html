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
    </head>
    <body><div class="vysledek">
        <?php
               
       echo(
                
         ' <table>
                <tr>
                    <th>Cena masa</th> <th></th>
                </tr>
                <tr>
                    <td>Cena Vepřového:</td>
                    <td>'.$_POST["cenaVeprove"].'</td>
                </tr>
                <tr>
                    <td>Cena Hovězího:</td>
                    <td>'.$_POST["cenaHovezi"].'</td>
                </tr>
                <tr>
                    <th>Cena koření</th> <th></th>
                </tr>
                <tr>
                    <td>Cena Soli:</td>
                    <td>'.$_POST["cenaSulBal"].'</td>
                </tr>
                <tr>
                    <td>Cena Česneku:</td>
                    <td>'.$_POST["cenaCesnekBal"].'</td>
                </tr>
                <tr>
                    <td>Cena Sojovky:</td>
                    <td>'.$_POST["cenaSojovkaBal"].'</td>
                </tr>
                <tr>
                    <td>Cena Octu:</td>
                    <td>'.$_POST["cenaOcetBal"].'</td>
                </tr>
                <tr><th>Další Náklady</th> <th></th> </tr>
                <tr>
                    <td>'.$_POST["typDalsiNaklad"].'</td>
                    <td>'.$_POST["cenaDalsiNaklad"].'</td>
                </tr>
            </table>'            
        );
        $soucetCenaVeprove = $_POST["cenaVeprove"] * $_POST["mnozstviVeprove"];
        $soucetCenaHovezi = $_POST["cenaHovezi"] * $_POST["mnozstviVeprove"];
        $soucetCenaMasa = $soucetCenaVeprove + $soucetCenaHovezi;
        $soucetMnozstviMasa = $_POST["mnozstviVeprove"] + $_POST["mnozstviHovezi"];
        
        //výpočet množství masa bez ořezů
        $mnozstviPoOrezuV = $_POST["mnozstviVeprove"] - $_POST["odhadOrezuV"];
        $mnozstviPoOrezuH = $_POST["mnozstviHovezi"] - $_POST["odhadOrezuH"];
        $soucetMnozMasaPoOrezu = $mnozstviPoOrezuV + $mnozstviPoOrezuH;
        
        //vypočet ceny koření na jedno kilo masa
        $cenaSulKg = $_POST["cenaSulBal"] / $_POST["velBalSul"]*7; //7 gramů na 1 kg masa
        $cenaCesnekKg = $_POST["cenaCesnekBal"] / $_POST["velBalCesnek"]*7; //7 gramů na 1 kg masa
        $cenaPeprKg = $_POST["cenaPeprBal"] / $_POST["velBalPepr"]*6; //6 gramů na 1 kg masa
        $cenaSojovkaKgV = $_POST["cenaSojovkaBal"] / $_POST["velBalSojovka"]*50; //50 ml na 1 kg vepřového masa
        $cenaSojovkaKgH = $_POST["cenaSojovkaBal"] / $_POST["velBalSojovka"]*100; //100 ml na 1 kg hovězího masa
        $cenaOcetKgV = $_POST["cenaOcetBal"] / $_POST["velBalOcet"]*50; //50 ml na 1 kg vepřového masa
        $cenaOcetKgH = $_POST["cenaOcetBal"] / $_POST["velBalOcet"]*100; //100 ml na 1 kg hovězího masa
        
        //výpočet ceny za koření na danou várku
        $cenaSulVarka = $cenaSulKg * $soucetMnozMasaPoOrezu;
        $cenaCesnekVarka = $cenaCesnekKg * $soucetMnozMasaPoOrezu;
        $cenaPeprVarka = $cenaPeprKg * $soucetMnozMasaPoOrezu;
        $cenaSojovkaVarka = ($cenaSojovkaKgV * $mnozstviPoOrezuV) +
                            ($cenaSojovkaKgH * $mnozstviPoOrezuH);
        $cenaOcetVarka = ($cenaOcetKgV * $mnozstviPoOrezuV) +
                         ($cenaOcetKgH * $mnozstviPoOrezuH);
        
        $soucetCenaKoreni = $cenaSulVarka +
                            $cenaCesnekVarka + 
                            $cenaPeprVarka +
                            $cenaSojovkaVarka +
                            $cenaOcetVarka;
        $soucetNakladu = $soucetCenaKoreni + $soucetCenaMasa + $_POST["cenaDalsiNaklad"];
        echo("<br /><br /><br />");
        echo(
            '<table>
                <tr>
                   <th></th> <th>Součet</th> <th></th> <th>Cena na várku</th>
                </tr>
                <tr>
                    <td>Cena za vepřové</td>
                    <td>' . $soucetCenaVeprove . '</td>
                    <td>Cena za sůl</td>
                    <td>' . $cenaSulVarka . '</td>
                    </tr>
                <tr>
                    <td>Cena za hovězí</td>
                    <td>' . $soucetCenaHovezi . '</td>
                    <td>Cena za cesnek</td>
                    <td>' . $cenaCesnekVarka . '</td>
                    
                </tr>
                <tr>
                    <td>Cena masa celkem</td>
                    <th>' . $soucetCenaMasa . '</th>
                    <td>Cena za pepř</td>
                    <td>' . $cenaPeprVarka . '</td>
                </tr>
                <tr>
                    <td>Množství masa</td>
                    <td>' . $soucetMnozstviMasa . '</td>
                    <td>Cena za sojovku</td>
                    <td>' . $cenaSojovkaVarka . '</td>
                </tr>
                <tr>
                    <td>Množství vepřového bez ořezů</td>
                    <td>' . $mnozstviPoOrezuV . '</td>
                    <td>Cena za ocet</td>
                    <td>' . $cenaOcetVarka. '</td>
                </tr>
                <tr>
                    <td>Množství hovězího bez ořezů</td>
                    <td>' . $mnozstviPoOrezuH . '</td>
                    <td>Cena koření celkem</td>
                    <th>' . $soucetCenaKoreni . '</th>
                </tr>
                <tr>
                   
                </tr>
                
            </table>' 
        );
        
        ?>
        
        <form method="POST" action="Cenotvorba.html">
           <input type="submit" value="Zpět" >
           <input type="hidden" value="Reset">
        </form>
        </div>
        
    </body>
</html>
