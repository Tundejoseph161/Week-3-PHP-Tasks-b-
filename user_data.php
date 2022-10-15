<?php





if(isset($_POST['submit'])){

    $userDetails = implode($_POST);

    $fileName = "./userdata.csv";
    $handle = fopen($fileName, "a");
    fwrite($handle, $userDetails);
    fclose($handle);

 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];

  echo htmlspecialchars($name). ' personal data:';

  print_r($_POST);

}

?>