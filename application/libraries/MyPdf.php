<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('assets/plugins/dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

class MyPdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function generate($view, $data = array(), $filename = 'SIGAP PRIMA ASTREA', $paper = 'A4', $orientation = 'potrait')
    {
        $html = $this->ci->load->view($view, $data, TRUE);
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
    }
}
