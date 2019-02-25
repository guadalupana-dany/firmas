<?php
    require __DIR__.'/vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;
   //Recoger contenido del otro fichero aqui podemos mandar variables https://www.udemy.com/como-crear-documentos-pdf-en-php-generar-reportes-pdf/learn/v4/t/lecture/7757764?start=0
    ob_start();
    require_once 'pdf.php';
    $html = ob_get_clean();
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML($html);

    $html2pdf->output("pdf_generate.pdf");
    
?>


