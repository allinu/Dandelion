<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> [Danderlion] </title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/rainbow.css">
    <link rel="stylesheet" href="./css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"> - ? - </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> | <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">You must konw this .. of . is so crazy!<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="out1">
      <?php
        $flag = "danderlion{9H9_1s_s0_cRa2Y}";
        if (isset($_GET['a']) and isset($_GET['b'])) {
          if ($_GET['a'] != $_GET['b']) {
            if (md5($_GET['a']) === md5($_GET['b'])) {
              echo ('Flag: '.$flag);
            }else {
              echo 'Wrong.';
            }
          } else {
            echo "Wrong.";
          }
        } else {
          echo "Wrong. ";
        }
      ?>
    </div>

    <script charset="utf-8" src="./js/rainbow.min.js"></script>
    <script charset="utf-8" src="./js/popper.min.js"></script>
    <script charset="utf-8" src="./js/bootstrap.min.js"></script>
    <script charset="utf-8" src="./js/custom.js"></script>
</body>
</html>

