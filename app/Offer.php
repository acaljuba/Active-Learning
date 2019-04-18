<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Offer extends Model
{
    use Sortable;

    // Table name
    protected $table = 'offers';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = TRUE;

    public function book() {
        return $this->belongsTo('App\Book');
    }
}
