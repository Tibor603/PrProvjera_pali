<?php
$sezonaGodina = 2026;
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kino Lučica | Ulaznice</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
<header>
    <p class="logo">Kino Lučica</p>
    <nav>
        <a href="index.php">Početna</a>
        <a href="ulaznice.php">Ulaznice</a>
    </nav>
</header>
<main>
    <h1>Ulaznice i cijene</h1>
    <p>Cijene ulaznica vrijede za sezonu <?php echo $sezonaGodina; ?>.</p>
    <table>
        <tr>
            <th>Stavka</th>
            <th>Bez PDV-a</th>
            <th>PDV</th>
            <th>Ukupno</th>
            <th>S karticom kluba (−20 %)</th>
        </tr>
        <tr>
            <td>Redovna ulaznica</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
        </tr>
        <tr>
            <td>3D projekcija</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
        </tr>
        <tr>
            <td>Najam dvorane (2 sata)</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
        </tr>
        <tr class="zbroj">
            <td>Sve tri stavke zajedno</td>
            <td></td>
            <td></td>
            <td>[ ]</td>
            <td></td>
        </tr>
    </table>
    <p>Cijene ažurirane: [DANAŠNJI DATUM]</p>
</main>
<footer>
    <p>© [GODINA] Kino Lučica · Pula</p>
</footer>
</body>
</html>
