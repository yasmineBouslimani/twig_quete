<?php

require_once ('../vendor/autoload.php');

// Routing

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/view');
$twig = new Twig\Environment($loader);
    $products = [
        'Lamp' => 'https://image.architonic.com/pfm3-3/20024477/athena-lounge-chair-1370-5-fam-g-arcit18.jpg',
        'Sofa' => 'http://www.portes-et-serrures.fr/wp-content/uploads/2019/04/Boconcept1.jpg',
        'Bed' => 'https://www.boconcept.com/-/boc-media/images/inspiration/inspiration/products/laguna-bedroom/1135707-laguna-bedroom-normal.ashx?la=ar-dz',
        'Machine wash' => 'https://www.wikihow.com/images/thumb/6/6f/Wash-Slipcovers-Step-4.jpg/aid1611105-v4-728px-Wash-Slipcovers-Step-4.jpg',
        'TV' => 'http://static.cotemaison.fr/medias_10974/w_640,c_fill,g_north/meuble-tele-tv-television-boconcept-lugano-noyer-gris_5618689.jpg',
        'Library' => 'https://images.dwell.com/photos-6063391372700811264/6238048460790513664-medium/a-pair-of-molded-plywood-lounge-chairs-by-charles-and-ray-eames-for-herman-miller-sit-opposite-a-boconcept-coffee-table-and-a-sofa-of-pauls-design-for-his-fathers-book-collection-paul-created-a-library-around-the-double-height-staircase.jpg'];
echo $twig->render('index.html.twig', ['products' => $products]);


