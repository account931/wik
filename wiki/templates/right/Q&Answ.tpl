<div id="right">
  <div class="search">
<p><form name="#"   action="" method="post" enctype="multipart/form-data">Search <input  type="text" placeholder="search" name="search"/> 
 <input type="submit" name ="searchButton" value=" Go "><img id="addB" src="images/addbutton.png"/><p/></form>
</div>

 <center>
  <!---------------------  Start  hidden panel--------------------->
  <div  id="addItem">
     <h1>Add  a new  line</h1>
          <form name="ups"   action="" method="post" enctype="multipart/form-data">
           Q<input type="text" name="Q"/>
           A<textarea name="A"></textarea>
           Category <?php include("classes/LoadRight.php"); LoadRight::LoadSelectOptionList(); ?>  </br></br>
           <input type="submit" name ="addIt" value=" &nbsp;&nbsp;Add &nbsp;&nbsp; " id="sendme" >
           <input type="button"  value="cancel " id="cancel">
     </form>
     <img id='addBusket' src="images/addbuttimage.png"/>
  </div> <!--  END   div "addItem"-->
   <!------------------  END   hidden panel-------------------------->

 <h1  class="shadow">Results</h1>
<!--<img  class="Img128px" src="http://www.ciint.com/wp-content/uploads/2015/07/database-management.jpg" alt=""/>-->

  


  </center>



<?php
//Loads  all Q&Answ
//include("classes/LoadRight.php");
if(isset($_GET['category'])){
LoadRight::LoadListAnsw();
                             }

//
//handles inserting   new Q$Answ
include("classes/InsertData.php");
 InsertData::InsertItem();
?>
</div>