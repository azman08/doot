<?php

class dbcon
{
  private $host = "127.0.0.1"; //properties
  private $user_name = "root";
  private $pass = "";
  private $db;
  private $check_con = false;
  private $con;

  private $results = array();

  public function __construct($database) //method
  {
    $this->db = $database;
    if (!$this->check_con) {
      $this->con = new mysqli($this->host, $this->user_name, $this->pass, $this->db);
      $this->check_con = true;
      if ($this->con->connect_error) {
        array_push($this->results, $this->con->connect_error);
      }
      // echo "successful";
    }
  }




  public function show_result()
  {
    $output = $this->results;
    $this->results = array();
    return $output;
  }


  // table exist check fun

  private function table_exist($table)
  {
    if ($this->check_con) {
      $sql = "SHOW TABLES FROM $this->db LIKE '$table'";
      $this->con->query($sql);
      if ($this->con->affected_rows == 1) {
        return true;
      } else {
        return false;
      }
    }
  }


  //fresh query

  public function new_query($sql)
  {
    if ($this->con->query($sql)) {
      array_push($this->results, "sucessfull");
      return $this->con->query($sql);
    }
  }

  //select data

  public function select($table, $col_name = "*", $condition = null, $offset = null, $limit = null)
  {
    if ($this->table_exist($table)) {
      $sql = "SELECT $col_name from $table";
      if ($condition != null) {
        $sql .= " WHERE $condition";
      }
      if ($limit != null) {
        $sql .= " LIMIT $limit";
      }
      if ($offset != null) {
        $sql .= " OFFSET $offset";
      }
      // echo $sql;
      $alldata = $this->con->query($sql);
      if ($this->con->affected_rows) {
        $this->results = $alldata->fetch_all(MYSQLI_ASSOC);
        return true;
      } else {
        array_push($this->results, "No Data Found");
        return false;
      }
    } else {
      array_push($this->results, "table doesn't exists");
    }
  }

  // public function multitable_select()
  // {
  //   $sql = "SELECT user_data.userid,user_data.name,user_data.email,user_data.mobile,user_data.register_date ,users_all_details.prime_user,users_all_details.date_of_birth,users_all_details.address,users_all_details.country FROM users_all_details CROSS JOIN `user_data` WHERE user_data.userid=users_all_details.userid";
  //   $all_data = $this->con->query($sql);
  //   $this->results = $all_data->fetch_all(MYSQLI_ASSOC);
  //   return true;
  // }


  // data insert table with two args 
  public function insert($table, $array_data = array())
  {
    if ($this->table_exist($table)) {
      $keys = implode(",", array_keys($array_data));
      $vals = implode("','", array_values($array_data));

      $sql = "INSERT INTO `$table` ($keys) VALUES ('$vals')";
      // echo $sql;
      $this->con->query($sql);
      return true;
    } else {
      array_push($this->results, "table doesn't exists");
    }
  }



  // data delete table with two args 
  public function delete($table, $condition)
  {
    if ($this->table_exist($table)) {
      $sql = ("DELETE FROM `$table` WHERE $condition");
      $this->con->query($sql);
      return true;
    } else {
      array_push($this->results, "table doesn't exists");
    }
  }


  // data update table with three args 
  public function update($table, $array_data = array(), $condition = null)
  {
    if ($this->table_exist($table)) {
      $update_data = "";
      foreach ($array_data as $x => $x_value) {
        $update_data .= $x . "='" . $x_value . "',";
      }
      $update_data = substr($update_data, 0, strlen($update_data) - 1);

      if ($condition != null) {
        $sql = ("UPDATE `$table` SET $update_data WHERE $condition");
        // echo $condition_key; 
        $this->con->query($sql);
        return true;
      } else {
        echo "provided data is not enough or right";
      }
    } else {
      array_push($this->results, "table doesn't exists");
    }
  }

  public function total_row($table_name, $row_name, $condition = null)
  {
    if ($condition != null) {
      $sql = "SELECT COUNT($row_name) AS 'total' FROM $table_name WHERE $condition";
    } else {
      $sql = "SELECT COUNT($row_name) AS 'total' FROM $table_name";
    }
    if ($this->table_exist($table_name)) {
      $query = $this->con->query($sql);
      while ($return = $query->fetch_assoc()) {
        $all_data = $return['total'];
        return $all_data;
      }
    } else {
      array_push($this->results, "no table found");
    }
  }

  public function total_sum($table_name, $row_name, $condition = null)
  {
    if ($this->table_exist($table_name)) {
      if ($condition != null) {
        $sql = "SELECT SUM($row_name) AS 'total' FROM $table_name WHERE $condition";
      } else {
        $sql = "SELECT SUM($row_name) AS 'total' FROM $table_name";
      }
      $query = $this->con->query($sql);
      while ($return = $query->fetch_assoc()) {
        $all_data = $return['total'];
        return $all_data;
      }
    } else {
      array_push($this->results, "no table found");
    }
  }

  public function single_data($table, $coloumn, $condition)
  {
    if ($this->table_exist($table)) {
      $sql1 = "SELECT `$coloumn` FROM `$table` WHERE $condition";
      $sql = $this->con->query($sql1);
      if ($this->con->affected_rows > 0) {
        while ($return = $sql->fetch_assoc()) {
          $data = $return[$coloumn];
          return $data;
        }
      } else {
        array_push($this->results, "no data found");
      }
    } else {
      array_push($this->results, "no table found");
    }
  }



  public function __destruct()
  {
    if ($this->check_con) {
      $this->con->close();
      $this->check_con = false;
    }
  }
}


class register extends dbcon
{
  // private $rg_result = array();

  public function ac_exists($table, $con)
  {
    $check = dbcon::select($table, "*", $con);
    if ($check) {
      return false;
    } else {
      return true;
    }
  }

  public function register($table, $array_data = array())
  {
    if (dbcon::insert($table, $array_data)) {
      return true;
    } else {
      return false;
    }
  }



  public function login($table, $data, $input_data_type, $password)
  {
    $con = "";
    if ($input_data_type == "email") {
      $con = "email='$data'";
    } else if ($input_data_type == "mobile") {
      $con = "mobile='$data'";
    }

    $check = dbcon::select($table, "*", $con);
    if ($check) {
      $result = dbcon::show_result();
      foreach ($result as $value) {
        $name = $value['name'];
        $email = $value['email'];
        $mobile = $value['mobile'];
        $pass = $value['password'];
        $userid = $value['userid'];


        if (password_verify($password, $pass)) {
          session_start();
          $_SESSION['login'] = true;
          $_SESSION['name'] = $name;
          $_SESSION['userid'] = $userid;
          return true;
        } else {
          return false;
        }
      }
    }
  }
}
// password_hash(pass,PASSWORD_DEFAULT);
// password_verify($password,$data_array['password'])p;$email==email$mobile==$dat