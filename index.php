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
        $hoursworked = 25;
        $rate = 1000;
        $total = $hoursworked * $rate;
        echo 'I worked ' .$total;
        if ($hoursworked > 40) {
            $total = $hoursworked * $rate * 1.5;
        } else {
            $total = $hoursworked * $rate;
        }
        echo ($total > 0) ? 'I worked some things' .$total : "You're Weelcome";
        $position = $_GET['board'];
        $squares = str_split($position);
        if (winner('x', $squares)) {
            echo 'You win.';
        } else if (winner('o', $squares)) {
            echo 'I win.';
        } else {
            echo 'No winner yet.';
        }

        function winner($token, $position) {
            $won = false;
            if (($position[0] == $token) &&
                    ($position[1] == $token) &&
                    ($position[2] == $token)) {
                    $won = true;
                } else if (($position[3] == $token) &&
                        ($position[4] == $token) &&
                        ($position[5] == $token)) {
                    $won = true;
                }
            return $won;
        }
        ?>
    </body>
</html>
