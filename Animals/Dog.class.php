<?php
/*  @author Adam Lopez
 *  Dog class for keeping track of fleas, child to Animal class
 */
require_once __DIR__.DIRECTORY_SEPARATOR.'Animal.class.php';

class Dog extends Animal{
  // Private class variables because these only apply to this class and we do not want them changed manually when the class is used
  private $isSleeping     // Bool
  private $isEating       // Bool
  private $isInside       // Bool
  private $makingSound    // String
  private $numberOfFleas       // Int
  const DEFAULT_START_FLEAS = 0;
  const DEFAULT_ADD_FLEAS = 10;
  const DEFAULT_KILLED_FLEAS = rand(0,10);

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

  // Generic and boring setters and getters for the Dog class
  // Setters (private so that they cannot be called in the code, they must be changed with certain public methods of this class)
  private function setIsSleeping($isSleeping){
    if(gettype($isSleeping) == "boolean"){
      $this->isSleeping = $isSleeping;
    } else {
      throw new Exception("The dog is either sleeping or it isn't, type of " .gettype($isSleeping) . " was sent in.");
    }
  }

  private function setIsEating($isEating){
    if(gettype($isEating) == "boolean"){
      $this->isEating = $isEating;
    } else {
      throw new Exception("The dog is either eating or it isn't, type of " . gettype($isEating) . " was sent in.");
    }
  }

  private function setIsInside($isInside){
    if(gettype($isInside) == "boolean"){
      $this->isInside = $isInside;
    } else {
      throw new Exception("The dog is either inside or isn't, type of " . gettype($makingSound) . " was sent in.");
    }
  }

  private function setIsMakingSound($makingSound){
    if(gettype($makingSound) == "string"){
      $this->isMakingSound = $makingSound;
    } else {
      throw new Exception("Sound must be a string, type of " . gettype($makingSound) . " was sent in.");
    }
  }

  private function setNumberOfFleas($numberOfFleas){
    if(gettype($numberOfFleas) == "integer"){
      $this->numberOfFleas = $numberOfFleas;
    } else {
      throw new Excepetion("The number of fleas must be integer, type of " . getype($numberOfFleas) . " was sent in.");
    }
  }

  // Getters are all public becauae we dont care if anyone else sees them
  public function getIsSleeping(){
    return $this->isSleeping;
  }

  public function getIsEating(){
    return $this->isEating;
  }

  public function getIsMakingSound(){
    return $this->isMakingSound;
  }

  public function getIsInside(){
    return $this->isInside;
  }

  public function getNumberOfFleas(){
    return $this->numberOfFleas;
  }

  // End of setters and getters

  // Okay now for some fun class-specific methods that we can use in our code

  // When the dog is outside, it will have more fleas, this method should only be accessible by this class and is private
  // This is private because we only want tohave this function called inside this class

  private function goingOutside(){
    $this->setNumberOfFleas(($this->getNumberOfFleas() + self::DEFAULT_START_FLEAS));
    $this->setNumberOfFleas(true);
  }

  private function fleaCheck(){
    $this->setHasFleas($this->getNumberOfFleas() + self::DEFAULT_ADD_FLEAS);
    $this->setHasFleas(true);
  }

  private function

}

 ?>
