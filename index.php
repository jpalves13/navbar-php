

<?php
   include_once("function.php");
   $menu = array( // Presumed to have been coming from a SQL SELECT, populated for demo.
     array('id'=>1,'name'=>'Menu 1',          'parent_id'=>NULL),
     array('id'=>2,'name'=>'Sub 1.1',         'parent_id'=>1),
     array('id'=>3,'name'=>'Sub 1.2',         'parent_id'=>1),
     array('id'=>4,'name'=>'Sub 1.3',         'parent_id'=>1),
     array('id'=>5,'name'=>'Menu 2',          'parent_id'=>NULL),
     array('id'=>6,'name'=>'Sub 2.1',         'parent_id'=>5),
     array('id'=>7,'name'=>'Sub Sub 2.1.1',   'parent_id'=>6),
     array('id'=>8,'name'=>'Sub 2.2',         'parent_id'=>5),
     array('id'=>9,'name'=>'Menu 3',          'parent_id'=>NULL),
   );

   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
      <title>Exemplo NavBar Bootstrap</title>
      <!-- Bootstrap -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- header -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <!-- INÍCIO DO MENU -->
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- logo -->
            <div class="navbar-header">
               <a class="navbar-brand" href=""><img src="" alt="LOGO" class="logo-menu"></a>
            </div>
            <!-- fim logo -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <?php
                     //função que cria o menu
                     $top_menu = bootstrapMenu($menu);
                     echo $top_menu;
                     ?>
               </ul>
            </div>
         </div>
         <!-- FIM DO MENU -->
      </nav>
   </body>
</html>
