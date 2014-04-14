<?php
defined('_JEXEC') or die;

class PlgSystemZukucountry extends JPlugin
{
	protected $app;

	public function onAfterInitialise(){
		$realIP = PlgSystemZukucountry::getRealIpAddr();
		
		//Bypass Real IP, Remove this after uploading
		//Tanzania
		$realIP = "196.41.61.247";

		//Kenya
		//$realIP = "41.206.47.14";

		//Uganda
		//$realIP = "41.190.128.0";

		//Malawi
		//$realIP = "41.221.96.0";

		$locatoionurl = "http://www.geoplugin.net/xml.gp?ip=".trim($realIP);

	   	if( @$xml=simplexml_load_file($locatoionurl) ){
	   		$country = explode(' ',trim($xml->geoplugin_countryName));
			$country = preg_replace("/[^A-Za-z0-9 ]/", '', $country[0]);

			JRequest::setVar("country", trim($country));
			
		   	if ( $country = "Tanzania"){
		   		JRequest::setVar("language","Swahili");
		   	}else{
		   		JRequest::setVar("language","English");
		   	}

		   	JRequest::setVar("currency",trim($xml->geoplugin_currencySymbol));
	   	}else{
	   		JRequest::setVar("country", "Kenya");
			JRequest::setVar("language","English");
		   	JRequest::setVar("currency", "KSH");
			
	   	}
	   	
		
		
		//Debug Purpose
		/*foreach ($xml as $key => $value)
		{
		    echo $key , "= " , $value ,  " \n" ;
		}
		*/
	}

	public function getRealIpAddr(){
	   $ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');
		return $ip;
	}
}
