<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Calculator</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      section {
        text-align: center;
        background: white;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
      }
      .container {
        display: flex;
        gap: 5rem;
        justify-content: space-between;
        align-items: center;
        padding: 2rem;
        width: 800px;
        height: 400px;
      }
      .left {
        display: flex;
        align-items: center;
      }

      .left hr {
        height: 50px;
        width: 3px;
        background-color: black;
        margin-right: 10px; /* Adjust this value to control the space between the line and the heading */
      }
      .right {
        width: 50%;
      }
      form {
        display: flex;
        flex-direction: column;
      }
      input[type="number"],
      select {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        width: 80%;
        text-align: center;
        font-size: 20px;
      }
      input[type="submit"] {
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 80%;
      }
      input[type="submit"]:hover {
        background-color: #0056b3;
      }
      .result {
        margin-bottom: 50px;
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="left">
          <hr />
          <h1>PHP <br />Calculator</h1>
        </div>
        <div class="right">
          <form method="POST">
            <input type="number" name="num1" placeholder="Enter Number" />
            <input type="number" name="num2" placeholder="Enter Number" />
            <select name='Operation'>
              <option></option>
              <option value="Plus">+</option>
              <option value="Minus">-</option>
              <option value="Intu">*</option>
              <option value="Division">/</option>
            </select>
            <input type="submit" name="submit" value="SUBMIT" />
          </form>
        </div>
      </div>
      <div class="result">
        <p>

            <?php
            
            if (isset($_POST['submit'])) {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $Operation = $_POST['Operation'];

              switch ($Operation) {
                case 'Plus':
                  $sum = $num1  + $num2;
                  echo "Result is: {$sum}";
                  break;
                  case 'Minus':
                    $sum = $num1 - $num2;
                    echo "Result is: {$sum}";
                    break;
                    case 'Intu':
                      $sum = $num1 * $num2;
                      echo "Result is: {$sum}";
                      break;
                      case 'Division':
                        $sum = $num1 / $num2;
                        echo "Result is: {$sum}";
                        break;
                
                default:
                  echo "something went wrong! press the right number please";
                  break;
              }
            } 

            ?>
        </p>
      </div>
    </section>
  </body>
</html>
