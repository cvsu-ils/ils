<?php

namespace IntegratedLibrarySystem\App\Models;

use InfinityBrackets\Exceptional\Model;
use InfinityBrackets\Exceptional\ExceptionalDatabase;
use InfinityBrackets\Core\Application;

class EbookOpenAccessCover extends Model {
    protected string $application = ExceptionalDatabase::ControlCenter;
    protected string $table = 'eoa_covers';
}