<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html: charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'hi there';
        $name = 'John';
        $what = 'nerrrrrrdddd';
        $level = '9001';
        echo 'hey, my name is ' .$name, '. and I am a level ' .$level, ' ' .$what;
        $hoursworked = 10;
        $rate = 1000;
        $total = $hoursworked * $rate;
        echo 'I worked ' .$total;
        if ($hoursworked > 40) {
            $total = $hoursworked * $rate * 1.5;
        } else {
            $total = $hoursworked * $rate;
        }
        echo ($total > 0) ? 'I worked some things' .$total : "You're Weelcome";
        ?>
    </body>
</html>
