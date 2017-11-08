<?php

class Movie
{
    private $movieName = null;
    private $movieDescription ='Kingsman is a British-American spy film directed by Matthew Vaughn, released in 2015.';
    private $duration =120;
    
    public function getName()
    {
       return $this->movieName;
    }
    
     public function setName($movieName ="")
    {
       return $this->movieName = $movieName;
    }
    public function _construct($movieName ="")
    {
        $this->movieName = $movieName;    
    }
    
    
    
    
    public function getDescripton()
    {
       return $this->movieDescription;
    }
    
     public function setdescription($movieDescription ="")
    {
       return $this->movieDescription = $movieDescription;
    }
 
    
    
    
    
    public function getDuration()
    {
       return $this->duration;
    }
    
     public function setduration($duration ="")
    {
       return $this->duration = $duration;
    }
  
   
}

$movie = new Movie("Kinsman");

echo $movie->getName();
$movie->setName("Kingsman");
echo $movie->getName();
echo $movie->getDescription();
echo $movie->getDuration();
