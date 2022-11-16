<?php

namespace src\models;

use core\Model;

class User extends Model
{

    public static function getAllUser(){

        $array = User::select("*", "ORDER BY company ASC", "users");
        return $array;

    }

     /**
      * Metodo qeu faz a validação do usuario
      *
      * @param [string] $values
      * @param [string] $where
      * @param [string] $table
      * @return void
      */
    public static function findByUser($values, $where, $table)
    {

        $array = User::select($values, $where, $table);

        if ($array) {
            return $array;
        } else {
            return false;
        }
    }

    
}