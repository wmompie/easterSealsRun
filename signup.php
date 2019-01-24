<?php include 'inc/header.php' ?>

<div class="container signup-form mb-5 border border-orange py-5 px-4">
  <!-- NEED A TITLE OR HEADING TO DESCRIBE THE FORM -->
  <!-- *** NEED TO INCLUDE TITLE ATTRIBUTES AND NAME ATTRIBUTES *** -->
  <form action="signup.php">
    <div class="form-row">
      <div class="form-group col-md-6">
        <!-- FIRST NAME -->
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name">
      </div>
      <div class="form-group col-md-6">
        <!-- LAST NAME -->
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter last name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <!-- EMAIL -->
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
      <div class="form-group col-md-6"></div>
    </div>
    <div class="form-group">
      <!-- ADDRESS 1 -->
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <!-- ADDRESS 2 -->
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <!-- CITY, STATE, ZIP -->
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <!-- NEED TO ADD IN THE OPTIONS -->
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
      <div class="form-row">
      <div class="form-group col-md-6">
        <!-- PHONE -->
        <label for="inputPhone">Email</label>
        <input type="email" class="form-control" id="inputPhone" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <!-- DISTANCE  | 5K AS DEFAULT VALUE -->
        <label for="inputRun">Distance</label>
        <select id="inputRun" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
    </div>
      <!-- Use "submit_registration" as the name for the button used to submit the form. -->
      <button type="submit" class="btn btn-primary">Submit</button>
      <!-- CANCEL BUTTON -->
      <button type="" class="btn btn-danger">Cancel</button>
  </form>
</div>

<?php include 'inc/footer.php' ?>