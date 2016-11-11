<?php
  include_once('WeaponsFactory.php');  
  //include_once('FactoryMethod.php');
  include_once('Player.php');
  include_once('Announcer.php');
  include_once('Armory.php');
  include_once('ArmoryIterator.php');
  
  
  echo 'TESTING FACTORY METHOD, OBSERVER, AND ITERATOR PATTERN';
  echo '<br><br>A player decide to play a game.<br>The player is able to select a weapon of their choice from the armory.';
  echo '<br>The player browses the armory.<br><br>';
  
  $armory = new Armory();
  $armory->addWeapon('Sword');
  $armory->addWeapon('Pistol');
  $armory->addWeapon('Knife');
  $armory->addWeapon('Grenade');
  $armory->addWeapon('Crossbow');

  $armoryIterator = new ArmoryIterator($armory);

  while ($armoryIterator->hasNextWeapon()) {
    $weap = $armoryIterator->getNextWeapon();
    echo "The player is viewing the next weapon: <br>";
    echo $weap;
    echo '<br><br>';
  }
  
  $a = new Announcer();
  $player1 = new Player();
  $player1->attach($a);
  $player1->announce('Knife');
  
  echo '<br>The weapons factory manufactures the weapon.<br>The weapon\'s range is: ';
  $weaponfact = new WeaponsFactory();
  $weap1 = $weaponfact->makeWeapon("melee");
  echo $weap1->getRange();
  
  echo ' units.<br><br>The player begins his journey with his new knife.';
  echo '<br><br>FINISHED TESTING FACTORY METHOD, OBSERVER, AND ITERATOR PATTERN';
  
/*
  static $isOpen = false;
  echo "NOW TESTING ABSTRACT FACTORY, FACTORY METHOD, AND SINGLETON PATTERN";
  
  echo '<br><br>A user wants to view webpages, however he is only able to view one page at a time.<br><br>';
  $factoryMethodInstance = new WebsiteFactoryMethod;
  testFactoryMethod($factoryMethodInstance);
  echo "<br>END TESTING ABSTRACT FACTORY, FACTORY METHOD, AND SINGLETON PATTERN<br>";

  function testFactoryMethod($factoryMethodInstance) {
    echo 'Attempting to view the first website:<br>';
    if ($isOpen == false){
    $firstWS = $factoryMethodInstance->makeWebsite();
    echo 'After the first call, the title of the website that you are now viewing is: '.	
	  $firstWS->getTitle().tagins("br"); 
    $isOpen = true;
    }
    else {
      echo 'You need to close the website to view a new one. Now closing the website.<br>';
      $isOpen = false;
	  }
    echo '<br>Attempting to view another website without closing the first one:<br>';
    if ($isOpen == false){
    $secondWS = $factoryMethodInstance->makeWebsite();
    echo 'After the second call, the title of the website that you are now viewing is: '.	
	  $secondWS->getTitle().tagins("br"); 
    $isOpen = true;
    }
    else {
      echo 'You need to close the website to view a new one. Now closing the website.<br>';
      $isOpen=false;
	  } 
    echo '<br>Attempting to view another website after closing the first one.<br>';
    if ($isOpen == false){
    $thirdWS = $factoryMethodInstance->makeWebsite();
    echo 'After the second call, the title of the website that you are now viewing is: '.	
	  $thirdWS->getTitle().tagins("br"); 
    $isOpen = true;
    }
    else {
      echo 'You need to close the website to view a new one. Now closing the website.<br>';
      $isOpen=false;
	  } 
    
  }
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }
  */
?>