<?php

require_once NEWS_ADMIN_ROOT . '/Entity/NewsCategoryTableRow.php';
require_once NEWS_ADMIN_ROOT . '../core/classes/Connection.php';

class NewsCategoryTable
{
    /**
     * @var string
     */
    private $dbTable;

    public function __construct()
    {
        $this->dbTable = 'news_categories';
    }

    public function getNewsCategories()
    {
        $statement = Connection::getConnection()->prepare('SELECT id, title FROM ' . $this->dbTable);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();

        $newsCategories = [];
        foreach ($result as $item){
            $newsCategory = new NewsCategoryTableRow();
            $newsCategory->setId($item['id']);
            $newsCategory->setTitle($item['title']);
            $newsCategories[] = $newsCategory;
        }
        return $newsCategories;

    }
/*
    public function deleteStudent($studentId)
    {
        $statement = $this->dbConnection->getConnection()->prepare('DELETE FROM ' . $this->dbTable . ' WHERE id=' . $studentId);
        $statement->execute();

    }
*/
}