<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * @var string
     */
    protected $connection = 'tenantdb';

    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = ['name'];

}
