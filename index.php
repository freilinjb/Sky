<?php


#CONTRULLE LA PLANTILLA
require_once "controllers/TemplateController.php";
#CADENA DE CONEXION
require_once "models/Conexion.php";

#USUARIO
require_once "controllers/UsuarioController.php";
require_once "models/UsuarioModel.php";

#CONSULTA GENERAL
require_once "controllers/ConsultaController.php";
require_once "models/ConsultaModel.php";




$template = new TemplateController();
$template->template();
