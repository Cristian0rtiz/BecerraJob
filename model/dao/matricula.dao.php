<?php

    class MatriculaModel{


        private $mCode;
        private $mDate;
        private $nameC;
        private $cost;
        private $state;
        private $pCode;
        private $aCode;

        public function __construct($objDtoMatricula){
            $this-> mCode     = $objDtoMatricula -> getMCode();
            $this-> mDate     = $objDtoMatricula -> getMDate();
            $this-> nameC     = $objDtoMatricula -> getNameC();
            $this-> cost      = $objDtoMatricula ->  getCost();
            $this-> state     = $objDtoMatricula -> getState();
            $this-> pCode     = $objDtoMatricula -> getPCode();
            $this-> aCode     = $objDtoMatricula -> getACode();
        }

        public function mldInsertMatricula(){
            $sql = "CALL `spInsertMatricula` (?, ?, ?, ?, ?, ?);";
            $estado = false;

            try{

                $objcon = new Conexion();

                $stmt = $objcon -> getConect() -> prepare($sql);
                $stmt -> bindParam(1, $this -> mDate, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> nameC, PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> cost,  PDO::PARAM_INT);
                $stmt -> bindParam(4, $this -> state, PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> pCode, PDO::PARAM_INT);
                $stmt -> bindParam(6, $this -> aCode, PDO::PARAM_INT);
                $estado = $stmt -> execute();

            }catch (exception $e) {
                print "error al insertar usuario";

        }
        return $estado;
        }

        public function mldSearchAllMatricula(){
            $sql = "call spSearchAllMatricula()";
    
            try {
                $objcon = new Conexion();
    
                $stmt = $objcon -> getConect() -> prepare($sql); 
                $stmt -> execute();
                $respon = $stmt;
                
            } catch (Exception $e) {
                print "hubo un error en mostrar los datos ". $e -> getMessage();
            }
            return $respon;
        }

        public function mldUpdateMatricula(){

            $sql = "CALL `spUpdateMatricula`(?, ?, ?, ?, ?, ?, ?);";
                $estado = false;
    
                try{

                    $objcon = new Conexion();
    
                    $stmt = $objcon -> getConect() -> prepare($sql);
                    $stmt -> bindParam(1, $this -> mCode, PDO::PARAM_INT);
                    $stmt -> bindParam(2, $this -> mDate, PDO::PARAM_STR);
                    $stmt -> bindParam(3, $this -> nameC, PDO::PARAM_STR);
                    $stmt -> bindParam(4, $this -> cost,  PDO::PARAM_INT);
                    $stmt -> bindParam(5, $this -> state, PDO::PARAM_STR);
                    $stmt -> bindParam(6, $this -> pCode, PDO::PARAM_INT);
                    $stmt -> bindParam(7, $this -> aCode, PDO::PARAM_INT);
                    $estado = $stmt -> execute();
                    
                } catch (Exception $e) {
                    print "error al insertar matricula ". $e -> getMessage();
    
            }
            return $estado;
    
        }

        public function mldEraseMatricula(){
            $sql ="call spDeleteMatricula(?)";
    
            $respon = false;
            try {
                $objcon = new Conexion();
                $stmt = $objcon -> getConect() -> prepare($sql); 
                $stmt -> bindParam(1, $this -> mCode,        PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
                
            } catch (Exception $e) {
                print "hubo un error al borrar el registro ". $e -> getMessage();
            }
            return $respon;
    
        }
    }

    ?>