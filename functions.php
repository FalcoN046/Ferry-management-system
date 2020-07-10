<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
     if(isset($_POST['search_Boattype']) && isset($_POST['search_Boatname'])) { 
       $form_data = $_POST['search_Boattype'];
       $form_data1 = $_POST['search_Boatname'];
       pri_search($form_data,$form_data1); 
    } 
  else if(isset($_POST['to_search_Boattype']) && isset($_POST['to_search_Boatname']) && isset($_POST['modify_Boatid']) && isset($_POST['modify_Boatname']) && isset($_POST['modify_Boattypes']) && isset($_POST['modify_Boatdes']) && isset($_POST['modify_Boatsrc']) && isset($_POST['modify_Boatdur']) && isset($_POST['modify_Boatseats']) ){ 
    $modify_TYPE = $_POST['to_search_Boattype'];
    $modify_NAME = $_POST['to_search_Boatname'];
    $modify_id = $_POST['modify_Boatid'];
    $modify_name = $_POST['modify_Boatname'];
    $modify_type = $_POST['modify_Boattypes'];
    $modify_des = $_POST['modify_Boatdes'];
    $modify_src = $_POST['modify_Boatsrc'];
    $modify_dur= $_POST['modify_Boatdur'];
    $modify_seats = $_POST['modify_Boatseats'];
       modify_method($modify_TYPE,$modify_NAME,$modify_id,$modify_name,$modify_type,$modify_des,$modify_src,$modify_dur,$modify_seats); 
   }
   else if(isset($_POST['delete_type'])  && isset($_POST['delete_name']))
   {
    $sec_data=$_POST['delete_type'];
    $sec1_data=$_POST['delete_name'];
    delete_rec($sec_data,$sec1_data);
   } 
  function search_method($form_data,$form_data1) { 
   
     extract($_REQUEST);
     $str_arr16=[];
     $file1=fopen("sec_dta.txt","r");
     $data1=fread($file1,filesize("sec_dta.txt"));
     $str_arr1 = explode ("\n", $data1);

      $file3=fopen("sec1_dta.txt","r");
     $data3=fread($file3,filesize("sec1_dta.txt"));
     $str_arr17 = explode ("\n", $data3);


     $file2=fopen("prime_dta.txt","r");
     $data2=fread($file2,filesize("prime_dta.txt"));
     $str_arr2 = explode ("\n", $data2);


     $file=fopen("boat_details.txt","r");
     $data=fread($file,filesize("boat_details.txt"));
     $str_arr3 = explode ("\n", $data);

      $text_line= $str_arr1;
      for ($start=0; $start < count($text_line); $start++) 
      {
       $str_arr4 = explode ("|",$str_arr1[$start]);
       $str_arr5 = explode ("|",$str_arr2[$start]);
       $str_arr18 = explode ("|",$str_arr17[$start]);

       if($str_arr4[0]==$form_data && $str_arr18[0]==$form_data1)
       { 
        //echo $str_arr4[1] ;
        //echo "\n";
        if($str_arr4[1]==$str_arr5[0] && $str_arr18[1]==$str_arr5[0])
          {
             //echo $str_arr5[1];
            array_push($str_arr16, $str_arr5[1]);
            //print_r($str_arr16);
            }
       }
  
      }//print_r($str_arr16);
 return $str_arr16;
     fclose($file);
     fclose($file1);
     fclose($file2);
   } 
   ?>
   <div style="margin-top: 5px;margin-left: 100px;">
<?php
   function pri_search($form_data,$form_data1)
   {
     $file=fopen("boat_details.txt","r");
     $bdetail=fread($file,filesize("boat_details.txt"));
     $str_arr11 = explode ("\n", $bdetail);

    $str_arr12=search_method($form_data,$form_data1);
   // print_r($str_arr12);
    $text_line= $str_arr12;

     for ($start=0; $start < count($text_line); $start++) 
      {
        //print_r($str_arr12[$start]);
        //print_r($str_arr11);
      print_r($str_arr11[$str_arr12[$start]]);
      echo "\n";
      
      }
      fclose($file);
   }
   ?></div>
   <?php
   function modify_method($modify_TYPE,$modify_NAME,$modify_id,$modify_name,$modify_type,$modify_des,$modify_src,$modify_dur,$modify_seats) 
  {
    // echo $modify_ID;
    //  echo $modify_name;
       $str_arr19=search_method($modify_TYPE,$modify_NAME);
  // print_r($num1);
     $file=fopen("boat_details.txt","r");
     $data=fread($file,filesize("boat_details.txt"));
     $str_arr9 = explode ("\n", $data);
   //  print_r($str_arr9);
     $str_arr10 = explode ("|",$str_arr9[$str_arr19[0]]);
     $str_arr10[0]=$modify_id;
      $str_arr10[1]=$modify_name;
       $str_arr10[2]=$modify_type;
        $str_arr10[3]=$modify_des;
         $str_arr10[4]=$modify_src;
          $str_arr10[5]=$modify_dur;
           $str_arr10[6]=$modify_seats;
           
            $str_arr20=[];
           $str_arr21="";
           $str_arr22=[];
          $sym="\n";
           for ($start=0; $start < count($str_arr10); $start++) 
          {
              if ($start!=6)
                $str_arr21=$str_arr21.$str_arr10[$start].'|';
              else 
                $str_arr21=$str_arr21.$str_arr10[$start]."\n";

            }
            array_push($str_arr20,$str_arr21);

           for ($start=0; $start < count($str_arr9); $start++) 
          {
              if($start==$str_arr19[0]){
                  array_push($str_arr22,$str_arr20[0]);
              }
              else
             {
                $str_arr9[$start]=$str_arr9[$start]."\n";
                array_push($str_arr22,$str_arr9[$start]);
                //array_push($str_arr22,$sym);
              }
          }
        // print_r($str_arr22);
              $file1=fopen("boat_details.txt","w");
        for ($start=0; $start < count($str_arr22)-1; $start++) 
          {
            fwrite($file1, $str_arr22[$start]);
          }      
      fclose($file1);
      fclose($file);

//echo "-----------------------------------------------------------------------------------------";
//--------------------------------------------------------------------------------------------------------------------------------
      $file=fopen("prime_dta.txt","r");
    
     $data=fread($file,filesize("prime_dta.txt"));
     $str_arr9 = explode ("\n", $data);
   //  print_r($str_arr9);
     $str_arr10 = explode ("|",$str_arr9[$str_arr19[0]]);
     $str_arr10[0]=$modify_id;
      
           
            $str_arr20=[];
           $str_arr21="";
           $str_arr22=[];
          $sym="\n";
           for ($start=0; $start < count($str_arr10); $start++) 
          {
              if ($start!=1)
                $str_arr21=$str_arr21.$str_arr10[$start].'|';
              else 
                $str_arr21=$str_arr21.$str_arr10[$start]."\n";

            }
            array_push($str_arr20,$str_arr21);
           // print_r($str_arr20);
           for ($start=0; $start < count($str_arr9); $start++) 
          {
              if($start==$str_arr19[0]){
                  array_push($str_arr22,$str_arr20[0]);
                //  print_r($str_arr22);
              }
              else
             {
                $str_arr9[$start]=$str_arr9[$start]."\n";
                array_push($str_arr22,$str_arr9[$start]);
            }
          }
       //  print_r($str_arr22);
           $file1=fopen("prime_dta.txt","w");
        for ($start=0; $start < count($str_arr22)-1; $start++) 
          {
            fwrite($file1, $str_arr22[$start]);
          }      
      fclose($file1);
      fclose($file);
///echo "--------------------------------------";
//---------------------------------------------------------------------------------------

      $file=fopen("sec_dta.txt","r");
     $data=fread($file,filesize("sec_dta.txt"));
     $str_arr9 = explode ("\n", $data);
    // print_r($str_arr9);
     $str_arr10 = explode ("|",$str_arr9[$str_arr19[0]]);
     $str_arr10[0]=$modify_type;
      $str_arr10[1]=$modify_id;
      
           
            $str_arr20=[];
           $str_arr21="";
           $str_arr22=[];
          $sym="\n";
           for ($start=0; $start < count($str_arr10); $start++) 
          {
              if ($start!=1)
                $str_arr21=$str_arr21.$str_arr10[$start].'|';
              else 
                $str_arr21=$str_arr21.$str_arr10[$start]."\n";

            }
            array_push($str_arr20,$str_arr21);
           // print_r($str_arr20);
           for ($start=0; $start < count($str_arr9); $start++) 
          {
              if($start==$str_arr19[0]){
                  array_push($str_arr22,$str_arr20[0]);
              }
              else
             {
                $str_arr9[$start]=$str_arr9[$start]."\n";
                array_push($str_arr22,$str_arr9[$start]);
            }
          }
       //  print_r($str_arr22);
               $file1=fopen("sec_dta.txt","w");
        for ($start=0; $start < count($str_arr22)-1; $start++) 
          {
            fwrite($file1, $str_arr22[$start]);
          }      
      fclose($file1);
      fclose($file);
//echo "---------------------------------------------------------";
//---------------------------------------------------------------------------------------

      $file=fopen("sec1_dta.txt","r");
     $data=fread($file,filesize("sec1_dta.txt"));
     $str_arr9 = explode ("\n", $data);
  //   print_r($str_arr9);
     $str_arr10 = explode ("|",$str_arr9[$str_arr19[0]]);
     $str_arr10[0]=$modify_name;
      $str_arr10[1]=$modify_id;
       
           
            $str_arr20=[];
           $str_arr21="";
           $str_arr22=[];
          $sym="\n";
           for ($start=0; $start < count($str_arr10); $start++) 
          {
              if ($start!=1)
                $str_arr21=$str_arr21.$str_arr10[$start].'|';
              else 
                $str_arr21=$str_arr21.$str_arr10[$start]."\n";

            }
            array_push($str_arr20,$str_arr21);
           // print_r($str_arr20);
           for ($start=0; $start < count($str_arr9); $start++) 
          {
              if($start==$str_arr19[0]){
                  array_push($str_arr22,$str_arr20[0]);
              }
              else
             {    
                $str_arr9[$start]=$str_arr9[$start]."\n";
                array_push($str_arr22,$str_arr9[$start]);
              
            }
          }
       //  print_r($str_arr22);
               $file1=fopen("sec1_dta.txt","w");
        for ($start=0; $start < count($str_arr22)-1; $start++) 
          {
            fwrite($file1, $str_arr22[$start]);
          }      
      fclose($file1);
      fclose($file);
//echo "---------------------------------------------------------";
//----------------------------------------------------------------------------------------

  }


  function delete_rec($sec_data,$sec1_data)
  {

    $mun=search_method($sec_data,$sec1_data);
   // print_r($str_arr30);
    //$x=0;

    // $ar=array(0,1,2,3,4,5,6);
    $x=$mun[0];
    $file1=fopen("boat_details.txt","r");
        


     $data30=fread($file1,filesize("boat_details.txt"));
     $str_arr31 = explode ("\n", $data30);
     $str_arr33=$str_arr31[$x];
     $str_arr32 = explode ("|",$str_arr33);
            // echo $str_arr32[0];
     //print_r($str_arr32);

          $str_arr37[0]="$";
          $str_arr37[1]= $str_arr32[1];
          $str_arr37[2]= $str_arr32[2];
          $str_arr37[3]= $str_arr32[3];
          $str_arr37[4]= $str_arr32[4];
          $str_arr37[5]= $str_arr32[5];
          $str_arr37[6]= $str_arr32[6];
            //echo $str_arr32[0];
    //print_r($str_arr37);




          $str_arr34=[];//20
          $str_arr35="";//21
          $str_arr36=[];//22
          $sym="\n";
           for ($start=0; $start < count($str_arr37); $start++) 
          {
              if ($start!=6)
                $str_arr35=$str_arr35.$str_arr37[$start].'|';
              else 
                $str_arr35=$str_arr35.$str_arr37[$start]."\n";
            }
            array_push($str_arr34,$str_arr35);
            //echo "-----------------------------------------------";
        //   print_r($str_arr34);
           for ($start=0; $start < count($str_arr31); $start++) 
          {
              if($start==$x){
                  array_push($str_arr36,$str_arr34[0]);
                  
              }
              else
             {  
                $str_arr31[$start]=$str_arr31[$start]."\n";
                array_push($str_arr36,$str_arr31[$start]);
              //  array_push($str_arr36,$sym);
                
            }
          } 
          //  print_r($str_arr36);
      $file2=fopen("boat_details.txt","w");
        for ($start=0; $start <count($str_arr36)-1; $start++) 
          {
            fwrite($file2, $str_arr36[$start]);
            //print_r($str_arr36[$start]);
          }      
//echo count($str_arr36);
    fclose($file2);
    fclose($file1);
      
     $file0=fopen("prime_dta.txt","r");
     $data31=fread($file0,filesize("prime_dta.txt"));
     $str_arr37 = explode ("\n", $data31);

     $file1=fopen("sec_dta.txt","r");
     $data32=fread($file1,filesize("sec_dta.txt"));
     $str_arr38 = explode ("\n", $data32);

     $file2=fopen("sec1_dta.txt","r");
     $data33=fread($file2,filesize("sec1_dta.txt"));
     $str_arr39 = explode ("\n", $data33);



      $str_arr41=[];

      for ($start=0; $start < count($str_arr37); ) 
          {
              if($start>=$x && $start<count($str_arr37)-1)
              {
                  $start++;
                  $str_arr40[$start]=$str_arr37[$start]."\n";
                  array_push($str_arr41,$str_arr40[$start]);
               }
              else
             {  
                $str_arr40[$start]=$str_arr37[$start]."\n";
                array_push($str_arr41,$str_arr40[$start]);
              //  array_push($str_arr36,$sym);
                $start++;
            }
          } 
//----------------------------------------------------------------
          $str_arr43=[];

      for ($start=0; $start < count($str_arr38); ) 
          {
              if($start>=$x && $start<count($str_arr38)-1)
              {
                  $start++;
                  $str_arr42[$start]=$str_arr38[$start]."\n";
                  array_push($str_arr43,$str_arr42[$start]);
               }
              else
             {  
                $str_arr42[$start]=$str_arr38[$start]."\n";
                array_push($str_arr43,$str_arr42[$start]);
              //  array_push($str_arr36,$sym);
                $start++;
            }
          } 

//--------------------------------------------------------------
          $str_arr45=[];

      for ($start=0; $start < count($str_arr39); ) 
          {
              if($start>=$x && $start<count($str_arr39)-1)
              {
                  $start++;
                  $str_arr44[$start]=$str_arr39[$start]."\n";
                  array_push($str_arr45,$str_arr44[$start]);
               }
              else
             {  
                $str_arr44[$start]=$str_arr39[$start]."\n";
                array_push($str_arr45,$str_arr44[$start]);
              //  array_push($str_arr36,$sym);
                $start++;
            }
          } 

//--------------------------------------------------------------



          fclose($file0);
          fclose($file2);
          fclose($file1);



         $file0=fopen("prime_dta.txt","w");
         for ($start=0; $start <count($str_arr41)-2; $start++) 
          {
            fwrite($file0, $str_arr41[$start]);
            //print_r($str_arr41[$start]);
          } 
           $file1=fopen("sec_dta.txt","w");
         for ($start=0; $start <count($str_arr43)-2; $start++) 
          {
            fwrite($file1, $str_arr43[$start]);
            //print_r($str_arr43[$start]);
          } 
           $file2=fopen("sec1_dta.txt","w");
         for ($start=0; $start <count($str_arr45)-2; $start++) 
          {
            fwrite($file2, $str_arr45[$start]);
            //print_r($str_arr45[$start]);
          } 




  }








?> 

<?php 

  extract($_REQUEST);
 
  $file=fopen("boat_details.txt","a");
  if (!empty($Boatid)) {
  $Boatid = $Boatid;
  fwrite($file,$Boatid."|");
}
if (!empty($Boatname)) {
  $Boatname = $Boatname;
  fwrite($file,$Boatname."|");
}

if (!empty($Boattypes)) {
  $Boattypes = $Boattypes;
  fwrite($file,$Boattypes."|");
}
if (!empty($Boatdes)) {
  $Boatdes = $Boatdes;
  fwrite($file,$Boatdes."|");
}
if (!empty($Boatsrc)) {
  $Boatsrc = $Boatsrc;
  fwrite($file,$Boatsrc."|");
}
if (!empty($Boatdur)) {
  $Boatdur = $Boatdur;
  fwrite($file,$Boatdur."|");
}
if (!empty($Boatseats)) {
  $Boatseats = $Boatseats;
  fwrite($file,$Boatseats."\n");
}

  fclose($file);
$count=0;
$file=fopen("prime_dta.txt", "r");
while (! feof($file)) {
  # code...
  $str=fgets($file);
  if($str == "")
    break;
  $count=$count+1;

}
fclose($file);

  $file=fopen("prime_dta.txt","a");
  if (!empty($Boatid)) {
  $Boatid = $Boatid;
  fwrite($file,$Boatid."|");
  fwrite($file,$count."\n");
  }
   fclose($file);
  $file=fopen("sec_dta.txt","a");
  if (!empty($Boattypes)) {
  $Boattypes = $Boattypes;
  fwrite($file,$Boattypes."|");
  fwrite($file,$Boatid."\n");
  }
     fclose($file);
  $file=fopen("sec1_dta.txt","a");
  if (!empty($Boatname)) {
  $Boatname = $Boatname;
  fwrite($file,$Boatname."|");
  fwrite($file,$Boatid."\n");
  }
    fclose($file);

?>