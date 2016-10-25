<?php

require_once NEWS_ADMIN_ROOT . '../core/Model/NewsCategoryTable.php';
require_once NEWS_ADMIN_ROOT . '../core/classes/View.php';

class NewsCategoryController
{
    public function listAction()
    {
        $newsCategoryTable = new NewsCategoryTable();
        $newsCategories = $newsCategoryTable->getNewsCategories();

        $view = new View('NewsCategory/List');
        $view->assign('newsCategories', $newsCategories);

        return $view;
    }

    public function creatAction($data)
    {

    }

    public function updateAction($id, $data)
    {

    }

    public function deleteAction($id)
    {

    }
}