
 <!-- footer design  -->
 <div class="container-fluid">
  <footer>
    <section class="container">
      <div class="logof">
       <img src="image/logo.png" alt="">
       <p>This is a tagline for ClenFay</p>
      </div>
      <div class="contact">
        <h3>CONTACT US</h3>
        <div class="add">
          <span>Address</span>
          <p>4l SSI, INDUSTRIAL AREA, JAHANGIRPURI<BR> GT KARNAL ROAD DELHI -110033</p>
        </div>
        <div class="phone">
          <span>Phone</span>
          <p>+91 9718899099</p>
        </div>
        <div class="email">
          <span>Email</span><br>
          <p>info@clenfay.com</p>
        </div>
      </div>
      <div class="policy">
        <h3>OUR POLICIES</h3>
        <p><a href="">Terms & Conditions</a></p>
        <p><a href="">Privacy Policy</a></p>
        <p><a href="">Return Policy</a></p>
        <p><a href="">Support Policy</a></p>
      </div>
    </section>
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<style>
  
/* footer design  */
footer {
  background-color: #ffffff;
  display: flex;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
  margin-bottom: 25px;
  padding-bottom: 40px;
  padding-top:40px;
}

.container {
  display: flex;
  gap: 20px;
}

.logof {
  /* position:relative;
  top:10px; */
  flex-grow: 1;
  flex-basis: 100%;
}

.logof img {
  width: 147px;
}

.logof p {
  font-size: 15px;
  font-style: italic;
  font-family: 'Poppins', sans-serif;
  color: #523A28;
  font-weight: 500;
  margin-top: 15px;
}

.contact {
  /* position:relative;
  top:40px; */
  flex-grow: 1;
  flex-basis: 100%;
  /* margin-top: 80px; */
}

.contact h3 {
  font-weight: 600;
  color: #D19F4C;
}

.add span {
  font-weight: 700;
  color: #523A28;
}

.email span {
  font-weight: 700;
  color: #523A28;
}

.phone span {
  font-weight: 700;
  color: #523A28;
}

.policy {
  /* position:relative;
  top:10px; */
  flex-grow: 1;
  flex-basis: 100%;
}

.policy h3 {
  font-weight: 600;
  color: #D19F4C;
}

.policy p a {
  text-decoration: none;
  color: #523A28;
}

.container h3 {
  margin-bottom: 20px;
  font-size: 16px;
}


/* responsive code  */
/* view  */
@media (max-width:991px) {
  .row .right .content {
    padding-left: 0;
  }
}

@media (max-width:768px) {
  
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
}


</style>