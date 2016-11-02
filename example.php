
<?php
  /* Examples: */
  
   include_once 'Class/DB/Class.DB.min.php'; /* Incluimos la Clase */
   
  /************************************************************
  **                        MYSQL                           **
  ************************************************************/
  /* Datos de Conexión */
  $DB_TYPE_MYSQL = 'mysql';             /* Tipo de Conexión */
  $DB_HOST_MYSQL = 'localhost';         /* Host */
  $DB_PORT_MYSQL = '3306';              /* Puerto */
  $DB_NAME_MYSQL = 'Base_Datos';        /* Nombre de Base de Datos */
  $DB_USER_MYSQL = 'WookPlay_User';     /* Nombre de Usuario de Base de Datos */
  $DB_PASS_MYSQL = 'Password2016';      /* Contraseña de Usuario de Base de Datos */

  /* Crear la conexión */
  $MYSQL = New DataBase($DB_TYPE_MYSQL,$DB_HOST_MYSQL,$DB_NAME_MYSQL,$DB_USER_MYSQL,$DB_PASS_MYSQL,$DB_PORT_MYSQL); /*Iniciar Clase*/

  /*Example Select */
  $result = $MYSQL->select('SELECT * FROM tabla');
  
  /* Example Select usando una base de datos diferente sin inicializar una nueva conexión |Select using a different database without initializing a new connection*/
  $result = $MYSQL->select_sql('new_dbname','SELECT * FROM tabla');

  /* Example Insert */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $result = $MYSQL->insert("Table_name",$data);

  /* Example Update */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $MYSQL->update("Table_name",$data,$where);

  /* Example Delete */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $MYSQL->delete("Table_name",$where);
  
  /************************************************************
  **                      POSTGRESQL                        **
  ************************************************************/
 
  /* Datos de Conexión */
  $DB_TYPE_PGSQL = 'pgsql';             /* Tipo de Conexión */
  $DB_HOST_PGSQL = 'localhost';         /* Host */
  $DB_PORT_PGSQL = '5432';              /* Puerto */
  $DB_NAME_PGSQL = 'Base_Datos';        /* Nombre de Base de Datos */
  $DB_USER_PGSQL = 'WookPlay_User';     /* Nombre de Usuario de Base de Datos */
  $DB_PASS_PGSQL = 'Password2016';      /* Contraseña de Usuario de Base de Datos */
  
  /* Crear la conexión */
  $PGSQL = New DataBase($DB_TYPE_PGSQL,$DB_HOST_PGSQL,$DB_NAME_PGSQL,$DB_USER_PGSQL,$DB_PASS_PGSQL,$DB_PORT_PGSQL); /*Iniciar Clase*/
  
  /*Example Select */
  $result = $PGSQL->select('SELECT * FROM "public"."Tabla"');
  
  /* Example Select usando una base de datos diferente sin inicializar una nueva conexión |Select using a different database without initializing a new connection*/
  $result = $PGSQL->select_sql('_new_dbname','SELECT * FROM "public"."Tabla"'); 
  
  /* Example Insert */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $result = $PGSQL->insert("Table_name",$data);
  
  /* Example Update */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $PGSQL->update("Table_name",$data,$where);
  
  /* Example Delete */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $PGSQL->delete("Table_name",$where);
  /************************************************************
  **                            ORACLE                       **
  ************************************************************/
  /* Datos de Conexión */
  $DB_TYPE_ORACLE = 'oracle';            /* Tipo de Conexión */
  $DB_HOST_ORACLE = 'localhost/XE';      /* Host */
  $DB_NAME_ORACLE = 'Base_Datos';        /* Nombre de Base de Datos */
  $DB_USER_ORACLE = 'WookPlay_User';     /* Nombre de Usuario de Base de Datos */
  $DB_PASS_ORACLE = 'Password2016';      /* Contraseña de Usuario de Base de Datos */

  /* Crear la conexión */
  $ORACLE = New DataBase($DB_TYPE_ORACLE,$DB_HOST_ORACLE,$DB_NAME_ORACLE,$DB_USER_ORACLE,$DB_PASS_ORACLE,$DB_PORT_ORACLE); /*Iniciar Clase*/

  /*Example Select */
  $result = $ORACLE->select('SELECT * FROM tabla');

  /* Example Select usando una base de datos diferente sin inicializar una nueva conexión |Select using a different database without initializing a new connection*/
  $result = $ORACLE->select_sql('new_dbname','SELECT * FROM tabla');

  /* Example Insert */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $result = $ORACLE->insert("Table_name",$data);

  /* Example Update */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $ORACLE->update("Table_name",$data,$where);

  /* Example Delete */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $ORACLE->delete("Table_name",$where);


  /************************************************************
  **                            ODBC                         **
  ************************************************************/
  /* Datos de Conexión */
  $DB_TIPE_ODBC    = 'odbc';             /* Tipo de Conexión */
  $DB_HOST_ODBC    = 'empresanet53b';    /* Host */
  $DB_NAME_ODBC    = '';                 /* Nombre de Base de Datos */
  $DB_USER_ODBC    = '';                 /* Nombre de Usuario de Base de Datos */
  $DB_PASS_ODBC    = '';                 /* Contraseña de Usuario de Base de Datos */

  /* Crear la conexión */
  $ODBC = New DataBase($DB_TYPE_ODBC,$DB_HOST_ODBC,$DB_NAME_ODBC,$DB_USER_ODBC,$DB_PASS_ODBC,$DB_PORT_ODBC); /*Iniciar Clase*/

  /*Example Select */
  $result = $ODBC->select('SELECT * FROM tabla');

  /* Example Insert */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $result = $ODBC->insert("Table_name",$data);

  /* Example Update */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $ODBC->update("Table_name",$data,$where);

  /* Example Delete */
  $data  = [ "Campo" => "Valor", "Campo2" => $valor2 ];
  $where = [ "Campo" => "Valor", "Campo2" => $valor2 ]; OR $where = "Campo ='Valor' AND Campo2 = '".$valor2."' "
  $result = $ODBC->delete("Table_name",$where);
   
?>
