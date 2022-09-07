<?php

$upDate = strtotime('01-10-2022');

$name = "Phil";

$empno = "3684048";

$now = time();

$removeOldDate = $now - 1814400; //remove after three weeks

$hide = 'class="d-none"';

$hideHeader = 'd-none';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/main1.css">
     <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-60689461-1', 'auto');
   ga('send', 'pageview');

 </script>
  </head>
  <body>
    <h1>Roster for <?php echo $empno; ?></h1>

        <table class = "table table-bordered table-sm table-responsive m-t-3 m-b-3">
    <thead class="thead-inverse<?php if($upDate < $removeOldDate) { echo " " . $hideHeader; } ?>">

      <th>Week Ending</th>
      <th>Roster No</th>
      <th>Sunday</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
      </thead>


 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>4</td>
     <td class=' black'>07 - 15 North Greenwich</td>
     <td class=' black'>07 - 15 North Greenwich</td>
     <td class=' black'>07 - 15 North Greenwich</td>
     <td class=' black'>07 - 15 North Greenwich</td>
     <td class=' black'>07 - 15 North Greenwich</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>

   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>5</td>
     <td class=' black'>15 - 23 North Greenwich</td>
     <td class=' black'>15 - 23 North Greenwich</td>
     <td class=' black'>15 - 23 North Greenwich</td>
     <td class=' black'>15 - 23 North Greenwich</td>
     <td class=' red'>R</td>
     <td class=' black'>07 - 15 North Greenwich</td>
     <td class=' black'>07 - 15 North Greenwich</td>



   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>6</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class=''></td>
   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>7</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class='bg-primary'>COVER WEEK</td>
     <td class=''></td>
   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>8</td>
     <td class=' red'>R</td>
     <td class=' gray'>11 - 19 Canary Wharf</td>
     <td class=' gray'>11 - 19 Canary Wharf</td>
     <td class=' gray'>11 - 19 Canary Wharf</td>
     <td class=' gray'>07 - 15 Canary Wharf</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>




     <td class=''></td>
   </tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>9</td>
     <td class=' red'>R</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=''></td>
   </tr>

 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>10</td>
     <td class=' gray'>23 - 07 Canary Wharf</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>
     <td class=' gray'>15 - 23 Canary Wharf</td>
     <td class=' gray'>15 - 23 Canary Wharf</td>
     <td class=' gray'>15 - 23 Canary Wharf</td>
     <td class=''></td>
   </tr>

   <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

<td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
<td class=''>11</td>
<td class=' gray'>15 - 23 Canary Wharf</td>
<td class=' gray'>15 - 23 Canary Wharf</td>
<td class=' gray'>15 - 23 Canary Wharf</td>
<td class=' gray'>15 - 23 Canary Wharf</td>
<td class=' red'>R</td>
<td class=' gray'>07 -15 Canary Wharf</td>
<td class=' gray'>07 -15 Canary Wharf</td>
<td class=''></td>
</tr>
 <tr <?php if($upDate < $removeOldDate) { echo $hide; } ?>>

     <td class='table-active'><?php $upDate += 604800; echo date('d-m-Y', $upDate); ?></td>
     <td class=''>12</td>
     <td class=' gray'>07 - 15 Canary Wharf</td>
     <td class=' gray'>07 - 15 Canary Wharf</td>
     <td class=' gray'>07 - 15 Canary Wharf</td>
     <td class=' gray'>07 - 15 Canary Wharf</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>
     <td class=' red'>R</td>

     <td class=''></td>
   </tr>

 
 

              <?php
                  for ($i = 0; $i < 28 ; $i++) {
                      include('../css/inc.php');
                  }



               ?>
</table>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
