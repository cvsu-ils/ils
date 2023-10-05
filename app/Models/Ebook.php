<?php

namespace IntegratedLibrarySystem\App\Models;

use InfinityBrackets\Exceptional\Model;
use InfinityBrackets\Exceptional\ExceptionalDatabase;
use IntegratedLibrarySystem\App\Models\Category;
use IntegratedLibrarySystem\App\Models\EbookOpenAccessCategory;
use IntegratedLibrarySystem\App\Models\EbookOpenAccessCover;
use InfinityBrackets\Core\Application;

class Ebook extends Model {
    protected string $application = ExceptionalDatabase::ControlCenter;
    protected string $table = 'ebook_open_access';

    public function GetEbooks($queryString = NULL, $category = NULL, $order = 'newest') {
        $params = [];
        if(!is_null($queryString)) {
            $queryString = " WHERE (`a`.`title` LIKE '%" . $queryString . "%' OR `a`.`isbn` LIKE '%" . $queryString . "%' OR `f`.`name` LIKE '%" . $queryString . "%' OR `h`.`name` LIKE '%" . $queryString . "%')";
        }
        if(!is_null($category)) {
            if(!is_null($queryString)) {
                $queryString .= " AND ";
            } else {
                $queryString .= " WHERE ";
            }
            $queryString .= " `c`.`category_id` = :in_category_id";
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

        // $data = $this->Select("SELECT `a`.`id`, `a`.`title`, `a`.`active`, `b`.`source`, `b`.`type`, `c`.`category_id`, GROUP_CONCAT(DISTINCT `d`.`name` separator '|') `category` FROM `ebook_open_access` `a` LEFT JOIN `eoa_covers` `b` ON `a`.`id` = `b`.`eoa_id` LEFT JOIN `eoa_categories` `c` ON `a`.`id` = `c`.`eoa_id` LEFT JOIN `mf_categories` `d` ON `c`.`category_id` = `d`.`id` LEFT JOIN `eoa_relators` `e` ON `a`.`id` = `e`.`eoa_id` LEFT JOIN `mf_relators` `f` ON `f`.`id` = `e`.`relator_id` LEFT JOIN `eoa_subjects` `g` ON `a`.`id` = `g`.`eoa_id` LEFT JOIN `mf_subjects` `h` ON `g`.`subject_id` = `h`.`id` " . $queryString . " GROUP BY `a`.`accession_no` " . $orderBy, $params)->Get();
        $data = $this->Select("SELECT `a`.`id`, `a`.`title`, `a`.`cover_source`, `a`.`cover_type`, `a`.`active`, `c`.`category_id`, GROUP_CONCAT(DISTINCT `d`.`name` separator '|') `category` FROM `ebook_open_access` `a` LEFT JOIN `eoa_categories` `c` ON `a`.`id` = `c`.`eoa_id` LEFT JOIN `mf_categories` `d` ON `c`.`category_id` = `d`.`id` LEFT JOIN `eoa_relators` `e` ON `a`.`id` = `e`.`eoa_id` LEFT JOIN `mf_relators` `f` ON `f`.`id` = `e`.`relator_id` LEFT JOIN `eoa_subjects` `g` ON `a`.`id` = `g`.`eoa_id` LEFT JOIN `mf_subjects` `h` ON `g`.`subject_id` = `h`.`id` " . $queryString . " GROUP BY `a`.`accession_no` " . $orderBy, $params)->Get();

        $count = count($data);

        return Application::$app->ToObject(['data' => $data, 'count' => $count]);
    }

    public function GetEbook($id) {
        $data = $this->SelectOne("SELECT `eoa`.`id` AS `ID`, `eoa`.`accession_no` AS `ACCESSION_NO`,`eoa`.`title` AS `TITLE`,`eoa`.`edition` AS `EDITION`,`eoa`.`copyright_year` AS `COPYRIGHT_YEAR`,`eoa`.`isbn` AS `ISBN`,`mf_pub`.`name` AS `PUBLISHER`,`mf_pp`.`location` AS `PUBLICATION_PLACE`,`eoa_pd`.`publication_date` AS `PUBLICATION_DATE`,group_concat(DISTINCT concat(`mf_r`.`name`,'^',`mf_rt`.`type`) separator '|') AS `RELATORS`,group_concat(DISTINCT `mf_cat`.`name` separator '|') AS `CATEGORY`,group_concat(DISTINCT `mf_sub`.`name` separator '|') AS `SUBJECTS`,`eoa`.`notes` AS `NOTES`,`eoa`.`summary` AS `SUMMARY`,`eoa`.`table_of_contents` AS `TABLEOFCONTENTS`, `eoa`.`physical_description` AS `PHYSICAL_DESCRIPTION`, `mf_class`.`code` AS `CLASS`,`mf_subclass`.`code` AS `SUBCLASS`,`mf_range`.`range` AS `RANGE1`,`eoa_ce`.`value` AS `CUTTER_ENDING`,concat('OEB ',concat(`mf_subclass`.`code`,`eoa_ce`.`value`)) AS `CALL_NO`,`eoa`.`link` AS `LINK`,`eoa`.`encoded_by` AS `ENCODER`,`mf_ft`.`type` AS `FILE_TYPE`,`eoa_cover`.`source` AS `COVER_SOURCE`,`eoa_cover`.`type` AS `COVER_TYPE`,`eoa`.`created_at` AS `CREATED_AT`,`eoa`.`updated_at` AS `UPDATED_AT` FROM (((((((((((((((((`ebook_open_access` `eoa` left join `eoa_publication_details` `eoa_pd` on(`eoa_pd`.`eoa_id` = `eoa`.`id`)) left join `mf_publishers` `mf_pub` on(`eoa_pd`.`publisher_id` = `mf_pub`.`id`)) left join `mf_publication_places` `mf_pp` on(`eoa_pd`.`publication_place_id` = `mf_pp`.`id`)) left join `eoa_relators` `eoa_r` on(`eoa`.`id` = `eoa_r`.`eoa_id`)) left join `mf_relators` `mf_r` on(`eoa_r`.`relator_id` = `mf_r`.`id`)) left join `mf_relator_types` `mf_rt` on(`eoa_r`.`relator_type_id` = `mf_rt`.`id`)) left join `eoa_categories` `eoa_c` on(`eoa`.`id` = `eoa_c`.`eoa_id`)) left join `mf_categories` `mf_cat` on(`eoa_c`.`category_id` = `mf_cat`.`id`)) left join `eoa_subjects` `eoa_sub` on(`eoa`.`id` = `eoa_sub`.`eoa_id`)) left join `mf_subjects` `mf_sub` on(`mf_sub`.`id` = `eoa_sub`.`subject_id`)) left join `eoa_call_numbers` `eoa_cn` on(`eoa_cn`.`eoa_id` = `eoa`.`id`)) left join `mf_loc_ranges` `mf_range` on(`mf_range`.`id` = `eoa_cn`.`range_id`)) left join `mf_loc_subclasses` `mf_subclass` on(`mf_subclass`.`id` = `mf_range`.`subclass_id`)) left join `mf_loc_classes` `mf_class` on(`mf_subclass`.`class_id` = `mf_class`.`id`)) left join `eoa_loc_cutter_endings` `eoa_ce` on(`eoa_ce`.`id` = `eoa_cn`.`cutter_ending_id`)) left join `mf_file_types` `mf_ft` on(`eoa`.`file_type_id` = `mf_ft`.`id`)) left join `eoa_covers` `eoa_cover` on(`eoa`.`id` = `eoa_cover`.`eoa_id`)) WHERE `eoa`.`id` = :in_id GROUP BY `eoa`.`id`", ['in_id' => $id])->Get();

        if($data['COVER_SOURCE'] == 'default.jpg') {
            $data['COVER_SOURCE'] = 'storage/images/modules/e-books.jpg';
        }
        if($data['CATEGORY']) {
            $categories = explode('|', $data['CATEGORY']);
            $data['CATEGORY'] = $categories;
        }
        if($data['RELATORS']) {
            $relators = explode('|', $data['RELATORS']);
            $temp = [];
            foreach($relators as $relator) {
                $new = [];
                $row = explode('^', $relator);
                $new['NAME'] = $row[0];
                $new['TYPE'] = $row[1];
                $temp[] = $new;
            }
            $data['RELATORS'] = $temp;
        }
        if($data['SUBJECTS']) {
            $subjects = explode('|', $data['SUBJECTS']);
            $data['SUBJECTS'] = $subjects;
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
        return 'storage/images/modules/e-books.jpg';
    }
}