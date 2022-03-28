<?php

return [
    'custom_fields'		        => 'Campos Personalizados',
    'manage'                    => 'Manage',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Sobre conjuntos de campos',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Criptografar o valor deste campo na base de dados',
    'encrypt_field_help'      => 'AVISO: Criptografar um campo torna-o não pesquisável.',
    'encrypted'      	        => 'Criptografado',
    'fieldset'      	        => 'Conjunto de campos',
    'qty_fields'      	      => 'Qtd de campos',
    'fieldsets'      	        => 'Conjuntos de campos',
    'fieldset_name'           => 'Nome do conjunto de campos',
    'field_name'              => 'Nome do campo',
    'field_values'            => 'Valores do campo',
    'field_values_help'       => 'Adicione opções selecionáveis, uma por linha. Linhas em branco que não sejam a primeira linha, serão ignoradas.',
    'field_element'           => 'Elemento do formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato personalizado',
    'field_custom_format_help'     => 'Este campo permite que você use uma expressão regex para validação. Deve começar com "regex:" - por exemplo, para validar que um valor de campo personalizado contém um IMEI válido (15 dígitos numéricos), você usaria <code>regex: / ^ [0-9]{15} $ / </code>.',
    'required'   		          => 'Requerido',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Usado por modelos',
    'order'   		            => 'Ordem',
    'create_fieldset'         => 'Novo conjunto de campos',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Novo conjunto de campos personalizado',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'O valor deste campo é encriptado no banco de dados. Somente usuários administradores podem ver o valor descriptografado',
    'show_in_email'     => 'Incluir o valor desse campo nos e-mails enviados para o usuário? Campos criptografados não podem ser incluídos em emails.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code> :db_column </code> but should be :expected </code>.'
];
