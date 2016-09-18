<?php

class cexApi {
	private $username;
	private $api_key;
	private $api_secret;
	private $nonce_v;

	/**
	 * Create cexapi object
	 * @param string $username
	 * @param string $api_key
	 * @param string $api_secret
	 */
	public function __construct($username, $api_key, $api_secret) {
		$this->username = $username;
		$this->api_key = $api_key;
		$this->api_secret = $api_secret;
		$this->nonce();
	}

	/**
	 * Create signature for API call validation
	 * @return string hash
	 */
	private function signature() {
		$string = $this->nonce_v . $this->username . $this->api_key; //Create string
		$hash = hash_hmac('sha256', $string, $this->api_secret); //Create hash
		$hash = strtoupper($hash);
	   
	   return $hash;
	}
	 
	/**
	 * Set nonce as timestamp
	 */
	private function nonce() {
		$this->nonce_v = round(microtime(true)*100);
	}
	 
	/**
	 * Send post request to Cex.io API.
	 * @param string $url
	 * @param array $param
	 * @return array JSON results
	 */
	private function post($url, $param = array()) {
		$post = '';
		if (!empty($param)) {
	    	foreach($param as $k => $v) {
				$post .= $k . '=' . $v . '&'; //Dirty, but work
	    	}
	    	
			$post = substr($post, 0, strlen($post)-1);
		}
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'phpAPI');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$out = curl_exec($ch);
		
		if (curl_errno($ch)) {
			trigger_error("cURL failed. Error #".curl_errno($ch).": ".curl_error($ch), E_USER_ERROR);
		}
		
		curl_close($ch);	
		
		return $out;
	} 
	
	 
	public function api_call($method, $param = array(), $private = false, $couple = '') {
	   $url = "https://cex.io/api/$method"; //Create url
	   
		if ($couple !== '') {
			$url .= "$couple/"; //set couple if needed
		}
		
		if ($private === true) { //Create param
			$param = array_merge(array(
					'key' => $this->api_key,
					'signature' => $this->signature(),
					'nonce' => $this->nonce_v++), $param);
	    }
		
	    $answer = $this->post($url, $param);
		$answer = json_decode($answer, true);
	   
		return $answer;
	}

	public function get_myfee() {
		return $this->api_call('get_myfee', array(), true, $couple);
	} 
	
	/**
	 * Get the current bids and asks for the given pair, or 'GHS/BTC' by default.
	 * @param string $couple
	 * @return array JSON results
	 */
	public function order_book($couple = 'GHS/BTC') {
		return $this->api_call('order_book/', array(), false, $couple);
	}
	
	/**
	 * Get the current trade history for the given pair, or 'GHS/BTC' by default.
	 * @param int $since
	 * @param string $couple
	 * @return array JSON results
	 */
	public function trade_history($since = 1, $couple = 'GHS/BTC') {
		return $this->api_call('trade_history/', array("since" => $since), false, $couple);
	}
	
	/**
	 * Get the current account balance.
	 * @return array JSON results
	 */
	public function balance() {
		return $this->api_call('balance/', array(), true);
	}
	
	/**
	 * Get the current account open orders for the given pair, or 'GHS/BTC' by default.
	 * @param string $couple
	 * @return array JSON results
	 */
	public function open_orders($couple = 'GHS/BTC') {
		return $this->api_call('open_orders/', array(), true, $couple);
	}
	
	/**
	 * Cancel the given order for the account.
	 * @param int $order_id
	 * @return boolean success
	 */
	public function cancel_order($order_id) {    // required
		return $this->api_call('cancel_order/', array("id" => $order_id), true);
	}
	
	/**
	 * Place an order, with the given type, amount, price, and pair. Defaults to Buying 'GHS/BTC'.
	 * @param string $ptype
	 * @param float $amount
	 * @param float $price
	 * @param string $couple
	 * @return array JSON order data
	 */
	public function place_order($ptype = 'buy', $amount = 1, $price = 1, $couple = 'GHS/BTC') {
		return $this->api_call('place_order/', array(
			"type" => $ptype,
	    	"amount" => $amount,
			"price" => $price), true, $couple);
	}
	
}

?>
