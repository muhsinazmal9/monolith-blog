<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Schema\Blueprint;

class Blog extends Model
{
    use \Sushi\Sushi;

    const TEXT = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos quidem tibi studiose et diligenter tractandos conendisse videbam. Quae hic reponimus, stirpes erant. Duo Reges: constructio interrete. Quae quaerimus, sint falsa. Quae diligentissime conquisita videamus, ut pomum aureum. Quonam, inquit, modo? Tum ille: ';
    const HTML = <<<HTML
    <script>
        window.alert('hello');
    </script>
<p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><b><span lang="BN-BD" style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:
BN-BD">উদয়স্থলের পার্থক্য গ্রহণযোগ্য নয়: স্বপক্ষে&nbsp; হাদিস শরীফঃ </span></b><b><span style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:BN-BD"><o:p></o:p></span></b></p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><b><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-bidi-language:
BN-BD">&nbsp;</span></b><b><span style="font-size:16.0pt;font-family:SolaimanLipi;
mso-bidi-language:BN-BD"><o:p></o:p></span></b></p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><b><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,serif;
mso-ascii-font-family:SolaimanLipi;mso-hansi-font-family:SolaimanLipi">عَنْ
حَضْرَتْ اِبْنِ عُمَرَ رَضِىَ اللهُ تَعَالٰى عَنْهُ قَالَ: تَرَاءَى النَّاسُ
الْهِلَالَ فَأَخْبَرْتُ </span></b><span style="font-size:16.0pt;font-family:
SolaimanLipi;mso-bidi-language:BN-BD"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:BN-BD">&nbsp;</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span lang="AR-SA" dir="RTL" style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,serif;
mso-ascii-font-family:SolaimanLipi;mso-hansi-font-family:SolaimanLipi">عَنْ
حَضْرَتْ اَبِىْ عُمَيْرِ بْنِ اَنَسٍ رَضِىَ اللهُ تَعَالٰى عَنْهُ&nbsp; عَنْ عُمُوْمَةٍ لَّه مِنْ أَصْحَابِ
النَّبِـيِّ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ: أَنَّ رَكْبًا جَاءُوْا إِلَى
النَّبِيِّ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ يَشْهَدُوْنَ أَنَّهُمْ رَأَوُا
الْهِلَالَ بِالْأَمْسِ فَأَمَرَهُمْ أَنْ يُّفْطِرُوْا وَإِذَا أَصْبَحُوْا أَنْ
يَّغْدُوْا إِلٰى مُصَلَّاهُمْ. رَوَاهُ أَبُو دَاوُد وَالنَّسَائِ</span><span style="font-size:16.0pt;mso-bidi-font-size:20.0pt;font-family:SolaimanLipi;
mso-bidi-font-family:Vrinda;mso-bidi-theme-font:minor-bidi;mso-bidi-language:
BN-BD"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:16.0pt;mso-bidi-font-size:20.0pt;font-family:SolaimanLipi;
mso-bidi-font-family:Vrinda;mso-bidi-theme-font:minor-bidi;mso-bidi-language:
BN-BD">&nbsp;</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span lang="BN-BD" style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:
BN-BD">আবূ দাঊদ শরীফ উনার মধ্যে বর্ণিত হাদীছ শরীফ-</span><span style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:BN-BD"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:
.25in;line-height:13.25pt;mso-line-height-rule:exactly">

</p><p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span lang="BN-BD" style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:
BN-BD">পবিত্র হাদীছ শরীফ উনার মধ্যে ইরশাদ মুবারক হয়েছে- </span><span style="font-size:16.0pt;font-family:SolaimanLipi;mso-bidi-language:BN-BD">“<span lang="BN-BD">হযরত আবূ উমাইর ইবনু আনাস রদ্বিয়াল্লাহু তা</span>’<span lang="BN-BD">য়ালা
আনহু উনার থেকে বর্ণিত যে</span>, <span lang="BN-BD">নূরে মুজাসসাম</span>, <span lang="BN-BD">হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার নিকট একদল
আরোহী আসলেন এবং উনারা সাক্ষ্য দিলেন যে উনারা গতকাল শাওওয়ালের চাঁদ দেখেছেন। ফলে
নূরে মুজাসসাম</span>, <span lang="BN-BD">হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি
ওয়া সাল্লাম তিনি মানুষকে রোযা ছাড়ার আদেশ দিলেন। পরের দিন সকালে সকলেই ঈদগাহে
সমবেত হলেন।</span>” (<span lang="BN-BD">আবূ দাঊদ শরীফ</span>, <span lang="BN-BD">নাসায়ী
শরীফ)</span><o:p></o:p></span></p>
HTML;

    protected $rows = [
        [
            'id' => 1,
            'thumbnail' => 'blog-images/pexels-brunoscramgnon-596134.jpg',
            'title' => 'Blog-1',
            'description' => self::HTML,
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
