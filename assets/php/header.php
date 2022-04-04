<?php

    $categorias = [
        ['Velas', 'velas', 'Velas Aromáticas'],
        ['Pulseiras', 'pulseiras', 'Pulseiras personalizadas'],
        ['Colares', 'colares', 'Colares personalizados'],
        ['Anéis', 'aneis', 'Anéis personalizados'],
        ['Brincos', 'brincos', 'Brincos personalizados']
    ];

    $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
    $active_page = str_replace('/', '', $active_page);

    echo '
    <input type="checkbox" id="dark-mode" onclick="darkMode();" checked hidden>
    <input type="checkbox" id="toggle-menu" hidden>
    <header>
        <a href="/" title="Página Inicial">
            <img src="../assets/img/logo/blue-font.svg" alt="Logo da Lojinha. \'da Blue\' por extenso, com tipografia estilizada." id="logo">
        </a>
        <label id="menu-label" for="toggle-menu">
            <nav>
                <div class="menu active"><a href="/" title="Página Inicial">Home</a></div>
                <div class="menu folder">
                    <a href="produtos/">Produtos</a>
                    <ul>';

    foreach ($categorias as $c) {
        echo '<li><a href="produtos/'.$c[1].'" title="'.$c[2].'">'.$c[0].'</a></li>';
    }
                        
    echo '           </ul>
                </div>
                <div class="menu"><a href="blog.php" title="Blog Pessoal">Blog</a></div>
                <div class="menu"><a href="contato.php" title="Entre em Contato">Contato</a></div>
            </nav>
        </label>
    </header>';

?>