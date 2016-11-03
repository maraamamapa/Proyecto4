<?php
//Definimos la Clase ia.
Class ia{
public $columna;
public $fila;
//2-A:Almacenar el número de columnas y filas del tablero
public $mapaCol;
public $mapaFil;
//2-B:Para almacenar el número de naves que tendra cada uno de los escuadrones
public $numNaves;
//2-C:Almacenar el array de naves humanas y el de la máquina
public $navesHumano;//Constructor
public $navesIA;//Constructor

/*PARA DEFINIR E INICIALIZAR LAS VARIABLES, HE CREADO UN __construct, DE ESTA MANERA DECLARAMOS LOS ARRAY 
  DE $navesHumano Y $navesIA y añadimos elementos, que en este caso serían las naves en navesIA */
  
function __construct()
{	
	$this->navesIA=array();
	$this->navesHumano=array();	
	
	/*Creo tres array asignandoles como clave "tipo,col y fil", en cada uno de ellos, y deacuerdo con el apartado 3 del ejercicio,
	su posición fija en la fila 3  y columnas 0,1 y 2 y el valor por ahora vacio. */
	
	$nave=array("tipo" =>  "","col" => 0,"fil" => 3);
	$nave2=array("tipo" => "","col" => 1,"fil" => 3);
	$nave3=array("tipo" => "","col" => 2,"fil" => 3);
	
	/*Lo que pretendo hacer con array_push es asignar las variables que contienen los arrays($nave,$nave1,$nave2)a la funcion "navesIA"*/
	
	array_push($this->navesIA, $nave);
	array_push($this->navesIA, $nave2);
	array_push($this->navesIA, $nave3);
}

public function setMapaCol($mapaCol){
	$this->mapaCol=$mapaCol;
}
	
public function setMapaFil($mapaFil){
	$this->mapaFil=$mapaFil;
}

public function getNavesIA(){
	return $this->navesIA;
}
/*2-E: Añade una nueva nave al array de naves humanas- Empleando el mismo método de antes, creo un array con clave 
  y finalmente se lo asigno a la variable navesHumano con array_push*/
public function setNaveHumana($tipo,$col,$fil){
	$nave=array("tipo" => $tipo,"col" => $col,"fil" => $fil);
	array_push($this->navesHumano,$nave);	
}

//Metodos, Get (pedir)
public function getColumna(){
	return $this->columna;
}

public function getFila(){
	return $this->fila;
}

public function setColumna($col)
{
	if($col <= 3 && $col >=0 ){
		$this->columna=$col;
	}
	else if($col > 3){
		$this->columna=3;
	}
	else if($col < 0){
		$this->columna=0;
	}		
}
	
public function setFila($fil){
	if($fil <= 3 && $fil>=0 ){
		$this->fila=$fil;
	}
	else if($fil > 3){
		$this->fila=3;
	}
	else if($fil < 0){			
		$this->fila=0;
	}
}
public function randompos(){
	$this->fila=rand(0,3);
	$this->columna=rand(0,3);
}

}
?>