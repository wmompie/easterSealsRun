<?php include 'inc/header.php';?>

<?php

require 'config/dbuser.php';

// MESSAGE VARIABLES
$msg = '';
$msgClass = '';

// CHECK FOR SUBMIT
if (filter_has_var(INPUT_POST, 'submit_registration')) {
    // GET FORM DATA
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $address1 = htmlspecialchars($_POST['address1']);
    $address2 = htmlspecialchars($_POST['address2']);
    $city = htmlspecialchars($_POST['city']);
    $state = $_POST['state'];
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $phone = htmlspecialchars($_POST['phone']);
    $distance = $_POST['distance'];

    //QUERY
    $sql = "INSERT INTO runner (fname, lname, email, address1, address2, city, state, postalcode, phone, Distance) VALUES ('$first_name', '$last_name', '$email', '$address1', '$address2', '$city', '$state', '$postal_code', '$phone', '$distance')";

    // CHECK REQUIRED FIELDS
    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($address1) && !empty($city) && !empty($state) && !empty($postal_code) && !empty($phone) && !empty($distance)) {
        // PASSED REQUIRED FIELDS CHECK
        // CHECK EMAIL
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // FAILED EMAIL VALIDATION
            $msg = '<strong>Please Use A Valid Email</strong>';
            $msgClass = 'alert alert-danger alert-dismissible fade show';
        } else {
            // PASSED EMAIL VALIDATION
            if (mysqli_query($conn, $sql)) {
                // PASSED QUERY CONNECTION AND INSERTED DATA TO THE DATABASE
                $msg = 'Thank you for signing up for the Easterseals Run!!! <strong> Please Make Sure To Refer A Friend With The Link Below!!!</strong>';
                $msgClass = 'alert alert-success alert-dismissible fade show';
            } else {
                // FAILED TO INSERT THE DATA TO THE DATABASE
                $msg = '<strong>An Error Has Occured. Please Try Again In A Few Minutes.</strong>';
                $msgClass = 'alert alert-danger alert-dismissible fade show';
            }
        }
    } else {
        // FAILED REQUIRED FIELDS CHECK
        $msg = '<strong>HEY THERE!!!</strong> You should probably fill in all of the required fields below marked with red asterisks.';
        $msgClass = 'alert alert-danger alert-dismissible fade show';
    }
}

?>

<div class="signup-form">
  <h1 class="mb-5 text-center">Easterseals Run | Sign-Up Form</h1>

  <div class="container mb-5 border rounded border-orange pt-5 pb-2 px-4">
    <?php if ($msg != ''): ?>
      <div class="<?php echo $msgClass; ?>" role="alert">
        <?php echo $msg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif;?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="signupForm">
      <div class="form-row">
        <!-- FIRST NAME -->
        <div class="form-group col-md-6">
          <label for="first_name" class="font-weight-bold">First Name <span class="red-asterisk">&#42;</span></label>

          <input
          type="text"
          name="first_name"
          data-toggle="tooltip"
          data-placement="top"
          title="First Name"
          class="form-control form-control-lg"
          id="first_name"
          placeholder="Enter first name"
          value="<?php echo isset($_POST['first_name']) ? $first_name : ''; ?>"
          >
        </div>
        <!-- LAST NAME -->
        <div class="form-group col-md-6">
          <label for="last_name" class="font-weight-bold">Last Name <span class="red-asterisk">&#42;</span></label>
          <input
          type="text"
          name="last_name"
          data-toggle="tooltip"
          data-placement="top"
          title="Last Name"
          class="form-control form-control-lg"
          id="last_name"
          placeholder="Enter last name"
          value="<?php echo isset($_POST['last_name']) ? $last_name : ''; ?>"
          >
        </div>
      </div>
      <!-- EMAIL -->
      <div class="form-group">
        <label for="inputEmail" class="font-weight-bold">Email <span class="red-asterisk">&#42;</span></label>
        <input
        type="email"
        name="email"
        data-toggle="tooltip"
        data-placement="top"
        title="Email"
        class="form-control form-control-lg"
        id="inputEmail"
        placeholder="Email"
        value="<?php echo isset($_POST['email']) ? $email : ''; ?>"
        >
      </div>
      <div class="form-row">
        <!-- ADDRESS 1 -->
        <div class="form-group col-md-6">
          <label for="inputAddress" class="font-weight-bold">Address <span class="red-asterisk">&#42;</span></label>
          <input type="text"
          name="address1"
          data-toggle="tooltip"
          data-placement="top"
          title="Address 1"
          class="form-control form-control-lg"
          id="inputAddress"
          placeholder="Enter address"
          value="<?php echo isset($_POST['address1']) ? $address1 : ''; ?>"
          >
        </div>
        <!-- ADDRESS 2 -->
        <div class="form-group col-md-6">
          <label for="inputAddress2" class="font-weight-bold">Address 2</label>
          <input
          type="text"
          name="address2"
          data-toggle="tooltip"
          data-placement="top"
          title="Address 2"
          class="form-control form-control-lg"
          id="inputAddress2"
          placeholder="Apartment, studio, or floor"
          value="<?php echo isset($_POST['address2']) ? $address2 : ''; ?>"
          >
        </div>
      </div>
      <div class="form-row">
        <!-- CITY -->
        <div class="form-group col-md-6">
          <label for="inputCity" class="font-weight-bold">City <span class="red-asterisk">&#42;</span></label>
          <input
          type="text"
          name="city"
          placeholder="Miami"
          data-toggle="tooltip"
          data-placement="top"
          title="City"
          class="form-control form-control-lg"
          id="inputCity"
          value="<?php echo isset($_POST['city']) ? $city : 'Miami'; ?>"
          >
        </div>
        <!-- STATE -->
        <div class="form-group col-md-4">
          <label for="inputState" class="font-weight-bold">State <span class="red-asterisk">&#42;</span></label>
          <select
          id="inputState"
          name="state"
          data-toggle="tooltip"
          data-placement="top"
          title="State"
          class="form-control form-control-lg"
          >
            <option value="AL">AL</option>
            <option value="AK">AK</option>
            <option value="AR">AR</option>
            <option value="AZ">AZ</option>
            <option value="CA">CA</option>
            <option value="CO">CO</option>
            <option value="CT">CT</option>
            <option value="DC">DC</option>
            <option value="DE">DE</option>
            <option selected>FL</option>
            <option value="GA">GA</option>
            <option value="HI">HI</option>
            <option value="IA">IA</option>
            <option value="ID">ID</option>
            <option value="IL">IL</option>
            <option value="IN">IN</option>
            <option value="KS">KS</option>
            <option value="KY">KY</option>
            <option value="LA">LA</option>
            <option value="MA">MA</option>
            <option value="MD">MD</option>
            <option value="ME">ME</option>
            <option value="MI">MI</option>
            <option value="MN">MN</option>
            <option value="MO">MO</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="NC">NC</option>
            <option value="NE">NE</option>
            <option value="NH">NH</option>
            <option value="NJ">NJ</option>
            <option value="NM">NM</option>
            <option value="NV">NV</option>
            <option value="NY">NY</option>
            <option value="ND">ND</option>
            <option value="OH">OH</option>
            <option value="OK">OK</option>
            <option value="OR">OR</option>
            <option value="PA">PA</option>
            <option value="RI">RI</option>
            <option value="SC">SC</option>
            <option value="SD">SD</option>
            <option value="TN">TN</option>
            <option value="TX">TX</option>
            <option value="UT">UT</option>
            <option value="VT">VT</option>
            <option value="VA">VA</option>
            <option value="WA">WA</option>
            <option value="WI">WI</option>
            <option value="WV">WV</option>
            <option value="WY">WY</option>
          </select>
        </div>
        <!-- POSTAL CODE -->
        <div class="form-group col-md-2">
          <label for="inputPostal_code" class="font-weight-bold">Postal Code <span class="red-asterisk">&#42;</span></label>
          <input
          type="text"
          name="postal_code"
          data-toggle="tooltip"
          data-placement="top"
          title="Postal Code"
          class="form-control form-control-lg"
          id="inputPostal_code"
          value="<?php echo isset($_POST['postal_code']) ? $postal_code : ''; ?>"
          >
        </div>
      </div>
        <div class="form-row">
          <!-- PHONE -->
        <div class="form-group col-md-6">
          <label for="inputPhone" class="font-weight-bold">Phone <span class="red-asterisk">&#42;</span></label>
          <input
          type="tel"
          name="phone"
          data-toggle="tooltip"
          data-placement="top"
          title="Phone"
          class="form-control form-control-lg"
          id="inputPhone"
          placeholder="Phone"
          value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>"
          >
        </div>
        <!-- DISTANCE  | 5K AS DEFAULT VALUE -->
        <div class="form-group col-md-6">
          <label for="inputRun" class="font-weight-bold">Distance <span class="red-asterisk">&#42;</span></label>
          <select
          id="inputRun"
          name="distance"
          data-toggle="tooltip"
          data-placement="top"
          title="Distance you would like to Run/Walk"
          class="form-control form-control-lg"
          >
            <option value="1m">1 Mile</option>
            <option selected>5K</option>
            <option value="10k">10K</option>
          </select>
        </div>
      </div>
      <div class="row justify-content-end my-3 px-4">
        <a
          href="refer.php"
          name="refer"
          data-toggle="tooltip"
          data-placement="top"
          title="Refer A Friend!!! Let them join you on the adventure!"
          class="btn btn-lg bg-orange col-12"
          role="button">Refer A Friend!!!</a>
      </div>
      <div class="row mt-4 justify-content-between px-4 pt-1 pb-2">
        <!-- Use "submit_registration" as the name for the button used to submit the form. -->
        <button
        type="submit"
        name="submit_registration"
        data-toggle="tooltip"
        data-placement="top"
        title="Submit Registration Form"
        class="btn btn-lg btn-success col-md-6 mb-3">Submit Registration</button>
        <!-- CANCEL BUTTON -->
        <a
        href="index.html"
        name="cancel"
        data-toggle="tooltip"
        data-placement="top"
        title="Cancel Registration Form and Return to Home Page"
        class="btn btn-lg btn-danger col-md-2 mb-3"
        role="button">Cancel</a>
      </div>
    </form>
  </div>
</div>

<?php include 'inc/footer.php'?>