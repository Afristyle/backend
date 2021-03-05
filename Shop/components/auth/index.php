<?php
include '../initilizer/initilizer.php';

$control = $_POST['control'];
//echo $control;

switch ($control) {
    case 'ApiRegistration':
      //echo "fine";
        $url = $_POST['url'];
      
        $FirstName = $_POST['firstname'];
        $LastName  = $_POST['lastname'];
        $Username  = $_POST['username'];
        $contactInfo = $_POST['contactInfo'];
        $email  = $_POST['email'];
        $pasword = $_POST['password'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL))
         {
           if(!empty($url) || !empty($FirstName) || !empty($LastName) || !empty($Username) || !empty($contactInfo) || !empty($pasword))
           {
            $key =rand(1734267,768965423);
            $encrypt = new Cryptor($key);
            $EncryptedPassword = $encrypt->encrypt($pasword);
            
            $EncryptedUrl = $encrypt->encrypt($url);
            
             
        $ApiRegistration = new ApiRegistration();
         $results =  $ApiRegistration->RegisterUrl($url,$FirstName,$LastName,$Username,$contactInfo,$email,$EncryptedPassword,$EncryptedUrl,$key);
             //error ocured in api registrtion
           //  echo $results;
        if(!$results){
              $message = array();
              $message['message'] = "please we cant register api for now try later";
             echo json_encode($message);
             }
             else{
                 echo $results;
             }
            
           }
           // inputs are empty
           else{
            $message = array();
            $message['message'] = "all the fields are required";
            echo json_encode($message);
             }
        }
        else{
          $message= array();
          $message['message'] ="invalid email";
          echo json_encode($message);
        }

          
        break;

        case "Sign":
          $sign = new SignInUrl();
          echo $sign->ValidateUrl();

          break;
    
    default:
        
        break;
}

?>