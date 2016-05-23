<?php


class Transacciones {
        private $idacceso;
	private $nomtabla;
	private $accion;
	private $descripcion;
	
        function __construct($idacceso, $nomtabla, $accion, $descripcion) {
            $this->idacceso = $idacceso;
            $this->nomtabla = $nomtabla;
            $this->accion = $accion;
            $this->descripcion = $descripcion;
    }
    
    function getIdacceso() {
        return $this->idacceso;
    }

    function getNomtabla() {
        return $this->nomtabla;
    }

    function getAccion() {
        return $this->accion;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdacceso($idacceso) {
        $this->idacceso = $idacceso;
    }

    function setNomtabla($nomtabla) {
        $this->nomtabla = $nomtabla;
    }

    function setAccion($accion) {
        $this->accion = $accion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function AgregarP($id){
                 
		$db=dbconnect();
		
                $sql = "INSERT INTO LOGTRANSACCIONES (idacceso, nomtabla,accion,descripcion)
                VALUES (#id,#tabla,#accion,#descripcion)";
			/*Definici�n del query que permitira eliminar un registro*/
			//$sqldel="delete from productos where idproducto=:id";
	
			/*Preparaci�n SQL*/
			$queryins=$db->prepare($sqldel);
			
			$queryins->bindParam('#id',$id);
			$queryins->bindParam('#tabla',$tabla);
                        $queryins->bindParam('#accion',$accion);
                        $queryins->bindParam('#descripcion',$descripcion);
                        
			$valaux=$queryins->execute();
	
		return $valaux;
	}
    

        
        
    
}
