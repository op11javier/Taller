<?php

require_once("colector.php");
class demoModelo
{
 
 private $modelo;
 public function __construct()
 {
 

 $this->modelo = new colector();
 
 
 }
 
  
public function ListarDEMO()
	{
		try
		{
		
        $result= $modelo->Listar("demo");
            
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
}
