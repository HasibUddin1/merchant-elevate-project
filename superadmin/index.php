<?php
include_once "../core/login_checkAdmin.php";
?>

<?php
include "../core/fetchAll_user_data.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include head -->
    <?php
    $pageInfo = [
        "title" => "User Details",
    ];
    ?>
    <?php include "includes/head.php"; ?>


</head>

<body class="dashboard dashboard-pages">
    <?php include "includes/preloader.php"; ?>
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <?php include "includes/nav.php"; ?>
        <div class="body-wrapper">
            <?php include "includes/header.php"; ?>
            <div class="container-fluid dashboard-container-width">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">Registered Users</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted text-decoration-none" href="index">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Registered Users
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-3">
                                <div class="text-center mb-n5">
                                    <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="datatables">
                    <div class="row">
                        <div class="col-12">
                            <!-- ---------------------
                                    start Scroll - Horizontal
                                ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <h5 class="mb-0">List of Registered Users</h5>
                                    </div>
                                    <p class="card-subtitle mb-3">
                                        Detailed Information about Registered Users of Merchant Elevate.
                                    </p>
                                    <div class="table-responsive">
                                        <table id="scroll_hor" class="table border table-striped table-bordered display nowrap" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>DOB</th>
                                                    <th>Register Date</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Zip</th>
                                                    <th>Drivers License</th>
                                                    <th>Tax Return 1</th>
                                                    <th>Tax Return 2</th>
                                                    <th>Bank Statement 1</th>
                                                    <th>Bank Statement 2</th>
                                                    <th>Bank Statement 3</th>
                                                    <th>Utility Bill</th>
                                                    <th>Credit Score </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($userData as $user) {
                                                    $first_name = $user['first_name'];
                                                    $last_name = $user['last_name'];
                                                    $email = $user['email'];
                                                    $userID = $user['user_id'];
                                                    $userRegisteredAt = null;
                                                    foreach ($registeredDates as $userSingle) {
                                                        if ($userSingle['id'] === $userID) {
                                                            $userRegisteredAt = $userSingle['created_at'];
                                                            break;
                                                        }
                                                    }
                                                    $drivers_license_file = $user['drivers_license_file'];
                                                    $tax_return_1 = $user['tax_return_1'];
                                                    $tax_return_2 = $user['tax_return_2'];
                                                    $bank_statement_1 = $user['bank_statement_1'];
                                                    $bank_statement_2 = $user['bank_statement_2'];
                                                    $bank_statement_3 = $user['bank_statement_3'];
                                                    $utility_bill_file = $user['utility_bill_file'];
                                                    $credit_score_file = $user['credit_score_file'];
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group mb-2 w-100">
                                                                <button class="btn <?= $user['status'] === "Approved" ? "btn-success" : ($user['status'] === "Rejected" ? "btn-danger" : "btn-warning") ?> dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" data-user-id="<?= $userID ?>" data-user-name="<?= $first_name . " " . $last_name ?>" data-user-email="<?= $email ?>">
                                                                    <?= $user['status'] !== "" ? $user['status'] : "Pending" ?>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <li><a class="dropdown-item" href="#" data-status="Pending">Pending</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-status="Approved">Approved</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-status="Rejected">Rejected</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle user_action_buttons">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <form action="userEdit.php" method="post">
                                                                    <input type="hidden" name="userID" value="<?= $userID ?>">
                                                                    <span class="badge bg-primary rounded-3 fw-semibold fs-2 edit-user-button" onclick="this.parentNode.submit()">Edit</span>
                                                                </form>
                                                                <span class="badge bg-danger rounded-3 fw-semibold fs-2 delete-user-button" data-user-id="<?= $userID ?>" data-user-name="<?= $first_name . " " . $last_name ?>" data-user-email="<?= $email ?>">Delete</span>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle"><?= isset($user['first_name']) && $user['first_name'] != "" ? $user['first_name'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['last_name']) && $user['last_name'] != "" ? $user['last_name'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['email']) && $user['email'] != "" ? $user['email'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['phone_number']) && $user['phone_number'] != "" ? $user['phone_number'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['date_of_birth']) && $user['date_of_birth'] != "" ? $user['date_of_birth'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($userRegisteredAt) && $userRegisteredAt != "" ? $userRegisteredAt : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['address']) && $user['address'] != "" ? $user['address'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['city']) && $user['city'] != "" ? $user['city'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['state']) && $user['state'] != "" ? $user['state'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['zip']) && $user['zip'] != "" ? $user['zip'] : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['drivers_license_file']) && $user['drivers_license_file'] != "" ? "<a target='_blank' href='$drivers_license_file'>$first_name Driver License</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['tax_return_1']) && $user['tax_return_1'] != "" ? "<a target='_blank' href='$tax_return_1'>$first_name Tax Return 1</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['tax_return_2']) && $user['tax_return_2'] != "" ? "<a target='_blank' href='$tax_return_2'>$first_name Tax Return 2</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['bank_statement_1']) && $user['bank_statement_1'] != "" ? "<a target='_blank' href='$bank_statement_1'>$first_name Bank Statement 1</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['bank_statement_2']) && $user['bank_statement_2'] != "" ? "<a target='_blank' href='$bank_statement_2'>$first_name Bank Statement 2</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['bank_statement_3']) && $user['bank_statement_3'] != "" ? "<a target='_blank' href='$bank_statement_3'>$first_name Bank Statement 3</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['utility_bill_file']) && $user['utility_bill_file'] != "" ? "<a target='_blank' href='$utility_bill_file'>$first_name Utility Bill</a>" : "Not Set" ?></td>
                                                        <td class="align-middle"><?= isset($user['credit_score_file']) && $user['credit_score_file'] != "" ? "<a target='_blank' href='$credit_score_file'>$first_name Credit Score</a>" : "Not Set" ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <!-- Modals -->
                                        <!-- Delete Modal -->
                                        <div id="danger-header-modal" class="modal fade" tabindex="-1" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header modal-colored-header bg-danger text-white">
                                                        <h4 class="modal-title" id="danger-header-modalLabel">
                                                            Delete User Confirmation
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Are you sure you want to delete the user <strong><span id="user-name"></span></strong> with email <strong><span id="user-email"></span></strong>?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <button id="confirm-delete" type="button" class="btn btn-light-danger text-danger font-medium">
                                                            Yes Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.Delete Modal -->
                                        <!-- Alert Modals -->
                                        <!-- info centered modal -->
                                        <div class="modal fade" id="al-info-alert" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-light-info">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center text-info">
                                                            <i class="ti ti-info-circle fs-7"></i>
                                                            <h4 class="mt-2">Status Updating</h4>
                                                            <p class="mt-3">
                                                                Please Wait While the status is updating
                                                                <span class="loading">
                                                                    <img src="../assets/dist/images/loading.svg" alt="">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- success centered modal -->
                                        <div class="modal fade" id="al-success-alert" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-light-success text-success">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center text-success">
                                                            <i class="ti ti-circle-check fs-7" style="font-size: 50px !important;"></i>
                                                            <h4 class="mt-2">Status Updated Successfully!</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- danger centered modal -->
                                        <div class="modal fade" id="al-danger-alert" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-light-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center text-danger">
                                                            <i class="ti ti-hexagon-letter-x fs-7"></i>
                                                            <h4 class="mt-2">Status Update Failed</h4>
                                                            <p class="mt-3">
                                                                Please Try Again!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- Alert Modals -->
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------
                                end Scroll - Horizontal
                            ---------------- -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- include footer -->
    <?php include "includes/footer.php"; ?>

    <!-- include scripts -->
    <?php include "includes/scripts.php"; ?>

    <!-- Handle Application Button -->
    <script>
        $(document).ready(function() {
            // Listen for dropdown item clicks
            $('.dropdown-item').on('click', function() {
                $("#al-info-alert").modal("show");
                var userId = $(this).closest('.btn-group').find('.btn').data('user-id');
                var name = $(this).closest('.btn-group').find('.btn').data('user-name');
                var email = $(this).closest('.btn-group').find('.btn').data('user-email');
                var newStatus = $(this).data('status');

                // Make an AJAX request to update the status in the database
                $.ajax({
                    type: 'POST',
                    url: '../core/update_status.php', // Create this PHP file
                    data: {
                        user_id: userId,
                        new_status: newStatus,
                        name: name,
                        email: email
                    },
                    success: function(response) {
                        // Update the button text and color if needed
                        var button = $(`[data-user-id="${userId}"]`);
                        button.text(newStatus);
                        if (newStatus === "Approved") {
                            button.removeClass('btn-warning btn-danger').addClass('btn-success');
                        } else if (newStatus === "Rejected") {
                            button.removeClass('btn-warning btn-success').addClass('btn-danger');
                        } else {
                            button.removeClass('btn-success btn-danger').addClass('btn-warning');
                        }
                        $("#al-info-alert").modal("hide");
                        setTimeout(function() {
                            $("#al-success-alert").modal("show");
                        }, 500);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        $("#al-success-alert").modal("show");
                    }
                });
            });
        });
    </script>


    <!-- Handle Delete -->
    <script>
        $(document).ready(function() {
            let userIdToDelete;

            $(".delete-user-button").on("click", function() {
                userIdToDelete = $(this).data("user-id");
                const userName = $(this).data("user-name");
                const userEmail = $(this).data("user-email");

                // Populate the modal with the user's name and email.
                $("#user-name").text(userName);
                $("#user-email").text(userEmail);

                // Show the delete confirmation modal.
                $("#danger-header-modal").modal("show");
            });

            $("#confirm-delete").on("click", function() {
                // Send an AJAX request to delete the user.
                $.ajax({
                    type: "POST",
                    url: "../core/delete_user.php", // Replace with the actual URL to your server-side script.
                    data: {
                        user_id: userIdToDelete
                    },
                    success: function(response) {
                        if (response == "success") {
                            // Hide the confirmation modal.
                            $("#danger-header-modal").modal("hide");

                            // Refresh the page or update the table to reflect the deletion.
                            location.reload(); // You can also use AJAX to update the table without reloading the page.
                        } else {
                            alert("Error deleting user. Please try again.");
                        }
                    }
                });
            });
        });
    </script>


</body>

</html>