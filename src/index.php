<?php 

require __DIR__ . "/class/prodotti.php";
require __DIR__ . "/class/categoria.php";
include __DIR__ . "/class/accessori.php";

$cane = new categoria("cane");
$gatto = new categoria("gatto");
$uccello = new categoria("uccello");
$pesce = new categoria("pesce");

$prodotti = [
    new prodotti('Royal Canin Mini Adult', 43.99, 545, 'Prosciutto, riso', $cane, 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg'),
    new prodotti('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 600, 'Manzo, cereali', $cane, 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg'),
    new prodotti('Almo Nature Cat Daily Lattina', 34.99, 400, 'Tonno, pollo, prosciutto', $gatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg'),
    new prodotti('Mangime per Pesci Guppy in Fiocchi', 2.95, 30, 'Pesci e sottoprodotti dei pesci, cereali, lieviti, alghe', $pesce, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg'),
];

$accessori = [
    new accessori('Topini di peluche Trixie', 4.99, '', '', $gatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Morbido con codina in corda', '8,5cm x 10cm'),
    new accessori('Voliera Wilma in Legno', 184.99, '', '', $uccello, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Legno', 'M: L 83 x P 67 x H 153 cm'),
    new accessori('Cartucce Filtranti per Filtro EasyCrystal', 2.99, '', '', $pesce, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Materiale espanso', 'ND'),
    new accessori('Kong Classic', 13.49, '', '', $cane, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Galleggia e rimbalza', '8,5cm x 10cm'),
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Php-oop-2</title>
</head>
<body>
    <header>
        <section>
            <article>
                <h1>Pet-Shop</h1>
            </article>
        </section>
    </header>
    <main>
        <section>
            <h2>I nostri prodotti</h2>
            <article>
            <?php foreach ($prodotti as $prodotto) { ?>
                <ul>
                    <li>
                        <img src="<?php echo $prodotto -> geturlImg() ?>" alt="<?php echo $prodotto -> getNome() ?>">
                        <h2><?php echo $prodotto -> getNome() ?></h2>
                        <p><?php echo $prodotto -> getCategoria() ?></p>
                        <p><?php echo "Prezzo: " . $prodotto -> getPrezzo() . "€" ?></p>
                        <p><?php echo "Peso: " . $prodotto -> getPeso() . "g" ?></p>
                        <p><?php echo "Ingredienti: " . $prodotto -> getIngredienti() . "." ?></p>
                    </li>
                </ul>
            <?php } ?>
            <?php foreach ($accessori as $accessorio) { ?>
                <ul>
                    <li>
                        <img src="<?php echo $accessorio -> geturlImg() ?>" alt="<?php echo $accessorio -> getNome() ?>">
                        <h2><?php echo $accessorio -> getNome() ?></h2>
                        <p><?php echo $accessorio -> getCategoria() ?></p>
                        <p><?php echo "Prezzo: " . $accessorio -> getPrezzo() . "€" ?></p>
                        <p><?php echo "Materiale: " . $accessorio -> getMateriali() . "." ?></p>
                        <p><?php echo "Misura: " . $accessorio -> getMisura() . "." ?></p>
                    </li>
                </ul>
            <?php } ?>
            </article>
        </section>
    </main>
    <footer></footer>
</body>
</html>