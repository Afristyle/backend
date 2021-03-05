<?php
class SignInUrl{
    private function getUrl()
    {
       

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $info = parse_url($actual_link);
        $host = $info['host'];
        return $host;
    }

    private function sanitizeEncryptedUrl($encryptedUrl)
    {
        $info = parse_url($encryptedUrl);
        $host = $info['host'];
        return $host;
    }

    public function ValidateUrl()
    {
        $db = new DatabaseConfigaration();
        $query = new databaseQueries($db);
        $re =$this->getUrl();

        $mode = array();
        $mode[] = "*";
       // $val = array();
        $condition = array();
        $condition[] = " ";
        
        // check if url is already registered
     // $founUrl = array();
      
      $check = $query->ReadData("APis",$mode,$condition);//$query->InsertoDb($data,"APis");
       foreach ($check as $key => $value)
        {
           # code...
           $key = $value['keyIS'];
           $Eurl = $value['EncryptedUrl'];
           $Encrypt = new Cryptor($key);
           $dEncryptNewUrl = $Encrypt->decrypt($Eurl);

            $sanitizedUrl = $this->sanitizeEncryptedUrl($dEncryptNewUrl);
           if($re === $sanitizedUrl){
               
               return "ok";
               exit;
           }
       }

    }

}
?>