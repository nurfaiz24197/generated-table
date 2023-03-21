<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Table Generator</title>
  </head>

  <body>
    <?php
    // Get user input for width and height
    $width = isset($_POST['width']) ? $_POST['width'] : '';
    $height = isset($_POST['height']) ? $_POST['height'] : '';

    // Generate table HTML based on user input
    if (!empty($width) && !empty($height)) {
      echo "<table border='1' width='50%' height='50px' cellpadding='2' cellspacing='0' style='text-align: 'center' margin: auto>";
      for ($i = 0; $i < $height; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $width; $j++) {
          echo '<td></td>';
        }
        echo '</tr>';
      }
      echo '</table>';
    }
    ?>

    </br>
    <!-- HTML form for user input -->
    <form method="post">
      <label>Width:</label>
      <input type="number" name="width"><br>
      <label>Height:</label>
      <input type="number" name="height"><br>
      <input type="submit" value="Generate Table">
    </form>


  </body>

  </html>