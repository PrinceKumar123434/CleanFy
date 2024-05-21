<?php include('include/header.php') ?>

<!-- heading  -->
<h3>Your card</h3>

<div class="container">
  <div class="myone">
 
  <div class="card">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
   <div class="cb">
    <p id="hc">Vitamin E Day Cream with <br> Grapeseeds</p>
    <p><span>Delete</span> <span>Save for Later</span></p>
   </div>

   <div class="cu">
   <p class="p4">Quantity</p>
    <div class="alls">
     <p><span><i class="fa-solid fa-chevron-down"></i></span> 
     <span class="s1">1</span>
    <span><i class="fa-solid fa-angle-up"></i></span></p>
    <p class="rs">Price : Rs...</p>
   </div>
</div>
  </div>
</div>

<div class="card">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
   <div class="cb">
    <p id="hc">Vitamin E Day Cream with <br> Grapeseeds</p>
    <p><span>Delete</span> <span>Save for Later</span></p>
   </div>

   <div class="cu">
   <p class="p4">Quantity</p>
    <div class="alls">
     <p><span><i class="fa-solid fa-chevron-down"></i></span> 
     <span class="s1">1</span>
    <span><i class="fa-solid fa-angle-up"></i></span></p>
    <p class="rs">Price : Rs...</p>
   </div>
</div>
  </div>
</div>

<div class="card">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
   <div class="cb">
    <p id="hc">Vitamin E Day Cream with <br> Grapeseeds</p>
    <p><span>Delete</span> <span>Save for Later</span></p>
   </div>

   <div class="cu">
   <p class="p4">Quantity</p>
    <div class="alls">
     <p><span><i class="fa-solid fa-chevron-down"></i></span> 
     <span class="s1">1</span>
    <span><i class="fa-solid fa-angle-up"></i></span></p>
    <p class="rs">Price : Rs...</p>
   </div>
</div>
  </div>
</div>

  </div>

  <div class="mytwo">

  <div class="card">
  <div class="card-body">
  
  <div class="mt1">
    <p>Subtotal</p>
    <p>Rs _ _ _</p>
  </div>

  <div class="mt2">
    <p id="sm">Shipping</p>
    <p>To be calculated</p>
  </div>

  <div class="mt3">
    <p>Total</p>
    <p>Rs _ _ _</p>
  </div>

</div>
</div>

<div class="d-grid gap-2">
  <button class="btn" type="button">CHECKOUT</button>
</div>

  </div>
</div>

<div class="container">

<div class="card1">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">COCOSHEA BODY BUTTER</h5>
    <p class="card-text">Calms skin and repairs moisture barrier for long lasting hydration.</p>
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>

<div class="card1">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">COCOSHEA BODY BUTTER</h5>
    <p class="card-text">Calms skin and repairs moisture barrier for long lasting hydration.</p>
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>

<div class="card1">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">COCOSHEA BODY BUTTER</h5>
    <p class="card-text">Calms skin and repairs moisture barrier for long lasting hydration.</p>
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>

<div class="card1">
  <img src="image/product.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">COCOSHEA BODY BUTTER</h5>
    <p class="card-text">Calms skin and repairs moisture barrier for long lasting hydration.</p>
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>


</div>

<?php include('include/footer.php') ?> 

<!-- css add  -->
<style>
  /* card design */
  .card1{
    margin-top:20px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.25);
    margin-bottom:20px;
  }
  .card1 img{
    padding:10px;
    border-radius:20px;
  }
 h3{
  color:#564130;
  font-family: 'Poppins', sans-serif;
  font-size:30px;
  font-weight: 800;
  position: relative;
  left:110px;
  /* top:25px; */
}
.container {
  position: relative;
}
.myone{
  width: 50%;
}
.mytwo{
  width:50%;
}

/* card and title design  */
.myone{
  margin-bottom:10px;
}

.card{
  margin-top:10px;
  max-width:50em;
  flex-direction:row;
}
.card img{
  max-width:25%;
  padding:0.5em;
}
.cb{
 display:flex;
}
.cb #hc{
  padding-right: 50px;
}
#hc{
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  color: #564130;
  font-weight: 700;
}
.cb p span{
  padding-right:30px;
}
p span{
  font-family: 'Poppins', sans-serif;
  text-decoration:underline;
  font-size:15px;
}

.p4{
    color:#000000;
    font-family: 'Poppins', sans-serif;
    font-size:13px;
    font-weight:600;
  }
  span i{
    background:#564130;
    color:#fff;
    padding:8px;
    border-radius:5px;
  }
  .s1{
    margin-right:2px;
    padding-left:20px;
    padding-right:20px;
    padding-top:8px;
    padding-bottom:8px;
    border-radius:5px;
    background:#D9D9D9;
  }
  .alls{
    display:flex;
  }
  .rs{
    margin-left:100px;
    color:#000000;
    font-family: 'Poppins', sans-serif;
    font-size:15px;
    font-weight:800;
  }
  /* second card desing  */
  .mt1{
    display:flex;
    justify-content:space-between;
  }
  .mt2{
    display:flex;
    justify-content:space-between;
  }
  .mt3{
    display:flex;
    justify-content:space-between;
  }

.mt1 p{
    color:#474747;
    font-family: 'Poppins', sans-serif;
    font-size:15px;
    font-weight:500;
}
.mt2 #sm{
    color:#474747;
    font-family: 'Poppins', sans-serif;
    font-size:15px;
    font-weight:500;
}

.mt3 p{
    color:#564130;
    font-family: 'Poppins', sans-serif;
    font-size:18px;
    font-weight:900;
}

/* button  */
.btn{
  margin-top:10px;
  background:#564130;
  color:#fff;
}


@media (max-width:991px) {
  .row .right .content {
    padding-left: 0;
  }
}

@media (max-width:768px) {
.myone{
  width: 100%;
}
.myone .card img{
  width: 100%;
  height:15vh;
}
#hc{
  font-size:10px;
}
p span{
  font-size:10px;
}
.cb #hc{
  padding-right: 10px;
}
.p4{
  font-size:10px;
  font-weight:600;
}

span i{
    padding:3px;
    border-radius:5px;
  }
  .s1{
    margin-right:2px;
    padding-left:10px;
    padding-right:10px;
    padding-top:4px;
    padding-bottom:4px;
    border-radius:5px;
  }
  .alls{
    display:flex;
  }
  .rs{
    margin-left:60px;
    font-size:10px;
    font-weight:600;
  }
  .s1{
    margin-right:2px;
    padding-left:10px;
    padding-right:10px;
    padding-top:4px;
    padding-bottom:4px;
    border-radius:5px;
  }

  .mytwo{
    width: 100%;
  }
  .mt3 p{
    font-size:14px;
    font-weight:600;
}
.ca .ca1{
  width: 100%;
}
}

</style>

