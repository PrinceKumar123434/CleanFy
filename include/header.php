<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
    <link rel="stylesheet" href="style/home1.css">
  </head>
  <body>
   <!-- nav bar  -->

    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
      <!-- <div class="container-fluid"> -->
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="image/logo.png" height="40px" width="40px" alt="logo" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="bodycare.php">BODYCARE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="skincare.php">SKINCARE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="men's.php">GROOMING</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="haircare.php">HAIRCARE</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gift.php">GIFT SETS</a>
        </li>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><button>SIGN UP</button></a> -->
        <a class="nav-link" href="my_card.php"><i class="fa-solid fa-cart-plus"></i></a>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-regular fa-circle-user"></i></a>
    </li>
    </ul>
    </div>
      </div>
    </nav>

    <style>
      /* nav bar design  */
.custom-navbar {
  background-color: #fcfcfc;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 25%);
}

nav ul li button {
  background: #523A28;
  border-radius: 10px;
  color: #fff;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 5px;
  padding-bottom: 5px;
}

nav ul li i {
  font-size: 25px;
  text-align: center;
  position: relative;
  top: 10px;
  right: 10px;
}

.nav-link {
  margin-left: 55px;
  font-weight: 600;
}
</style>