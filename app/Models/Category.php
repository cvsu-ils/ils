<?php

namespace IntegratedLibrarySystem\App\Models;

use InfinityBrackets\Exceptional\Model;
use InfinityBrackets\Exceptional\ExceptionalDatabase;

class Category extends Model {
    protected string $application = ExceptionalDatabase::ControlCenter;
    protected string $table = 'mf_categories';

    public function ToName($id) {
        $model = new Category();
        $category = $model->Find($id)->ToObject();
        return $category->name;
    }
}