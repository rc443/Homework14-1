<?php
class CategoryDB {
    public function getCategories() {
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  ORDER BY categoryID';
        $result = $db->prepare($query);
        $categories = array();
        $categories = array();
        foreach ($result as $row) {
            $category = new Category(),
	    $cateogry->setID($row['categoryID']);
	    $category->setName($row['categoryName']);
	    $cateogries[] = $category;
        }
        return $categories;
    }

    public function getCategory($category_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  WHERE categoryID = :category_id';    
        $statement = $db->query($query);
        $row = $statement->fetch();
	$cateogry = new Category();
	$category->setID($row['categoryID']);
	$category->setName($row['categoryName']);
	return $category;
    }
}
?>
