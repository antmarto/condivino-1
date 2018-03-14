<?php
/**
 * @access public
 * @package Foundation
 */
class FCommento extends Fdb {
    public function __construct() {
        $this->_table='commento';
        $this->_key='id';
        $this->_auto_increment=true;
        $this->_return_class='ECommento';
        USingleton::getInstance('Fdb');
    }

    public function store( $object){
        $id = parent::store($object);
        $object->id=$id;
    }

    public function loadCommenti($vinoID){
        $parametri=array();
        $parametri[]=array('vinoID','=',$vinoID);
        $arrayCommenti=parent::search($parametri);
        return $arrayCommenti;
    }
}

?>
