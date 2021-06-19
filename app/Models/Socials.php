<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Socials
 *
 * @property int $id
 * @property string|null $icon
 * @property string $name
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Socials newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Socials newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Socials query()
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Socials whereUrl($value)
 * @mixin \Eloquent
 */
class Socials extends Model
{
    use HasFactory;

    public $timestamps=true;
    protected $fillable=['icon','name','url'];
}
