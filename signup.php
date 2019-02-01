<?php include 'inc/header.php'?>

<?php
// Check for Submit
if (filter_has_var(INPUT_POST, 'submit_registration')) {
    // Get Form Data
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
}

// $url = $_SERVER["HTTP_HOST"]."/easterseals/refer.php";
// var_dump($url);

/* Redirect to a different page in the current directory that was requested */
// $host = $_SERVER['HTTP_HOST'];
// $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// $extra = 'refer.php';

if (isset($_POST['submit_registration'])) {
    // header("location: ".$url);
    header("Location: http://wmompie.mydevryportfolio.com/easterseals/refer.php");
    // header("Location: http://$host$uri/$extra");
}
?>

<div class="signup-form">
  <h1 class="mb-5 text-center">Easterseals Run | Sign-Up Form</h1>

  <div class="container mb-5 border rounded border-orange pt-5 pb-2 px-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-row">
        <!-- FIRST NAME -->
        <div class="form-group col-md-6">
          <label for="first_name" class="font-weight-bold">First Name</label>
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
          <label for="last_name" class="font-weight-bold">Last Name</label>
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
        value="<?php echo isset($_POST['email ']) ? $email : ''; ?>"
        >
      </div>
      <div class="form-row">
        <!-- ADDRESS 1 -->
        <div class="form-group col-md-6">
          <label for="inputAddress" class="font-weight-bold">Address</label>
          <input type="text"
          name="address1"
          data-toggle="tooltip"
          data-placement="top"
          title="Address 1"
          class="form-control form-control-lg"
          id="inputAddress"
          placeholder="1234 Main St"
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
          <label for="inputCity" class="font-weight-bold">City</label>
          <input
          type="text"
          name="city"
          placeholder="Miami"
          data-toggle="tooltip"
          data-placement="top"
          title="City"
          class="form-control form-control-lg"
          id="inputCity"
          value="<?php echo isset($_POST['city']) ? $city : ''; ?>"
          >
        </div>
        <!-- STATE -->
        <div class="form-group col-md-4">
          <label for="inputState" class="font-weight-bold">State</label>
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
          <label for="inputPostal_code" class="font-weight-bold">Postal Code</label>
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
          <label for="inputPhone" class="font-weight-bold">Phone</label>
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
          <label for="inputRun" class="font-weight-bold">Distance</label>
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
      <div class="row justify-content-end mt-4 px-4">
        <a
          href="refer.php"
          name="refer"
          data-toggle="tooltip"
          data-placement="top"
          title="Refer A Friend!!! Let them join you on the adventure!"
          class="btn btn-success col-md-2"
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