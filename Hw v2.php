<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        How many you wanna see: 
        <input type="text" name="table">
        <input type="submit" value="submit">
    </form>
</div>
<?php
function mt3($n){ 
    $count=0;
    ?>
    <div class="row">
    <?php
    for($i=1;$i<=$n;$i++){
        ?>
        <div class="col"><?php
        for($j=1;$j<=12;$j++){
            echo "<span>$i * $j =" .$i*$j."</span><br>";
        }
            echo "</div>";
            $count ++;
        
          if($count >= 3){
              ?>
              </div>
              <div class="row">
              <?php
              echo "<hr>";
              $count=0; 
          } 
    }
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $n=$_POST['table'];
    mt3($n);
}
?>
    
    <?php
    require('footer.php');
    ?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>
</html>