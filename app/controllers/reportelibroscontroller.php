<?php
include_once "app/models/libros.php";
include_once "vendor/autoload.php";
class ReporteLibrosController extends Controller {
    private $libro;
    public function __construct($parametro) {
        $this->libro=new Libros();
        parent::__construct("reportelibros",$parametro,true);
    }

    public function getReporte() {
        $registros=$this->libro->getLibrosReporte($_GET);
        //print_r($registros);
        //Encabezado del inform
        $htmlHeader="<h1>Book Store Online</h1>";
        $htmlHeader.="<h3>Listado general de libros</h3>";
        //Cuerpo del informe
        $html="<table width='100%' border='1'><thead><tr>";
        $html.="<th>Corr</th>";
        $html.="<th>Titulo</th>";
        $html.="<th>Descripcion</th>";
        $html.="<th>Categoria</th>";
        $html.="<th>Autor</th>";
        $html.="<th>Fecha de Publi.</th>";
        $html.="<th>Precio</th>";
        $html.="</tr></thead><tbody>";
        $total=0;
        foreach ($registros as $key => $value) {
            $html.="<tr>";
            $html.="<td>".($key+1)."</td>";
            $html.="<td>{$value["titulo"]}</td>";
            $html.="<td>{$value["descripcion"]}</td>";
            $html.="<td>{$value["categoria"]}</td>";
            $html.="<td>{$value["autor"]}</td>";
            $html.="<td>{$value["fecha_pub"]}</td>";
            $html.="<td>{$value["precio"]}</td>";
            $html.="</tr>";
            $total+=$value["precio"];
        }
        $html.="<tr>";
        $html.="<th colspan='6'>Total</th>";
        $html.="<td>$total</td>";
        $html.="</tr>";
        $html.="</tbody></table>";
        //echo $html;
        $mpdfConfig=array(
            'mode'=>'utf-8',
            'format'=>'Letter',
            'default_font_size'=>0,
            'default_font'=>'',
            'margin_left'=>10,
            'margin_right'=>10,
            'margin_top'=>40,
            'margin_header'=>10,
            'margin_footer'=>20,
            'orientation'=>'p'
        );
        $mpdf=new \Mpdf\Mpdf($mpdfConfig);
        $mpdf->SetHTMLHeader($htmlHeader);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}