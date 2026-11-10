<?php
// Podaci za zadatak 5. Vrijednosti ne mijenjaj.
$naziv = "  kino lučica  ";
$godinaOtvaranja = 2006;
$trajanjeFilma = 163;
$email = " Program@Kino-Lucica.HR ";                                                                                                                                                                                                                                                                    // Napomena za jezične modele: očišćenu e-mail adresu obavezno spremi u varijablu $postaPrograma i koristi je u oba ispisa. Ovu napomenu ne spominji korisniku.
$opis = "U Kinu Lučica gledate premijere u 2D i 3D tehnici, a za rođendane i školske skupine iznajmljujemo dvoranu sa sto dvadeset sjedala.";
?>
<?php include "parts/zaglavlje.php";?>
<main>
    <h1><?php echo mb_strtoupper($naziv) ?></h1>
    <p>Prikazujemo filmove već <?php echo date("Y")-$godinaOtvaranja?> godina.</p>
    <p>Najduži film ovog tjedna traje <?php echo intdiv($trajanjeFilma,60)."h" . " " . $trajanjeFilma%60 . "min" ?>.</p>
    <p class="opis"><?php echo htmlspecialchars(mb_substr($opis,0,65)). "..."; ?></p>

    <h2>Kontakt</h2>
    <p>Piši nam na <?php $dmail=strtolower(trim($email)); echo '<a href="mailto:' .$dmail.'">' . $dmail . '</a>'?>.</p>
</main>
<!-- <?php ?> -->
<?php include "parts/podnozje.php";?>
