<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
if (isset($_GET['jobName']) && file_exists("career_articles/{$_GET['jobName']}.php")) {
    $jobName = $_GET['jobName'];
} else {
    $jobName = "Not Found";
}

?>

<!doctype html>
<html lang="en">

<head>

    <!-- include head -->
    <?php
    $pageInfo = [
        "title" => "Career Single",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="career-single-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <?php include_once "career_articles/$jobName.php" ?>

        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

</body>

</html>