<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {

    public function main()
    {
        $data['konten']="event";
        $this->load->view('template',$data);

    }

}
?>
