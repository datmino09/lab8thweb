<?php 
    Class News extends Db{
        public function getAll(){
            $sql = "select * from news";
            return $this->select($sql);
        }
        
    }
?>