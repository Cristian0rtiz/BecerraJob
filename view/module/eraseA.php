<?php

    eraseAprendiz();
    function eraseAprendiz(){
        try {
            $objDtoAprendiz = new Aprendiz();
            $objDtoAprendiz -> setCode($_GET["code"]);
            $objDaoAprendiz = new AprendizModel($objDtoAprendiz);

            if ($objDaoAprendiz -> mldEraseAprendiz() == true) {

                print "<script>

                swal.fire(
                    'hecho',
                    'Aprendiz ha sido eliminado.',
                    'genial'
                );


                </script>";

                include_once "view/module/Aprendiz.php";

            }
        } catch (Exception $e) {
            print "hubo un error al borrar ".$e ->getMesagge;
        }
    }

?>