function likeVideo(button, videoId) {
    $.post("ajax/likeVideo.php", {videoId: videoId})
    .done(function(data) {
        // DATA means RETURN VALUE
        var likedButton = $(button);
        var dislikedButton = $(button).siblings(".dislikeButton");

        likedButton.addClass("active");
        dislikedButton.removeClass("active");

        var result = JSON.parse(data);
        updateLikesValue(likedButton.find(".text"), result.likes);              // "".text" from "ButtonProvider.php"
        updateDislikesValue(dislikedButton.find(".text"), result.dislikes);     // "".text" from "ButtonProvider.php"

        if(result.likes < 0) {
            
        }
    });
}

function updateLikesValue(element, num) {
    var likesCountVal = element.text() || 0;                        // FOR SAFTY (set zero if not found) 
    element.text(parseInt(likeCountVal) + parseInt(num));           // "0" > 0
}