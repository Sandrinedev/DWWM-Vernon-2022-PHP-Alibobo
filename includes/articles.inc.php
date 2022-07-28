<h1>Articles</h1>

<?php

$requetCategoriesNiveau1 = "
    SELECT *
    FROM categories
    WHERE  categories_id_categorie=0
    ORDER BY libelle
";

