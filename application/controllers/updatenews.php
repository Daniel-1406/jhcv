<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Updatenews extends CI_Controller {

    public function do_upload() {
        if ($this->session->userdata("admin") == "")
            redirect("welcome/");
        $this->form_validation->set_rules("name", "News Title", "required|trim|min_length[3]");
        $this->form_validation->set_rules("description", "News Description", "required|trim|min_length[3]");
        $this->form_validation->set_rules("date", "News Date", "required|trim|min_length[3]");


        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000000;
        $config['max_width'] = 200000;
        $config['max_height'] = 200000;
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data = $this->eventmodel->editevent($this->input->post('id'));
            $this->load->view('update/news', $data);
        } else {
            if (!$this->upload->do_upload('userfile')) {
                $data=array();
                $data = array('error' => $this->upload->display_errors());
                $data = $this->eventmodel->editevent($this->input->post('id'));

                $this->load->view('update/news', $data);
            } else {


                $data = $this->upload->data();
                $upload = array('upload_data' => $data);

                $rec["msg"] = $this->newsmodel->updatenews($data["file_name"]);

                $this->load->view('feedbacks/news', $rec);
            }
        }
    }

}

?>