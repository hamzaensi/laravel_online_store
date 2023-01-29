<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static function validate($request)
    {
    $request->validate([
    "total" => "required|numeric",
    "user_id" => "required|exists:users,id",
    ]);
    }
    public function getId()
    {
    return $this->attributes['id'];
    }
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
    public function getTotal()
    {
    return $this->attributes['total'];
    }
    public function setTotal($total)
    {
    $this->attributes['total'] = $total;
    }
    public function getUserId()
    {
    return $this->attributes['user_id'];
    }
    public function setUserId($userId)
    {
    $this->attributes['user_id'] = $userId;
    }
    public function getCreatedAt()
    {
    return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
    $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
    return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
    $this->attributes['updated_at'] = $updatedAt;
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    public function getUser()
    {
    return $this->user;
    }
    public function setUser($user)
    {
    $this->user = $user;
    }
    public function items()
    {
    return $this->hasMany(Item::class);
    }
    public function getItems()
    {
    return $this->items;
    }
    public function setItems($items)
    {
    $this->items = $items;
    }


}
