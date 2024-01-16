<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
  <?php 
      echo '<h1>PHP and Creating Output</h1>' .
           '<p>The PHP echo command can be used to create output.</p>' .
           '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>' .
           '<ul>' .
           '<li>Use HTML special characters</li>' .
           '<li>Alternate between single and double quotes</li>' .
           '<li>Use a backslash to escape quotes</li>' .
           '</ul>' .
           '<h2>More HTML to Convert</h2>' .
           '<p>PHP says "Hello World!"</p>' .
           '<p>Can you display a sentence with \' and "?</p>' .
           '<img src="php-logo.png">'
           
    ?>
    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$linkName.'</h1>';
    echo '<pre><a href='.$linkURL.'>Codecademy Link</a>'.PHP_EOL.'<img src='.$linkImage.'></pre>';
    echo '<h1>'.$linkDescription.'</h1>';

    ?>


<?php
    
    echo '<h1>Arrays</h1>';

    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$link['name'].'</h1>';
    echo '<h1><a href='.$link['url'].'>Codeacdemy link</a></h1>';
    echo '<img src='.$link['image'].'/>';
    echo '<h1>'.$link['name'].'</h1>';
    echo '<h1>'.$link['name'].'</h1>';

    ?>

  </body>
</html>