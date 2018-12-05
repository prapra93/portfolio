var songs = ["music/demo1.mp3", "music/demo2.mp3", "music/demo3.mp3"];
var poster = ["img/Poster1.jpg", "img/Poster2.jpg", "img/Poster3.jpg"];

var songTitle = document.getElementById("songTitle");
var fillBar = document.getElementById("fill");
var currentTime = document.getElementById("currentTime")

var song = new Audio();
var currentSong = 0; //musique courante

window.onload = playSong(); //appel la function playSong quand la fenetre est chargee

function playSong() {
    song.src = songs[currentSong]; //applique la chanson au position 0
    songTitle.textContent = songs[currentSong]; //titre de la chanson
    song.play(); //Joue la chanson
}

function playOrSong() {
    if(song.paused) {
        song.play();
        $("#play img").attr("src", "img/Pause.png");
    } else {
        song.pause();
        $("#play img").attr("src", "img/Play.png");
    }
}

song.addEventListener('timeupdate', function(){
    var position = song.currentTime / song.duration;
    fillBar.style.width = position * 100 + '%';
    convertTime(Math.round(song.currentTime)); //convertie decimal en int
    if (song.ended) {
        next();
    }
});

function convertTime(seconds) {
    var min = Math.floor(seconds / 60);
    var sec = seconds % 60;

    min = (min < 10 ) ? "0" + min : min;
    sec = (sec < 10 ) ? "0" + sec : sec;
    currentTime.textContent = min + ":" + sec;

    totalTime(Math.round(song.duration));
}

function totalTime(seconds) {
    var min = Math.floor(seconds / 60);
    var sec = seconds % 60;

    min = (min < 10 ) ? "0" + min : min;
    sec = (sec < 10 ) ? "0" + sec : sec;
    currentTime.textContent += "/" + min + ":" + sec;
}

function next() {
    currentSong++;
    if(currentSong > 2) {
        currentSong = 0;
    }
    playSong();
    $("#play img").attr("src", "img/Pause.png");
    $("#image img").attr("src", poster[currentSong]);
    $("#bg img").attr("src", poster[currentSong]);
}

function pre() {
    currentSong--;
    if(currentSong < 0) {
        currentSong = 2;
    }
    playSong();
    $("#play img").attr("src", "img/Pause.png");
    $("#image img").attr("src", poster[currentSong]);
    $("#bg img").attr("src", poster[currentSong]);
}

function decreaseVolume() {
    song.volume -= 0.20;
}

function increaseVolume() {
    song.volume += 0.20;
}
