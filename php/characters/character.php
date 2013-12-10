<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--

    Character PHP creation

    created by: Eric 'Zander' Nelson
    created on: December 9, 2013 
    version ##: beta.1
    
    zandernelsoninc.com

                                        -->

<?php

    $xml = simplexml_load_file("../../xml/characters.xml");

    $chars = $xml->character;
    $count = count($chars);

    $i = 0;
    for ($i; $i < $count; $i++)
    {
        if (strcmp($chars[$i]->name, $character) == 0)
            break;
    }

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-cell-Type" content-cell="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../../css/sass.css" />
<title><?php echo $chars[$i]->name; ?></title>
</head>

<body>

<div class="container clearfix">

    <?php include "../nav.php"; ?>

    <div class="main clearfix">
        <h1><?php echo $chars[$i]->name; ?></h1>

        <div class="panel3 panel-auto">
            <h2>Background</h2>

            <?php 

                $p = $chars[$i]->background->p;
                $pcount = count($p);

                for ($j = 0; $j < $pcount; $j++)
                {
                    echo "<p>".$chars[$i]->background->p[$j]."</p>";
                }

            ?>
        </div>

        <div class="panel1 panel-temp">
            <div>

                <?php

                    $details = $chars[$i]->details;

                ?>

                <table class="char-table">
                    <thead>
                        <tr>
                            <th>Player</th>
                            <th><?php echo $details->player; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Race</td>
                            <td><?php echo $details->race; ?></td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td><?php echo $details->class; ?></td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td><?php echo $details->level; ?></td>
                        </tr>
                        <tr>
                            <td>Alignment</td>
                            <td><?php echo $details->alignment; ?></td>
                        </tr>
                        <tr>
                            <td>Affiliations</td>
                            <td><?php echo $details->affiliations; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel1 panel-temp">
            <div>
                <h3>Quotes</h3>

                <?php

                    $quotes = $chars[$i]->quotes->quote;
                    $qcount = count($quotes);

                    for ($j = 0; $j < $qcount; $j++)
                    {
                        echo "<blockquote class='char-quotes'>
                                <p>".$quotes[$j]."</p>
                             </blockquote>";
                    }

                ?>
            </div>
        </div>
        <div class="panel1 panel-temp">
            <div>
                <h3>Portrait</h3>
                <?php echo "<img src='".$chars[$i]->portrait."' />"; ?>
            </div>
        </div>
    </div>
    
</div>

</body>
</html>