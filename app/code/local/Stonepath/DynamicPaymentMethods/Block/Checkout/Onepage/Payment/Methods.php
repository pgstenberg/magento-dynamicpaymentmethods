<?php
class Stonepath_DynamicPaymentMethods_Block_Checkout_Onepage_Payment_Methods extends Mage_Checkout_Block_Onepage_Payment_Methods
{

	/**
	*
	*	MAP-STRUCTURE:
	*		payment_method (root)
	*			customer_groups (array, *=all)
	*			shipping_methods (array, *=all)
	*		
	*
	*	CODES:
	*		payment_methods: p_method_checkmo,p_method_ccsave
	* 		shipping_methods: flatrate_flatrate
	*/

	public function getMethods(){
		$parent_methods = parent::getMethods();
		$method_constrains = json_decode(Mage::getStoreConfig('payment/dynamicpm/dynamicpmmap'),true);
		
		$return_methods = array();
		
		foreach($parent_methods as $method){
			if(self::validMethod($method,$method_constrains))
				$return_methods[] = $method;
		}
		
		return $return_methods;
	}

	private function validMethod($method, $method_constrains){
		
		if(!array_key_exists($method->getCode(), $method_constrains))
			return false;
		
		if(!in_array(Mage::getSingleton('customer/session')->getCustomerGroupId(),$method_constrains[$method->getCode()]['customer_groups']))
			return false;
		
		if(!in_array(explode("_",Mage::app()->getRequest()->getParam('shipping_method'))[0],$method_constrains[$method->getCode()]['shipping_methods']))
			return false;
		
		
		return true;
	}
}
			