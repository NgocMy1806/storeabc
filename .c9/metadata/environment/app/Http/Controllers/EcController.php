{"filter":false,"title":"EcController.php","tooltip":"/app/Http/Controllers/EcController.php","undoManager":{"mark":25,"position":25,"stack":[[{"start":{"row":44,"column":8},"end":{"row":44,"column":11},"action":"remove","lines":["// "],"id":2}],[{"start":{"row":44,"column":8},"end":{"row":44,"column":11},"action":"insert","lines":["// "],"id":3}],[{"start":{"row":16,"column":37},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["use Aws\\InstanceMetadata\\InstanceMetadataClient;",""],"id":5}],[{"start":{"row":50,"column":0},"end":{"row":52,"column":0},"action":"insert","lines":["$metadataClient = new InstanceMetadataClient();","$instanceId = $metadataClient->getInstanceId();",""],"id":6}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":8}],[{"start":{"row":50,"column":4},"end":{"row":50,"column":8},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "],"id":10}],[{"start":{"row":51,"column":4},"end":{"row":51,"column":8},"action":"insert","lines":["    "],"id":11}],[{"start":{"row":58,"column":45},"end":{"row":58,"column":46},"action":"insert","lines":[","],"id":12}],[{"start":{"row":58,"column":46},"end":{"row":59,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":59,"column":0},"end":{"row":59,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":59,"column":16},"end":{"row":59,"column":27},"action":"insert","lines":["$instanceId"],"id":14}],[{"start":{"row":59,"column":16},"end":{"row":59,"column":17},"action":"remove","lines":["$"],"id":15}],[{"start":{"row":59,"column":16},"end":{"row":59,"column":17},"action":"insert","lines":["'"],"id":16}],[{"start":{"row":59,"column":27},"end":{"row":59,"column":28},"action":"insert","lines":["'"],"id":17},{"start":{"row":59,"column":28},"end":{"row":59,"column":29},"action":"insert","lines":["="]},{"start":{"row":59,"column":29},"end":{"row":59,"column":30},"action":"insert","lines":[">"]}],[{"start":{"row":59,"column":30},"end":{"row":59,"column":41},"action":"insert","lines":["$instanceId"],"id":18}],[{"start":{"row":50,"column":8},"end":{"row":51,"column":55},"action":"remove","lines":["$metadataClient = new InstanceMetadataClient();","        $instanceId = $metadataClient->getInstanceId();"],"id":19},{"start":{"row":50,"column":8},"end":{"row":51,"column":0},"action":"insert","lines":["$instanceId = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');",""]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":48},"action":"remove","lines":["use Aws\\InstanceMetadata\\InstanceMetadataClient;"],"id":20}],[{"start":{"row":59,"column":41},"end":{"row":59,"column":42},"action":"insert","lines":["?"],"id":21}],[{"start":{"row":59,"column":42},"end":{"row":59,"column":44},"action":"insert","lines":["''"],"id":22}],[{"start":{"row":59,"column":42},"end":{"row":59,"column":44},"action":"remove","lines":["''"],"id":23},{"start":{"row":59,"column":41},"end":{"row":59,"column":42},"action":"remove","lines":["?"]}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"remove","lines":["    "],"id":24},{"start":{"row":51,"column":0},"end":{"row":52,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":50,"column":8},"end":{"row":50,"column":95},"action":"remove","lines":["$instanceId = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');"],"id":25},{"start":{"row":50,"column":8},"end":{"row":54,"column":1},"action":"insert","lines":["if (config('app.env') !== 'local') {","    $instanceId = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');","} else {","    $instanceId = null;","}"]}],[{"start":{"row":50,"column":20},"end":{"row":50,"column":27},"action":"remove","lines":["app.env"],"id":26},{"start":{"row":50,"column":20},"end":{"row":50,"column":21},"action":"insert","lines":["A"]},{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"insert","lines":["P"]},{"start":{"row":50,"column":22},"end":{"row":50,"column":23},"action":"insert","lines":["P"]},{"start":{"row":50,"column":23},"end":{"row":50,"column":24},"action":"insert","lines":["_"]}],[{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"insert","lines":["E"],"id":27},{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["N"]},{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":["V"]}]]},"ace":{"folds":[],"scrolltop":4810.5,"scrollleft":0,"selection":{"start":{"row":56,"column":7},"end":{"row":64,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":28,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1686279555678,"hash":"f7e55653383b016e60ffb63d693068644e2592b4"}