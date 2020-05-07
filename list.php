<?php 
try{
  $connection=new PDO('mysql:host=127.0.0.1;dbname=employees','root','root');
  echo "connexion établie...";
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
  $sql="select * from employees";
  $resultat=$connection->query($sql);
  while(($ligne=$resultat->fetch(PDO::FETCH_ASSOC))!=false)
  {
      echo "Prenom :".$ligne['first_name'].",  Nom:".$ligne['last_name']."<br>";
      //echo $ligne['first_name'];
    }
  echo "toto";
  //var_dump($pdo->errorInfo());


}
catch(Exception $e)
{
  echo "problème de connxion...:".$e->getMessage();

}