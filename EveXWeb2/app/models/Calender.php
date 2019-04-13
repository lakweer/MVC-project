<?php

class Calender extends Model {
    public $id,$user_id,$title,$start,$end;

    public function __construct(){
        $table = 'calender';
        parent::__construct($table);
        $this->_softDelete = true;
      }
    public function get_events($start, $end){
        return $this->_db->find($start, $end);
    }
    public function add_event($params){
        $this->_db->insert($params);
    }
    public function get_event($id){
        return $this->_db->findFirst($id);
    }
    public function update_event($id, $params){
        $this->_db->update($id, $params);
    }
    public function delete_event($id){
        $this->_db->delete($id);
    }

    public function findAllByUserId($user_id, $params=[]){
        $conditions = [
          'conditions' => 'user_id = ?',
          'bind' => [$user_id]
        ];
        $conditions = array_merge($conditions,$params);
        return $this->find($conditions);
      }
}