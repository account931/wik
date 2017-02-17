<?php
//not  executed;
class InsertData
{



// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
// **                                                                                  **
static  function InsertItem()
  { 

      if(isset($_POST['addIt'])){
//  won't  work  without  $db  declare, though it  was  decalred  in index.php;
  $db = new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DATABASE, MYSQL_LOGIN, MYSQL_PASSWORD); 
  
$sthI = $db->prepare("INSERT INTO wikiQuestAnswer (wQAns_Q, wQAns_A, wQAns_category) VALUES (:user, :item, :descr )");
          $sthI->bindValue(':user' ,$_POST['Q']);
          $sthI->bindValue(':item',  $_POST['A']);
          $sthI->bindValue(':descr',$_POST['categSelect']);
          
        
          $sthI->execute();
 echo "Executed";


                                }//  End  if(isset($_GET['addIt']))
  
  }// end  function

// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************






// End  Class 
}
?>