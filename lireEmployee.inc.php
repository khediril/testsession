<?php

require_once('Employee.class.php');
$employees = Employee::getAllEmployees();
//$employees=array_slice($employees,0,10);
$page = <<<TETE
<div class="row justify-content-center">
  <div class="col-6">
  <h1 class="text-center">Liste des employés</h1>
<table class="table table-striped table-inverse ">
        <thead class="thead-inverse">
            <tr>
                <th>Numero Emp</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
TETE;
foreach ($employees as $emp) {
    $page .= <<<CORPS
    
                <tr>
                    <td scope="row"> {$emp->getEmp_no()} </td>
                    <td> {$emp->getFirst_name()} </td>
                    <td> {$emp->getLast_name()} </td>
                </tr>
                
CORPS;
}
$page .= <<<FIN
</tbody>      
    </table>
    </div>
    </div>
FIN;
echo $page;

