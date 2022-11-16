<?php

namespace core;

use \src\Config;

/**
 * Montar inputs tipo text, data, number, email...
 * "0" => array(name, label, tipo do input, placeholder, value, required)
 * 
 * Montar array para inputs tipo select
 * "0" => array(name, label, tipo(select), placeholder, value, required, array( "1" => array(value, label),))
 * 
 * Montar array para criar inputs tipo checkbox
 * "0" => array("", "", tipo, "", "", "", array("1" => array(value[], label),))
 * 
 * Montar array para criar inputs tipo radio
 * "0" => array("", "", tipo, "", "", "", array("1" => array(value, label),))
 */

class Forms 
{

    /**
     * Metodo para estilizar 
     *
     * @return void
     */
    public static function style()
    {
        
       return array(
         'cor' => Config::COLOR
       );
    }


    /**
     * Metodo para Gerar a url dos forms
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
     * Metodo para criar um formulario
     *
     * @param [type] $card_title - Titulo do card
     * @param [type] $action - URL de ação do formulario
     * @param [type] $method - Metodo POST ou GET
     * @param [type] $col - Qtd. de clonuas para renderizar o formulário
     * @param [type] $array - Array de inputs
     * @return void
     */
    public static function createForm($card_title, $action, $method, $col, $array, $exit){

        $form = '
        <div class="card card-'.self::style()["cor"].'">
            <div class="card-header">
                <h3 class="card-title">'.$card_title.'</h3>
            </div>
            <form action="'.self::baseUrl().'/'.$action.'" method="'.$method.'">
                <div class="card-body">
                    <div class="row">
                        '.self::creatInputs($col, $array).'
                    </div>
                </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i> Salvar</button>
                <a href="'.self::baseUrl().'/'.$exit.'" class="btn btn-danger"><i class="fa-solid fa-arrow-left-long"></i> Voltar</a>
            </div>
            </form>
        </div>
        ';

        return $form;

    }

    /**
     * Metodo responsavel em criar os inputs do formulario
     *
     * @param [string] $col
     * @param [array] $array
     * @return void
     */
    public static function creatInputs($col, $array){

        $input = "";

        foreach ($array as $key => $value) {
            
            switch ($value[2]) {
                case 'text':
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <input type="text" class="form-control" name="'.$value[0].'" id="'.$value[0].'" placeholder="'.$value[3].'" value="'.$value[4].'" '.$value[5].'>
                        </div>
                    </div>
                    ';
                    break;
                
                case "email":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <input type="email" class="form-control" name="'.$value[0].'" id="'.$value[0].'" placeholder="'.$value[3].'" value="'.$value[4].'">
                        </div>
                    </div>
                    ';
                    break;

                case "password":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <input type="password" class="form-control" name="'.$value[0].'" id="'.$value[0].'" placeholder="'.$value[3].'" value="'.$value[4].'">
                        </div>
                    </div>
                    ';
                    break;

                case "date":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <input type="date" class="form-control" name="'.$value[0].'" id="'.$value[0].'" placeholder="'.$value[3].'" value="'.$value[4].'">
                        </div>
                    </div>
                    ';
                    break;

                case "number":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <input type="number" class="form-control" name="'.$value[0].'" id="'.$value[0].'" placeholder="'.$value[3].'" value="'.$value[4].'">
                        </div>
                    </div>
                    ';
                    break;

                case "select":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <select class="custom-select rounded-0" id="'.$value[0].'" name="'.$value[0].'">
                                '.self::createOptionSelect($value[6]).'
                            </select>
                        </div>
                    </div>
                    ';
                    break;

                case "checkbox":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            '.self::createCheckbox($value[6]).'
                        </div>
                    </div>
                    ';
                    break;

                case "radio":
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            '.self::createRadio($value[6]).'
                        </div>
                    </div>
                    ';
                    break;

                case 'textarea':
                    $input .= '
                    <div class="col-sm-'.$col.'">
                        <div class="form-group">
                            <label for="'.$value[0].'">'.$value[1].'</label>
                            <textarea  class="form-control" name="'.$value[0].'" id="'.$value[0].'" rows="5" cols="50"></textarea>
                        </div>
                    </div>
                    ';
                    break;
            }


        }

        return $input;
   

    }


    /**
     * Metodo para criar os option de um select
     *
     * @param [array] $array
     * @return void
     */
    static function createOptionSelect($array){

        $option = '<option selected>Selecione</option>';

        foreach($array as $v){

            $option .= '<option value="'.$v[0].'">'.$v[1].'</option>';

        }

        return $option;

    }


    /**
     * Metodo para criar checkbox
     *
     * @param [array] $array
     * @return void
     */
    static function createCheckbox($array){

        $ck = "";

        foreach ($array as $key => $value) {
            
            $ck .= '
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="'.$value[0].'">
                <label class="form-check-label">'.$value[1].'</label>
            </div>
            ';
        }

        return $ck;

    }


    /**
     * Metodo para criar input radio
     *
     * @param [type] $array
     * @return void
     */
    static function createRadio($array){

        $radio = "";

        foreach ($array as $key => $value) {
            
            $radio .= '
            <div class="form-check">
                <input class="form-check-input" type="radio" name="'.$value[0].'">
                <label class="form-check-label">'.$value[1].'</label>
            </div>
            ';
        }

        return $radio;

    }

    /**
     * Metodo responsavel em rederizar
     *
     * @param [type] $card_title
     * @param [type] $action
     * @param [type] $method
     * @param [type] $col
     * @param [type] $array
     * @return void
     */
    public static function createFormSteps($card_title, $action, $method, $col, $array){

        $form = '
        <div class="card card-'.self::style()["cor"].'">
            <div class="card-header">
                <h3 class="card-title">'.$card_title.'</h3>
            </div>
            
                <div class="card-body">
                    <div class="row">
                        '.self::creatInputs($col, $array).'
                    </div>
                </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
           
        </div>
        ';

        return $form;

    }


    /**
     * Metodo qeu renderiza os formularios na abas do steps
     *
     * @param [type] $array
     * @param [type] $arrayForm
     * @return void
     */
    static function steps($array, $arrayForm){

        $html = '
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  '.self::createLiSteps($array).'
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                    '.self::createTabPane($array, $arrayForm).'
                </div> 
              </div>
            </div>
          </div>
        </div>
        ';

        return $html;
    }


    /**
     * Metodo que cria as tgas li do steps
     *
     * @param [type] $array
     * @return void
     */
    static function createLiSteps($array){

        $li = "";

        foreach ($array as $key => $value) {
            
            $li .= '
                <li class="nav-item"><a class="nav-link '.$value[0].'" href="#'.$value[1].'" data-toggle="tab">'.$value[2].'</a></li>
            ';
        }

        return $li;

    }


    /**
     * Metodo responsavel em criar os paineis dos steps
     *
     * @param [type] $array
     * @param [type] $arrayForm
     * @return void
     */
    static function createTabPane($array, $arrayForm){

        $div = "";

        foreach ($array as $key => $value) {
            
            $div .= '
            <div class="tab-pane '.$value[0].'" id="'.$value[1].'">';

            foreach ($arrayForm as $k => $v) {

                if($value[1] == $k){
                    $div .= self::createFormSteps($v["label"], $v["action"], $v["method"], $v["colums"], $v["inputs"]);
                }
            }
            
            $div .= '</div>';
        }

        return $div;

    }


    static function createCardMultipleForms($array, $exit){

        $form = '
        <div class="row">
            <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                        

                            '.self::createMultipleForms($array).'


                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i> Salvar</button>
                            <a href="'.self::baseUrl().'/'.$exit.'" class="btn btn-danger"><i class="fa-solid fa-arrow-left-long"></i> Voltar</a>
                        </div>
                    </div>
            </div>
        </div>
        ';

        return $form;
    }

    //createMultipleForms($card_title, $action, $method, $col, $arrayForm)
    public static function createMultipleForms($arrayForm){

        $form = '';

        foreach ($arrayForm as $k => $v) {

            $form .= '
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">'.$v["label"].'</h3>
                </div>
                
                    <div class="card-body">
                        <div class="row">
                            '.self::creatInputs($v["colums"], $v["inputs"]).'
                        </div>
                    </div>
            </div>
            ';

           
            //$form .= self::createFormSteps($v["label"], $v["action"], $v["method"], $v["colums"], $v["inputs"]);
            
        }



       

        return $form;

    }




}