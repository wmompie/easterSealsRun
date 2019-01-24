<?php include 'inc/header.php' ?>

<div class="signup-form">
  <h1 class="mb-3 text-center">Easterseals Run | Sign-Up Form</h1>

  <div class="container mb-5 border border-orange py-5 px-4">
    <!-- *** NEED TO INCLUDE TITLE ATTRIBUTES AND NAME ATTRIBUTES *** -->
    <form action="signup.php">
      <div class="form-row">
        <!-- FIRST NAME -->
        <div class="form-group col-md-6">
          <label for="fname">First Name</label>
          <input type="text" name="fname" class="form-control form-control-lg" id="fname" placeholder="Enter first name">
        </div>
        <!-- LAST NAME -->
        <div class="form-group col-md-6">
          <label for="lname">Last Name</label>
          <input type="text" name="lname" class="form-control form-control-lg" id="lname" placeholder="Enter last name">
        </div>
      </div>
      <!-- EMAIL -->
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email">
      </div>
      <!-- ADDRESS 1 -->
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address1" class="form-control form-control-lg" id="inputAddress" placeholder="1234 Main St">
      </div>
      <!-- ADDRESS 2 -->
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" name="address2" class="form-control form-control-lg" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <!-- CITY, STATE, ZIP -->
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" class="form-control form-control-lg" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control form-control-lg">
            <option selected>Choose...</option>
            <!-- NEED TO ADD IN THE OPTIONS -->
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" name="zip" class="form-control form-control-lg" id="inputZip">
        </div>
      </div>
        <div class="form-row">
          <!-- PHONE -->
        <div class="form-group col-md-6">
          <label for="inputPhone">Phone</label>
          <input type="tel" name="phone" class="form-control form-control-lg" id="inputPhone" placeholder="Phone">
        </div>
        <!-- DISTANCE  | 5K AS DEFAULT VALUE -->
        <div class="form-group col-md-6">
          <label for="inputRun">Distance</label>
          <select id="inputRun" class="form-control form-control-lg">
            <option selected>Choose...</option>
            <!-- NEED TO ADD IN THE OPTIONS -->
            <option>...</option>
          </select>
        </div>
      </div>
      <div class="row mt-4 justify-content-around">
        <!-- Use "submit_registration" as the name for the button used to submit the form. -->
        <button type="submit" name="submit" class="btn btn-lg btn-primary col-md-5">Submit</button>
        <!-- CANCEL BUTTON -->
        <a href="index.html" class="btn btn-lg btn-danger col-md-5">Cancel</a>
      </div>
    </form>
  </div>
</div>

<?php include 'inc/footer.php' ?>