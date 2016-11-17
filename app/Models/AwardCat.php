<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AwardCat
 *
 * @property integer $id
 * @property string $title
 * @property integer $award_page_id
 * @property integer $year
 * @property integer $month
 * @property integer $user_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereAwardPageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereYear($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereMonth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AwardCat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AwardCat extends Model
{
    protected $table = 'award_cats';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'award_page_id',
        'year',
        'month',
        'user_id'
    ];

    protected $guarded = [];

        
}