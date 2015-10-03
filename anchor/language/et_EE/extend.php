<?php

return array(

	'extend' => 'Laienda',

	'fields' => 'Kohandatud V�ljad',
	'fields_desc' => 'Loo lisav�lju',

	'variables' => 'Saidi Muutujad',
	'variables_desc' => 'Loo lisa metaandmeid',

	'create_field' => 'Loo uus v�li',
	'editing_custom_field' => 'V�lja muutmine &ldquo;%s&rdquo;',
	'nofields_desc' => '�htegi v�lja pole veel',

	'create_variable' => 'Loo uus muutuja',
	'editing_variable' => 'Muutuja muutmine &ldquo;%s&rdquo;',
	'novars_desc' => '�htegi muutujat pole veel�',

	// form fields
	'type' => 'T��p',
	'type_explain' => 'Sisu t��p, millele sa tahad selle v�lja lisada.',

	'field' => 'V�li',
	'field_explain' => 'Html sisendi t��p',

	'key' => 'Unikaalne V�ti',
	'key_explain' => 'Unikaalne v�ti sinu v�ljale',
	'key_missing' => 'Palun sisesta unikaalne v�ti',
	'key_exists' => 'V�ti on juba kasutuses',

	'label' => 'Silt',
	'label_explain' => 'Inim-loetav nimi sinu v�ljale',
	'label_missing' => 'Palun sisesta silt',

	'attribute_type' => 'Failit��bid',
	'attribute_type_explain' => 'Komadega eraldatud loend aktsepteeritud failit��pidest, t�hjana aktsepteerib k�iki.',

	// images
	'attributes_size_width' => 'Pildi maksimaalne laius',
	'attributes_size_width_explain' => 'Piltide suurust muudetakse kui need on suuremad kui maksimaalsuurus.',

	'attributes_size_height' => 'Pildi maksimaalne k�rgus',
	'attributes_size_height_explain' => 'Piltide suurust muudetakse kui need on suuremad kui maksimaalsuurus.',

	// custom vars
	'name' => 'Nimi',
	'name_explain' => 'Unikaalne nimi',
	'name_missing' => 'Palun sisesta unikaalne nimi',
	'name_exists' => 'Nimi on juba kasutuses',

	'value' => 'V��rtus',
	'value_explain' => 'Andmed mida sa soovid salvestada (kuni 64 kb)',
	'value_code_snipet' => 'Koodijupp, mida lisada template\'i:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Sinu muutuja on loodud',
	'variable_updated' => 'Sinu muutuja on uuendatud',
	'variable_deleted' => 'Sinu muutuja on kustutatud',

	'field_created' => 'Sinu v�li on loodud',
	'field_updated' => 'Sinu v�li on uuendatud',
	'field_deleted' => 'Sinu v�li on kustutatud'

);
