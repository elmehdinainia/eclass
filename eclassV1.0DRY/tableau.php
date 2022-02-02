<?php
$tab_student = [
    [
    'Name' => 'elmehdinainiaa',
    'Email' => 'mehdinainiaa4@email.com',
    'Phone' => '0777787780',
    'Enroll_Number' => '1234567305477760',
    'Date_of_admission' => '08-Dec,2021',

    ],
    [
        'Name' => 'elmehdinainiaa',
        'Email' => 'mehdinainiaa4@email.com',
        'Phone' => '0777787780',
        'Enroll_Number' => '1234567305477760',
        'Date_of_admission' => '08-Dec,2021',
    
        ],
        [
            'Name' => 'elmehdinainiaa',
            'Email' => 'mehdinainiaa4@email.com',
            'Phone' => '0777787780',
            'Enroll_Number' => '1234567305477760',
            'Date_of_admission' => '08-Dec,2021',
        
            ],
            

    [
        'Name' => 'elmehdinainiaa',
        'Email' => 'mehdinainiaa4@email.com',
        'Phone' => '0777787780',
        'Enroll_Number' => '1234567305477760',
        'Date_of_admission' => '08-Dec,2021',
        'type booleen' => true    
        ]
    

 ];
 foreach ($tab_student as $END){
     echo '  <tr class="bg-white align-middle">
     <td><img src="image/student.jpg" alt="" height="50" width="50"></td>
     <td>'.$END['Name'].'</td>
     <td>'.$END['Email'].'</td>
     <td>'.$END['Phone'].'</td>
     <td>'.$END['Enroll_Number'].'</td>
     <td>'.$END['Date_of_admission'].'</td>
     
     <td class="d-md-flex gap-3 mt-3">
         <i class="far fa-pen"></i>
         <i class="far fa-trash"></i>
     </td>
 </tr>';
 }





?>