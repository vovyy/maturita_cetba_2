<?php

class Pages extends CI_Controller {

  public function __construct(){
         parent::__construct();

           $this->load->model('Cetba_model');
           $this->load->library('ion_auth');
           if (!$this->ion_auth->logged_in())
           {
           	redirect('auth/login', 'refresh');

           }
      }
    public function view(){


            $page = "home";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
               show_404();
            }

            $data['title'] = "Vítejte na mém webu";
            $data['polozky'] = $this->Cetba_model->get_menu_polozky();

            //print_r($data['knihy']);

            $this->load->view('templates/header',$data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
    }

    public function view_b(){

     $books = "books";
     if(!file_exists(APPPATH.'views/pages/'.$books.'.php')){
        show_404();
     }
     $data['polozky'] = $this->Cetba_model->get_menu_polozky();
     $data['title'] = "Přehled autorů a děl";
     $data['knihy'] = $this->Cetba_model->get_knihy();

     //print_r($data['knihy']);
     $this->load->view('templates/header',$data);
     $this->load->view('pages/'.$books, $data);
     $this->load->view('templates/footer');
    }
    public function view_knihy($id){
        $page = "book";
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
         }
        $data['polozky'] = $this->Cetba_model->get_menu_polozky();
        $data['title'] = "Podrobnější popis děl";
        $data["kniha"] = $this->Cetba_model->get_kniha($id);

        $this->load->view('templates/header',$data);
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');
    }

    public function view_a(){

        $page = "autor";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
           show_404();
        }
        $data['polozky'] = $this->Cetba_model->get_menu_polozky();
        $data['title'] = "Autoři";
        $data['autori'] = $this->Cetba_model->get_autori();

        //print_r($data['knihy']);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
       }

       public function view_autori($id){
        $page = "autor_knihy";
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
         }
        $data['polozky'] = $this->Cetba_model->get_menu_polozky();
        $data['title'] = "Autorovo dílo";
        $data["autor"] = $this->Cetba_model->get_id($id);

        $this->load->view('templates/header',$data);
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');
    }
}
