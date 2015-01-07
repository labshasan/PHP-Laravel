<?php

class DataAccess{

    public $hostname = 'localhost';
    public $dbname = 'bitm';
    public $dbuser = 'bitmuser';
    public $dbpassword = '123456';
    public $tablename = '';

    public $dataCollection = array();
    public $data = '';

    public function __construct($tablename, $hostname = null, $dbuser = null,
                                        $dbpassword = null, $dbname = null){
       if(!is_null($hostname)){ $this->hostname = $hostname; }
       if(!is_null($dbuser)){ $this->dbuser = $dbuser; }
       if(!is_null($dbpassword)){ $this->dbpassword = $dbpassword; }
       if(!is_null($dbname)){ $this->dbname = $dbname;}
       $this->tablename = $tablename;
        $this->connectdb();
    }

    public function connectdb(){
        $_conn = mysql_connect($this->hostname,$this->dbuser,$this->dbpassword) or die('Cannot Connect to Server');
         mysql_select_db($this->dbname,$_conn) or die('Cannot Connect to Database');
    }

    private function add(){


    }

    private function edit(){

    }

    public function save($objData){
        if(!empty($objData->id)){
            $this->add($objData);
        }else{
            $this->edit($objData);
        }
    }

    public function delete($id = null){
        if(is_null($id)){
            return false;
        }
        //do deletion
        return $isDeleted;
    }
    public function getAll($tablename, $fields = array()){

        $_sql = $this->buildSelectQuery($tablename, $fields);
        $_result = mysql_query($_sql);
        while($_row = mysql_fetch_assoc($_result)){
            $this->dataCollection[] = $_row;
        }
        return $this;
        //return $this->$objCollection;
    }

    public function get($tablename, $fields = array(), $id = null ){
        $_sql = $this->buildSelectQuery($tablename, $fields, $id );
        $_result = mysql_query($_sql);
        $_row = mysql_fetch_assoc($_result);
        $this->data = $_row;
        return $this;
    }

    private function buildSelectQuery($tablename, $fields = array('*'), $id = null){
        $_sql = "";
        if( is_array($fields) && !empty($fields) ){
            $_sql = "SELECT implode(',', $fields) FROM $tablename";
        }else{
            $_sql = "SELECT * FROM $tablename";
        }

        if(!is_null($id)){
            $_sql .= " WHERE id = $id";
        }
        return $_sql;
    }
}