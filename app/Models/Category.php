<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        ['id' => 1, 'name' => 'এলজিবিটিকিউ'],
        ['id' => 2, 'name' => 'ইতিহাস'],
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
