<?php
  include('php/student-index-php.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="">
    <meta charset="utf-8">
    <title>
      Additional Information
    </title>
  </head>

  <body style="background-image: url('images/1772051.jpg');">

    <div class="nbody" style="margin: 100px 400px; overflow: hidden; width: 600px;">

  		<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="registration_form">

      <form action="" method="POST" enctype="multipart/form-data">
        <table style="padding:15px; border-spacing:10px;">
          <div class="w3-section">
            <th style="text-align:center; font-size:20px; color: #0047b3;" colspan="2">Please fill in all fields.</th>
          </div>

          <tr>
          </tr>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">School</label></td>
              <td><input type="text" name="school" id="school" required style="vertical-align: right;"></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">School Report</label></td>
              <td><input type="file" name="report"></td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Facility to attend</label></td>
              <td>
                <select id="facilities">
                  <option>Bisho 1</option>
                  <option>Bisho 2</option>
                  <option>King Williams Town</option>
                  <option>Soweto</option>
                </select>
              </td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Subjects</label></td>
              <td>
                <input type="checkbox" name="maths" value="Mathematics"/>
                <td><input type="number" name="maths mark" value="Current Mark"required style="vertical-align: right;"></td>

                <input type="checkbox" name="science" value="Physical Science"/>
                <td><input type="number" name="science mark" value="Current Mark"required style="vertical-align: right;"></td>

                <input type="checkbox" name="accounting" value="Accounting"/>
                <td><input type="number" name="accounting mark" value="Current Mark"required style="vertical-align: right;"></td>
                
                <input type="checkbox" name="ict" value="Information Communcation Technology"/>
                <td><input type="number" name="ict mark" value="Current Mark"required style="vertical-align: right;"></td>
              </td>
            </tr>
          </div>

          <div class="w3-section">
            <tr>
              <td><label style=" color: #0047b3;">Signed Biography</label></td>
              <td><input type="text" name="confirm_email" id="confirm_email" required style="vertical-align: right;"></td>
            </tr>
          </div>
      </table>

          <button type="submit" name="submit" id="submit" class="w3-button w3-block w3-dark-grey" style="padding: 5px 10px; border-radius:4px; width:20%; position:relative; left:110px;">
            Submit
          </button>
      </form>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>
