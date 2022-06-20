<?php
    require_once '../../controller/matricula.controller.php';
    require_once '../../model/dao/matricula.dao.php';
    require_once '../../model/dto/matricula.dto.php';
    require_once '../../model/conexion.php';
    class Reporte{
        
        private $pdf;

        public function __construct(){
            include 'vendor/fpdf.php';
            $this -> pdf = new FPDF();
            $this -> pdf->AddPage();
        }

        public function headReport(){
            // Logo
            $this->pdf->Image('../img/logoG.png',10,8,33);
            // Arial bold 15
            $this->pdf->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->pdf->Cell(80);
            // Título
            $this->pdf->Cell(30,10,'TODAS LAS MATRICULAS',0,0,'C');
            // Salto de línea
            $this->pdf->Ln(20);
        }//fin del encabezado

        public function viewAll(){

            $this -> pdf->SetFont('Arial','B',16);
            
            try {
                $objDtoMatricula = new Matricula();
                $objDaoMatricula = new MatriculaModel($objDtoMatricula);
                $respon = $objDaoMatricula -> mldSearchAllMatricula()->fetchAll();
            } catch (PDOException $e) {
                echo "cant show the enrollment list " . $e->getMessage();
            }
            $this->pdf->Ln(10);
            foreach ($respon as $key => $value) {
                
                $this->pdf->Cell(40,10,$value['codigoMatricula'] );
                $this->pdf->Cell(40,10,$value['fechaMatricula'] );
                $this->pdf->Cell(40,10,$value['nombreCentro'] );
                $this->pdf->Cell(40,10,$value['costo'] );
                $this->pdf->Cell(40,10,$value['estado'] );
                $this->pdf->Cell(40,10,$value['codigoPrograma'] );
                $this->pdf->Cell(40,10,$value['codigoAprendiz'] );
                $this->pdf->Ln(10);
            }
           
        }
        public function footReport(){
            $this->pdf->SetY(-5);
            // Arial italic 8
            $this->pdf->SetFont('Arial','I',8);
            // Número de página
            $this->pdf->Cell(0,10,'Page '.$this->pdf->PageNo().'/{nb}',0,0,'C');
            $this -> pdf->Output();
        }

    }//FIN CLASE
    
    $objView = new Reporte();
    $objView -> headReport();
    $objView -> viewAll();
    $objView -> footReport();
    

?>