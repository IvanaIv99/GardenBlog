<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $thumbPhoto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property int $category_id
 * @property string|null $deleted_at
 * @property-read Categories $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comments[] $comments
 * @property-read int|null $comments_count
 * @property-read User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Visits[] $visits
 * @property-read int|null $visits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereThumbPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    use HasFactory;

    public $timestamps=true;

    protected $fillable=['title','content','thumbPhoto','category_id','user_id','deleted_at'];

    public function category() {
        return $this->belongsTo(Categories::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addVisit($id, $ip)
    {
        return \DB::table("visits")
            ->insert([
                'ip' => $ip,
                'post_id' => $id
            ]);
    }

    public function visits(){
        return $this->hasMany(Visits::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }

//    public function getPosts($category, $sort){
//        $posts = Post::with('category','visits','user');
//
//        $posts = $posts->where('category_id','=',$category);
//
//
//        if($sort){
//            $posts->orderBy('created_at', $sort);
//        }
//
//        return $posts;
//    }

}
