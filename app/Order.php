<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Order extends Model
{
    use Sortable;

    // Table name
    protected $table = 'orders';
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
        'book_id', 'user_id'
    ];

    /**
     * The attributes that should be sortable in the tables.
     *
     * @var array
     */
    public $sortable = [
        'book_id', 'user_id'
    ];

    public function book() {
        return $this->belongsTo('App\Book');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
