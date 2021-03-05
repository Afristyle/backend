<?php
class ApiRegistration{
    var $url;
    var $FirstName;
    var $LastName;
    var $Username;
    var $contactInfo;
    var $email;
    var $pasword;
   var  $EncryptedPassword;
   var  $EncryptedUrl;
    var $key;


    // Remove all illegal characters from a url
    private function Sanitize($url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return $url;
    }

    private function ValidateUrl($url)
    {
         $SanitizedUrl = $this->Sanitize($url);

        if (filter_var($SanitizedUrl, FILTER_VALIDATE_URL) !== false)
        {
          return true;
        }else{return false;}
    }


    public function RegisterUrl($url,$FirstName,$LastName,$Username,$contactInfo,$email,$EncryptedPassword,$EncryptedUrl,$key){
       if($this->ValidateUrl($url))
       {
           $db = new DatabaseConfigaration();
            $query = new databaseQueries($db);

          $data = array();
          $data[]=$FirstName;
          $data[]=$LastName;
          $data[]=$Username;
          $data[]=$contactInfo;
          $data[]=$email;
          $data[]=$EncryptedPassword;
          $data[]=$EncryptedUrl;
          $data[]=$key;
           //post data to be inserted in the database
     
           $insert = $query->InsertoDb($data,"APis");//$query->InsertoDb($data,"APis");
 
          if($insert){
           $message = array();
           $message['key'] = $EncryptedUrl;
           $message['message'] ="success";
           return json_encode($message);
          }
          else
          {
            $message = array();
            $message['message'] ="Api registrtion failed";
            return json_encode($message); 
          }
        
       }
       else
       {
        $message = array();
        $message['message'] = "invalid url";
     return json_encode($message);
       
       }
    }

  
    private function checkIfUrlIsRegistered($query,$url){
      $mode = array();
      $mode[] = "*";
      $val = array();
      $condition = array();
      $condition[] = "WHERE id=1";
      
      // check if url is already registered


    $check = $query->ReadData("APis",$mode,$condition);//$query->InsertoDb($data,"APis");
    return $check;
    }

    
}
?>