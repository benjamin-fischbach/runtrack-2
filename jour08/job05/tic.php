<?php

class TicTac
{
    var $box = array('', '', '', '', '', '', '', '', '');
    var $winner = '';
    var $blank = 0;
    var $i = 0;

    public function setValue()
    {
        if (isset($_POST['submit'])) {
            $this->box[0] = @$_POST['box0'];
            $this->box[1] = @$_POST['box1'];
            $this->box[2] = @$_POST['box2'];
            $this->box[3] = @$_POST['box3'];
            $this->box[4] = @$_POST['box4'];
            $this->box[5] = @$_POST['box5'];
            $this->box[6] = @$_POST['box6'];
            $this->box[7] = @$_POST['box7'];
            $this->box[8] = @$_POST['box8'];

        }
    }

    public function checkPlayerWin()
    {
        if ($this->box[0] == 'x' && $this->box[1] == 'x' && $this->box[2] == 'x'
            || $this->box[3] == 'x' && $this->box[4] == 'x' && $this->box[5] == 'x'
            || $this->box[6] == 'x' && $this->box[7] == 'x' && $this->box[8] == 'x'
            || $this->box[0] == 'x' && $this->box[3] == 'x' && $this->box[6] == 'x'
            || $this->box[1] == 'x' && $this->box[4] == 'x' && $this->box[7] == 'x'
            || $this->box[2] == 'x' && $this->box[5] == 'x' && $this->box[8] == 'x'
            || $this->box[0] == 'x' && $this->box[4] == 'x' && $this->box[8] == 'x'
            || $this->box[2] == 'x' && $this->box[4] == 'x' && $this->box[6] == 'x'
        ) {
            $this->winner = 'x';
            echo $this->winner . " wins";
        }
    }

    public function html()
    {
        echo "<html>";
        echo "<body>";
        echo "<head>";
        echo "<title> Tic Tac Toe </title>";
        echo "<style type=\"text/css\">";
        echo "#box {
    background-color:#99FFCC;
    border: 1px solid #008000; 
    width: 100px;
    height: 100px;
    font-size:66px;
    text-align:center;
}";
        echo "</style>";
        echo "<form name=\"tictactoe\" action=\"tic.php\" method=\"post\">";

        for ($this->i = 0; $this->i <= 8; $this->i++) {
            echo "<input type=\"text\" name=\"box{$this->i}\" value=\"{$this->box[$this->i]}\" id=\"box\">";

            if ($this->i == 2 || $this->i == 5 || $this->i == 8)
                echo "<br>";
        }

        echo "<input type=\"submit\" name=\"submit\" value=\"Go!\">";
        echo "</form>";
        echo "</body>";
        echo "</html>";
    }

    public function remainingBoxes()
    {

        for ($this->i = 0; $this->i <= 8; $this->i++) {
            if ($this->box[$this->i] == '')
                return $this->blank = 1;
        }

    }

    public function AImove()
    {
        if ($this->blank == 1) {
            $this->i = rand() % 9;
            var_dump($this->i);
            while ($this->box[$this->i] != '') {
                $this->i = rand() % 9;
            }
            return $this->box[$this->i] = 'o';
        }

    }

    public function checkAIwins()
    {
        if ($this->box[0] == 'o' && $this->box[1] == 'o' && $this->box[2] == 'o'
            || $this->box[3] == 'o' && $this->box[4] == 'o' && $this->box[5] == 'o'
            || $this->box[6] == 'o' && $this->box[7] == 'o' && $this->box[8] == 'o'
            || $this->box[0] == 'o' && $this->box[3] == 'o' && $this->box[6] == 'o'
            || $this->box[1] == 'o' && $this->box[4] == 'o' && $this->box[7] == 'o'
            || $this->box[2] == 'o' && $this->box[5] == 'o' && $this->box[8] == 'o'
            || $this->box[0] == 'o' && $this->box[4] == 'o' && $this->box[8] == 'o'
            || $this->box[2] == 'o' && $this->box[4] == 'o' && $this->box[6] == 'o'
        ) {
            $this->winner = 'o';
            echo $this->winner . " wins";
        }

    }

    public function checkForTie()
    {
        if ($this->blank == 0) {
            $this->winner = 't';
            echo "Game is tied";
        }
    }

    public function check()
    {
        var_dump($this->box);
    }
}

$game = new TicTac();

$game->setValue();
$game->html();
$game->checkPlayerWin();
$game->remainingBoxes();
$game->AImove();
$game->checkAIwins();
$game->checkForTie();
?>
