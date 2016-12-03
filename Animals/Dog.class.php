<?php
/*  @author Adam Lopez
 *  Dog class for keeping track of fleas, child to Animal class
 */
require_once __DIR__.DIRECTORY_SEPARATOR.'Animal.class.php';

class Dog extends Animal{
  // Private class variables because these only apply to this class and we do not want them changed manually when the class is used
  private $isSleeping     // Bool
  private $isEating       // Bool
  private $makingSound    // String
  private $numberOfFleas       // Int
  const DEFAULT_START_FLEAS = 0;
  const DEFAULT_ADD_FLEAS = 10;
  const DEFAULT_KILLED_FLEAS = rand(0,100);

  // Params for parent are optional since the parent class will set them if they are not sent in or are sent incorrectly
  // We will assume child class (Dog) has params that are sent in, will do some error handeling if they are not

  public function __construct($isSleeping, $isEating, $makingSound, $hasFleas, $name=false, $healthLevel=false, $weight=false){
    parent::__construct($name, $healthLevel, $weight);

    // Set the Dog up... handle any inproper inputs for each variables
    try{
      $this->setIsSleeping($isSleeping);
      $this->setIsEating($isEating);
      $this->setMakingSound($makingSound);
      $this->setHasFleas($numberOfFleas);
      $this->setStartFleas(self::DEFAULT_START_FLEAS);
    } catch (Exception $ex){
      die();
    }
  }

  


}

 ?>
