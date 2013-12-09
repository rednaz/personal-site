<!--

    charcters home

    created by: Eric 'Zander' Nelson
    created on: November 6, 2013 
    version ##: beta.1
    
    zandernelsoninc.com

                                        -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-cell-Type" content-cell="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../../css/sass.css" />
<title>Characters</title>
</head>

<body>

<div class="container clearfix">

	<?php include "../nav.php"; ?>

	<div class="main clearfix">
        <h1>Characters</h1>

        <div class="panel3 panel-auto">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta, ipsum sed viverra auctor, dolor est varius magna, quis sodales lectus felis eu arcu. Nulla non luctus libero, venenatis vestibulum purus. Nunc erat augue, sagittis vitae odio eget, feugiat commodo mi. Donec nisl lacus, tincidunt in erat ac, luctus ultricies nibh. Mauris odio sapien, porta ac molestie vel, mattis eget leo. Phasellus ultricies egestas tellus, at posuere neque fermentum non. Cras in molestie neque. Donec ac vehicula mi, non commodo velit. Nam blandit eleifend lectus a vestibulum. Phasellus ut tortor et dui adipiscing vehicula. Maecenas lectus elit, sollicitudin quis ligula non, tempus consequat erat. Quisque laoreet urna eu nisi scelerisque, eget pulvinar mi fringilla. Donec nec dignissim augue.
                
                Morbi egestas vehicula ante sed congue. Maecenas at enim quis odio varius accumsan. Proin quis mauris fermentum, tempor odio et, blandit neque. Etiam pretium turpis non metus gravida, ac cursus massa ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin ac arcu congue, viverra justo euismod, suscipit augue. Suspendisse ornare, nulla eget placerat facilisis, leo lorem pulvinar eros, eget pulvinar orci erat eu sem. Aliquam bibendum tortor sit amet ante porta mollis. Donec vestibulum dui et ipsum sodales dictum. In sagittis nunc id mi sagittis convallis. Praesent vel feugiat erat. Nulla faucibus, nisl at feugiat accumsan, magna tortor tempor augue, quis mollis lorem urna eu felis. Pellentesque lacinia, nisl a laoreet euismod, odio massa mattis enim, in viverra ante mauris at velit. Ut mattis non velit eu ultricies. Donec iaculis lorem non risus viverra, quis rhoncus tellus gravida.</p>
   
        </div>

        <div class="panel3 panel-auto">
                <h2>Current Party Members</h2>

                <?php

                    $xml = simplexml_load_file("../../xml/characters.xml");

                    $chars = $xml->character;
                    $count = count($chars);

                    for ($i = 0; $i < $count; $i++)
                    {
                        echo "<a class='panel1' href='../characters/".$chars[$i]->url.".php'>
                                <div>
                                    <h3>".$chars[$i]->name."</h3>";

                        $p = $chars[$i]->background->p;
                        $pcount = count($p);

                        echo "<p>".$p[$pcount-1]."</p></div></a>";
                    }

                ?>
        </div>

        

        <div class="panel3 panel-auto">
            <h2>Former Party Members</h2>

            <a class="panel1" href="../characters/pandamore.php">
                <div>
                    <h3>Pandamore</h3>
                    <p>An elven dancer who had the strange inclination to disguise himself has goblins by wearing their skin. Killed in battle by a Very Young Blue Dragon.</p>
                </div>
            </a>
        </div>
	</div>
    
</div>

</body>
</html>
