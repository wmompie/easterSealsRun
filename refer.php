<?php include 'inc/header.php' ?>

<?php
  // Check for Submit
  if(filter_has_var(INPUT_POST, submit_registration)) {
    // Web Form Data
    // Add a web form to this page with the following fields:
    //   - from_email
    //   - to_email
    //   - message
  }
?>

<div class="signup-form">
  <h1 class="mb-3 text-center">Easterseals Run | Refer a Friend</h1>

  <!-- Add text indicating the opportunity to refer a friend to the site so they can sign up for the run.  -->



  <div class="container mb-5 border rounded border-orange pt-5 pb-2 px-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <!-- Add a web form to this page with the following fields:
        - from_email
        - to_email
        - message -->



      <div class="form-row">
        <!-- FROM EMAIL -->
        <div class="form-group col-md-6">
          <label for="fname" class="font-weight-bold">First Name</label>
          <input
          type="text"
          name="fname"
          data-toggle="tooltip"
          data-placement="top"
          title="First Name"
          class="form-control form-control-lg"
          id="fname"
          placeholder="Enter first name"
          value="<?php echo isset($_POST['fname']) ? $fname : ''; ?>"
          >
        </div>
        <!-- TO EMAIL -->
        <div class="form-group col-md-6">
          <label for="lname" class="font-weight-bold">Last Name</label>
          <input
          type="text"
          name="lname"
          data-toggle="tooltip"
          data-placement="top"
          title="Last Name"
          class="form-control form-control-lg"
          id="lname"
          placeholder="Enter last name"
          value="<?php echo isset($_POST['lname']) ? $lname : ''; ?>"
          >
        </div>
      </div>
      <!-- MESSAGE -->
      <div class="form-group">
        <label for="inputEmail" class="font-weight-bold">Email</label>
        <input
        type="email"
        name="email"
        data-toggle="tooltip"
        data-placement="top"
        title="Email"
        class="form-control form-control-lg"
        id="inputEmail"
        placeholder="Email"
        value="<?php echo isset($_POST['email ']) ? $email  : ''; ?>"
        >
      </div>


      <!-- Add a link to return to the Home page. -->

      <!-- RETURN HOME -->
      <div class="row mt-4 justify-content-between px-4 py-5">
        <a
        href="index.html"
        name="cancel"
        data-toggle="tooltip"
        data-placement="top"
        title="Cancel Registration Form and Return to Home Page"
        class="btn btn-lg btn-danger col-md-2">Return Home</a>
      </div>
    </form>
  </div>
</div>

<?php include 'inc/footer.php' ?>