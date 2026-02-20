<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'analytics.php'; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php  echo $description ?? "Start a profitable cleaning business with Military Cleaning Maintenance. We offer expert one-on-one training for Veterans and supporters. We also provide a free  business website, certifications, marketing, and  huge discounts on equipment. also, a step by step manual to insure your success.  Launch in just 10 days!" ?>">

    <!-- Favicon -->
<link rel="icon" href="/favicons/favicon.ico">

<!-- PNG favicons -->
<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">

<!-- Apple Touch Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">

<!-- Android / PWA Icons -->
<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/favicons/android-chrome-512x512.png">

    

    <title><?php  echo $title ?? 'Military Cleaning Maintenance' ?></title>

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Link to CSS -->
    <link rel="stylesheet" href="/base.css" />
    <link rel="stylesheet" href="/style.css?v=2" />
    <link rel="stylesheet" href="/queries.css?v=2" />
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#services">Services</a></li>

          <li><a href="/#contact">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <!-- END HEADER -->