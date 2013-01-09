<?php

class Yarieldis_Holamundo_Model_Saludador extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('holamundo/saludador');
    }
 
    public function construirSaludo($nombre) {
        return 'hola ' . $nombre . '!';
    }

}
