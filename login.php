<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panier d'achat</title>
  <style>
    /* Style pour le bouton du panier */
    .cart-button {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #28a745;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .cart-button:hover {
      background-color: #218838;
    }

    /* Style de l'icône panier */
    .cart-icon {
      margin-right: 10px;
    }
  </style>
</head>
<body>

  <!-- Bouton du panier -->
  <button class="cart-button" onclick="addToCart()">
    <span class="cart-icon">🛒</span> Ajouter au panier
  </button>

  <!-- Zone pour afficher le message de confirmation -->
  <p id="cart-message" style="color: green; margin-top: 20px;"></p>

  <script>
    // Fonction appelée lorsqu'on clique sur le bouton
    function addToCart() {
      const messageElement = document.getElementById('cart-message');
      messageElement.textContent = "L'article a été ajouté au panier !";
      // Ici, vous pouvez ajouter des actions supplémentaires,
      // comme envoyer l'article au panier dans la base de données ou un système de gestion de panier.
    }
  </script>

</body>
</html>
