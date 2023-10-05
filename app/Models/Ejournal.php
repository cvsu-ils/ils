<?php

namespace IntegratedLibrarySystem\App\Models;

use InfinityBrackets\Exceptional\Model;
use InfinityBrackets\Exceptional\ExceptionalDatabase;
use IntegratedLibrarySystem\App\Models\Category;
use IntegratedLibrarySystem\App\Models\EbookOpenAccessCategory;
use IntegratedLibrarySystem\App\Models\EbookOpenAccessCover;
use InfinityBrackets\Core\Application;

class Ejournal extends Model {
    protected string $application = ExceptionalDatabase::ControlCenter;
    protected string $table = 'ejournal_open_access';

    public function GetEjournals($queryString = NULL, $category = NULL, $order = 'newest') {
        $params = [];
        if(!is_null($queryString)) {
            $queryString = " WHERE (`a`.`title` LIKE '%" . $queryString . "%' OR `a`.`issn` LIKE '%" . $queryString . "%')";
        }
        if(!is_null($category)) {
            if(!is_null($queryString)) {
                $queryString .= " AND ";
            } else {
                $queryString .= " WHERE ";
            }
            $queryString .= " `b`.`category_id` = :in_category_id";
            $params['in_category_id'] = $category;
        }
        $orderBy = "ORDER BY `a`.`created_at` DESC";
        switch($order) {
            default:
            case "newest":
                $orderBy = "ORDER BY `a`.`created_at` DESC";
                break;
            case "oldest":
                $orderBy = "ORDER BY `a`.`created_at` ASC";
                break;
            case "title":
                $orderBy = "ORDER BY `a`.`title` ASC";
                break;
            case "titleReverse":
                $orderBy = "ORDER BY `a`.`title` DESC";
                break;
        }

        $data = $this->Select("SELECT `a`.`id`, `a`.`title`, `a`.`active`, `a`.`cover_source`, `a`.`cover_type`, `b`.`category_id`, group_concat(DISTINCT `c`.`name` separator ', ') as `category` FROM `" . $this->table . "` `a` LEFT JOIN `ejoa_categories` `b` ON `a`.`id` = `b`.`ejoa_id` LEFT JOIN `mf_categories` `c` ON `b`.`category_id` = `c`.`id` " . $queryString . " GROUP BY `a`.`accession_no` " . $orderBy, $params)->Get();
        
        $count = count($data);

        return Application::$app->ToObject(['data' => $data, 'count' => $count]);
    }

    public function GetEjournal($id) {
        $data = $this->SelectOne("SELECT `ejoa`.`id` `ID`, `ejoa`.`accession_no` `ACCESSION_NO`,`ejoa`.`title` `TITLE`,`ejoa`.`issn` `ISSN`, `mf_pub`.`name` `PUBLISHER`, `ejoa`.`publication_year_from` `YEAR_PUBLICATION_FROM`, `ejoa`.`publication_year_to` `YEAR_PUBLICATION_TO`, group_concat(`mf_cat`.`name` separator '|') `CATEGORY`, `mf_class`.`code` `CLASS`, `mf_class`.`description` `CLASS_DESCRIPTION`, `mf_subclass`.`code` `SUBCLASS`, `mf_subclass`.`description` `SUBCLASS_DESCRIPTION`, `ejoa`.`link` `LINK`, `ejoa`.`journal_description` `JOURNAL_DESCRIPTION`, `ejoa`.`encoded_by` `ENCODER`, `ejoa`.`cover_source` `COVER_SOURCE`, `ejoa`.`created_at` `CREATED_AT`,`ejoa`.`updated_at` `UPDATED_AT` FROM `ejournal_open_access` `ejoa` LEFT JOIN `mf_publishers` `mf_pub` ON `ejoa`.`publisher_id` = `mf_pub`.`id` LEFT JOIN `ejoa_categories` `ejoa_cat` ON `ejoa`.`id` = `ejoa_cat`.`ejoa_id` LEFT JOIN `mf_categories` `mf_cat` ON `ejoa_cat`.`category_id` = `mf_cat`.`id` LEFT JOIN `mf_loc_subclasses` `mf_subclass` ON `mf_subclass`.`id` = `ejoa`.`subclass_id` LEFT JOIN `mf_loc_classes` `mf_class` ON `mf_subclass`.`class_id` = `mf_class`.`id` WHERE `ejoa`.`id` = :in_id AND `ejoa`.`active` = 1 GROUP BY `ejoa`.`id`", ['in_id' => $id])->Get();

        if($data['COVER_SOURCE'] == 'default.jpg') {
            $data['COVER_SOURCE'] = 'storage/images/modules/e-journals.jpg';
        }
        if($data['CATEGORY']) {
            $categories = explode('|', $data['CATEGORY']);
            $data['CATEGORY'] = $categories;
        }
        return Application::$app->ToObject($data);
    }

    public function GetCover($id) {
        $model = new EbookOpenAccessCover();
        $cover = $model->Where('eoa_id', $id)->ToObject();
        if($cover) {
            if($cover->type != 'DEFAULT') {
                return $cover->source;
            }
        }
        return 'storage/images/modules/e-journals.jpg';
    }

    public function GetCategory($id) {
        $model = new EbookOpenAccessCategory();
        $category = $model->Where('eoa_id', $id)->ToObject();
        if($category) {
            $modelCategory = new Category();
            $masterCategory = $modelCategory->Find($category->category_id)->ToObject();
            return $masterCategory->name;
        }
        return FALSE;
    }
}