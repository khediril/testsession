<?php
require_once('Model.class.php');
require_once('Employee.class.php');
$req = 'select * from employees';
$rep = Model::$pdo->query($req);
$rep->setFetchMode(PDO::FETCH_CLASS, 'Employee');
$page=<<<PAGE
<table border="1">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
PAGE;
while (($emp = $rep->fetch()) != false) {
    //echo "Prenom :" . $ligne['first_name'] . ",  Nom:" . $ligne['last_name'] . "<br>";
    //var_dump($emp);
    //echo $ligne['first_name'];
    $page.=<<<CORPS
    
                <tr>
                    <td> {$emp->getEmp_no()} </td>
                    <td> {$emp->getFirst_name()} </td>
                    <td> {$emp->getLast_name()} </td>
                </tr>
                
CORPS;
    
}  
$page.= <<<AAA
</tbody>      
    </table>
AAA;
echo $page;  

