<?php
session_start();
//redirect if not logged in
if (!isset($_SESSION['loggedin'])){
  header('Location: \dactr/index.php');
  exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Dactr | My Results</title>

    <!-- Custom style -->
    <link href="\dactr/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>

  <body class="text-center">
    <!-- Main container -->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <!-- Header -->
      <header class="masthead">
        <div class="inner">
          <h3 class="masthead-brand">Dactr</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="home.php">Home</a>
            <a class="nav-link active" href="journal.php">My Diary</a>
            <a class="nav-link" href="profile.php">My Profile</a>
            <a class="nav-link" href="\dactr/php/logout.php">Logout</a>
          </nav>
        </div>
      </header>
      <!-- Results -->
      <main>
        <h1>Feedback</h1>
        <?php //provide journal made

        ?>
      </main>
      <!-- Footer -->
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; PyFresh</p>
        </div>
      </footer>
    </div>
  </body>

</html>