<?php
session_start();  
include_once('../config.php');
    
    if(!isset($_SESSION['email']))
    {
      header("Location: ../logout.html");
    }
//if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
    $email = $_SESSION['email'];
    $dob = $_SESSION['password']; 

    $stmt = $conn->prepare("SELECT * FROM aam WHERE `email` = '$email'");
    $stmt->execute();
    
    //$resultSet = $stmt->get_result();
    //$users = $resultSet->fetch_all(MYSQLI_ASSOC);

    $users = $stmt->fetchAll();
    foreach($users as $user) {

        $name    = $user['Name']      ;
        //$email   = $user['email']     ;
        $address = $user['Address']   ;
        $city    = $user['City']      ;
        $state   = $user['State']     ;
        $country = $user['Country']   ;
        $zipcode = $user['zipcode']   ;
        $mobile  = $user['Mobile']    ;
        //$dob     = $user['dob']       ;

        $status      = $user['status']       ;
        $certificate = $user['certificate']  ;
        $dosedate    = $user['dosedate']        ;

          $marital      = $user['marital']        ;
        $accompaniments = $user['accompaniments'] ;
          $gh           = $user['gh']           ;
          $cost         = $user['cost']           ;

        $industry     = $user['industry']     ;
        $profession   = $user['profession']   ;
        $organisation = $user['organisation']      ;
        $designation  = $user['designation']  ;
        $waddress     = $user['waddress'] ;
        $wcity        = $user['wcity']    ;
        $wstate       = $user['wstate']   ;
        $wcountry     = $user['wcountry'] ;
        $wzipcode     = $user['wzipcode'] ;

        $rollno      = $user['rollno']         ;
        $joinyear    = $user['joinyear']        ;
        $degree      = $user['degree']          ;
        $dept        = $user['dept']      ;
        $hall        = $user['hall']            ;
        $yog         = $user['yog']  ;
        $involvement = $user['involvement']    ;
        $hobbies     = $user['hobbies']         ;

        $reciept = $user['reciept'] ;    

        //fecting travelling details
        //$doa        = $_user['doa']      ;
        //$timetocome = $_user['timetocome']   ;
        //$modeofT    = $_user['modeofT']   ;
        //$pickup     = $_user['pickup']      ; 

        //adding seession 
        $_SESSION['Name']     = $name     ;
       $_SESSION['email']    = $email    ;
       $_SESSION['address']  = $address  ;
       $_SESSION['city']     = $city     ;
       $_SESSION['state']    = $state    ;
       $_SESSION['country']  = $country  ;
       $_SESSION['zipcode']  = $zipcode  ;
       $_SESSION['mobile']   = $mobile   ;
       $_SESSION['dob']      = $dob      ;

       $_SESSION['status']      = $status      ;
       $_SESSION['certificate'] = $certificate ;
       $_SESSION['valid']       = $dosedate    ;

       $_SESSION['marital']        =   $marital      ;
       $_SESSION['accompanyingNo'] = $accompaniments ;
       $_SESSION['room']           =   $gh           ;
       $_SESSION['cost']           =   $cost         ;

       $_SESSION['industry']     = $industry     ;
       $_SESSION['profession']   = $profession   ;
       $_SESSION['orgName']      = $organisation ;
       $_SESSION['designation']  = $designation  ;
       $_SESSION['work_address'] = $waddress     ;
       $_SESSION['work_city']    = $wcity        ;
       $_SESSION['work_state']   = $wstate       ;
       $_SESSION['work_country'] = $wcountry     ;
       $_SESSION['work_zipcode'] = $wzipcode     ;

       $_SESSION['rollNum']        = $rollno       ;
       $_SESSION['joinYear']       = $joinyear     ;
       $_SESSION['degree']         = $degree       ;
       $_SESSION['department']     = $dept         ;
       $_SESSION['hall']           = $hall         ;
       $_SESSION['graduatingYear'] = $yog          ;
       $_SESSION['involvements']   = $involvement  ;
       $_SESSION['hobbies']        = $hobbies      ;

       $_SESSION['reciept'] = $reciept ;

       //$_SESSION['doa']        = $doa         ;
       //$_SESSION['timetocome'] = $timetocome  ;
       //$_SESSION['modeofT']    = $modeofT     ;
       //$_SESSION['pickup']     = $pickup      ; 
        
        header("Location: ../dashboard.php");
    } 

//}
?>
