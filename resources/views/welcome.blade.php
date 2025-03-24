<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alianza Lima</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <style>
    .body {
        background-image: url("https://www.topmercato.com/pe/app/uploads/2024/04/ALIANZA-1.jpg");
        background-size: cover;
    }

    .body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(25, 39, 69, 80%);
        background-size: cover;
        z-index: 1;
    }

    .container {
        position: relative; 
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    .logo {
        width: 20rem;
    }

    .phrase {
        text-transform: uppercase;
        color: #ffffff;
        font-family: "Lobster", sans-serif;
        font-size: 2rem;
    }
  </style>
</head>
<body class="body">
  <section class="container">
    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Escudo_Alianza_Lima.svg/1611px-Escudo_Alianza_Lima.svg.png" alt="ALIANZA LIMA">
  <h2 class="phrase">Una pasión que la razón no entiende, blanquiazul de mi vida</h2>
  </section>
</body>
</html>