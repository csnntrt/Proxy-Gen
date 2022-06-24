<?php
require 'vendor/autoload.php';
use Csnntrt\Proxygen\ProxyController;
$proxy = new ProxyController;

/*
Show Proxy IP
$proxy->res['ip']

Show Proxy Port
$proxy->res['port']

Show Proxy and IP
$proxy->res['ipPort']
*/
?>

<!-- Example -->
<div>
    <p>IP: <?=$proxy->res['ip']?></p>
</div>
<div>
    <p>Port: <?=$proxy->res['port']?></p>
</div>
<div>
    <p>ipPort: <?=$proxy->res['ipPort']?></p>
</div>