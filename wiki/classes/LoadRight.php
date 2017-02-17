<?php

class LoadRight
{



// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
// **                                                                                  **
static  function LoadListAnsw()
  { 

     // if(isset($_GET['category'])){
//  won't  work  without  $db  declare, though it  was  decalred  in index.php;
  $db = new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DATABASE, MYSQL_LOGIN, MYSQL_PASSWORD); 
  $resFR = $db->query("SELECT * FROM wikiQuestAnswer WHERE wQAns_category LIKE '{$_GET['category']}' ");
      echo "<div class='accordion'>";
$count=1;
while ($rowF =$resFR->fetch()) {
  
$_SESSION['HeadAnsw'] = $rowF;
$Q= $_SESSION['HeadAnsw']['wQAns_Q'];
$A= $_SESSION['HeadAnsw']['wQAns_A'];


echo "<h3>$count.$Q</h3>";
echo "<p> $A</p></br>";
   ++$count;
   }//  end  while
echo "</div>";
                            //}//  End  if(isset($_GET['category']);
  
  }// end  function

// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************







// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
// ** 

static  function LoadSelectOptionList()
  { 

 $db = new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DATABASE, MYSQL_LOGIN, MYSQL_PASSWORD); 
  $resFR = $db->query("SELECT * FROM wikiHeaderList");
echo "<select size='1' name='categSelect'>";
while ($rowF =$resFR->fetch()) {
//$_SESSION['Sel'] = $rowF;
//$cat= $_SESSION['Sel']['wHList_category'];
$cat=$rowF['wHList_category'];
   echo "<option value='$cat'>$cat</option>";
}//end  while
echo "</select>";
}//end  function
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************












// End  Class 
}
?>