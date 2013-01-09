<?php

class Yarieldis_Holamundo_Block_Holamundo extends Mage_Core_Block_Abstract {
     
	 public function _prepareLayout()
     {
          return parent::_prepareLayout();
     }
	 
	 protected function _toHtml() {
		$input = $this->getRequest()->getParam("nombre");
		$name = $input ? $input : "Desconocido";
		$saludador = Mage::getSingleton('holamundo/saludador');
		$saludo = $saludador->construirSaludo($name);
		return "<h1>$saludo</h1>";
     }
}
