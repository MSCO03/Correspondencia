<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validacion_Controller extends CI_Controller {

    public function Validaradmin()
    {

       $this->form_validation->set_rules('username','Nombre de Usuario','trim|required|max_length[17]|min_length[3]|alpha');

       $this->form_validation->set_rules('password','contraseña','trim|required|max_length[17]|min_length[4]|alpha_numeric');

            if($this->form_validation->run() == TRUE)
            {
                   echo json_encode(array('estatus' => 0));
            }
            else if($this->form_validation->run() == FALSE)
            {
                    $errors = $this->form_validation->error_array();
                    echo json_encode(array('estatus' => 1, 'ERRORES' => $errors));
            }

    }
}
