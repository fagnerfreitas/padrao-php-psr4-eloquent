<?php

namespace src\models;
// use \core\Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Domain extends EloquentModel {


    // some attributes here…
    protected $table = 'domains';

    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    // protected $dateFormat = 'U';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    public function __construct() {
        parent::__construct();

    }

    public function getAll(){
        
    }
}
