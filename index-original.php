<!DOCTYPE html>
<html lang="de">

<head>
  <link rel="preload" href="/min/default.min.css" as="style">
  <link rel="preload" href="/min/bundle.min.js" as="script">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00adb5">
  <link rel="stylesheet" href="/min/default.min.css">
  <meta charset="utf-8">
  <meta name="description" content="Private Webseite von David Schneider &middot; Lead Developer in agilen Prozessen &middot; Entwicklung von Webseiten, Webandwendungen und mehr">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.3/moment.min.js"></script>
  <title>David Schneider &middot; Lead Developer | SCHDAV</title>
</head>

<body>
  <noscript class="has-text-danger">Diese Webseite benötigt JavaScript, um ordnungsgemäß funktionieren zu können!</noscript>
  <?php include 'components/modals.php' ?>
  <div id="blur-content">
    <?php include 'components/navigation.php' ?>
    <?php include 'components/hello.php' ?>
    <?php include 'components/references.php' ?>
    <?php include 'components/contact.php' ?>
    <?php include 'components/footer.php' ?>
  </div>
  <div class="counter">
    <?php include('php/counter.php'); ?>
  </div>

  <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
  <script src="/min/bundle.min.js"></script>
</body>
</html>
