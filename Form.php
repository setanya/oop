<?php


class Form
{
    private $action = "";
    private $method = "post";
    public function __construct($action = "", $method = "post")
    {
        $this->action=$action;
        $this->method = $method;
    }
    public function beginForm()
    {//<form action="" method="post" enctype="multipart/form-data">
        return '<form action="'.$this->action.'" method="'.$this->method.'" enctype="multipart/form-data">';
    }

    public function endForm()
    {
        return '</form>';
    }

    /**
     * принимает массив вида [key =>val]
     * key - название атрибута
     * val - значение атрибута
     * @param $param
     * @return string
     */
    public function input($param)
    {//<input type="text" name="text">
        $str = '<input ';
        foreach ($param as $key=>$value){
            $str .= $key.'="'.$value.'" ';
        }
        $str .= ' />';
        return $str;
    }

    /*** принимает массив вида [key =>val]
     * key - название атрибута
     * val - значение атрибута
     * @param $param
     * @param $value  //название кнопки
     * @return string
     */
    public function button($param, $value)
    {//<button>Ok</button>
       $str = '<button ';
       foreach ($param as $key=>$val){
           $str .= $key.'="'.$val.'" ';
       }
        $str .='>'.$value. '</button>';
       return $str;
    }

    /** принимает массив вида [key =>val]
     * key - название атрибута
     * val - значение атрибута
     * arOption - массив [k =>option] где
     * k - значение для value option
     * option - имя для списка
     * @param $param
     * @param $arOption
     * @return string
     */
    public function  select($param, $arOption)
    {
        $selected = '';
        if(!empty($_REQUEST[$param['name']])){
            $selected = $_REQUEST[$param['name']];

        }
       // return $selected;
        $str = '<select ';//<select name="" ">
        foreach ($param as $key=>$val){
            $str .= $key . '="' . $val . '" ';
        }
        $str .= '>';
        $str .= '<option value="">Все</option>';
        foreach ($arOption as $k=>$option){//<option value=""></option>
            $sel = '';
            if($selected == $k){
                $sel = ' selected';
            }
            $str .= '<option value="'.$k.'" '.$sel.'>'.$option.'</option>';
        }
        $str .= '</select>';//</select>
        return $str;
    }

}



