<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        h1 {
            text-align: center;
            color: #ff6f20;
            margin-bottom: 20px;
        }
        .search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            width: 30%;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #e9ecef;
            color: #495057;
        }
        tbody tr {
            transition: background-color 0.3s;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        .edit-button {
            padding: 8px 16px;
            background-color:rgb(123, 202, 69);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .edit-button:hover {
            background-color:rgb(17, 63, 3);
        }
        .Delete-button {
            padding: 8px 16px;
            background-color:rgb(245, 15, 15);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .Delete-button:hover {
            background-color:rgb(17, 63, 3);
        }
        .content {
            display: flex;
            flex: 1;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .add-button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }
        .add-button:hover {
            background-color: #218838;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .search-container {
                flex-direction: column;
                align-items: flex-start;
            }
            input[type="text"] {
                width: 100%;
                margin-bottom: 10px;
            }
            table {
                display: block; /* Make table block */
                overflow-x: auto; /* Enable horizontal scrolling */
                white-space: nowrap; /* Prevent wrapping of table cells */
            }
        }
        
        @media screen and (max-width: 480px) {
            th, td {
                font-size: 12px; /* Reduce font size on smaller screens */
                padding: 8px; /* Reduce padding */
            }
            .action-button {
                padding: 6px 12px; /* Adjust button size */
            }
        }
        /* @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
        } */
    </style>
</head>
<body>
<?php include('../includes/navbar.php'); ?>
<div class="content">
<?php include('../includes/sidbar.php'); ?>
<div class="main-content">
    <h1>Liste des Produits</h1>

    <div class="search-container">
        <input type="text" placeholder="Rechercher Produit ...">
        <input type="text" placeholder="Trier Produit par ...">
    </div>
    <a href="addProduct.php"> <button class="add-button">Ajouter un Produit</button></a>
    <table>
        <thead>
            <tr>
                <th>Nom Produit</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Date d'entrée</th>
                <th>Nom Fournisseur</th>
                <th>code a barre </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <tr>
                <td>Produit A</td>
                <td>catégorie 1</td>
                <td>10 dinars</td>
                <td>100</td>
                <td>15/09/2023</td>
                <td>flen el fouleni</td>
                <td>00005849621700</td>
                
                <td><button class="edit-button">Modifier</button><button class="Delete-button">Supprimer</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>