<?php include_once "config.php";

class dbtable{
    public function selectall(){
        global $dbConnection;
        $tablename = get_class($this);
        $sqlStmt= $dbConnection -> prepare("SELECT * FROM $tablename");
        $sqlStmt ->execute();
        $allData= $sqlStmt->fetchall();
        return $allData;
    }

    public function selectOne($where){
        global $dbConnection;
        $tablename = get_class($this);
        $sqlStmt= $dbConnection -> prepare("SELECT * FROM $tablename WHERE $where");
        $sqlStmt ->execute();
        $allData= $sqlStmt->fetch();
        return $allData;
    }
}




class users extends dbtable{

}



?>