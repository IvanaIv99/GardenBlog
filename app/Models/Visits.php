<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Visits
 *
 * @property int $id
 * @property string $visited_at
 * @property string $ip
 * @property int $post_id
 * @property-read \App\Models\Post $posts
 * @method static \Illuminate\Database\Eloquent\Builder|Visits newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visits newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visits query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visits whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visits whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visits wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visits whereVisitedAt($value)
 * @mixin \Eloquent
 */
class Visits extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongsTo(Post::class);
    }


}
