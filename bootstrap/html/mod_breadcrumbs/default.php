<?php // no direct access
defined('_JEXEC') or die('Restricted access');

$menu =& JFactory::getApplication()->getMenu();
$active = $menu->getActive();

if(!$params->get('showLast', 1)) array_pop($list);
$count = count($list);

$dom = new DOMDocument();
$ul = $dom->createElement('ul');
$ul->setAttribute('class','breadcrumb');

foreach($list AS $i => $item)
{
	$options = array();

	$li = $dom->createElement('li');
	if($item->link == $active->link) $li->setAttribute('class','active');
	$ul->appendChild($li);

	$a = $dom->createElement($i < $count-1 ? 'a' : 'span');
	if($item->link && $i < $count-1) $a->setAttribute('href',$item->link);
	$li->appendChild($a);

	$span = $dom->createElement('span', $item->name);
	$span->setAttribute('class','text');
	$a->appendChild($span);

	if($i < $count-1){
		$span = $dom->createElement('span', $separator);
		$span->setAttribute('class','divider');
		$a->appendChild($span);
	}
}


$dom->appendChild($ul);
echo $dom->saveHTML();