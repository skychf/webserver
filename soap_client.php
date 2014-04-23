<?php
try{
    //$client=new SoapClient("http://172.17.52.158:8080/wb/wb/monitorPointService?wsdl");
		
	$client=new SoapClient(null,
        array('location'=>"http://localhost/test/soap_server.php",'uri'=>"http://127.0.0.1/")
    );

    $a = $client->sayHello('asdf');

	var_dump($a);

}catch (SoapFault $fault){
    echo"Error: ",$fault->faultcode,", string: ",$fault->faultstring;
}