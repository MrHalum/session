<html>
  <h3>
  <?php
    
	  session_start();

	   $user=$_POST['un'];
	   $pass=$_POST['pw'];
	   $arr = array("Abc"=>"123", "def"=>"456", "ghi"=>"789", "asd"=>"159", "fgh"=>"753", "jkl"=>"746", "cvb"=>"258", "dfh"=>"651", "jgc"=>"257", "hds"=>"614");
	    foreach($arr as $x=> $x_value)
	     {
		  if($x==$user && $x_value == $pass)
		  {
			 echo "Welcome user $x";
			 break;
		   }
		   else {
			 echo "Wrong user name or password !";
			 break;
		   }
			 
	     }
	 
       ?>
	 </h3>
</html>