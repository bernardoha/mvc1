<?php 
	class archivoModel{
		public function listado(){
			//abrir archivo csv
			$fp=fopen("../csv/datos.csv","r");
			while(!feof($fp)){ //Mientras no sea el final del archivo
				$linea=fgets($fp); //Captura una línea del archivo
				$fila=explode(",", $linea); //Convierte la línea en array
				$data[]=$fila; //Almacena el array en otro array (acumula)
			}
			return $data;
		}

		public function insertar($datos){
			//Abrir el archivo
			$fp=fopen("../csv/datos.csv", "a+");
			fputs($fp,PHP_EOL.$datos[0].",".$datos[1].",".$datos[2].",".$datos[3].",".$datos[4]);
		}
	}
 ?>