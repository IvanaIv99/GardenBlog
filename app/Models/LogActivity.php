<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\LogActivity
 *
 * @property int $id
 * @property string $subject
 * @property string $url
 * @property string $ip
 * @property int|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogActivity whereUserId($value)
 * @mixin \Eloquent
 */
class LogActivity extends Model
{
    use HasFactory;

    protected  $fillable=['subject','url','ip','user_id'];
    protected $table="log_activity";


}
