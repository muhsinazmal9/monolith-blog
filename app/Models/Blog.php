<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Blog extends Model
{
    use \Sushi\Sushi;

    const TEXT = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos quidem tibi studiose et diligenter tractandos conendisse videbam. Quae hic reponimus, stirpes erant. Duo Reges: constructio interrete. Quae quaerimus, sint falsa. Quae diligentissime conquisita videamus, ut pomum aureum. Quonam, inquit, modo? Tum ille: ';
    protected $rows = [
        [
            'id' => 1,
            'title' => 'Blog-1',
            'description' => self::TEXT,
        ],
        [
            'id' => 2,
            'title' => 'Blog-2',
            'description' => self::TEXT,
        ]
    ];

    protected function afterMigrate(Blueprint $table)
    {
        $table->index('title');
    }
}
