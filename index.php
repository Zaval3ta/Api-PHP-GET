<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';
$result = file_get_contents(API_URL); // si solo quieres hacer un GEt de una API
$data = json_decode($result, true);
?>
<!--HTML-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="La próxima película de Marvel"/>
  <title>Proxima película de marvel</title>
  <!-- Centered viewport -->
<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>
<body>
  <main>
    <section>
      <img src="<?= $data['poster_url']; ?>" width="300" alt="Poster de <?= $data['title']; ?>" />
    </section>
    <hgroup>
      <h3><?= $data['title']; ?> se estrena en <?=$data['days_until'];?> días </h3>
      <p>Fecha de estreno: <?=$data['release_date']; ?></p>
      <p>La siguiente película es: <?= $data['following_production']['title']; ?></p>
    </hgroup>
  </main>
</body>
<!--Estilo-->
<style>
  :root{
    color-scheme: light dark;
  }
  body{
    display: grid;
    place-content: center;
  }
  section{
    display: flex;
    justify-content: center;
    text-align: center;
  }
  hgroup{
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }
  img {
    margin: 0 auto;
    border-radius: 16px;
  }
</style>