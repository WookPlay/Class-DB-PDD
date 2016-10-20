# Class-DB-PDD
Class Conexion PDD Mysql, Posgresql, Oracle, ODBC

Con esta clase podras conectarte a Mysql, PostgreSQL, Oracle y ODBC, podras hacer Select, Insert, Update, Delete de una manera mas comoda y corta.

Examples:

************************************************************
**                        MYSQL                           **
************************************************************




************************************************************
**                      POSTGRESQL                        **
************************************************************
<?php
  include_once 'Class/DB/Class.DB.min.php'; /* Incluimos la Clase*/
  /* Datos de Conexión */
  $DB_TYPE_PGSQL = 'pgsql';             /* Tipo de Conexión */
  $DB_HOST_PGSQL = 'localhost';         /* Host */
  $DB_PORT_PGSQL = '5432';              /* Puerto */
  $DB_NAME_PGSQL = 'Base_Datos';        /* Nombre de Base de Datos */
  $DB_USER_PGSQL = 'WookPlay_User';     /* Nombre de Usuario de Base de Datos */
  $DB_PASS_PGSQL = 'Passwork2016';      /* Contraseña de Usuario de Base de Datos */
  /* Crear la conexión */
  $PGSQL = New DataBase($DB_TYPE_PGSQL,$DB_HOST_PGSQL,$DB_NAME_PGSQL,$DB_USER_PGSQL,$DB_PASS_PGSQL,$DB_PORT_PGSQL); /*Iniciar Clase*/
  /*Example Select */
  $result = $PGSQL->select('SELECT * FROM "public"."Tabla"');
  /* Example Select usando una base de datos diferente sin inicializar una nueva conexión |Select using a different database without initializing a new connection*/
  $result = $PGSQL->select_sql('_new_dbname','SELECT * FROM "public"."Tipo_convenio"'); 
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
   
?>
