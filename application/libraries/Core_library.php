<?php

class core_library
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function PdfGenerator($html, $filename, $paper_size, $orientation, $typePrinter = 'kitchen')
    {
        $this->ci->load->library('Lib_curl');
        $printerList = $this->ci->lib_curl->curl_request($this->ci->pos_service_v1 . 'v1/settings/printer/get-all?page=0&limit=100&printerType=' . $typePrinter);
        // var_dump($printerList)
        $options = new Dompdf\Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        // $options->set(['isFontSubsettingEnabled', true, 'isRemoteEnabled', true]);
        // instantiate and use the dompdf class        
        $dompdf = new Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        switch ($typePrinter){
            case "receipt":
                $dompdf->setPaper([0,0,210,500], $orientation);
                break;
            case "checkout":
                $dompdf->setPaper([0,0,210,500], $orientation);
                break;
            case "kitchen":
                $dompdf->setPaper([0,0,210,400], $orientation);
                break;
            case "food":
                $dompdf->setPaper([0,0,210,400], $orientation);
                break;
            case "bar":
                $dompdf->setPaper([0,0,210,400], $orientation);
                break;
            case "dish":
                $dompdf->setPaper([0,0,210,400], $orientation);
                break;
            default:
                $dompdf->setPaper([0,0,210,500], $orientation);
                break;
        }

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $output = $dompdf->output();
        $tmpfile = 'tmp-print-'.date('Ymdhis').'.pdf';
        file_put_contents('./assets/tmp/tmp-print-'.date('Ymdhis').'.pdf', $output);
        

        foreach($printerList['data'] as $printer)
        {
            // $dompdf->stream($filename, array('Attachment' => 0));
            exec('START C:/xampp/htdocs/pos/module/PDFtoPrinter.exe C:/xampp/htdocs/pos/assets/tmp/' .$tmpfile. ' '. $printer['printerName']);
        }
        

        // unlink('./assets/tmp/' . $tmpfile);

    }
}
