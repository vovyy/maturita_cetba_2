<?php
class Cetba_model extends CI_Model {

  public function __construct() {
      parent::__construct();

    $this->load->database();

  }
  //knihy model
  protected $table = 'knihy';
  public function get_knihy()
  {
      $query = $this->db->get($this->table);

      return $query->result();

  }
  //funkce menu

  public function get_menu_polozky(){
      $this->db->select("id_menu, polozka_menu, url");
      $this->db->from("menu");
      $result = $this->db->get()->result();

      return $result;
    /*$this->db->order_by('id');
    $query = $this->db->get($this->menu);

    return $query->result();*/
  }

    public function get_kniha($id){
        $this->db->select("idknihy,nazev_knihy, autor, anotace,kategorie_id_kategorie");
        $this->db->from("knihy");
        $this->db->where("idknihy",$id);

        $result = $this->db->get()->result();
        return $result;
    }

    public function get_autori()
    {
        $this->db->select("autor, nazev_knihy, idknihy");
        $this->db->from("knihy");

        $result = $this->db->get()->result();

        return $result;
    }

    public function get_id($id){
      $this->db->select("nazev_knihy, autor");
      $this->db->from("knihy");
      $this->db->where("idknihy",$id);

      $result = $this->db->get()->result();
      return $result;
  }
  public function insert(){
      $this->load->database();
      $data = array(

          "nazev_knihy" => $this->input->post('nazev_knihy'),
          "autor" => $this->input->post('autor'),
          "anotace" => $this->input->post('anotace'),
          "kategorie_id_kategorie" => $this->input->post('kategorie_id_kategorie')
  );

  if ($this->db->insert('knihy', $data))
  {
    return true;
  }
  else {
    return false;
  }
  }
  protected $tableb = "knihy";

  public function get_ukoly()
  {
      $this->db->select('id, popis, konec, splněno');
  	  $this->db->from('form');
  		//$this->db->where('nakladatel.id', $id);
          $this->db->order_by('id', 'ASC');
         // $this->db->join('kniha', 'nakladatel.id = kniha.nakladatel');
          $resultset = $this->db->get();
          $result =  $resultset->result();

          return $result;
  }
}
