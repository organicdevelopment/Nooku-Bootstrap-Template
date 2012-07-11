<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

if(strpos($params->get('class_sfx'), 'nav') === false) $params->set('class_sfx', $params->get('class_sfx').' nav');

require_once JPATH_ROOT.'/modules/mod_mainmenu/tmpl/default.php';