<?php

namespace core;

use \src\Config;

class Table
{
  
    /**
     * Metodo para gerar url para table
     *
     * @return void
     */
    private static function baseUrl() {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if($_SERVER['SERVER_PORT'] != '80') {
            $base .= ':'.$_SERVER['SERVER_PORT'];
        }
        $base .= Config::BASE_DIR;
        
        return $base;
    }
    

    /**
     * Metodo responsavel em criar o html da tabela
     *
     * @param [array] $array
     * @param [string] $col
     * @return void
     */
    static function createTable($array, $col){

        $table = '
        <div class="row">
          <div class="col-md-'.$col.'">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">'.$array["header"].'</h3>
                
                <div class="card-tools">
                  <div class="input-group-sm">
                    <div class="input-group-append">
                      '.self::buttonsHeader($array["buttons"]).'
                    </div>
                  </div>
                </div>


              </div>
              <div class="card-body">
                <table class="table table-hover text-nowrap">
                  <thead>
                    '.self::createColums($array["columns"]).'
                  </thead>
                  <tbody>
                    '.self::createRow($array["rows"]).'
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
    
          </div>
        </div>
        ';

        return $table;
    }


    /**
     * Metodo qeu renderiza os botoes no header das tabelas
     *
     * @param [array] $array
     * @return void
     */
    static function buttonsHeader($array){

      if( $array ){

        $a = "";
        foreach ($array as $key => $value) {
        
          $a .= '<a href="'.self::baseUrl().'/'.$value[0].'" class="btn btn-primary btn-lg" style="margin-right: 5px;"><i class="'.$value[2].'"></i> '.$value[1].'</a>';

        }
        return $a;

      }
      return "";

    }


    /**
     * Metodo que cria as colunas da tabela
     *
     * @param [type] $array
     * @return void
     */
    static function createColums($array){

      //Se quiser aumentar a largura =><th style="width: 10px">#</th>

      $col = "<tr>";

      foreach ($array as $key => $value) {
        
          if( $value == "BTN" ){
            $col .= '
              <th style="width: 10px"></th>
            ';
          }else{
            $col .= '
              <th>'.$value.'</th>
            ';
          }

      }

      $col .= "<tr>";

      return $col;          

    }


    /**
     * Metodo responsavel em criar as linhas das colunas
     *
     * @param [type] $array
     * @return void
     */
    static function createRow($array){

        $row = "";
        
        foreach ($array as $key => $value) {

          $row .= "<tr>";

          foreach ($value as $k => $v) {
            $row .= '
              <td>'.$v.'</td>
            ';
            
          }
          $row .= '
          <td>
            <div class="btn-group">
              <a class="btn btn-sm btn-default" href="'.self::baseUrl().'/editar/'.$value["id"].'">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>
              <a class="btn btn-sm btn-default" href="'.self::baseUrl().'/deletar/'.$value["id"].'">
                <i class="fa-solid fa-trash"></i>
              </a>
            </div>
          </td>';
          
          $row .= "</tr>";

        }

        return $row; 

    }
















}