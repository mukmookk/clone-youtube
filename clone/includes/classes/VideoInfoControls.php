<?php
require_once("includes/classes/ButtonProvider.php");

class VideoInfoControls {
    private $video, $userLoggedIn;

    public function __construct($video, $userLoggedIn) {
        $this->video = $video;
        $this->userLoggedIn = $userLoggedIn;
    }

    public function create() {

        $likeButton = $this->createLikeButton();
        $dislikeButton = $this->createDislikeButton();

        return "<div class='controls'>
                    $likeButton
                    $dislikeButton
                </div>";
    }

    private function createLikeButton() {
        $text = $this->video->getLikes();
        $videoId = $this->video->getId();
        $action = "likeVideo(this, $videoId)";
        $class = "likeButton";

        $imageSrc = "assets/images/icons/thumb-up.png";

        // Change button img if video has been liked already


        return ButtonProvider::createButton($text, $imageSrc, $action, $class);
    }

    private function createDislikeButton() {
        $text = $this->video->getDislikes();
        $videoId = $this->video->getId();
        $action = "dislikeVideo(this, $videoId)";
        $class = "dislikeButton";

        $imageSrc = "assets/images/icons/thumb-down.png";

        // Change button img if video has been disliked already

        return ButtonProvider::createButton($text, $imageSrc, $action, $class);
    }
}

?>