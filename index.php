<?php

class SuccStepsDFS{
   var $host;
   var $username;
   var $password;
   var $table;

   public function display_public(){

   }
   
   public function display_admin(){
    return <<<ADMIN_FORM

    <form action="{$_SERVER['PHP_SELF']}" method="post">
      <label for="title">Title:</label>
      <input name="title" id="title" type="text" maxlength="150" />
      <label for="bodytext">Body Text:</label>
      <textarea name="bodytext" id="bodytext"></textarea>
      <input type="submit" value="Create This Entry!" />
    </form>

ADMIN_FORM;
}



   }

   public function write(){

   }
   
   public function connect(){
       mysql_connect($this->host,$this->username,$this->password) or die("Could not connect. " . mysql_error());
       mysql_select_db($this->table) or die("Could not select database" . mysql_error());

       return $this->buildDB();

   }

   private function buildDB(){
        $sql = <<<MySQL_QUERY
            CREATE TABLE IF NOT EXISTS testDB (
              title VARCHAR(150),
              bodytext TEXT,
              created VARCHAR(100)
              )
              MySQL_QUERY;

              return mysql_query($sql);
   } 

}


?>