<?php
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

        <!-- FONT AWESOME -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous"
        />

        <!-- BOOTSTRAP CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous"
        />

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="styles/main.css" />
        <link rel="stylesheet" href="styles/reports.css" />

        <title>Easterseals Run</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row justify-content-between m-1">
                <h1 class="font-weight-light">Welcome <?php echo $login_session; ?></h1>
                <a
                href ="logout.php"
                name="logout"
                data-toggle="tooltip"
                data-placement="bottom"
                title="Log Out"
                class="btn btn-info btn-sm col-4 col-sm-3 col-lg-2 col-xl-1 h-50"
                role="button"
                id="logout"
                >Log Out</a>
            </div>
            <h2 class="text-center mb-4 display-3">Sign-Ups</h2>

            <form method="post">
                <div class="form-row">
                    <h3 class="col-12">Sort By: </h3>
                    <div class="form-group pr-1 pb-0 mb-0">
                        <div class="input-group-prepend">
                            <div class="input-group-text p-1 px-4">
                                <input
                                    type="radio"
                                    name="sort"
                                    id="member_id"
                                    value="member_id"
                                    aria-label="Radio button for ID"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="ID">
                                <label for="member_id">ID</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text p-1 px-4">
                                <input
                                    type="radio"
                                    name="sort"
                                    id="fname"
                                    value="fname"
                                    aria-label="Radio button for First Name"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="First Name">
                                <label for="fname">First Name</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text p-1 px-4">
                                <input
                                    checked="checked"
                                    type="radio"
                                    name="sort"
                                    id="lname"
                                    value="lname"
                                    aria-label="Radio button for Last Name"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Last Name">
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text p-1 px-4">
                                <input
                                    type="radio"
                                    name="sort"
                                    id="email"
                                    value="email"
                                    aria-label="Radio button for Email"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text p-1 px-4">
                                <input
                                    type="radio"
                                    name="sort"
                                    id="phone"
                                    value="phone"
                                    aria-label="Radio button for Phone"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Phone">
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text p-1 px-4">
                                <input
                                    type="radio"
                                    name="sort"
                                    id="Distance"
                                    value="Distance"
                                    aria-label="Radio button for Race Distance"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Distance">
                                <label for="Distance">Race</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <input
                        type="submit"
                        name="submit_sort"
                        value="Sort Runners"
                        role="button"
                        class="btn btn-info mb-4 col-6 col-sm-4 col-lg-3 col-xl-2"
                        id="sort-button"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Sort Runners">
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th id="header-id" scope="col">#</th>
                            <th id="header-fname" scope="col">First Name</th>
                            <th id="header-lname" scope="col">Last Name</th>
                            <th id="header-email" scope="col">Email</th>
                            <th id="header-phone" scope="col">Phone</th>
                            <th id="header-distance" scope="col">Race</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
include 'config/dbuser.php';

$sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                                    FROM `runner`
                                    ORDER BY `lname`";

if (isset($_POST['submit_sort'])) {
    $radio = $_POST['sort'];
    if ($radio == 'member_id') {
        $sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                FROM `runner`
                ORDER BY `member_id`";
    } else if ($radio == 'fname') {
        $sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                FROM `runner`
                ORDER BY `fname`, `lname`";
    } else if ($radio == 'email') {
        $sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                FROM `runner`
                ORDER BY `email`";
    } else if ($radio == 'phone') {
        $sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                FROM `runner`
                ORDER BY `phone`, `lname`, `fname`";
    } else if ($radio == 'Distance') {
        $sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                FROM `runner`
                ORDER BY  `Distance` DESC, `lname`, `fname`";
    } else {
        $sql = "SELECT `member_id`,`fname`, `lname`, `email`, `phone`, `Distance`
                FROM `runner`
                ORDER BY `lname`, `fname`";
    }
}

$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo mysqli_error($conn);
}

$count = mysqli_num_rows($result);

if ($count == 0) {
    echo '<td colspan=6>There are currently no signups at this time.</td>';
}

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><th scope="row">' . $row['member_id'] . '</th>';
    echo '<td>' . $row['fname'] . '</td>';
    echo '<td>' . $row['lname'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['phone'] . '</td>';
    echo '<td>' . $row['Distance'] . '</td></tr>';
}

mysqli_free_result($result);
mysqli_close($conn);
?>
                    </tbody>
                </table>
            </div>
        </div>


