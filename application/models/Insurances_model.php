<?php
class Insurances_model extends CI_model {

  public function __construct(){
    $this->load->database();
  }

  public function set_insurance(){
    $this->load->helper('url');

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
      'quadrant_top_left' => $this->input->post('quadrant_top_left'),
      'quadrant_bottom_left' => $this->input->post('quadrant_bottom_left'),
      'quadrant_top_right' => $this->input->post('quadrant_top_right'),
      'quadrant_bottom_right' => $this->input->post('quadrant_bottom_right'),
      'treatment_implant' => $this->input->post('treatment_implant'),
      'treatment_crowns' => $this->input->post('treatment_crowns'),
      'treatment_inlay' => $this->input->post('treatment_inlay'),
      'treatment_veneers' => $this->input->post('treatment_veneers'),
      'treatment_partial_dentures' => $this->input->post('treatment_partial_dentures'),
      'treatment_removable_dentures' => $this->input->post('treatment_removable_dentures'),
      'treatment_complete_dentures' => $this->input->post('treatment_complete_dentures'),
      'treatment_composite_fillings' => $this->input->post('treatment_composite_fillings'),
      'treatment_ot_cap' => $this->input->post('treatment_ot_cap'),
      'treatment_other' => $this->input->post('treatment_other')
    );

    return $this->db->insert('patients', $data);
  }

}
