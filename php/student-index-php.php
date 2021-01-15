<?php
  include('registration-php.php');
  $user_id = $_SESSION['user_id'];

  $subjects= $_POST['subjects'];
  $grade= $_POST['grade'];
  $facility= $_POST['facility'];

  if(isset($_POST['submit']))
  {
    //if subjects are checked.
    if($_POST['maths'].isChecked())
    {
      $maths="Yes";
    }

    else
    {
      $maths="No";
    }

    if($_POST['science'].isChecked())
    {
      $science="Yes";
    }

    else
    {
      $science="No";
    }

    if($_POST['accounting'].isChecked())
    {
      $accounting="Yes";
    }

    else
    {
      $accounting="No";
    }

    if($_POST['ict'].isChecked())
    {
      $ict="Yes";
    }

    else
    {
      $ict="No";
    }

    //Uploading school report
    $file= $_FILES['certificate'];
    $file_name= $_FILES['certificate']['name'];
    $file_size= $_FILES['certificate']['size'];
    $file_type= $_FILES['certificate']['type'];
    $file_tmp_name= $_FILES['certificate']['tmp_name'];
    $file_error= $_FILES['certificate']['error'];

    $file_ext= explode('.', $file_name);
    $new_file_ext= strtolower(end($file_ext));

    $allowed= array('pdf','docx');

    if(in_array($new_file_ext, $allowed))
    {
      if($file_error===0)
      {
        $report = $user_id."/school_report.".$new_file_ext;
        $file_path= 'documentation/'.$new_file_name;

        if(move_uploaded_file($file_tmp_name, $file_path))
        {
          $sql=$conn->prepare("INSERT INTO student_information(user_id, school_report, grade, facility,science, school, ict, maths, accounting)
          VALUES ('$user_id','$report', '$grade', '$facility','$science','$school','$ict','$maths','$accounting')");
          $sql->execute();

          $_SESSION['user_id'] = $user_id;
          $_SESSION['first_name']=$first_name;
          // Welcome message
          $_SESSION['success'] = "Welcome";
          header('location:welcome.php');
        }

        else
        {
          echo "File was not uploaded.";
        }
      }
    }

    else
    {
      echo"File type invalid.";
    }
  }
 ?>
