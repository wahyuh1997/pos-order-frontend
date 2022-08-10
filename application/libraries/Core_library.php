<?php

class core_library
{

  protected $ci;

  function __construct()
  {
    $this->ci = &get_instance();
  }

  function PdfGenerator($html, $filename, $paper_size, $orientation)
  {
    $options = new Dompdf\Options();
    $options->set('isRemoteEnabled', true);
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isFontSubsettingEnabled', true);
    // instantiate and use the dompdf class        
    $dompdf = new Dompdf\Dompdf($options);
    mb_internal_encoding('UTF-8');
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper($paper_size, $orientation);


    // Render the HTML as PDF
    $dompdf->render();

    ob_end_clean();

    // Output the generated PDF to Browser
    $dompdf->stream($filename, array('Attachment' => 1));
  }
}
