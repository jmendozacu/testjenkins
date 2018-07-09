<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\DataObject\GridColumnConfig\Service' shared autowired service.

return $this->services['Pimcore\DataObject\GridColumnConfig\Service'] = new \Pimcore\DataObject\GridColumnConfig\Service(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Anonymizer' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.anonymizer']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.anonymizer'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.anonymizer'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Anonymizer')) && false ?: '_'};
}, 'AnyGetter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.any_getter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.any_getter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.any_getter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\AnyGetter')) && false ?: '_'};
}, 'Arithmetic' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.arithmetic']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.arithmetic'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.arithmetic'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Arithmetic')) && false ?: '_'};
}, 'AssetMetadataGetter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.asset_metadata_getter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.asset_metadata_getter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.asset_metadata_getter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\AssetMetadataGetter')) && false ?: '_'};
}, 'Base64' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.base64']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.base64'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.base64'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Base64')) && false ?: '_'};
}, 'Boolean' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.boolean']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.boolean'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.boolean'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Boolean')) && false ?: '_'};
}, 'BooleanFormatter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.boolean_formatter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.boolean_formatter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.boolean_formatter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\BooleanFormatter')) && false ?: '_'};
}, 'CaseConverter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.case_converter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.case_converter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.case_converter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\CaseConverter')) && false ?: '_'};
}, 'CharCounter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.char_counter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.char_counter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.char_counter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\CharCounter')) && false ?: '_'};
}, 'Concatenator' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.concatenator']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.concatenator'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.concatenator'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Concatenator')) && false ?: '_'};
}, 'DateFormatter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.date_formatter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.date_formatter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.date_formatter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\DateFormatter')) && false ?: '_'};
}, 'ElementCounter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.element_counter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.element_counter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.element_counter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\ElementCounter')) && false ?: '_'};
}, 'FieldCollectionGetter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.field_collection_getter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.field_collection_getter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.field_collection_getter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\FieldCollectionGetter')) && false ?: '_'};
}, 'IsEqual' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.is_equal']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.is_equal'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.is_equal'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\IsEqual')) && false ?: '_'};
}, 'JSON' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.json']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.json'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.json'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\JSON')) && false ?: '_'};
}, 'LFExpander' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.lf_expander']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.lf_expander'] : $this->load('getPimcore_DataObject_GridColumnConfig_Operator_Factory_LfExpanderService.php')) && false ?: '_'};
}, 'LocaleSwitcher' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.locale_switcher']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.locale_switcher'] : $this->load('getPimcore_DataObject_GridColumnConfig_Operator_Factory_LocaleSwitcherService.php')) && false ?: '_'};
}, 'Merge' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.merge']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.merge'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.merge'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Merge')) && false ?: '_'};
}, 'ObjectBrickGetter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.object_brick_getter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.object_brick_getter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.object_brick_getter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\ObjectBrickGetter')) && false ?: '_'};
}, 'ObjectFieldGetter' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.object_field_getter']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.object_field_getter'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.object_field_getter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\ObjectFieldGetter')) && false ?: '_'};
}, 'PHP' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.php']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.php'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.php'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\PHP')) && false ?: '_'};
}, 'PHPCode' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.php_code']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.php_code'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.php_code'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\PHPCode')) && false ?: '_'};
}, 'RequiredBy' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.required_by']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.required_by'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.required_by'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\RequiredBy')) && false ?: '_'};
}, 'StringContains' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.string_contains']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.string_contains'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.string_contains'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\StringContains')) && false ?: '_'};
}, 'StringReplace' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.string_replace']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.string_replace'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.string_replace'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\StringReplace')) && false ?: '_'};
}, 'Substring' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.substring']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.substring'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.substring'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Substring')) && false ?: '_'};
}, 'Text' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.text']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.text'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.text'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Text')) && false ?: '_'};
}, 'TranslateValue' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.translate_value']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.translate_value'] : $this->load('getPimcore_DataObject_GridColumnConfig_Operator_Factory_TranslateValueService.php')) && false ?: '_'};
}, 'Trimmer' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.operator.factory.trimmer']) ? $this->services['pimcore.data_object.grid_column_config.operator.factory.trimmer'] : $this->services['pimcore.data_object.grid_column_config.operator.factory.trimmer'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\Trimmer')) && false ?: '_'};
})), new \Symfony\Component\DependencyInjection\ServiceLocator(array('Date' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.value.factory.date']) ? $this->services['pimcore.data_object.grid_column_config.value.factory.date'] : $this->services['pimcore.data_object.grid_column_config.value.factory.date'] = new \Pimcore\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory('Pimcore\\DataObject\\GridColumnConfig\\Value\\Date')) && false ?: '_'};
}, 'DateTime' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.value.factory.datetime']) ? $this->services['pimcore.data_object.grid_column_config.value.factory.datetime'] : $this->services['pimcore.data_object.grid_column_config.value.factory.datetime'] = new \Pimcore\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory('Pimcore\\DataObject\\GridColumnConfig\\Value\\DateTime')) && false ?: '_'};
}, 'DefaultValue' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.value.factory.default']) ? $this->services['pimcore.data_object.grid_column_config.value.factory.default'] : $this->services['pimcore.data_object.grid_column_config.value.factory.default'] = new \Pimcore\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory('Pimcore\\DataObject\\GridColumnConfig\\Value\\DefaultValue')) && false ?: '_'};
}, 'Href' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.value.factory.href']) ? $this->services['pimcore.data_object.grid_column_config.value.factory.href'] : $this->services['pimcore.data_object.grid_column_config.value.factory.href'] = new \Pimcore\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory('Pimcore\\DataObject\\GridColumnConfig\\Value\\Href')) && false ?: '_'};
}, 'Objects' => function () {
    return ${($_ = isset($this->services['pimcore.data_object.grid_column_config.value.factory.objects']) ? $this->services['pimcore.data_object.grid_column_config.value.factory.objects'] : $this->services['pimcore.data_object.grid_column_config.value.factory.objects'] = new \Pimcore\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory('Pimcore\\DataObject\\GridColumnConfig\\Value\\Objects')) && false ?: '_'};
})));
