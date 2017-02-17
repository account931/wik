<?php

class LoadLeft
{



// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
// **                                                                                  **
static  function LoadList()
  {
//  won't  work  without  $db  declare, though it  was  decalred  in index.php;
  $db = new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DATABASE, MYSQL_LOGIN, MYSQL_PASSWORD); 
  $resFR = $db->query("SELECT * FROM wikiHeaderList");
while ($rowF =$resFR->fetch()) {
$_SESSION['HeadList'] = $rowF;
$nameTitle= $_SESSION['HeadList']['wHList_name'];
$category=  $_SESSION['HeadList']['wHList_category'];
$url=       $_SESSION['HeadList']['wHList_url'];

echo "<a href='/wiki/index.php?category={$rowF['wHList_category']}' class='messageLink'>$category</a></br>";


   }//  end  while

  
  }// end  function

// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************






// End  Class 
}
?>