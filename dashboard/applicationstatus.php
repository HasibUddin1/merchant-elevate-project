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
        "title" => "Status",
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
                                <h4 class="fw-semibold mb-8">Application Status</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted text-decoration-none" href="index">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Application Status
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

                <div class="application_submitted">
                    <div class="card w-100 bg-light-secondary overflow-hidden shadow-none <?= $userData['status'] === "Approved" ? "card-success" : ($userData['status'] === "Rejected" ? "card-rejected" : ($userData['status'] === "Pending" ? "card-pending" : "alo")) ?>">
                        <div class="card-body py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-sm-6">
                                    <h5 class="fw-semibold mb-9 fs-5">
                                        <?= isset($userData['status']) && $userData['status'] !== "" ? $userData['status'] : "Application not Submitted" ?>
                                    </h5>
                                    <p class="mb-9">
                                        <?php if (isset($userData['status']) && $userData['status'] === "Approved") { ?>
                                            Congratulations your application has been approved
                                        <?php } elseif (isset($userData['status']) && $userData['status'] === "Rejected") { ?>
                                            Sorry, unfortunately your application has been rejected
                                        <?php } elseif (isset($userData['status']) && $userData['status'] === "Pending") { ?>
                                            Thank you for submitting your application.
                                            It will take 24-72 hours for review and we
                                            will get back to you with a decision
                                        <?php } else { ?>
                                            You have not submitted your application. Please proceed to application by
                                            submitting your information in user information tab.
                                        <?php } ?>

                                    </p>
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

</body>

</html>