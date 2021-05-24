<?php include_once 'includes/bdd.php';
?>
<!doctype html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Montserrat Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <!-- Changes this to your bot's name -->
  <title>Sybette</title>

  <!-- Change the content attribute's value to your bot's description -->
  <meta name="description" content="An opensource discord bot website template that you can use to make your bot seem more professional!">

  <!-- Change the content attribute's value to your name -->
  <meta name="author" content="TrustedMercury">

  <link rel="stylesheet" href="styles/theTrendingStyle.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/css/all.css" />
  <link rel="icon" href="images/sybette_logo_black.png"/>
</head>

<body class="bg-shinyGray overflow-x-hidden">
  <nav id="navigationBar" class="flex flex-row items-center justify-between p-6 bg-sweetBlack">
    <div class="left flex flex-row items-center ml-10 md:ml-20 text-white">
      <img src="images/sybette_logo_white.png" width="100px" height="100px" class="mr-2 hidden md:inline pointer-events-none noselect" />
    </div>
    <div class="right mr-10 md:mr-20">
      <a href="https://discord.com/oauth2/authorize?client_id=836136175575236660&permissions=8&scope=bot" target="_blank" class="px-8 py-3 whitespace-no-wrap bg-blurple text-white rounded-lg text-xl font-semibold hover:bg-beautyPurple"><i class="fab fa-discord mr-1"></i> Inviter</a>
    </div>
  </nav>

  <div id="container" class="flex flex-col items-center justify-center">
    <div class="flex flex-col items-center justify-center pt-40 text-center">
      <span class="text-2xl md:text-5xl font-semibold text-white">Changer le fonctionnement des serveurs</span>
      <span class="text-gray-400 text-lg md:text-xl max-w-xl font-light">Aider les serveurs à croître de manière exponentielle avec une solution simple. Rendez votre serveur actif et divertissez votre communauté avec une solution simple - <b>un seul robot discord!</b>!</span>
      <div class="flex flex-col md:flex-row mt-8">
        <a href="https://discord.com/oauth2/authorize?client_id=836136175575236660&permissions=8&scope=bot" target="_blank" class="text-2xl hvr-grow bg-blurple p-4 md:px-8 mx-4 my-4 rounded-lg">Invitez le bot maintenant !</a>
        <a href="https://discord.gg/aSvaMc6p" target="_blank" class="text-2xl hvr-grow text-white bg-sweetBlack p-4 md:px-8 mx-4 my-4 rounded-lg border-blurple border-2">Serveur de support</a>
      </div>
    </div>
    <svg class="bg-blurple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1D1E23" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,74.7C384,75,480,117,576,160C672,203,768,245,864,261.3C960,277,1056,267,1152,240C1248,213,1344,171,1392,149.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="flex flex-col md:flex-row items-center justify-center w-full bg-blurple">
      <img src="images/sybette_logo_white.png" class="max-w-xs md:max-w-5xl noselect pointer-events-none" />
      <div class="flex flex-col items-center justify-center noselect">
        <div class="flex flex-col items-center text-4xl mb-4">
          <span class="font-montserrat font-black">Système de logs et</span>
          <span class="font-montserrat font-black">de canvas avancés</span>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#7289DA" fill-opacity="1" d="M0,224L48,240C96,256,192,288,288,304C384,320,480,320,576,288C672,256,768,192,864,138.7C960,85,1056,43,1152,48C1248,53,1344,107,1392,133.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="flex flex-row items-center justify-center mb-10">
      <span class="text-lg text-gray-400 font-semibold">Copyright © Skoorpi 2021</span>
    </div>
  </div>

</body>

</html>
