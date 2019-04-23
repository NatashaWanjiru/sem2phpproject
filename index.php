

<?php
require 'includes/librarydata.inc.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            form {
  border: 3px solid #f1f1f1;
}
table {
  border-collapse: collapse;
}
h1 {
  background-color: white;
   text-align: left;
}
h2 {
  background-color: white;
   text-align: center;
   
}

/*div {
  background-color: lightblue;
}*/

/*p {
  background-color: yellow;
}*/

table, th, td {
  border: 1px solid black;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
/*button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}*/

/* Add a hover effect for buttons */
/*button:hover {
  opacity: 0.8;
}*/

/* Extra style for the cancel button (red) */
/*.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}*/

/* Center the avatar image inside this container */
/*.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}*/

/* Avatar image */
/*img.avatar {
  width: 40%;
  border-radius: 50%;
}*/

/* Add padding to containers */
/*.container {
  padding: 16px;
}*/

/* The "Forgot password" text */
/*span.psw {
  float: right;
  padding-top: 16px;
}*/

/* Change styles for span and cancel button on extra small screens */
/*@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}*/
        </style>
        
    </head>
    <body>
        <h1> DIGITAL LIBRARY RECORDS</h1>
        <h2> ADMI INSTITUTE</h2>
    <?php
        $getData = "SELECT * FROM posts";
        $send = mysqli_query($conn, $getData);
        
        $table_row = "";
        
        if(mysqli_num_rows($send) > 0){
            
            while($row = mysqli_fetch_assoc($send)) {
//                echo "id: " . $row["id"]. " - Name: " . $row["username"]. " - Bookdate " . $row["bookname"]. " - Date " . $row["date"] . "<br>";
                    $tname = $row["username"];
                    $tbookname = $row["bookname"];
                    $tdate = $row["date"];
                     $tstatus = $row["status"];
                $table_row .= "<tr>
                  <td>$tname</td>
                  <td>$tbookname</td> 
                  <td>$tdate</td>
                      <td>$tstatus</td>
                </tr>";
            }
            
        }
        
    ?>
        
        <form action="">

<!--            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <br>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <br>
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>-->
              <div class="container" style="background-color:yellow">
      <table style="width:100%">
                <tr>
                  <th>Username</th>
                  <th>Book Name</th> 
                  <th>Date Borrowed</th>
                  <th>Status (Returned/Pending)</th>
                </tr>
                
              
                <?php echo $table_row ?>
            </table>
              </div>
<!--            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>-->
          </form>
    </body>
</html>
