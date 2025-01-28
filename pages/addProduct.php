<?php
// Database connection (adjust parameters as necessary)
 include('../includes/config.php');

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $receptionDate = $_POST['receptionDate'];
    $supplierName = $_POST['supplierName'];
    $barcode = $_POST['barcode'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO products (name, category, price, quantity, reception_date, supplier_name, barcode) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsiss", $productName, $category, $price, $quantity, $receptionDate, $supplierName, $barcode);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Nouveau produit ajouté avec succès!');</script>";
    } else {
        echo "<script>alert('Erreur: " . $stmt->error . "');</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
      
     
       
        .content {
            display: flex;
            flex: 1;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            text-align: center;
            color: #ff6f20;
            margin-bottom: 20px;
        }
        .form-container {
            width: 100%;
            max-width: 600px;
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>

<?php include('../includes/navbar.php'); ?>
<div class="content">
<?php include('../includes/sidbar.php'); ?>

    <div class="main-content">
        <h1>Ajouter Produit</h1>
        <div class="form-container">
            <form method="POST" action="">
                <input type="text" name="productName" placeholder="Nom" required>
                <select name="category" required>
                    <option value="">Catégories</option>
                    <option value="Catégorie 1">Catégorie 1</option>
                    <option value="Catégorie 2">Catégorie 2</option>
                    <!-- Add more categories as needed -->
                </select>
                <input type="number" step="0.01" name="price" placeholder="Prix" required>
                <input type="number" name="quantity" placeholder="Quantité" required>
                <input type="date" name="receptionDate" required>
                <input type="text" name="supplierName" placeholder="Nom Fournisseur" required>
                <input type="text" name="barcode" placeholder="Code à barre" required>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>
    </div>

</body>
</html>