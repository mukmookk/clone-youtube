<?php 
require_once("includes/header.php");
require_once("includes/classes/VideoPlayer.php");
require_once("includes/classes/VideoInfoSection");

if(!isset($_GET['id'])) {
    echo "No url passed into page";
    exit();
}

$video = new Video($con, $_GET["id"], $userLoggedInObj);
$video->incrementViews();
?>

<script src="assets/js/videoPlayerActions.js"></script>

<div class='watchLeftColumn'>

<?php
    $videoPlayer = new Videoplayer($video);
    echo $videoPlayer->create(true);

    $videoInfoSection = new VideoInfoSection($con,$video,$userLoggedInObj);
    echo $videoInfoSection->create();
?>

</div>

<div class='suggestions'>
</div>


<?php require_once("includes/footer.php"); ?>
                