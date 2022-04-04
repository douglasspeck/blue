<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Lojinha daBlue';
        $keywords = 'daBlue, Blue, artesanato, miçangas, Balneário, SC';
        $resources = [];
        include 'assets/php/head.php';
    ?>
    <body>
        <?php include 'assets/php/header.php' ?>
        <main>
            <section id="landing">
                <div class="landing-text">
                    <h2>Produtos<br>Artesanais</h2>
                    <p>velas e acessórios<br>alternativos</p>
                    <p>feitos com amor<br>para você</p>
                </div>
                <div class="landing-images">
                    <?php 
                    $image = 'home/banner_1';
                    $ext = 'jpg';
                    $sizes = [200,464,655,801,962,1080];
                    $alt = 'Acessórios dispostos sobre tecido cru. Há cinco pares de brincos, sendo um de morango, um de abacate, um de kiwi, um de pimenta e um de cereja. Ao meio há um colar de melancia.';
                    $class = 'animate__fadeInRight';

                    include 'assets/php/image.php';

                    $image = 'home/banner_2';
                    $ext = 'jpg';
                    $sizes = [200,393,536,652,756,984,1080];
                    $alt = 'Close up em acessórios dispostos sobre tecido cru. É possível ver a ponta de um dos brincos de abacate, do brinco de kiwi e dos brincos de pimenta. Ao meio, em destaque, está o colar de melancia.';
                    $class = 'animate__fadeInRight';

                    include 'assets/php/image.php';
                    ?>
                </div>
            </section>
        </main>
        <?php include 'assets/php/scripts.php' ?>
    </body>
</html>