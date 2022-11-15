<?php

abstract class CartoonCharacter{

    function walk(){
        echo "We are walking";
    }

    function jump(){
        echo "We are jumping";
    }

    abstract function MakeASound();


}

class Simpsons extends CartoonCharacter {

 public function walk(){
    echo "We are walking";
 }
public function jump(){  
echo "We are jumping";
}

public function MakeASound (){

    echo "Eat my shorts!";

}

}

class LooneyToones extends CartoonCharacter{
    public function walk(){
        echo "We are walking";
     }
    public function jump(){  
    echo "We are jumping";
    }
    
    public function MakeASound (){
    
        echo "That is all folks!";
    
    }

}

class Disney extends CartoonCharacter {
    public function walk(){
        echo "We are walking";
     }
    public function jump(){  
    echo "We are jumping";
    }
    
    public function MakeASound (){
    
        echo "Happily ever after";
    
    }

}

class SchoolKids extends Simpsons{

    public function learning(){
   echo " reading and memorizing";

    }
    public function playing(){
echo " running";

    }
}

class Rabbits  extends LooneyToones{

    public function playing(){
echo  "running";

    }

}

class Princesses extends Disney{

    public function learning(){
        echo " reading and memorizing";
     
         }
         public function playing(){
     echo " running";
     
         }
     public function goingBackToLife (){

        echo " StandingUp and shining";
     }
}

$Bart = new Schoolkids();
$Bart -> learning();
$Bart -> playing();

echo '<br>';
$BugsBunny = new Rabbits();
$BugsBunny -> playing();

$Cinderella = new Princesses();
$Cinderella -> learning();
$Cinderella -> playing();
$Cinderella  -> goingBackToLife();


?>