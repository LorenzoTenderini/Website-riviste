<?php
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $type_address=$_POST["type-address"];
    $address=$_POST["address"];
    $n_civico=$_POST["n-civico"];
    $comune=$_POST["comune"];
    $abbonamento = $_POST['abbonamento'];
    $date=$_POST["date"];

    $conn = mysqli_connect("localhost", "root","","casa_editrice");
    $check = 0;
    if (!$conn) {
      echo "<script />console.log('Connection db failed')</script>";
    }
    else {
      echo "<script>console.log('Connection db succesfully')</script>";
      $check = 1;

    }

    if ($check==1) {
      if (!empty($name)) {
        if (!empty($surname)) {
          if (!empty($email)) {
            if (!empty($phone)) {
              if (!empty($type_address)) {
                if (!empty($address)) {
                  if (!empty($n_civico)) {
                    if (!empty($comune)) {
                      if (!empty($abbonamento)) {
                        if (!empty($date)) {
                          echo "appost";
//                        INSERT INTO `abbonati`(`Id_Abbonato`, `Cognome`, `Nome`, `Tipo_Via`, `Nome_Via`, `Numero_Civico`, `Id_Comune`, `Email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
                          $query="INSERT INTO `abbonati`(`Cognome`, `Nome`, `Tipo_Via`, `Nome_Via`, `Numero_Civico`, `Id_Comune`, `Email`) VALUES ('$surname','$name','$type_address','$address','$n_civico',1,'$email')";
                          if (mysqli_query($conn, $query)) {
                            echo "New record created successfully";
                          } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($conn);
                          }
                        }
                        else {
                          echo "mada10";
                        }
                      }
                      else {
                        echo "mada9";
                      }
                    }
                    else {
                      echo "mada8";
                    }
                  }
                  else {
                    echo "mada7";
                  }
                }
                else {
                  echo "mada6";
                }
              }
              else {
                echo "mada5";
              }
            }
            else {
              echo "mada4";
            }
          }
          else {
            echo "mada3";
          }
        }
        else {
          echo "mada2";
        }
      }
      else {
        echo "mada1";
      }
    }
?>
