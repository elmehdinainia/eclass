<?php


$tab_paye = file_get_contents("tabl-pay.json");
$tab_paye = json_decode($tab_paye);
    
    foreach ($tab_paye as $END){
      echo '<tr>
     <td>'.$END['name'].'</td>
     <td>'.$END['Payment_Schedule'].'</td>
     <td>'.$END['Bill_Number'].'</td>
     <td>'.$END['Amount_Paid'].'</td>
     <td>'.$END['Balance_amount'].'</td>
     <td>'.$END['Date'].'</td>
        <td><i class="fal fa-eye text-info"></i></td>
        <tr>';
        
    }
?>