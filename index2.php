<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: logins.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
 	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    
        
     
<script type="text/javascript"> 
    var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
    var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
    function getthedate()
    {
        var mydate=new Date()
        var year=mydate.getYear()
        if (year < 1000)
            year+=1900
        var day=mydate.getDay()
        var month=mydate.getMonth()
        var daym=mydate.getDate()
        if (daym<10)
            daym="0"+daym
        var hours=mydate.getHours()
        var minutes=mydate.getMinutes()
        var seconds=mydate.getSeconds()
        var dn="AM"
        if (hours>=12)
            dn="PM"
        if (hours>12)
        {
            hours=hours-12
        }
        if (hours==0)
        hours=12
        if (minutes<=9)
            minutes="0"+minutes
        if (seconds<=9)
            seconds="0"+seconds

        var cdate="<small><font class='link'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
                    +"</b></font></small>"

        if (document.all)
            document.all.clock.innerHTML=cdate
        else if (document.getElementById)
            document.getElementById("clock").innerHTML=cdate
        else
            document.write(cdate)
    }
    if (!document.all&&!document.getElementById)
    getthedate()
    function goforit()
    {
        if (document.all||document.getElementById)
        setInterval("getthedate()",1000)
    }
    
   function valthisform(){
 var chkd = document.attn.present.checked || document.attn.absent.checked

 if (chkd == true){

 } else {
    alert ("please check a checkbox")
 }

}

</script>
   
    
    
<span id="clock"  >
 <small>
     <font class='link' >  
       <script> goforit();</script>
     </font>
 </small>
</span>
        

<div class="header">
	<h2>Student Feedback</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
          
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : 
        $username=$_SESSION['username'];?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
       
    	
    <?php endif ?>
        <?php
        $date = date('d/m/Y');
        $sub="";
        $db = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($db,'registration'); 
        ?>
       
        
         <form form method='post' name="feedback" id="feedback" action="#">
             
         <select name="subject" style=" width: 210px; margin: 10px; font-size: 100%;">
             <option disabled selected>Select Subject </option>
            <option value="cbnst" >CBNST</option>
            <option value="automata">Automata</option>
            <option value="micro">Microprocessors</option>
            <option value="co" >Computer Organization</option>
            <option value="java" >Java</option>
            <option value="cc">Cloud Computing</option>
         </select>
            
         </form>
          <textarea name="feedback" form="feedback" placeholder="Enter feedback here..." style="width: 550px ; height: 200px ; margin-top: 20px ;font-size: 100%;"></textarea>
             <button type='submit' class="btn" value="submit" form="feedback" name="submit" style="margin-top: 20px;" >submit</button>
            <?php
           
           $errors = array(); 
            
           if (isset($_POST['submit'])) {
              
                $sub = mysqli_real_escape_string($db,$_POST['subject']);
                if (empty($sub)) { array_push($errors, "Subject is required"); }
                    $text = mysqli_real_escape_string($db,$_POST['feedback']);
                     if (empty($text)) { array_push($errors, "Feedback is required"); }
                     include('errors.php');
                    $sql = "SELECT `id` FROM `$sub` WHERE (name = '$username')";
                if($sub != ""){
                     $retval = mysqli_query($db , $sql );
                    if(! $retval )
                     {
                        die('Could not get data: ' . mysqli_error());
                     }
                     
                    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                    {
                     $id=$row['id'];
                     //echo "id :{$row['id']}  <br> " ;
                    }
                     //echo"$text";
                     //$feed="INSERT INTO $sub WHERE name VALUES ('$text')";
                     //$feed="UPDATE `$sub` SET `feedback` = '$text' WHERE `$sub`.'name' = $username;";
                     $feed="UPDATE `$sub` SET `feedback` = '$text' WHERE `$sub`.`id` = '$id';";
                     $retraval=mysqli_query($db,$feed)  ;
                     if(!$retraval)
                     {
                          die ('Error updating database' . mysqli_error());
                     }
                       
                }
            
              } 
          ?>
        
         
         
         
         
         
        <?php
        /*
        $db = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($db,'registration'); 
        $sql = "SELECT * FROM student_database ORDER BY id ASC ";
        $retval = mysqli_query($db , $sql );
        if(! $retval )
        {
            die('Could not get data: ' . mysqli_error());
         }
        
        
        
        
        
        
        
       
         // Start date
	//$date = '2009-12-06';
	// End date
	$end_date = date('d/m/Y');
        $date1 = '01/05/2018'; 
        $i=0;
        for($i=1;$i<=$end_date;$i++)
	 {  
            
                if($date1!=$end_date+1)
                {
                
                echo"<tr>";
                echo"<td>";
                echo "$date1\n";
                echo"<td>";
                $sql = "SELECT `$date1` FROM `cbnst` WHERE (name = '$name')" ;
                $retval = mysqli_query($db , $sql );
                if(! $retval )
                {
                    die('Could not get data: ' . mysqli_error());
                }
         
                        
                 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                 {
                    $attn=$row[$date1];
                    echo "$attn " ;
                 }

                echo"</td>";
                echo"<td>";
                $sql = "SELECT `$date1` FROM `automata` WHERE (name = '$name')" ;
                $retval = mysqli_query($db , $sql );
                if(! $retval )
                {
                    die('Could not get data: ' . mysqli_error());
                }
         
                        
                 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                 {
                    $attn=$row[$date1];
                    echo "$attn " ;
                 }

                
                echo"</td>";
                echo"<td>";
                $sql = "SELECT `$date1` FROM `micro` WHERE (name = '$name')" ;
                $retval = mysqli_query($db , $sql );
                if(! $retval )
                {
                    die('Could not get data: ' . mysqli_error());
                }
         
                        
                 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                 {
                    $attn=$row[$date1];
                    echo "$attn " ;
                 }

                echo"</td>";
                echo"<td>";
                
                $sql = "SELECT `$date1` FROM `co` WHERE (name = '$name')" ;
                $retval = mysqli_query($db , $sql );
                if(! $retval )
                {
                    die('Could not get data: ' . mysqli_error());
                }
         
                        
                 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                 {
                    $attn=$row[$date1];
                    echo "$attn " ;
                 }

                echo"</td>";
                echo"<td>";
                $sql = "SELECT `$date1` FROM `java` WHERE (name = '$name')" ;
                $retval = mysqli_query($db , $sql );
                if(! $retval )
                {
                    die('Could not get data: ' . mysqli_error());
                }
         
                        
                 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                 {
                    $attn=$row[$date1];
                    echo "$attn " ;
                 }

                echo"</td>";
                echo"<td>";
                $sql = "SELECT `$date1` FROM `cc` WHERE (name = '$name')" ;
                $retval = mysqli_query($db , $sql );
                if(! $retval )
                {
                    die('Could not get data: ' . mysqli_error());
                }
         
                        
                 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
                 {
                    $attn=$row[$date1];
                    echo "$attn " ;
                 }

                echo"</td>";
                
                echo"</td>";
                echo"</tr>";

                
                }
                $date1=date('d/m/Y',strtotime("+$i days"));
                
                
	}
        */
      

       
        ?>

      
    
    <p style="margin-top: 20px;"> <a href="index2.php?logout='1'" style="color: red;">logout</a> </p>
</div>	
</body>
</html>