<?php
 

class Form{


    private $data ;

    // public $surround = 'p';


    public function __construct($data=array()){

        $this->data = $data;
    }

    public function option($id,$value){
        return (
            '<option value="'.$id.'">'.$value.'</option>'
        );
    }
    public static function getform(){
        return new Form(); 
    } 

    public function button($type, $class, $name){
        return('<button type="'.$type.'" class="btn btn-'.$class.'">'.$name.'</button><br>');
    }

    public function buttonNormal($type, $class, $name, $page){
        return('<a href="'.$page.'.php"><button style="margin:5px auto; 
        width:100%" ; type="'.$type.'" class="btn btn-'.$class.'">'.$name.'</button></a><br>');
    }
}   
