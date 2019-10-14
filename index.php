<?php
// exo 1
for ($i = 0; $i <= 10; $i++) {
    echo '<p style="color:red;">'.$i.'</p>';
};

// exo 2
$value_two = 86;

for ($value_one = 0;$value_one <= 20; $value_one ++) {
    $result = $value_one * $value_two;
    echo '<p style="color:blue;">'.$result.'</p>';

};

//exo 3
$valTwo = 33;

for ($valOne = 100; $valOne >=10; $valOne --) {
    $multiply = $valOne * $valTwo;
    echo '<p style="color:green;">'.$multiply.'</p>';
}

//exo4
for ($i = 1; $i < 10; $i ++) {
        $div =  $i +1 / $i;
        echo '<p style="color:blue;">'.$div.'</p>';
    }


//exo5
for ($i = 0; $i <= 15 ; $i ++) {
    echo '<p style="color:red;">'.$i.'On y arrive presque'.'</p>';
};

//exo6
for ($i = 20; $i >= O; $i --) {
    echo '<p style="color:pink;">'.$i.'C\'est presque bon'.'</p>';
};

//exo7
for ($i = 0; $i < 100; $i ++) {
    if ( $i == 15 ) {
        echo '<p style="color:red;">On tient le bon bout</p>';
    } elseif ($i == 30) {
        echo '<p style="color:red;">On tient le bon bout</p>';
    }elseif ($i == 45) {
        echo '<p style="color:red;">On tient le bon bout</p>';
    } elseif ($i == 60) {
        echo '<p style="color:red;">On tient le bon bout</p>';
    } elseif ($i == 75) {
        echo '<p style="color:red;">On tient le bon bout</p>';
    } elseif ($i == 90) {
        echo '<p style="color:red;">On tient le bon bout</p>';
    }
};

//exo8
for ($i = 200; $i > 0; $i=$i -12) {

 echo '<p style="color:gray;">Enfin !!</p>';
}
?>