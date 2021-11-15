<html>

<body>

  <?php
  $name = $nameErr = $gender = $genderErr= "";
  // var_dump(isset($gender));
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['name'];
    if (empty($name)) {
      $nameErr = "Name is empty";
    }
    var_dump($_POST["gender"]);
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = $_REQUEST['gender'];
    }
  }
  ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter NAME">
    <span style="color:red"><?php echo $nameErr; ?></span></br>
    Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female")
  { echo "checked"; }?> value="female">Female
   <!-- <input type="radio" name="gender" checked value="male">Male -->
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
    <input type="submit">
  </form>

  <?php
    echo $name."<br>";
    echo $gender."<br>";
  ?>
</body>

</html>