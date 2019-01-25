<?php include 'inc/header.php' ?>

<?php
  // Check for Submit
  if(filter_has_var(INPUT_POST, 'submit_refer')) {
    // Web Form Data
    $from_email = htmlspecialchars($_POST['from_email']);
    $to_email = htmlspecialchars($_POST['to_email']);
    $message = htmlspecialchars($_POST['message']);
  }
?>

<div class="container refer-form">
  <h1 class="mb-5 text-center">Easterseals Run | Refer a Friend</h1>
  <p class="text-center mb-5">If you know someone dealing with a disabling condition or that might want to tag along and help the community, it is a daunting task to know where to turn. Easterseals Run Miami Referral provides you the opportunity to refer a friend to this site so they can sign up for the run. The referral helps meet the individual needs of children and adults with disabilities and their families seeking services. Just enter the information needed below and we'll take care of the rest!</p>
  <div class="container mb-5 border rounded border-orange pt-5 pb-2 px-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <!-- FROM EMAIL -->
      <div class="form-group">
        <label for="inputFromEmail" class="font-weight-bold">Your Email</label>
        <input
        type="email"
        name="from_email"
        data-toggle="tooltip"
        data-placement="top"
        title="Your email"
        class="form-control form-control-lg"
        id="inputFromEmail"
        placeholder="Your Email"
        value="<?php echo isset($_POST['from_email ']) ? $from_email  : ''; ?>"
        >
      </div>
      <!-- TO EMAIL -->
      <div class="form-group">
        <label for="inputToEmail" class="font-weight-bold">Friend's Email</label>
        <input
        type="email"
        name="to_email"
        data-toggle="tooltip"
        data-placement="top"
        title="Your friend's email"
        class="form-control form-control-lg"
        id="inputToEmail"
        placeholder="Friend's Email"
        value="<?php echo isset($_POST['to_email ']) ? $to_email  : ''; ?>"
        >
      </div>
      <!-- MESSAGE -->
      <div class="form-group">
        <label for="inputMessage" class="font-weight-bold">Message</label>
        <textarea
        name="message"
        data-toggle="tooltip"
        data-placement="top"
        title="Your personal message"
        class="form-control form-control-lg"
        id="inputMessage"
        placeholder="Your Personal Message"
        value="<?php echo isset($_POST['message ']) ? $message  : ''; ?>"
        rows="3"
        ></textarea>
      </div>
      <div class="row submit-btn-group mt-4 justify-content-between px-4 py-5">
        <!-- REFER A FRIEND -->
        <button
        type="submit"
        name="submit_refer"
        data-toggle="tooltip"
        data-placement="top"
        title="Submit the referral to your friend"
        class="btn btn-lg btn-success col-md-5 mb-3">Submit Referral</button>
        <!-- RETURN HOME -->
        <a
        href="index.html"
        name="return"
        data-toggle="tooltip"
        data-placement="top"
        title="Return to Home Page"
        class="btn btn-lg btn-success col-md-5 mb-3"
        role="button">Return Home</a>
      </div>
    </form>
  </div>
</div>

<?php include 'inc/footer.php' ?>