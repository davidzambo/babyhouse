<?php
class Insurances_model extends CI_model {

  public function __construct(){
    $this->load->database();
  }

  public function set_insurance(){
    $this->load->helper('url');

    $data['quadrants'] = implode(",", $this->input->post('quadrants'));
    $data['treatment_type'] = implode(",", $this->input->post('treatment_type'));

    $data = array(
      'personal_title' => $this->input->post('personal_title'),
      'last_name' => $this->input->post('last_name'),
      'first_name' => $this->input->post('first_name'),
      'birth_date' => $this->input->post('birth_date_year').'/'.
                      $this->input->post('birth_date_month').'/'.
                      $this->input->post('birth_date_day'),
      'country' => $this->input->post('country_select'),
      'treatment_date' => $this->input->post('treatment_date_year').'/'.
                          $this->input->post('treatment_date_month').'/'.
                          $this->input->post('treatment_date_day'),
      'treatment_id_number' => $this->input->post('treatment_id_number'),
      'treatment_finish_date' => $this->input->post('treatment_finish_date_year').'/'.
                                 $this->input->post('treatment_finish_date_month').'/'.
                                 $this->input->post('treatment_finish_date_day'),
      'quadrants' => $data['quadrants'],
      'treatment_type' => $data['treatment_type']
    );

    return $this->db->insert('patients', $data);
  }


  public function is_insurance_offer_code_unique($temporary_code){
    $this->load->helper('url');

    $this->db->select('*');
    $this->db->from('patients');
    $this->db->where('insurance_offer_code',$temporary_code);
    $query = $this->db->get();

    return $query->num_rows();
  }



}
