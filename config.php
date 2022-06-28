<?php 

// configuring database 

define('DB_SERVER' , 'localhost');
define('DB_USERNAME','divyansh'); 
define('DB_PASSWORD','divyansh');
define('DB_NAME' , 'gov');

$conn = mysqli_connect(DB_SERVER , DB_USERNAME , DB_PASSWORD , DB_NAME);
$upload_status = '';

if($conn == false){
    dir('error - connecting to database');
}

// fetching data to database

if(isset($_POST["submit"]))
{
    // for datepicker
    $datee = $_REQUEST['datepicker'];
    // for month of  april
   $an=$_FILES['aprildata']['name'];
   $at=$_FILES['aprildata']['tmp_name'];
   move_uploaded_file($at, "./dat_fiel".$an);

    // for month of may
    $mn=$_FILES['maydata']['name'];
    $mt=$_FILES['maydata']['tmp_name'];
    move_uploaded_file($mt, "./dat_fiel".$mn);

    // for month of june
    $jn=$_FILES['junedata']['name'];
    $jt=$_FILES['junedata']['tmp_name'];
    move_uploaded_file($jt , "./dat_fiel".$jn);

    //  for month of july
    $jun=$_FILES['julydata']['name'];
    $jut=$_FILES['julydata']['tmp_name'];
    move_uploaded_file($jut , "./dat_fiel".$jun);

    // for month of august
    $aun=$_FILES['augustdata']['name'];
    $aut=$_FILES['augustdata']['tmp_name'];
    move_uploaded_file($aut , "./dat_fiel".$aun);

    // for month of september
    $sn=$_FILES['septemberdata']['name'];
    $st=$_FILES['septemberdata']['tmp_name'];
    move_uploaded_file($st , "./dat_fiel".$sn);

    // for month of october
    $on=$_FILES['octoberdata']['name'];
    $ot=$_FILES['octoberdata']['tmp_name'];
    move_uploaded_file($ot , "./dat_fiel".$on);

    // for month of november
    $nn=$_FILES['novemberdata']['name'];
    $nt=$_FILES['novemberdata']['tmp_name'];
    move_uploaded_file($nt , "./dat_fiel".$nn);

    // for month of december
    $dn=$_FILES['decemberdata']['name'];
    $dt=$_FILES['decemberdata']['tmp_name'];
    move_uploaded_file($dt , "./dat_fiel".$dn);

    // for month of january
    $jan=$_FILES['januarydata']['name'];
    $jat=$_FILES['januarydata']['tmp_name'];
    move_uploaded_file($jat, "./dat_fiel".$jan);

    // for month of february
    $fn=$_FILES['februarydata']['name'];
    $ft=$_FILES['februarydata']['tmp_name'];
    move_uploaded_file($ft , "./dat_fiel".$fn);

    // for month of march
    $man=$_FILES['marchdata']['name'];
    $mat=$_FILES['marchdata']['tmp_name'];
    move_uploaded_file($mat , "./dat_fiel".$man);

   
   $irs="INSERT INTO twentytwo(year , april , may , june,july,august,september,october,november,december,january,february,march) VALUES('$datee' , '$an' , '$mn' , '$jn' , '$jun' , '$aun' , '$sn' , '$on' , '$nn' , '$dn' , '$jn' , '$fn' , '$mn' )";

   $conn->query($irs);
   if($irs == true){
        $upload_status = " You have successfully uploaded the files  - click back to visit home page DPS :)";
   }
   else{
        $upload_status = "failed - to upload your files  - try again DPS :(";
   }
}
echo "$upload_status";
?>
