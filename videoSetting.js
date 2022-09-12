let video = document.getElementById("video")

//console.log(video)

video.playbackRate = 0.75;


const btn = document.querySelector(".switch-btn");
const videoConst = document.querySelector(".video-container");

var spila = true;


btn.addEventListener("click", function () {
    if (spila == true) {
        videoConst.pause();
        spila = false;
    } else {
        videoConst.play();
        spila = true;
    }

})

