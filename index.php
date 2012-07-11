<?php
/**
 * User: Oli Griffiths
 * Date: 24/06/2012
 * Time: 13:39
 */

require_once dirname(__FILE__).'/../koowa/load.php';

echo KService::get('tmpl://site/bootstrap')->render();