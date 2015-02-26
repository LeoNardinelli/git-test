<html>

  <head>

    <meta charset="UTF-8">
        
  </head>
       
         
              
         
         <?php
         
         $p1=9.0*30; 
              $m1=8.0*10;
              $m2=7.5*10;
              $proj1=6.0*5; 
              $proj2=10.0*5; 
              $proj3=8.0*5; 
              $proj4=8.5*5;
              $trabf=9.0*10;
              $proc=6.5*20;
              
              $MF;
              $PF=9.0;
              
              $MI=($p1+$m1+$m2+$proj1+$proj2+$proj3+$proj4+$trabf+$proc)/100;
              
              if ($MI>=7.5) {
                  
                  echo ' O aluno esta aprovado ';
              }
              else    {
              $MF=($MI+$PF)/2;
              }
              if ($MF>=5) {
                  echo 'O aluno está aprovado';
                  
              }
              
              else {
                  echo 'O aluno esta reprovado';
              }
  
         
         
         
         
         
         
         
         
         echo 12314;
  echo '<h1> Leonardo; </h1>'
  ?>
     
     
</html>

