<?php
function keep_fields($data, $fields_to_keep, $current_field = "") {
    if(!is_array($data)) {
        return $data;
    }
    foreach ($data as $key => &$value) {
        $field = ($current_field === "") ? $key : $current_field . "." . $key;
        if (!in_array($field, $fields_to_keep)) {
            unset($data[$key]);
        } else {
            if(is_array($value)) {
                $value = keep_fields($value, $fields_to_keep, $field);
            }
        }
    }
    return $data;
}
$fields_to_keep = array("code", "product", "_keywords", "_keywords.0", "_keywords.1", "_keywords.2", "_keywords.3","_keywords.4","_keywords.5","_keywords.6","_keywords.7","_keywords.8","_keywords.9","_keywords.10", "_keywords.11", "_keywords.12", "_keywords.13", "_keywords.14", "_keywords.15", "_keywords.16", "_keywords.17", "_keywords.18", "_keywords.19", "_keywords.20", "_keywords.21", "_keywords.22", "_keywords.23", "_keywords.24", "_keywords.25", "_keywords.26", "_keywords.27", "_keywords.28", "_keywords.29", "_keywords.30", "brands", "brands_tags", "carbon_footprint_percent_of_known_ingredients", "categories", "categories_hierarchy", "ecoscore_data", "ecoscore_data.agribalyse", "ecoscore_data.agribalyse.co2_agriculture", "ecoscore_data.agribalyse.co2_consumption", "ecoscore_data.agribalyse.co2_distrubution","ecoscore_data.agribalyse.co2_packaging", "ecoscore_data.agribalyse.co2_processing", "ecoscore_data.agribalyse.co2_total", "ecoscore_data.agribalyse.co2_transportation", "ecoscore_data.agribalyse.score", "image_front_url", "generic_name", "generic_name_en", "generic_name_nl", "serving_size", "serving_quantity");

$file = fopen("./db.jsonl", "r");
$new_json = "[";

while(!feof($file)) {
    $line = fgets($file);
    $product = json_decode($line, true);
    $product = keep_fields($product, $fields_to_keep);
    $new_json .= json_encode($product) . ",";
}

$new_json = rtrim($new_json, ",");
$new_json .= "]";

fclose($file);
file_put_contents("./db.jsonl", $new_json);
?>

