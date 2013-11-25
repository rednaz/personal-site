<!--

    navigation
    
    zandernelsoninc.com

                                        -->

<ul class='nav clearfix'>
    <li class='button'>
        <a href='../index.php'>Home</a>
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
            <a href='../characters/index.php'>Characters</a>
        </div>
        <ul class='nav-secondary'>
            <li class='button'>
                <a href='../characters/asuna.php'>Asuna</a>
            </li>
            <li class='button'>
                <a href='../characters/bremusa.php'>Bremusa</a>
            </li>
            <li class='button'>
                <a href='../characters/catriona.php'>Catr&iacute;ona</a>
            </li>
            <li class='button'>
                <a href='../characters/dotty.php'>Dotty Snow</a>
            </li>
            <li class='button'>
                <a href='../characters/meowly.php'>Meowly</a>
            </li>
            <li class='button'>
                <a href='../characters/miziki.php'>Miziki</a>
            </li>
        </ul>

    </li>

    <?php 
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        if ($parts[count($parts)-2] == 'factions')
        {
            echo "<li class='active'>";
        }
        else
        {
            echo "<li>";
        }
    ?>
        <div class='button'>
            <a href='../factions/index.php'>Factions</a>
        </div><ul class='nav-secondary'>
            <li class='button'>
                <a href='../factions/sarbazeh-nur.php'>The Sarbazeh Nur</a>
            </li>
            <li class='button'>
                <a href='../factions/bardegi.php'>The Bardegi</a>
            </li>
            <li class='button'>
                <a href='../factions/#.php'>Barbarians of Stella</a>
        </ul>
    </li>
    
    <?php 

    /****************************************

        not current
        
    ****************************************


    <?php 
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        if ($parts[count($parts)-2] == 'allies')
        {
            echo "<li class='active'>";
        }
        else
        {
            echo "<li>";
        }
    ?>
        <div class='button'>
            <a href='../allies/index.php'>Allies</a>
        </div>
    </li>*/?>
    
    <?php 

    /****************************************

        not current
        
    ****************************************

    
    <?php 
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        if ($parts[count($parts)-2] == 'countries')
        {
            echo "<li class='active'>";
        }
        else
        {
            echo "<li>";
        }
    ?>
        <div class='button'>
            <a href='../countries/index.php'>Countries</a>
        </div>
    </li>*/?>
    
    <?php 

    /****************************************

        not current
        
    ****************************************

    
    <?php 
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        if ($parts[count($parts)-2] == 'history')
        {
            echo "<li class='active'>";
        }
        else
        {
            echo "<li>";
        }
    ?>
        <div class='button'>
            <a href='../history/index.php'>History</a>
        </div>
    </li>*/?>
    
    <?php 

    /****************************************

        not current
        
    ****************************************


    <?php 
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        if ($parts[count($parts)-2] == 'villians')
        {
            echo "<li class='active'>";
        }
        else
        {
            echo "<li>";
        }
    ?>
        <div class='button'>
            <a href='../villains/index.php'>Villains</a>
        </div>
    </li>*/?>
</ul>