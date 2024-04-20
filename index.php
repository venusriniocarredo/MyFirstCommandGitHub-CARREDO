<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
 
    <?php
//Define variables
    $lastname_firstname="CARREDO, VENUS R.";
    $favorite_color="BLACK AND BLUE";
    $birthdate_year="2002";

//Output the variables
#echo $lastname_firstname . "<br>";
#echo $favorite_color . "<br>";

//Calculate the difference between today's year and birthyear
$birth_year= 2002;
$current_year= date ("2024");
$year_difference = $current_year - $birth_year;

//Output the calculated difference
#echo $birthdate_year . ":" . $year_difference;

?>
 <style>
body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 90vh;
  background: #141e30;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #243b55, #141e30);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #243b55, #141e30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.container {
  background: darkblue;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
  color: #fff;
  text-align: left;
}

.title {
  font-size: 24px;
  margin-bottom: 20px;
}

.text {
  font-size: 18px;
  margin-bottom: 10px;
}

</style>
</head>
<body>
<div class="container">
  <div class="title">ACTIVITY 1</div>
  <div class="text"><?php echo $lastname_firstname; ?></div>
  <div class="text">Favorite color: <?php echo $favorite_color; ?></div>
  <div class="text">Difference of today's year and my birthday is: <?php echo $year_difference?></div>
</div>
</body>
</html>