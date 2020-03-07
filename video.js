function playVideo () {
    $("#bgvid").get(0).play();
    $("#bgvid").get(0).addEventListener('ended',fadeIn,false);
    $("#back-button").css("display", "inline");

    $("#content").fadeOut(800);
    //Add code to play video
}

function fadeIn(e) {
    $("#bgvid").get(0).pause();
    $("#content").fadeIn(800);
    $("#back-button").fadeOut(800);
}
