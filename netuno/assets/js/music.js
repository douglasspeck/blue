var aud = document.getElementById("audio-player");
var current_song = document.getElementById("current-song");
var index = 0;

function prevSong() {
    if (aud.isPlaying()) {
        aud.pause();
    } else {
        aud.play();
    }
}