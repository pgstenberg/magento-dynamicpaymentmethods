<?php
class Stonepath_DynamicPaymentMethods_Helper_Data extends Mage_Core_Helper_Abstract
{


	public function getPaymentMethodCodes(){
		$payments = Mage::getSingleton('payment/config')->getActiveMethods();
		$payMethods = array();
		foreach ($payments as $paymentCode=>$paymentModel) 
		{
    		$payMethods[] = $paymentCode;
		}
		return $payMethods;
	}
	
	public function getShippingCodes(){
		$methods = Mage::getSingleton('shipping/config')->getActiveCarriers();
		$shipMethods = array();
		foreach ($methods as $shippigCode=>$shippingModel) 
		{
    		$shipMethods[] = $shippigCode;
		}
		return $shipMethods;
	}	
}
	 