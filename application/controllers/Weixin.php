<?php
class WeixinController extends Base\ApplicationController {

        public function indexAction() {
                $echoStr = $_GET["echostr"];
                if($this->checkSignature()){
                echo $echoStr;
                exit;
        }
        exit();
        }

        private function checkSignature(){
            $signature = $_GET["signature"];
            $timestamp = $_GET["timestamp"];
            $nonce = $_GET["nonce"];

            $token = 'weixin';
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
                return true;
            }else{
                return false;
            }
        }
}
