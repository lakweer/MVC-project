<?php

class CalenderController extends Controller {

  public function __construct($controller,$action){
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
    $this->load_model('Calender');
  }

  public function indexAction(){
    $calender = $this->CalenderModel->findAllByUserId(CurrentUser()->id,['order'=>'title']);
    $this->view->calender = $calender;
    $this->view->render('calender/index');
  }

  public function get_eventsAction(){
    
      $startdt = new DateTime('now'); // setup a local datetime
      $startdt->setTimestamp($start); // Set the date based on timestamp
      $start_format = $startdt->format('Y-m-d H:i:s');
      $enddt = new DateTime('now'); // setup a local datetime
      $enddt->setTimestamp($end); // Set the date based on timestamp
      $end_format = $enddt->format('Y-m-d H:i:s');
      $events = $this->calendar_model->get_events($start_format, $end_format);
      $data_events = array();
      foreach($events->result() as $r) {
          $data_events[] = array(
              "id" => $r->ID,
              "title" => $r->title,
              "description" => $r->description,
              "end" => $r->end,
              "start" => $r->start
          );
      }
      echo json_encode(array("events" => $data_events));
      exit();
  }
  public function add_eventAction(){
    dnd("ssss");
    /* Our calendar data */
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);

    if(!empty($start_date)) {
       $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
       $start_date = $sd->format('Y-m-d H:i:s');
       $start_date_timestamp = $sd->getTimestamp();
    } else {
       $start_date = date("Y-m-d H:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
       $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
       $end_date = $ed->format('Y-m-d H:i:s');
       $end_date_timestamp = $ed->getTimestamp();
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }

    $this->calendar_model->add_event(array(
       "title" => $name,
       "description" => $desc,
       "start" => $start_date,
       "end" => $end_date
       )
    );

    redirect(site_url("calendar"));
}
}