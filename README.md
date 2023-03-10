# laravel

Le texte décrit les différentes étapes que j'ai suivies pour créer un mini projet Laravel modulable, en utilisant une base de données nommée "modular2" avec phpMyAdmin.
J'ai installé le système d'authentification Laravel Breeze et j'ai créé un module Blog à l'aide du package Laravel-modules.
J'ai également créé les modèles et les migrations pour les utilisateurs, les rôles, les catégories et les articles, et j'ai établi les relations nécessaires
entre ces différents modèles, comme la relation ManyToMany entre les utilisateurs et les rôles. J'ai peuplé la base de données avec des données synthétiques 
et j'ai créé des contrôleurs pour gérer les articles et les utilisateurs. 
J'ai défini les routes en utilisant Route::resource() pour générer automatiquement les différentes routes et j'ai créé les vues associées à chaque fonction.
