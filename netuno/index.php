<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'DaBlue | Um presente para meu maior presente';
        $keywords = 'DaBlue, Blue, Bastos, Deschamps';
        $css = ['main','fonts','homepage', 'homepage-mobile', 'stars', 'audio'];
        $js = ['music'];
        include 'PHP/head.php';
    ?>
    <body>
        <section id="background">
            <div class="stars"></div>
            <div class="twinkling"></div>
            <div class="clouds"></div>
        </section>
        <section id="welcome-screen">
            <div class="cat"></div>
            <div class="clouds"></div>
            <div class="neptune">
                <img class="house" src="IMG/house-colorified.png"></img>
            </div>
            <div class="welcome-text">
                <h1 class="m-title center">Bem-vindo a Netuno!</h1>
            </div>
            <div class="audio-container">
                <?php 
                    $songs = [
                        ['file'=>'alaska','name'=>'Chalé em Alaska'],
                        ['file'=>'cabelos','name'=>'Cabelos Arco-Íris'],
                        ['file'=>'julieta','name'=>'Julieta'],
                        ['file'=>'lana','name'=>'Lana'],
                        ['file'=>'lucy','name'=>'Lucy']
                    ];
                    shuffle($songs);
                    $index = 0;

                    echo '
                    <details class="song-menu">
                        <summary id="current-song">' . $songs[$index]['name'] . '</summary>
                        <div class="song-list">';

                    foreach ($songs as $song) {
                        echo '<p class="songs';
                        if ($song == $songs[$index]) {
                            echo 'playing';
                        };
                        echo '">' . $song['name'] . '</p>';
                    };

                    echo '</div>
                    </details>';

                    echo '<audio id="audio-player" src="AUD/' . $songs[$index]['file'] . '.mp3" type="audio/mpeg" autoplay>Aqui deveria haver um áudio, mas algo deu errado.</audio>'
                ?>
                <form class="controls">
                    <input class="previous" onclick="prevSong()" type="button" id="prevSong"></input>
                    <input class="play" type="checkbox" id="playOrPause"></input>
                    <input class="next" onclick="nextSong()" type="button" id="nextSong"></input>
                    <label for="prevSong"></label>
                    <label for="playOrPause" onclick="playOrPause()"></label>
                    <label for="nextSong"></label>
                </form>
            </div>
        </section>

        <!-- Scripts -->
        <script type="text/javascript" src="JS/music.js"></script>
    </body>
</html>