<?php
include_once "../core/login_check.php";
?>

<?php
include "../core/fetch_user_data.php";
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
                                <h4 class="fw-semibold mb-8">User Information</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted text-decoration-none" href="index">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            User Information
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
                <?php
                if (isset($userData['status']) && ($userData['status'] === "Pending" || $userData['status'] === "Approved" || $userData['status'] === "Rejected")) { ?>
                    <div class="application_submitted">
                        <div class="card w-100 bg-light-secondary overflow-hidden shadow-none card-success">
                            <div class="card-body py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-sm-6">
                                        <h5 class="fw-semibold mb-9 fs-5">
                                            Submit Application
                                        </h5>
                                        <p class="mb-9">
                                            Thank you for submitting your application
                                        </p>
                                        <a class="status_check" href="applicationstatus">
                                            <button class="btn btn-dark">Check Status</button>
                                        </a>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="position-relative mb-n5 text-center">
                                            <img src="../assets/dist/images/track-bg.png" alt="" class="img-fluid" style="width: 180px; height: 230px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_card">
                        <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                            <div class="card-body py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-sm-6">
                                        <h5 class="fw-semibold mb-9 fs-5">
                                            Have questions or need help?
                                        </h5>
                                        <p class="mb-9">
                                            Connect with an expert.
                                        </p>
                                        <a class="contat_btn" href="mailto:admin@merchantelevate.com">
                                            <button class="btn btn-primary">Connect With Expert</button>
                                        </a>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="position-relative mb-n7 text-end">
                                            <img src="../assets/dist/images/welcome-bg2.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ---------------------
                            start Sample Form with the Icons
                        ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <h5>Profile</h5>
                                    <p class="card-subtitle mb-3">
                                        Please enter your details here </p>
                                    <form id="userinfoform" class="needs-validation row" action="../core/save_user_details.php" method="post" enctype="multipart/form-data" novalidate>
                                        <div class="col-md-4 form-floating mb-3">
                                            <input type="text" name="first_name" value="<?php echo htmlspecialchars($userData['first_name']); ?>" class="form-control" placeholder="First Name" required />
                                            <label><i class="ti ti-user me-2 fs-4"></i>First Name</label>
                                        </div>
                                        <div class="col-md-4 form-floating mb-3">
                                            <input type="text" name="last_name" value="<?php echo htmlspecialchars($userData['last_name']); ?>" class="form-control" placeholder="Last Name" required />
                                            <label><i class="ti ti-user me-2 fs-4"></i>Last Name</label>
                                        </div>
                                        <div class="col-md-4 form-floating mb-3">
                                            <input type="text" name="phone_number" value="<?php echo htmlspecialchars($userData['phone_number']); ?>" class="form-control" pattern="^[0-9]{5,15}$" placeholder="Phone Number" required />
                                            <label><i class="ti ti-phone me-2 fs-4"></i>Phone Number</label>
                                        </div>
                                        <div class="col-md-7 form-floating mb-3">
                                            <input type="email" name="email" value="<?= $_SESSION["user_email"] ?>" class="form-control" placeholder="Email Address" disabled required />
                                            <label><i class="ti ti-mail me-2 fs-4"></i>Email Address</label>
                                        </div>
                                        <div class="col-md-5 form-floating mb-3">
                                            <input type="text" name="date_of_birth" value="<?php echo htmlspecialchars($userData['date_of_birth']); ?>" class="form-control mydatepicker" placeholder="Date of Birth" required />
                                            <label><i class="ti ti-calendar me-2 fs-4"></i>Date of Birth</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fields_wrapper_details">
                                                <div class="autocomplete-container" id="autocomplete-container"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 form-floating mb-3">
                                            <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($userData['city']); ?>" class="form-control" placeholder="City" required />
                                            <label><i class="ti ti-globe me-2 fs-4"></i>City</label>
                                        </div>
                                        <div class="col-md-4 form-floating mb-3">
                                            <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($userData['state']); ?>" class="form-control" placeholder="State" required />
                                            <label><i class="ti ti-world me-2 fs-4"></i>State</label>
                                        </div>
                                        <div class="col-md-4 form-floating mb-3">
                                            <input type="text" id="zip" name="zip" value="<?php echo htmlspecialchars($userData['zip']); ?>" class="form-control" placeholder="Zip" required />
                                            <label><i class="ti ti-pin me-2 fs-4"></i>Zip </label>
                                        </div>
                                        <!-- Files -->
                                        <div class="files_wrapper">
                                            <div class="file_single mb-3">
                                                <label for="drivers_license_file" class="form-label">Driver's License
                                                    <div class="tooltip-container">
                                                        <span class="text">
                                                            <i class="fa fa-info-circle"></i>
                                                        </span>
                                                        <div class="tooltip">PDF or Image.</div>
                                                    </div>
                                                </label>
                                                <input class="form-control form-control-lg" type="file" name="drivers_license_file" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" required />
                                            </div>
                                            <div class="file_single mb-3">
                                                <label for="tax_return_1" class="form-label">Tax Return
                                                    <div class="tooltip-container">
                                                        <span class="text">
                                                            <i class="fa fa-info-circle"></i>
                                                        </span>
                                                        <div class="tooltip">PDF or Image.</div>
                                                    </div>
                                                </label>
                                                <input class="form-control form-control-lg mb-2" type="file" name="tax_return_1" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" required />
                                                <input class="form-control form-control-lg mb-2" type="file" name="tax_return_2" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" />
                                                <p class="note mb-2">*<strong>Note: </strong>Attach 2 most recent years</p>
                                            </div>
                                            <div class="file_single mb-3">
                                                <label for="bank_statement_1" class="form-label">Bank Statement
                                                    <div class="tooltip-container">
                                                        <span class="text">
                                                            <i class="fa fa-info-circle"></i>
                                                        </span>
                                                        <div class="tooltip">PDF or Image.</div>
                                                    </div>
                                                </label>
                                                <input class="form-control form-control-lg mb-2" type="file" name="bank_statement_1" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" required />
                                                <input class="form-control form-control-lg mb-2" type="file" name="bank_statement_2" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" />
                                                <input class="form-control form-control-lg mb-2" type="file" name="bank_statement_3" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" />
                                                <p class="note mb-2">*<strong>Note: </strong>Attach 3 most recent months</p>
                                            </div>
                                            <div class="file_single mb-3">
                                                <label for="utility_bill_file" class="form-label">Utility Bill
                                                    <div class="tooltip-container">
                                                        <span class="text">
                                                            <i class="fa fa-info-circle"></i>
                                                        </span>
                                                        <div class="tooltip">PDF or Image.</div>
                                                    </div>
                                                </label>
                                                <input class="form-control form-control-lg" type="file" name="utility_bill_file" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" required />
                                            </div>
                                            
                                            
                                            
                                            <div class="file_single mb-3">
                                                <label for="credit_score_file" class="form-label">Credit Score
                                                    <div class="tooltip-container">
                                                        <span class="text">
                                                            <i class="fa fa-info-circle"></i>
                                                        </span>
                                                        <div class="tooltip">PDF or Image.</div>
                                                    </div>
                                                </label>
                                                <input class="form-control form-control-lg" type="file" name="credit_score_file" accept=".pdf, .jpg, .jpeg, .png" onchange="checkFileSize(this)" required />
                                            </div>
                                        </div>

                                        <div class="d-md-flex align-items-center">
                                            <div class="mt-3 mt-md-0 ms-auto">
                                                <button type="submit" class="btn btn-primary font-medium rounded-pill px-4">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ti ti-check me-2 fs-4"></i>
                                                        Save and Continue
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- ---------------------
                            end Sample Form with the Icons
                        ---------------- -->
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>


    <!-- include footer -->
    <?php include "includes/footer.php"; ?>

    <!-- include scripts -->
    <?php include "includes/scripts.php"; ?>

    <!-- Auto Fill Address JS -->
    <script>
        function addressAutocomplete(containerElement, callback, options) {
            const inputContainerElement = $("<div>").addClass("input-container form-floating mb-3");
            containerElement.append(inputContainerElement);

            const inputElement = $("<input>")
                .attr("type", "text")
                .attr("placeholder", options.placeholder)
                .attr("name", "address")
                .attr("class", "form-control")
                .attr("required", "")
                .val("<?php echo htmlspecialchars($userData['address']); ?>");
            inputContainerElement.append(inputElement);

            const labelElement = $("<label>")
                .addClass("ps-1")
                .append($("<i>").addClass("ti ti-home me-2 fs-4"))
                .append("Address");
            inputContainerElement.append(labelElement);

            const MIN_ADDRESS_LENGTH = 3;
            const DEBOUNCE_DELAY = 300;
            let currentItems;
            let currentTimeout;
            let currentPromiseReject;

            const clearButton = $("<div>").addClass("clear-button");
            clearButton.on("click", function(e) {
                e.stopPropagation();
                inputElement.val('');
                callback(null);
                clearButton.removeClass("visible");
                closeDropDownList();
            });
            inputContainerElement.append(clearButton);

            inputElement.on("input", function(e) {
                const currentValue = inputElement.val();
                if (!currentValue) {
                    clearButton.removeClass("visible");
                }

                clearButton.addClass("visible");

                if (currentTimeout) {
                    clearTimeout(currentTimeout);
                }

                if (currentPromiseReject) {
                    currentPromiseReject({
                        canceled: true
                    });
                }

                if (!currentValue || currentValue.length < MIN_ADDRESS_LENGTH) {
                    return false;
                }

                currentTimeout = setTimeout(() => {
                    currentTimeout = null;

                    const promise = new Promise((resolve, reject) => {
                        currentPromiseReject = reject;

                        const apiKey = "85fd2729edee4e2db4af92edb5ff2a93";
                        const url = `https://api.geoapify.com/v1/geocode/autocomplete?text=${encodeURIComponent(currentValue)}&format=json&limit=5&apiKey=${apiKey}`;

                        $.get(url)
                            .done((data) => resolve(data))
                            .fail((data) => reject(data));
                    });

                    promise.then((data) => {
                        currentItems = data.results;

                        const autocompleteItemsElement = $("<div>").addClass("autocomplete-items");
                        inputContainerElement.append(autocompleteItemsElement);

                        data.results.forEach((result, index) => {
                            const itemElement = $("<div>").html(result.formatted);
                            autocompleteItemsElement.append(itemElement);

                            itemElement.on("click", function(e) {
                                inputElement.val(currentItems[index].formatted);
                                callback(currentItems[index]);
                                closeDropDownList();
                            });
                        });

                    }, (err) => {
                        if (!err.canceled) {
                            console.log(err);
                        }
                    });
                }, DEBOUNCE_DELAY);
            });

            let focusedItemIndex = 0;

            inputElement.on("keydown", function(e) {
                const autocompleteItemsElement = containerElement.find(".autocomplete-items");
                if (autocompleteItemsElement.length) {
                    const itemElements = autocompleteItemsElement.find("div");
                    if (e.keyCode == 40) {
                        e.preventDefault();
                        focusedItemIndex = focusedItemIndex !== itemElements.length - 1 ? focusedItemIndex + 1 : 0;
                        setActive(itemElements, focusedItemIndex);
                    } else if (e.keyCode == 38) {
                        e.preventDefault();
                        focusedItemIndex = focusedItemIndex !== 0 ? focusedItemIndex - 1 : focusedItemIndex = (itemElements.length - 1);
                        setActive(itemElements, focusedItemIndex);
                    } else if (e.keyCode == 13) {
                        e.preventDefault();
                        if (focusedItemIndex > -1) {
                            closeDropDownList();
                        }
                    }
                } else {
                    if (e.keyCode == 40) {
                        inputElement.trigger("input");
                    }
                }
            });

            function addIcon(buttonElement) {
                const svgElement = document.createElementNS("http://www.w3.org/2000/svg", 'svg');
                svgElement.setAttribute('viewBox', "0 0 24 24");
                svgElement.setAttribute('height', "24");

                const iconElement = document.createElementNS("http://www.w3.org/2000/svg", 'path');
                iconElement.setAttribute("d", "M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z");
                iconElement.setAttribute('fill', 'currentColor');
                svgElement.appendChild(iconElement);
                buttonElement.appendChild(svgElement);
            }

            function setActive(items, index) {
                if (!items || !items.length) return false;
                items.removeClass("autocomplete-active");
                items.eq(index).addClass("autocomplete-active");
                inputElement.val(currentItems[index].formatted);
                callback(currentItems[index]);
            }

            function closeDropDownList() {
                const autocompleteItemsElement = inputContainerElement.find(".autocomplete-items");
                if (autocompleteItemsElement.length) {
                    autocompleteItemsElement.remove();
                }
            }

            $(document).on("click", function(e) {
                if (!$(e.target).is(inputElement)) {
                    closeDropDownList();
                } else if (!containerElement.find(".autocomplete-items").length) {
                    inputElement.trigger("input");
                }
            });
        }

        addressAutocomplete($("#autocomplete-container"), (data) => {
            console.log("Selected option: ");
            console.log(data);

            const city = $("#city");
            const state = $("#state");
            const zip = $("#zip");
            city.val(data.city !== undefined ? data.city : "");
            state.val(data.state !== undefined ? data.state : "");
            zip.val(data.postcode !== undefined ? data.postcode : "");
        }, {
            placeholder: "Type Your Address Here"
        });
    </script>
    <script>
        // Date Picker
        jQuery(".mydatepicker, #datepicker, .input-group.date").datepicker();
        jQuery("#datepicker-autoclose").datepicker({
            autoclose: true,
            todayHighlight: true,
        });
        jQuery("#date-range").datepicker({
            toggleActive: true,
        });
        jQuery("#datepicker-inline").datepicker({
            todayHighlight: true,
        });
    </script>
    <script>
        $(document).ready(function() {
            // Fetch all the forms with the class "needs-validation"
            var forms = $(".needs-validation");

            forms.on("submit", function(event) {
                if (this.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                $(this).addClass("was-validated");
            });
        });
    </script>
    
    
    <!--// File Size Limit Check-->
    <script>
        function checkFileSize(input) {
            var maxSize = 20 * 1024 * 1024; // 20MB
        
            if (input.files.length > 0) {
                var fileSize = input.files[0].size;
        
                if (fileSize > maxSize) {
                    alert("File size exceeds the limit of 20MB. Please choose a smaller file.");
                    input.value = ""; // Clear the file input
                }
            }
        }
    </script>

</body>

</html>