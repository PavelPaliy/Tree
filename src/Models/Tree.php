<?php


namespace tree\src\Models;
include($_SERVER['DOCUMENT_ROOT']."/config.php");


class Tree
{
    public function __construct()
    {
        $this->dbh =  new \PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . ";charset=utf8;", USER, PASS, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
    }

    public function add($arr)
    {
        $parent_level = explode( ' ', $arr['list'])[0];
        $parent_left = explode( ' ', $arr['list'])[1];
        $parent_right = explode( ' ', $arr['list'])[2];

        $name = $arr['name'];
        $level = $parent_level+1;
        $left_key = $parent_right;
        $right_key = $left_key+1;

       $sql = 'UPDATE Tree SET right_key = right_key + 2 WHERE right_key >= :left_key;';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':left_key', $left_key);
        $stmt->execute();
        $sql = 'UPDATE Tree SET left_key = left_key + 2 WHERE left_key > :left_key;';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':left_key', $left_key);
        $stmt->execute();

        $sql = 'insert into Tree (name, level, left_key, right_key) values(:name, :level, :left_key, :right_key);';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':level', $level);
        $stmt->bindParam(':left_key', $left_key);
        $stmt->bindParam(':right_key', $right_key);
        $stmt->execute();
        return true;

    }
    public  function getAll()
    {
        try {
            $sql = 'SELECT id, name, level, left_key, right_key FROM Tree ORDER BY left_key ASC';
            $tree = $this->dbh->prepare($sql);
            $tree->execute();
            $data = $tree->fetchAll();
            return $data;
        }catch (\PDOException $exception)
            {
                echo $exception->getMessage();
            }
}
}