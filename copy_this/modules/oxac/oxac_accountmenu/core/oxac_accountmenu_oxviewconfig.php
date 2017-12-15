<?php

namespace OxidEsales\OxidAcademy\AccountMenuModule\Core;

class AccountMenu extends AccountMenu_parent {
	
	/**
	 * Methode für Templating.
	 * 
	 * @return boolean
	 */
	public function displayExtendedAccountmenu()
	{
		$blRet = false;
		
		if (strpos($this->getActiveClassName(), 'account') !== false){
			$blRet = true;
		}
		if (($this->getActiveClassName() == 'content') and (strpos(oxRegistry::getConfig()->getRequestParameter('oxloadid'), 'oxac_my') !== false)){
			$blRet = true;
		}
		
		return $blRet;
	}
	
	public function attachAccountMenu()
	{
		$blRet = true;
		
		if (strpos($this->getActiveClassName(), 'account') !== false){
			$blRet = false;
		}
		
		return $blRet;
	}
}