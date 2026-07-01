<§<?php
    // 1 Initialiser un tableau de categorie
    $categories = [];
    
    $categories = [
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
        ],
        2 => [
            "nom" => "categorieC",
            "code" => "3434",
            "produits" => []
        ]
    ];

    // 2 Afficher les categorie sans produits

    for($i = 0; $i < count($categories); $i++){
        if(count($categories[$i]["produits"]) === 0){
            print_r($categories[$i]);
        }
    }

    // 3 enrigistrer une nouvelle categorie(code et nom unique et obligatoire, Produit vide);

    do {
        $categorieValid = true;
        $nomCategorie = readline("Entrer le nom du categorie :");

        if($nomCategorie === ""){
            $categorieValid = false;
        } else {
            $codeCategorie =  readline("Entrer le code :");
            if($codeCategorie === ""){
                $categorieValid = false;
            } else {
                for($i = 0; $i < count($categories); $i++){
                    if($categories[$i]["nom"] === $nomCategorie) {
                        echo "nom categorie existant \n";
                        $categorieValid = false;
                        break;
                    }

                    if($categories[$i]["code"] === $codeCategorie){
                        echo "code categorie existant \n";
                        $categorieValid = false;
                        break;
                    }
                }

                if($categorieValid){
                    $categories[] = ["nom" => $nomCategorie, "code" => $codeCategorie, "produits" => []];
                }
            }
        }


    } while(!$categories);


    // 4 Ajouter un produit a une categorie
        /*
            a - recherche categorie par code
            b - saisir infos produits si categorie trouvé
            nb : lors saisie reference unique et obligatoire
        */
        $codeCategorieRecherche = readline("Entrer le code :");
        $trouve = false;
        $index = -1;
        for($i = 0; $i < count($categories); $i++){
            if($codeCategorieRecherche === $categories[$i]["code"]){
                $trouve = true;
                $index = $i;
                break;
            }
        }

        $validReferent = false;
        if($trouve){

            $referentProduit = readline("Entrer la reference du produit :");

            for($i = 0; $i < count($categories); $i++){
                for($j = 0; $j < count($categories[$i]["produits"]); $j++){
                    if($categories[$i]["produits"][$j]["reference"] === $referentProduit){
                        $validReferent = true;
                        echo "reference existant \n";
                        break;
                    }
                }
            }

            if(!$validReferent){
                $nomProduit = readline("Entrer le nom :");
                $quantite = readline("Entrer la quantite :");
                $prix = readline("Entrer le prix :");
                $categories[$index]["produits"][] = ["nom" => $nomProduit, "reference" => $referentProduit, "quantite" => $quantite, "prix" => $prix];
            }
        }


    var_dump($categories);
        

    // 5 - Ajout d'une categorie en lui affectant des produits
        // tant user reponds oui produits sera ajouter
    do {
        $validCategorie = true;
        $nouveauCategorie = readline("Entrer le nom du categorie :");
        if($nouveauCategorie === ""){
            $validCategorie = false;;
        } else {
            $codeNouveauCategorie =  readline("Entrer le code :");
            if($codeNouveauCategorie === ""){
                $validCategorie = false;
            } else {
                for($i = 0; $i < count($categories); $i++){
                    if($categories[$i]["nom"] === $nouveauCategorie) {
                        echo "nom categorie existant \n";
                        $validCategorie = false;
                        break;
                    }

                    if($categories[$i]["code"] === $codeNouveauCategorie){
                        echo "code categorie existant \n";
                        $validCategorie = false;
                        break;
                    }
                }

                if($validCategorie){
                    $categories[] = ["nom" => $nouveauCategorie, "code" => $codeNouveauCategorie, "produits" => []];
                    do {
                        $lenCategorie = count($categories);

                        $categories[$lenCategorie]["produits"][] = [
                            "nom" => readline("Enrer le nom du produit :"),
                            "reference" => readline("Enrer la reference du produit :"),
                            "quantite" => readline("Enrer la quantite du produit :"),
                            "prix" => readline("Enrer le prix du produit :"),
                        ];
                        
                        $choix =  readline("voulez-vouz ajouter une autre produit :");

                    } while(strtolower($choix) === "oui");
                }
            }      
        }

    } while(!$validCategorie);


?>