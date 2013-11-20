<!--

    navigation
    
    zandernelsoninc.com

                                        -->

<ul class='nav clearfix'>
    <li class='button'>
        <a href='/personal-site/php/index.php'>Home</a>
    </li>

    <?php 
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        if ($parts[count($parts)-2] == 'characters')
        {
            echo "<li class='active'>";
        }
        else
        {
            echo "<li>";
        }
    ?>
        <div class='button'>
            <a href='/personal-site/php/characters/index.php'>Characters</a>
        </div>
        <ul>
            <li class='button'>
                <a href='/personal-site/php/characters/asuna.php'>Asuna</a>
            </li>
            <li class='button'>
                <a href='/personal-site/php/characters/bremusa.php'>Bremusa</a>
            </li>
            <li class='button'>
                <a href='/personal-site/php/characters/catriona.php'>Catr&iacute;ona</a>
            </li>
            <li class='button'>
                <a href='/personal-site/php/characters/dotty.php'>Dotty Snow</a>
            </li>
            <li class='button'>
                <a href='/personal-site/php/characters/meowly.php'>Meowly</a>
            </li>
            <li class='button'>
                <a href='/personal-site/php/characters/miziki.php'>Miziki</a>
            </li>
        </ul>
        
    </li>
    <li class='button'>
        <a href='/personal-site/php/factions/index.php'>Factions</a>
    </li>
    <li class='button'>
        <a href='/personal-site/php/allies/index.php'>Allies</a>
    </li>
    <li class='button'>
        <a href='/personal-site/php/countries/index.php'>Countries</a>
    </li>
    <li class='button'>
        <a href='/personal-site/php/history/index.php'>History</a>
    </li>
    <li class='button'>
        <a href='/personal-site/php/villains/index.php'>Villains</a>
    </li>
</ul>