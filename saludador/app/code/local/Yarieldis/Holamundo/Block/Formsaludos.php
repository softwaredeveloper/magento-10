<?php

class Yarieldis_Holamundo_Block_Formsaludos extends Mage_Core_Block_Template {

     public function _prepareLayout()
     {
          return parent::_prepareLayout();
     }
	 
     public function construirSaludo() {
          $input = $this->getRequest()->getParam("nombre");
          $name = $input ? $input : "Desconocido";
		  return Mage::getSingleton("holamundo/saludador")->construirSaludo($name);
     }
	 
}
