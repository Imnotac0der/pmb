<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Papa Emballages</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff;
            color: #000;
            text-align: center;
            overflow-x: hidden;
        }

        header {
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        .logo {
            font-size: 32px;
            color: #f4c524;
            font-weight: bold;
        }

        .hero {
            height: 100vh;
            /* Faire en sorte que la section prenne toute la hauteur de l'écran */
            background-color: #fafafa;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 40px;
            margin-top: 10px;
        }

        .hero p {
            max-width: 700px;
            margin: 10px auto;
            font-size: 16px;
        }

        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px auto;
            gap: 10px;
            max-width: 900px;
        }

        .gallery img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid transparent;
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.1);
            /* Zoom sur les images au survol */
        }

        .btn {
            background-color: #f4c524;
            color: black;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .arrow {
            font-size: 30px;
            margin: 20px 0;
        }

        section.steps {
            background-color: #fafafa;
            padding: 40px 20px;
        }

        .steps h2 {
            font-size: 28px;
            color: #000;
        }

        .steps ol {
            list-style: none;
            padding: 0;
            max-width: 600px;
            margin: auto;
            text-align: left;
        }

        .steps ol li {
            margin: 15px 0;
            font-size: 18px;
        }

        .steps ol li::before {
            content: counter(step);
            counter-increment: step;
            background: #000;
            color: #fff;
            border-radius: 50%;
            padding: 5px 10px;
            margin-right: 10px;
        }

        .steps ol {
            counter-reset: step;
        }

        footer {
            font-size: 12px;
            color: gray;
            margin-top: 20px;
        }

        /* Ajouter une bordure */
        .hero,
        .steps {
            border-bottom: 2px solid #f4c524;
        }

        /* Ajout du style pour empêcher le texte d'aller à la ligne */
        .steps ol li span {
            white-space: nowrap;
        }

        /* Styles généraux - par défaut */
        body {
            font-family: Arial, sans-serif;
            background: #fff;
            color: #000;
            text-align: center;
        }

        .hero {
            height: 100vh;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px auto;
            gap: 10px;
            max-width: 900px;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">papa</div>
        <input type="text" placeholder="Rechercher..." style="float:right; margin-top:-30px; margin-right:20px; padding:5px;">
    </header>

    <section class="hero">
        <h1>Gagnez vos coupons ✨</h1>
        <p>Chez Papa France, on adore voir nos emballages en action !<br>
            Si vous réalisez des photos ou vidéos mettant en avant nos emballages, vous pouvez recevoir un coupon à utiliser sur votre prochaine commande !</p>
        <p>Une belle façon de partager votre savoir-faire tout en profitant d’un avantage exclusif. Alors, prêts à capturer vos plus belles créations ?</p>

        <div class="gallery">
            <img src="images/photo1.jpg" alt="Produit 1">
            <img src="images/photo2.jpg" alt="Produit 2">
            <img src="images/photo3.jpg" alt="Produit 3">
            <img src="images/photo4.jpg" alt="Produit 4">
            <img src="images/photo5.jpg" alt="Produit 5">

        </div>

        <a class="btn" href="https://www.instagram.com/papa.france.emballages/" target="_blank">Participez</a>

        <div class="arrow">⬇️</div>
    </section>

    <section class="steps">
        <h2> LES ÉTAPES ✨</h2>
        <ol>
            <li>Prenez en photo ou vidéo vos créations dans nos emballages</li>
            <li>Mettez en story Instagram en identifiant le compte <span>@papa.france.emballages</span></li>
            <li>Si votre story est validée par nos équipes, vous recevrez directement par message votre coupon</li>
        </ol>

        <a class="btn" href="https://www.instagram.com/papa.france.emballages/" target="_blank">Participez</a>


        <footer>*Limitation d'une photo et une vidéo par mois</footer>
    </section>

</body>

</html>