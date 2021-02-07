<?php require 'partials/header.php';

$keys = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U',
              'V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p',
              'q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0','!',
              '@','#','$','%','^','&','*','-','=','/','*','-','+','(',')');

$length = array(7,8,9,10,11,12,13,14,15,16,17,18,19,20); //to chose the leangth;
shuffle($length); //to select random value from $length array;
$final_length = $length[0];


$str = "";

for($i=0; $i < $final_length; $i++){
    shuffle($keys);
    $str .= $keys[0]; //  ==   $str = $str.$keys;
    
}
//echo "<br> Your random pass: $str";
?>

<div class="container">
<form action="" method="">
    <ul class="text-center">
        <li><br><br><br><br>
            <h3>Click for Random Password</h3><br><br><br>
            <input type="text" name="pass" placeholder="Pass" value="<?php echo $str; ?>">
            <input type="submit" value="Random Password"><br><br><br><br><br>
        </li>
    </ul>
</form>
</div>

<?php require 'partials/footer.php'; ?>
