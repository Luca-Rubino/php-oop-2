<?php 

include __DIR__ . "/class/prodotti.php";

$prodotti = [
    new prodotti('Royal Canin Mini Adult', 43.99, 545, 'Prosciutto, riso', 'cane', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg'),
    new prodotti('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 600, 'Manzo, cereali', 'cane', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg'),
    new prodotti('Almo Nature Cat Daily Lattina', 34.99, 400, 'Tonno, pollo, prosciutto', 'gatto', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg'),
    new prodotti('Mangime per Pesci Guppy in Fiocchi', 2.95, 30, 'Pesci e sottoprodotti dei pesci, cereali, lieviti, alghe', 'pesce', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg'),
    new prodotti('Voliera Wilma in Legno', 184.99, 'Legno', 'M: L 83 x P 67 x H 153 cm', 'uccello', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg'),
    new prodotti('Cartucce Filtranti per Filtro EasyCrystal', 2.99, 'Materiale espanso', 'ND', 'pesce', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg'),
    new prodotti('Kong Classic', 13.49, 'Galleggia e rimbalza', '8,5cm x 10cm', 'cane', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg'),
    new prodotti('Topini di peluche Trixie', 4.99, 'Morbido con codina in corda', '8,5cm x 10cm', 'gatto', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg'),
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
            <article>
            <?php foreach ($prodotti as $prodotto) { ?>
                <ul>
                    <li>
                        <img src="<?php echo $prodotto -> geturlImg() ?>" alt="<?php echo $prodotto -> getTitolo() ?>">
                        <h2><?php echo $prodotto -> getTitolo() ?></h2>
                        <p><?php echo $prodotto -> getCategoria() ?></p>
                        <p><?php echo "Prezzo: " . $prodotto -> getPrezzo() . "€" ?></p>
                        <p><?php echo "Peso: " . $prodotto -> getPeso() . "g" ?></p>
                        <p><?php echo "Ingredienti: " . $prodotto -> getIngredienti() ?></p>
                    </li>
                </ul>
            <?php } ?>
            </article>
        </section>
    </main>
    <footer></footer>
</body>
</html>