<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Schema\Blueprint;

class Blog extends Model
{
    use \Sushi\Sushi;

    const TEXT = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos quidem tibi studiose et diligenter tractandos conendisse videbam. Quae hic reponimus, stirpes erant. Duo Reges: constructio interrete. Quae quaerimus, sint falsa. Quae diligentissime conquisita videamus, ut pomum aureum. Quonam, inquit, modo? Tum ille: ';
    protected $rows = [
        [
            'id' => 1,
            'thumbnail' => 'blog-images/pexels-brunoscramgnon-596134.jpg',
            'title' => 'Blog-1',
            'description' => self::TEXT,
            'category_id' => 1,
        ],
        [
            'id' => 2,
            'thumbnail' => null,
            'title' => 'Blog-2',
            'description' => self::TEXT,
            'category_id' => 2,
        ]
    ];

    protected $appends = ['full_thumbnail_path'];

    public function getFullThumbnailPathAttribute()
    {
        return $this->thumbnail ? Storage::url($this->thumbnail) : null;
    }

    protected function afterMigrate(Blueprint $table)
    {
        $table->index('title');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
