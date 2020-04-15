<?php
session_start();
require_once "connect.php";
$connection = @new mysqli($host, $db_user, $db_pass, $db_name);
// connection is opened here

// if db is unavailable
if($connection->connect_errno!=0)
{
  echo "Błąd: ".$connection->connect_errno;
}
else
{
  $login = $_POST['login'];
  $password = $_POST['password'];

  $sql = "select * from login_table where login = '$login' and password = '$password'";
// query db for user (zapytanie do bazy) zapisane w zmiennej result
  if($result = @$connection->query($sql))
  {
    //ilu userow w row/wierszu tabeli
    $howm_users = $result->num_rows;
      if ($howm_users>0) {
        $row = $result->fetch_assoc(); // pobierz dane do tab
        $_SESSION['login'] = $row['login'];

        $result->free_result();

        header('Location: index.php');
      } else {

      }
  } else
  {

  }
  // close connection !!!
  $connection->close();
}


// get login and password (post values from login.html)




//connect




 ?>
