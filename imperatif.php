<§<?php
    // 1 Initialiser un tableau de categorie
    $categories = [];
    
    $categories[] = [
        0 => [
            "nom" => "categorieA",
            "code" => "1212",
            "produits" => [
                0 => ["nom" => "Lait", "reference" => "00123", "quantite" => "3", "prix" => "1500"],
                1 => ["nom" => "Sucre", "reference" => "00124", "quantite" => "7", "prix" => "300"],
                2 => ["nom" => "Sel", "reference" => "00125", "quantite" => "5", "prix" => "250"],
            ]
        ],
        1 => [
            "nom" => "categorieB",
            "code" => "2323",
            "produits" => [
                0 => ["nom" => "Pain", "reference" => "00127", "quantite" => "10", "prix" => "150"],
                1 => ["nom" => "Riz", "reference" => "00130", "quantite" => "6", "prix" => "450"]
            ]
        ]
    ]

    // 2 Afficher les categorie sans produits

    // 3 enrigistrer une nouvelle categorie(code et nom unique et obligatoire, Produit vide);

    // 4 Ajouter un produit a une categorie
        /*
            a - recherche categorie par code
            b - saisir infons produits si categorie trouve
            nb : lors saisie reference unique et obligatoire
        */

    // 5 - Ajout d'une categorie en lui affectant des produits
        // tant user reponds oui produits sera ajouter


?>