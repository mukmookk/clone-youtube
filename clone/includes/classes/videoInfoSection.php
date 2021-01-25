<?php
require_once("includes/classes/VideoInfoControls.php");

class VideoInfoSection {

    private $con, $video, $userLoggedIn;

    public function __construct($con, $video, $userLoggedIn) {
        $this->con = $con;
        $this->video = $video;
        $this->userLoggedIn = $userLoggedIn;
    }

    public function create() {
        
        return $this->createPrimaryInfo() . $this->createSecondaryInfo();
    }

    private function createPrimaryInfo() {
        $title = $this->video->getTitle();
        $views = $this->video->getViews();

        $videoInfoContols = new VideoInfoControls($this->video, $this->userLoggedIn);
        $controls= $videoInfoContols->create();

        return "<div class='videoInfo>
                    <h1>$title</h1>
                    <div class='bottomSection'>
                        <span class='viewCount'>$views</span>
                        $controls
                    </div>
                </div>";
    }

    private function createSecondaryInfo() {
        
    }
}

?>