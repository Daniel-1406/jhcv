<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsci extends CI_Controller {

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
            //it hasn't been ran or there are validation errorrs
            $this->load->view('news');
        } else {
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('news', $error);
            } else {


                $data = $this->upload->data();
                $upload = array('upload_data' => $data);

                $rec["msg"] = $this->newsmodel->insertnews($data["file_name"]);

                $this->load->view('newsfeedback', $rec);
            }
        }
    }

    public function viewnews() {
        if ($this->session->userdata("admin") == "")
            redirect("welcome/");
        $rtnvals = $this->newsmodel->viewnews();
        $data["rtnhead"] = $rtnvals["head"];
        $data["rtnbody"] = $rtnvals["body"];
        $this->load->view("viewmenu", $data);
    }

    public function deletethisnews() {
        if ($this->session->userdata("admin") == "")
            redirect("welcome/");

        $res["msg"] = $this->newsmodel->deletenews($this->uri->segment(3));
        $this->load->view("newsfeedback", $res);
    }

    public function editthisnews() {
        if ($this->session->userdata("admin") == "")
            redirect("welcome/");

        $rtnvals = $this->newsmodel->editnews($this->uri->segment(3));
        $this->load->view("editnews", $rtnvals);
    }

}

?>