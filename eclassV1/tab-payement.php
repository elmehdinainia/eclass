<?php
$tab_paye =[
    [
        'name' => 'mehdi',
        'Payment_Schedule'=>'first',
        'Bill_Number'=>'0288765',
        'Amount_Paid'=>'DHS 200,000',
        'Balance_amount'=>'DHS 230,000',
        'Date'=>'05-Jan, 2022',
    ]

    ];
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