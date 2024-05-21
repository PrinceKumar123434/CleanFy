<?php include('include/header.php') ?>

<!-- <div class="container-fluid"> -->
<div class="ban1">
  <img src="image/banner.svg"  class="img-fluid" alt="">
  <div class="textb">
    <h3>Luxury Skincare Meets <br> Gender-Inclusive <br>Beauty<span>SHOP NOW &nbsp;<i class="fa-solid fa-arrow-right"></i></span></h3> 
  </div>
</div>


<!-- image design  -->
  <h2 class="text1">Premium self care solutions</h2>
  <div class="gallry">
   <div class="oneg">
      <img src="image/care5.svg" alt="">
      <p>BODYCARE</p>
    </div>
    <div class="oneg">
      <img src="image/care2.svg" alt="">
      <p>SKINCARE</p>
    </div>
    <div class="oneg">
      <img src="image/care3.svg" alt="">
      <p>GROOMING</p>
    </div>
    <div class="oneg">
      <img src="image/care4.svg" alt="">
      <p>HAIRCARE</p>
    </div>
  </div>

 <!-- icon design  -->
 <div class="container-flude">
  <div class="container">
  <div class="box">
    <img src="image/icon1.svg" alt="">
    <p>With every product we commit <br>100% transparency with the <br>ingredients used.</p></p>
  </div>
  <div class="box">
    <img src="image/icon2.svg" alt="">
    <p>We curate luxurious products to take <br>care of your skin, because skin issues <br> have no gender.</p>
  </div>
  <div class="box">
    <img src="image/icon3.svg" alt="">
    <p>Mode after consultation from <br> experts in derma and <br> ayuveda.</p>
  </div>
   </div>
 </div> 

 <!-- card design  -->
 <h2 class="textc">Bestsellers</h2>
 <div class="card-container">

 <div class="card">
  <img src="image/product.jpeg" alt="">
  <div class="card-content">
    <h3>COCOSHEA BODY BUTTER</h3>
    <p>Calms skin and repairs moisture <br> barrier for long lasting hydration.</p>
  </div>
</div>

<div class="card">
  <img src="image/product.jpeg" alt="">
  <div class="card-content">
    <h3>COCOSHEA BODY BUTTER</h3>
    <p>Calms skin and repairs moisture <br> barrier for long lasting hydration.</p>
  </div>
</div>

<div class="card">
  <img src="image/product.jpeg" alt="">
  <div class="card-content">
    <h3>COCOSHEA BODY BUTTER</h3>
    <p>Calms skin and repairs moisture <br> barrier for long lasting hydration.</p>
  </div>
</div>

</div>  
 
<!-- View Design  -->
<div class="container">
  <h3 class="title1">VIEW ALL</h3>
</div>
<!-- view page desing right side  -->
<div class="container" id="view1">
  <div class="row">
    <div class="left">
      <img src="image/homeimage1.jpeg" alt="">
    </div>
    <div class="right">
      <div class="content">
        <div class="con1">
       <h2>lonic Facial steamer</h2>
       <p>Spa Level Rejuvenation at home.</p>
      </div>
      <div class="con2">
       <p>Produces tiny ionic steam particles which pentrate the skin 10x more than regular stram.</p>
       <a href=""><button>ADD TO CART</button></a>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="container" id="view1">
  <div class="row">
    <div class="left1">
      <div class="content">
        <div class="con1">
       <h2>Revival Derma Roller</h2>
       <p>Boosts collagen production in your skin.</p>
      </div>
      <div class="con2">
       <p>Visible reduction in acne scars, fine lines, wrinkles and age spots.</p>
       <a href=""><button>ADD TO CART</button></a>
      </div>
      </div>
    </div>
    <div class="right1">
      <img src="image/homeimage2.jpeg" alt="">
    </div>
  </div>
</div>
 
<!-- blogs design  -->
<h2 class="blogh">OURS BLOGS</h2>
<div class="container">
  <div class="two">
    <img src="image/Blog2.svg" class="img-thumbnail" alt="...">
  </div>
</div>

<!-- Search  -->
<?php  include('include/search.php')?>

<!-- footer  -->
<?php include('include/footer.php') ?>


<!-- css add  -->
<style>
/* banner design  */
.ban1 img {
  border-bottom-right-radius: 350px;
}

.container {
  height: auto;
  position: relative;
  width: 100%;
}


.container img {
  /* width: 100%; */
  display: block;
}

.textb {
  position: absolute;
  top: 126px;
  right: 40px;
}

.textb h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 500;
  font-family: 'Poppins', sans-serif;
}

.textb h3 span {
  font-size: 10px;
  margin-left: 20px;
}


/* image design  */
.text1 {
  text-align: center;
  color: #523A28;
  position: relative;
  top: 20px;
  margin-bottom: 40px;
  font-size: 32px;
  font-style: italic;
  font-family: 'Poppins', sans-serif;
}

.gallry {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin: 15px 0;
}

.gallry img {
  flex-wrap: wrap;
  width: 220px;
  height: 350px;
  margin: 10px 0;
  margin-left: 25px;
  border-radius: 140px;
}

.oneg p {
  text-align: center;
  color: #474747;
  font-weight: 700;
}


/* card design  */
.textc {
  text-align: center;
  margin-top: 25px;
  font-size: 30px;
  color: #523A28;
  font-style: italic;
}

.star1 span {
  margin-right: 5px;
  color:#F1BF6C;
}

.card-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.card {
  width: 450px;
  overflow: hidden;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  margin: 20px;
}

.card img {
  width: 100%;
  height: auto;
  padding: 10px;
  border-radius: 20px;
}

.card-content {
  padding: 15px;
}

.card-content h3 {
  color:#000000;
  font-family: 'Poppins', sans-serif;
  font-style:italic;
  font-size:15px;
}
.card-content p{
  color:#000000;
  font-family: 'Poppins', sans-serif;
  font-size:15px;
  font-weight: 500;
}

/* icon */
.container-flude {
  background: #523A28;
  margin-top: 40px;
}

.container {
  align-items: center;
  justify-content: center;
  display: flex;
}

.box {
  margin-top: 20px;
  width: 100%;
  height: 250px;
}

.box img {
  width: 100%;
  height: 100px;
}

.box p {
  color: #fff;
  text-align: center;
  justify-content: center;
  font-size: 15px;
  font-family: 'Poppins', sans-serif;
  font-style: italic;
  padding-top: 20px;
  padding-left: 10px;
  padding-right: 10px;
}

/* view design  */
.title1 {
  text-align: center;
  color: #474747;
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  margin-top: 50px;
}

.title1 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: center;
  column-gap: 1.6rem;
}

.title1::before,
.title1::after {
  content: "";
  height: 2px;
  background-color: #523A28;
  display: block;
}

#view1 {
  margin-top: 20px;
  margin-bottom: 50px;
}

.row {
  width: 80%;
  max-width: 1170px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 50px 30px;
}

.row .left {
  overflow: hidden;
}

.row .left img {
  width: 100%;
  height: 70vh;
  object-fit: cover;
  border-bottom-right-radius: 240px;
}

/* right side  */
.row .right {
  display: flex;
  align-items: center;
}

.row .right .content {
  padding-left: 50px;
}

.con1 h2 {
  color: #564130;
  font-family: 'Poppins', sans-serif;
  font-size: 30px;
  font-weight: 600;
}

.con1 p {
  color: #523A28;
  font-size: 18px;
}

.con2 p {
  color: #523A28;
  font-size: 18px;
}

.con2 button {
  background: #523A28;
  color: #fff;
  padding-left: 18px;
  padding-right: 18px;
  border-radius: 10px;
  padding-top: 12px;
  padding-bottom: 12px;
  font-size: 14px;
  font-family: 'Poppins', sans-serif;
}

/* second  */
.row .right1 img {
  width: 100%;
  height: 70vh;
  object-fit: cover;
  border-bottom-left-radius: 250px;
}

.row .left1 {
  display: flex;
  align-items: center;
}

/* blog  design */
.blogh {
  text-align: center;
  color: #523A28;
  position: relative;
  top: 20px;
  margin-bottom: 40px;
  font-size: 32px;
  font-style: italic;
  font-family: 'Poppins', sans-serif;
}

.container .bogd {
  display: flex;
}

.container .two {
  margin-bottom: 40px;
}

.two img {
  border-radius: 20px;
  padding: 10px;
}


/* responsive code  */
/* view  */
@media (max-width:991px) {
  .row .right .content {
    padding-left: 0;
  }
}

@media (max-width:768px) {

  .card{
    width: 100%;
  }

  .row {
    width: 90%;
    grid-template-columns: 1fr;
  }

  .row .left img {
    width: 100%;
    height: 40vh;
  }

  .row .right1 img {
    width: 100%;
    height: 40vh;
  }

  .box img {
    width: 100%;
    height: 100px;
  }

  .container {
    flex-direction: column;
  }

  .logof {
    margin-top: 20px;
  }

  .img-box {
    width: 100%;
  }

  .textb h3 {
    font-size: 13px;
  }

  .textb h3 span {
    font-size: 6px;
  }

  .ban1 img {
    border-bottom-right-radius: 100px;
  }
  .gallery{
    width: 100%;
    display:flex;
  }

  .row .left img {
  border-bottom-right-radius: 140px;
}
.row .right1 img {
  border-bottom-left-radius: 140px;
}
}

</style>