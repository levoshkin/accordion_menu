<?php

	$dsn = "mysql:dbname=createmenu;host=localhost";
	$db = new PDO($dsn, "root", "");
	
	$sql = "SELECT * FROM menu";
	$data = $db->query($sql)->fetchAll();
	
	function debug($arr)
	{
		echo '<pre>' . print_r($arr, true) . '</pre>';
	}
	
	
	function getTree($data, $parent = 0, $indent = '')
	{
		$tree = [];
		foreach($data as $id => &$node)
		{
			if($node['parent'] == $parent){
				$tree[$node['id']] = &$node;
				$tree[$node['id']]['indent'] .= $indent;
				if(count(getTree($data, $node['id'])))
				$tree[$node['id']]['children'] = getTree($data, $node['id'], $indent . '&nbsp; ');
			}
		}
		return $tree;
	}
	
	$tree = getTree($data);
	
	function getMenuHtml($tree, $style='')
	{
		foreach($tree as $category)
		{
			echo '<li id = "' . $category['id'] . '"' . $style . '"><a href="#" >' . $category['indent'] . $category['name'];
				if(isset($category['children'])){
					echo '<span> [+] </span>';
				}
			echo '</a>';
				if(isset($category['children'])){
					echo '<ul>';
					getMenuHtml($category['children']);
					echo '</ul>';
				}
			echo '</li>';
		}
	}
	
	debug($category);
?>