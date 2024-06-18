<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use OpenApi\Annotations as OA;


/**
 * Class Desk.
 *
 * @author  Jonathan <jonathan.422021011@ukrida.ac.id>
 *
 * @OA\Schema(
 *   description="Desk model",
 *   title="Desk model",
 *   required={"title", "author"},
 *   @OA\Xml(
 *     name="Desk"
 *   )
 * )
 */
class Desk extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $table = 'desks';
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'publication_year',
        'cover',
        'description',
        'price',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function data_adder(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
