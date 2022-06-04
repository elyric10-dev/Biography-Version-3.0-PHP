<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Elyric's Biography Ver 3.0 PHP";
    $link_responsive = "assets/css/responsive.css";
    $link_style = "assets/css/style.css";
?>
<?php include 'includes/head.php';?>
<?php
$fullname = "Elyric Manatad";
$title1 = "Future&nbsp;Web&nbsp;Developer";
$title2 = "CITE&nbsp;Student&nbsp;4L";
$short_message = "On year 2019, I sacrificed and quit on my job just to continue pursuing my studies at CITE as Computer Engineering. Because one of my dream job is to become a web developer.";
$right_panel_title = "Biography";
$right_panel_biography = "I'm Elyric Manatad, friendly and trusted person. I have so many handsome friends in school at Cite. I also love music actually I am one of the bassist of our church way back 2019 and quit on 2020. Now I'm back to our church 2022
but not as a bassist but a tech support on our church. My inspiration to study programming came when I was 19 years old and witnessed a childhood friend show us his very simple html program image with link, but it seemed great
to me. So, starting at that moment, I began self-studying such things in order to understand that program on my own and to the other web stuff.";

$information = array(
    array("Birthdate" , "May 15, 1996"),
    array("Age" , "26"),
    array("Country" , "Philippines"),
    array("Address" , "Looc, Mandaue City"),
    array("Email" , "elyricmanatad@gmail.com"),
    array("Number" , "09084046149"),
    array("Single?" , "Taken"),
    array("Gender" , "Male")
);

$footer_text = "Copyright @ 2022";
?>

<body>
    <div class="container">
        <?php include 'includes/header.php';?>

        <?php include 'includes/main.php';?>

        <?php include 'includes/footer.php';?>
    </div>
    <?php include 'includes/script.php'; ?>
</body>

</html>
