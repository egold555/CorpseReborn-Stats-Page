<?php

$serverVersion = $_GET['v'];
$serverType = $_GET['t'];

switch ($serverVersion) {
    case 'v1_7_R4':
        incJson('version', 'v1_7_R4');
        break;
    case 'v1_8_R1':
        incJson('version', 'v1_8_R1');
        break;
    case 'v1_8_R2':
       incJson('version', 'v1_8_R2');
        break;
    case 'v1_8_R3':
       incJson('version', 'v1_8_R3');
        break;
    case 'v1_9_R1':
       incJson('version', 'v1_9_R1');
        break;
    case 'v1_9_R2':
       incJson('version', 'v1_9_R2');
        break;
    case 'v1_10_R1':
       incJson('version', 'v1_10_R1');
        break;
    case 'v1_11_R1':
       incJson('version', 'v1_11_R1');
        break;
    case 'v1_12_R1':
       incJson('version', 'v1_12_R1');
        break; 
    case 'v1_12_R1':
       incJson('version', 'v1_12_R1');
        break;   
}

switch ($serverType) {
    case 'BUKKIT':
        incJson('software', 'BUKKIT');
        break;
    case 'SPIGOT':
        incJson('software', 'SPIGOT');
        break;
    case 'PAPER_SPIGOT':
       incJson('software', 'PAPER_SPIGOT');
        break;
    case 'TACO_SPIGOT':
       incJson('software', 'TACO_SPIGOT');
        break;
    case 'GLOWSTONE':
       incJson('software', 'GLOWSTONE');
        break;
    case 'SPONGE':
       incJson('software', 'SPONGE');
        break;
    case 'CAULDRON':
       incJson('software', 'CAULDRON');
        break;
    case 'UNKNOWN':
       incJson('software', 'UNKNOWN');
        break; 
}

function incJson($jsonFile, $objToInc){
    
    try{
    
        $jsonString = file_get_contents($jsonFile.'.json');
        $data = json_decode($jsonString, true);

        foreach($data['data'] as $key => $inside){
            if($inside['label'] == $objToInc){
                $data['data'][$key]['value'] = $inside['value'] + 1;
            }
        }


        $newJsonString = json_encode($data);
        file_put_contents($jsonFile.'.json', $newJsonString);
        http_response_code(200);
    
    }catch(Exception $e){
        http_response_code(500);
    }
}

?>