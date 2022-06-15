<?php

    eraseMatricula();
    function eraseMatricula(){
        try {
            $objDtoMatricula = new Matricula();
            $objDtoMatricula -> setMCode($_GET["codigo"]);
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);

            if ($objDaoMatricula -> mldEraseMatricula() == true) {

                print "<script>

                swal.fire(
                    'hecho',
                    'tu matricula ha sido eliminada.',
                    'genial'
                );


                </script>";

                include_once "view/module/matricula.php";

            }
        } catch (Exception $e) {
            print "hubo un error al borrar ".$e ->getMesagge;
        }
    }

?>