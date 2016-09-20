<?php
namespace modules\maxdbconfig\model;
use lib\model\BaseModel;

class ConfigItem{
    var $id;
    var $key;
    var $section;
    var $value;

    function initialize($key,$section){
        $this->key=$key;
        $this->section=$section;
        return $this;
    }

    //manual implementation because config is used before full initialisation
    function fromArray($arr){
        $this->id=$arr["id"];
        $this->key=$arr["key"];
        $this->section=$arr["section"];
        $this->value=$arr["section"];
        return $this;
    }
}
?>