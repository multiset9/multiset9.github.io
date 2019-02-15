<?php
if(isset($_POST[done])) {
    $CassNom = array(500, 200, 100, 50, 20, 10, 5); //номинал в банкомате
    $value = $_POST['value']; //сумма которою нужно снять
    $kol = 0;
    do {                       //валидация суммы
        if ($value < 0 || $value == "") {
            echo "Sorry, You entered incorrectly data!!!<br/>";
            echo "Repeat the input <a href=\"index.php\">Here</a>";}
        if($value > 7000) {
            echo "Sorry, the maximum limit is 7000 UAH<br/>";
            echo "Repeat the input <a href=\"index.php\">Here</a>";}
        else{
        if (0 != $value % 5) {
            echo "Sorry, You entered a sum not a multiple of 5!!!<br/>";
            echo "Repeat the input <a href=\"index.php\">Here</a>";}
        else {
            for ($i = 0; $i < 7; ++$i) {
                $kol = $value / $CassNom[$i];
                $kol = floor($kol);
                if ($kol != 0) {
                    echo "Please, take your money<br/>";
                    echo  $kol . " x " . $CassNom[$i] . "<br/>";
                    echo "Return to the ATM <a href=\"index.php\">Here</a>";
                }
                $value -= $kol * $CassNom[$i];
            }
        }}
    } while (false);
}
?>