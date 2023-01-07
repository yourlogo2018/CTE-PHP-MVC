<?php
namespace core;

use \src\Config;


class Database
{


    private $table;
    private $pdo;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->conn();
    }

    /**Função cria a conexão com o banco de dados */
    private function conn()
    {

        try {
            $this->pdo = new \PDO('mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_DATABASE . ';charset=utf8mb4', Config::DB_USER, Config::DB_PASS);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //echo "Banco conectado com sucesso!";
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    /**Função executar a query */
    public function execute($query, $params = [])
    {
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            return false;
        }
    }


    /**Função insert */
    public function insert($array)
    {

        $fields = array_keys($array);
        $values = array_pad([], count($fields), '?');
        $query = "INSERT INTO " . $this->table . " ( " . implode(',', $fields) . " ) VALUES ( " . implode(',', $values) . " ) ";
        $this->execute($query, array_values($array));

        /**Retorna o ultimo id inserido */
        return $this->pdo->lastInsertId();
    }

    /**Função para fazer o select */
    public function select($fields = "*", $where = null)
    {

        $query = "SELECT " . $fields . " FROM " . $this->table . " " . $where;
        return $this->execute($query);
    }


    /***Função para fazer o update */
    public function update($values, $where)
    {

        $fields = array_keys($values);

        $query = "UPDATE " . $this->table . " SET " . implode('=?,', $fields) . "=? WHERE " . $where;

        $return = $this->execute($query, array_values($values));

        if ($return === false) {

            return false;
        }

        return true;
    }


    /***função para deletar */
    public function delete($where)
    {

        $query = "DELETE FROM " . $this->table . " WHERE " . $where;
        $this->execute($query);
        return true;
    }
}
