<?php
namespace Core;
class dbPdo{
    public $pdo;
    public function __construct(){
        $options = array(
            //默认是PDO::ERRMODE_SILENT, 0, (忽略错误模式)
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            // 默认是PDO::FETCH_BOTH, 4
           \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        );
        try{
            $this->pdo=new \PDO('mysql:host=localhost;dbname=website;port=3306;charset=utf8', 'root', '',$options);
        }catch (\PDOException $e){
            die('连接数据库失败' . $e->getMessage());
        }
    }
    function fetchAll($sql)
    {
        $con=$this->pdo->prepare($sql);
        $con->execute();
        return $con->fetchAll();
    }
    function fetchOne($sql)
    {
        $con=$this->pdo->prepare($sql);
        $con->execute();
        return $con->fetch();
    }

    function insert($table,$data)
    {
        $sql="insert into {$table} (";
        foreach ($data as $k => $v) {
            $sql.=$k.',';
        };
        $sql=substr($sql,0,-1);
        $sql.=") values (";
        foreach ($data as $k => $v) {
            $sql.='?,';
        };
        $sql=substr($sql,0,-1);
        $sql.=")";

        echo $sql;
        $con=$this->pdo->prepare($sql);
        for($i=1;$i<=count($data);$i++){
            $con->bindValue($i,array_values($data)[$i-1]);
        };
        $con->execute();
    }

    function update($table,$id,$data)
    {
        $sql="update ".$table." set ";
        foreach($data as $k=>$v){
            $sql.=$k."=?,";
        }
        $sql=substr($sql,0,-1);
        $sql.=" where id=?";
//        $con=$this->pdo->prepare("update {$table} set name=?,artist=? where id=?");
//        $con=$this->pdo->prepare("update ".$table." set name=?,artist=? where id=?");
        $con=$this->pdo->prepare($sql);
//        $con->bindValue(1,$data['name']);
//        $con->bindValue(2,$data['artist']);
//        $con->bindValue(3,$id);
        for($i=1;$i<=count($data);$i++){
            $con->bindValue($i,array_values($data)[$i-1]);
        };
        $con->bindValue(count($data)+1,$id);
        $con->execute();
    }

    function delete($table,$id){
        $con=$this->pdo->prepare("delete from {$table} where id=?");
        $con->bindValue(1,$id);
        $con->execute();
    }
}