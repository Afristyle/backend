<?php

class databaseQueries{

    public function __construct(DatabaseConfigaration $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

  
    //to dynamically insert data in the database
    public function InsertoDb($values,$table){

      //get the table coulums dynamically
        $fields = array();
        
        $stmt = $this->db->con->stmt_init();
        $stmt->prepare("SELECT * FROM ".$table); 
        $stmt->execute();
        $meta =  $stmt->result_metadata();
        while ($field = $meta->fetch_field()) { 
          if($field->name !=='id')
             $fields[] = $field->name;   
        } 

        $SanitizedValues = array();
       //sanitizing each input with mysqli_real_escape staring
        foreach($values as $key)
        {
           $SanitizedValues[] = mysqli_real_escape_string($this->db->con,$key);
        }
         $clearFields = "`".implode("`,`",$fields)."`";
         $clearSanitizedValues = "'".implode("','",$SanitizedValues)."'";

        // echo $clearSanitizedValues;
        $ins = "INSERT INTO `$table`($clearFields) VALUES ($clearSanitizedValues)";

       if($stmt->prepare($ins))
       {
        if($stmt->execute())
        {
          return true;
        }
        else{
          return false;
        }

       }
  
        

    }

    //to dynamically read data from the database
    public function ReadData($tablename, array $arrayval,$condition){
     // public function fetchall(){

        try {
        
        
        $array_keys = implode(", ", $arrayval);
       // return $array_keys;

       //condition 
       $conditIon = implode(",",$condition);
       
       $Condtion = empty($condition) ?'':$conditIon;

        $stmt = $this->db->con->stmt_init();
        $stmt ->prepare("SELECT $array_keys FROM $tablename $Condtion");
        
        $stmt->execute();
        
        
        $result = $stmt->get_result(); // get the mysqli result
        $dat= array();
        while ($row = $result->fetch_assoc()) {
          $dat[]=$row;
      }
       // $user = $result->fetch_assoc();
        
        return $dat;
        
        } catch (Exception $e) {
        
        echo $e->getMessage();
        
        }
        
    }

   //to delete data from the database
    public function DeleteData($table,$column,$value){
        $stmt= $this->db->con->stmt_init();

      $sql = "DELETE * FROM $table WHERE $column='" .$value. "'";
      $stmt->prepare($sql);
        if($stmt->execute())
         return true;
         else
         return false;

    }

//to dynamically update data in the database
    public function UpdateData($table,$data,$where){
      /* function to build SQL UPDATE string */
      $sql = $this->build_sql_update($table,$data,$where);
      $stmt = $this->db->con->stmt_init();
      if($stmt->execute()){
         return true;
      }else{return false;}


    }

    private function build_sql_update($table, $data, $where)
    {
        $cols = array();
    
        foreach($data as $key=>$val) {
            $cols[] = "$key = '$val'";
        }
        $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";
     
        return($sql);
    }

}
?>