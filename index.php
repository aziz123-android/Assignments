<?php
class Bio{
    public $name;
    public $age;

    public function setProperties($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getProperties(){
        echo "Hi friends my name is " . $this->name;
        echo " and I am" . $this->age  . "years old";
    }
}
$person = new Bio;
$person->setProperties("Aziz","17");
$person->getProperties();
?>