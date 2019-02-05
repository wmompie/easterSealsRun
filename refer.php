<?php include 'inc/header.php'?>

<?php

// MESSAGE VARS
$msg = '';
$msgClass = '';

// CHECK FOR SUBMIT
if (filter_has_var(INPUT_POST, 'submit_refer')) {
    // WEB FORM DATA
    $from_email = htmlspecialchars($_POST['from_email']);
    $to_email = htmlspecialchars($_POST['to_email']);
    $message = htmlspecialchars($_POST['message']);

    // CHECK REQUIRED FIELDS
    if (!empty($from_email) && !empty($to_email) && !empty($message)) {
        // PASSED REQUIRED FIELDS CHECK
        // CHECK FROM EMAIL VALIDATION
        if (filter_var($from_email, FILTER_VALIDATE_EMAIL) === false) {
            // FAILED FROM EMAIL VALIDATION
            $msg = '<strong>Please Use Your Valid Email</strong>';
            $msgClass = 'alert alert-danger alert-dismissible fade show';
        } else {
            // PASSED FROM EMAIL VALIDATION
            // CHECK FRIEND'S (TO) EMAIL VALIDATION
            if (filter_var($to_email, FILTER_VALIDATE_EMAIL) === false) {
                // FAILED FRIEND'S (TO) EMAIL VALIDATION
                $msg = '<strong>Please Use A Valid Email For Your Friend</strong>';
                $msgClass = 'alert alert-danger alert-dismissible fade show';
            } else {
                // PASSED FRIEND'S (TO) EMAIL VALIDATION
                $subject = "Refer-A-Friend Email for Easterseals Run";
                $body = '<h2>You have  been invited to an Easterseals Run by a friend using the Refer-A-Friend!</h2>
                    <h4>From: ' . $from_email . '</h2>
                    <h4>Message: </h4><p>' . $message . '</p>
                    <a href="http://wmompie.mydevryportfolio.com/easterseals">Easeterseals Website</a>';

                // EMAIL HEADERS
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                // ADDITIONAL HEADERS
                $headers .= "From: <" . $from_email . ">" . "\r\n";

                if (mail($to_email, $subject, $body, $headers)) {
                    // EMAIL SENT
                    $msg = 'Your email has been sent!';
                    $msgClass = 'alert alert-success alert-dismissible fade show';
                } else {
                    // EMAIL FAILED
                    $msg = '<strong>An Error Has Occured. Please Try Again In A Few Minutes.</strong>';
                    $msgClass = 'alert alert-danger alert-dismissible fade show';
                }
            }
        }
    } else {
        // FAILED
        $msg = 'Please fill in all of the required fields below marked with red asterisks.';
        $msgClass = 'alert alert-danger alert-dismissible fade show';
    }
}
?>

<div class="container refer-form">
  <h1 class="mb-5 text-center">Easterseals Run | Refer a Friend</h1>
  <p class="text-center mb-5">If you know someone dealing with a disabling condition or that might want to tag along and help the community, it is a daunting task to know where to turn. Easterseals Run Miami Referral provides you the opportunity to refer a friend to this site so they can sign up for the run. The referral helps meet the individual needs of children and adults with disabilities and their families seeking services. Just enter the information needed below and we'll take care of the rest!</p>
  <div class="container mb-5 border rounded border-orange pt-5 pb-2 px-4">
    <?php if ($msg != ''): ?>
      <div class="<?php echo $msgClass; ?>" role="alert">
        <?php echo $msg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif;?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="referForm">
      <!-- FROM EMAIL -->
      <div class="form-group">
        <label for="inputFromEmail" class="font-weight-bold">Your Email <span class="red-asterisk">&#42;</span></label>
        <input
        type="email"
        name="from_email"
        data-toggle="tooltip"
        data-placement="top"
        title="Your email"
        class="form-control form-control-lg"
        id="inputFromEmail"
        placeholder="Your Email"
        value="<?php echo isset($_POST['from_email']) ? $from_email : ''; ?>"
        >
      </div>
      <!-- TO EMAIL -->
      <div class="form-group">
        <label for="inputToEmail" class="font-weight-bold">Friend's Email <span class="red-asterisk">&#42;</span></label>
        <input
        type="email"
        name="to_email"
        data-toggle="tooltip"
        data-placement="top"
        title="Your friend's email"
        class="form-control form-control-lg"
        id="inputToEmail"
        placeholder="Friend's Email"
        value="<?php echo isset($_POST['to_email']) ? $to_email : ''; ?>"
        >
      </div>
      <!-- MESSAGE -->
      <div class="form-group">
        <label for="inputMessage" class="font-weight-bold">Message <span class="red-asterisk">&#42;</span></label>
        <textarea
        name="message"
        data-toggle="tooltip"
        data-placement="top"
        title="Your personal message"
        class="form-control form-control-lg"
        id="inputMessage"
        placeholder="Your Personal Message"
        rows="3"
        ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
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

<?php include 'inc/footer.php'?>