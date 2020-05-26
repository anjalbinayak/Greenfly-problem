<?php
class Greenfly{

    public $age = 0;
    public $childGreenFly =  [];
  
    public $noOfChildrens = 0;


    public function __construct($mature=false)
    {
        if($mature)
        {
            $this->age = 7;

        }else{
            $this->age = 0;
        }

    }

    private function grow()
    {
        $this->age++;

    }

    private function reproduce()
    {
        if($this->age >= 8)
        {
            for($i=1; $i<= 8; $i++)
            {
                array_push($this->childGreenFly, new Self());
                $this->noOfChildrens = $this->noOfChildrens + 1;
            }
        }

        
    }

    public function live()
    {
        $this->grow();
        $this->reproduce();
        foreach($this->childGreenFly as $childGreenFly)
        {
            $childGreenFly->live();
            
        }
    }


    public function getTotalChildCount($includeSelf = false)
    {
        $count= 0;
        if($includeSelf)
        {
            $count =  1;
        }
        $count += $this->noOfChildrens;
       
        foreach($this->childGreenFly as $greenFly){
           
            $count += $greenFly->getTotalChildCount();
        }

        return $count;
    }

    


}