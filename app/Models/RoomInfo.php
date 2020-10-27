<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 * @method static create(array $all)
 * @method static findOrFail(int $id)
 */
class RoomInfo extends Model
{
    protected $table = 'room';
    protected $primaryKey = "room_id";
    public $timestamps = true;
    protected $fillable = ['room_id', 'owner_id', 'name', 'type', 'min_people', 'max_people', 'current_people', 'content', 'status'];
}
