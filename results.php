<?php 

// echo "Boshlanish vaqti: " . $_POST['start_date'] . "<br>" . "<br>";

// echo "Tugash vaqti: " . $_POST['end_date'];

$start =  new DateTime($_POST['start_date']);
$end =  new DateTime($_POST['end_date']);

$difference = $end->diff($start);

echo "Kun: " . $difference->days . "<br>" . "<br>";
echo "Soat: " . $difference->i . "<br>" . "<br>";
echo "Daqiqa: " . $difference->m;

?>
