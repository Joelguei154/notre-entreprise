    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>inscription</title>
    
        <style>
            body{
      box-sizing: border-box;
      padding: 0;
      display: flex;
      font-family: 'Arial ', Arial, sans-serif;
      align-items:center;
      text-align: center;
      background-color: beige;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }


    .container label{
      width: 100%;
      font-size: 14px;
            margin-bottom: 20px;
            display: block;
            color: #555;
            border-radius: 30px;
            border: 1px ;
            
    }
    .container button{
      color: bisque;
      background:blue ;
      border-radius: 30px;
      box-shadow: 100px;
      width: 10%;
      height: 20px;
    border: 1px solid #ddd;
    cursor: pointer;

    }

    
    .container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            transition: color 0.3s ease;    
        }
    
        .container h2{
          text-align: center;
          margin-bottom: 2px;
          display: flex;
          justify-content: center;

        }
        .container input[type="text"] ,
.container input[type="mot de passe ,confirmer mot de passe"],
.container button{
width: 60%;
box-shadow: 10px;
border-radius: 5px;
border: 1px solid #ddd;
height: 28px;
transition: border-color 0.3s ease box-shadow 0.3 ease;


}

.container input[type="text"]:focus, 
.container input[type="mot de passe,confirmer mot de passe"]:focus{


        border-color: #2575fc;
        box-shadow: 0 0 10px rgba(37, 117, 252, 0.3);
    }
button:hover {
        background-color: #6a11cb;
        transform: translateY(-2px);
    }

    button:active {
        transform: translateY(0);
    }
        </style>
    </head>
    <body>
        <form action="#" method="post">
            <div class="container">
                <h1>inscription</h1>
                <p><label for="nom"> nom</label></p>
                <input type="text" name="nom" required >
                <p><label for="prenom">prenom</label></p>
                <input type="text" name="prenom" required >
                <p><label for="email">email</label></p>
                <input type="text" name="email" required>
                <p><label for="mot de passe">mot de passe</label></p>
                <input type="text" name="mot de passe" required>
                <p><label for="confirmer mot de passe"> confirmer mot de passe</label></p>
                <input type="text" name="confirmer mot de passe" required>
               <p> <button>inscription</button></p>
               déjà un compte ? 
              <a href="config.php">connexion</a>
    </body>
    </html>
