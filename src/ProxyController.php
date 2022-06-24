<?php
namespace Csnntrt\Proxygen;
class ProxyController {
    
    public $res = [];

    public function __construct()
    {
        $this->gen();
    }

    public function gen(){
        $str = array("0351ecb4-4ede-41b5-bb05-e2a81fbdfed6");
        $api= rand(0, count($str)); 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://gimmeproxy.com/api/getProxy?api_key=$api&protocol=socks5");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $res = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($res);
        $this->res['ip'] = $json->ip;
        $this->res['port'] = $json->port;
        $this->res['ipPort'] = $json->ipPort;
    }
    
}