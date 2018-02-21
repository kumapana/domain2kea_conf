<?php

try{
    if(empty($argv[1])){
        throw new Exception("第一引数が入力されていません。");
    }
    else{
        $domain = $argv[1];
    }
}catch(Exception $e){
    print $e->getMessage();
    die();
}

$fqdn = explode(".", $domain);

#print count($fqdn);
for($i=0;$i<count($fqdn);$i++){
    print sprintf("%'.02d", strlen($fqdn[$i]));
    print bin2hex($fqdn[$i]);
}
print "00\n";
?>
