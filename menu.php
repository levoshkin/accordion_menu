<?php

	$dsn = "mysql:dbname=createmenu;host=localhost;charset=utf8";
	$db = new PDO($dsn, "root", "");
	
	$sql = "SELECT * FROM menu";
	$data = $db->query($sql)->fetchAll();
	
	function getTree($data, $parent = 0)
	{
		$tree = array();
		foreach($data as $id => &$node)
		{
			if($node['parent'] == $parent){
				$tree[$node['id']] = &$node;
				if(count(getTree($data, $node['id'])))
					$tree[$node['id']]['children'] = getTree($data, $node['id']);
			}
		}
		return $tree;
	}
	
	$tree = getTree($data);
	
	function getMenuHtml($tree)
	{
		foreach($tree as $category)
		{
			echo '<li id = "' . $category['id'] . '"><a href="#" >' . $category['name'];
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
?>