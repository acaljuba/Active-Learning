<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use SoftDeletes, Sortable;

    // Table name
    protected $table = 'books';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = TRUE;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'description', 'date_published', 'price',
    ];

    /**
     * The attributes that should be mutted to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_published', 'deleted_at'
    ];

    /**
     * The attributes that should be sortable in the tables.
     *
     * @var array
     */
    public $sortable = [
        'title', 'author', 'price', 'date_published'
    ];

    public function offers() {
        return $this->hasMany('App\Offer');
    }
}
