<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'DAO' => 'Ubiquity\\orm\\DAO',
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
  'UResponse' => 'Ubiquity\\utils\\http\\UResponse',
  'USession' => 'Ubiquity\\utils\\http\\USession',
  'inscription' => 'models\\inscription',
),
  '#traitMethodOverrides' => array (
  'controllers\\InscriptionControllers' => 
  array (
  ),
),
);

