<?php
$soap=new SoapServer(null,array('uri'=>"http://localhost/"));
$soap->addFunction('sayHello');                                                 
$soap->addFunction(SOAP_FUNCTIONS_ALL);
$soap->handle();

function sayHello($str=null) {
    return '成功'. $str;
}