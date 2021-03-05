<?php
class LoadProducts{

    public function __construct(DatabaseConfigaration $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db; 
    }

    //Load general results
    public function LoadGeneralProducts(){

    }

    //Load advert
    public function LoadAdverts(){

    }

    //Load
}
?>