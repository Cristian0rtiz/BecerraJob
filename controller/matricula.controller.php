<?php
    class MatriculaController{

        public function setInsertMatricula($mDate,$nameC,$cost,$state,$pCode,$aCode){
            try{
                $objDtoMatricula = new Matricula();
                $objDtoMatricula ->  setMDate($mDate);
                $objDtoMatricula ->  setNameC($nameC);
                $objDtoMatricula ->  setCost($cost);
                $objDtoMatricula ->  setState($state);
                $objDtoMatricula ->  setPCode($pCode);
                $objDtoMatricula ->  setACode($aCode);
                
                $objDaoMatricula = new MatriculaModel($objDtoMatricula);
                if($objDaoMatricula -> mldInsertMatricula()){
                    ;
                }

            }catch (exception $e) {
                print "error en el controlador de matricula".$e ->getMessage();
            }


    }

    public function getSearchAllMatricula(){
        $respon = false;
        try {
            $objDtoMatricula = new Matricula();
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);
            $respon = $objDaoMatricula -> mldSearchAllMatricula() -> fetchAll();
        } catch (exception $e) {
            print "there was a mistake on the creation of the display mtricula controller ". $e ->getMessage();
        }
        return $respon;
    }


    public function setUpdateMatricula($mCode,$mDate,$nameC,$cost,$state,$pCode,$aCode){
        try {
        $objDtoMatricula = new Matricula();
        $objDtoMatricula -> setMCode($mCode);
        $objDtoMatricula -> setMDate($mDate);
        $objDtoMatricula -> setNameC($nameC);
        $objDtoMatricula -> setCost($cost);
        $objDtoMatricula -> setState($state);
        $objDtoMatricula -> setPCode($pCode);
        $objDtoMatricula -> setACode($aCode);  

        $objDaoMatricula = new MatriculaModel($objDtoMatricula);
        if($objDaoMatricula -> mldUpdateMatricula()){

            print "
            <script>
            Swal.fire({
                icon: 'success',
                title: 'nice',
                text: 'me la editaste',
              })
            </script>";
        }

    } catch (Exception $e) {
        print "error en la ediccion".$e ->getMessage();
    }
}

    
    }

    

?>