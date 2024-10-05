<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Qualification;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class initSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // add slider
        $sourcePath = public_path('frontend/img/background/bg-img.jpg');
        $destinationPath = public_path('frontend/img/background/bg-img-tmp.jpg');
        copy($sourcePath, $destinationPath);

        $slider = Slider::create([
            'title' => 'Art is,a wonderful feeling',
            'status' => 1,
        ]); 
        $slider->addMedia($destinationPath)->toMediaCollection('photo');

        // add setting 
        $sourcePath = public_path('frontend/img/about-img.jpg');
        $destinationPath = public_path('frontend/img/about-img-tmp.jpg');
        copy($sourcePath, $destinationPath);
        $setting = Setting::create([
            'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص',
            'phone' => '(966) 556 456 7890',
            'address' => '01, Lorem Ipsum Road, NY, saudi arabia',
            'email' => 'example@example.com',
            'facebook' => 'facebook.com',
            'twitter' => 'twitter.com',
            'linkedin' => 'linkedin.com',
            'youtubte' => 'youtubte.com',
            'about_description' => 'عبير هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق . إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.',
        ]); 
        $setting->addMedia($destinationPath)->toMediaCollection('about_photo');

        // add services
        $services = [
            [
                'name' => 'لوحات',
                'image' => 'frontend/img/icon01',
                'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك',
            ],
            [
                'name' => 'مجسمات',
                'image' => 'frontend/img/icon02',
                'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك',
            ],
            [
                'name' => 'أثاث',
                'image' => 'frontend/img/icon03',
                'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك',
            ],
        ];

        foreach($services as $service){ 
            $sourcePath = public_path($service['image'] . '.png');
            $destinationPath = public_path($service['image'] . '-tmp.png');
            copy($sourcePath, $destinationPath);
            $service = Service::create([
                'name' => $service['name'],
                'description' => $service['description'],
                'short_description' => $service['description'],  
            ]);
            
            $service->addMedia($destinationPath)->toMediaCollection('icon');
        }


        // add qualifictions 
        Qualification::insert([
            [ 'name' => 'درجة البكالوريوس في مجال التربية الفنية' ],
            [ 'name' => 'الانضمام إلى الدورات التدريبية' ],
            [ 'name' => 'الفنون الجميلة، أو الفنون التطبيقية' ],
            [ 'name' => 'التي تركز على تعلم أساسيات الرسم' ],
            [ 'name' => 'الخبرة السابقة في وظيفة مدرس رسم وفنون' ],
            [ 'name' => 'الادوات المختلفة مثل الفحم، الزيت، والألوان المائية' ],
        ]);


        // gallery categories
        GalleryCategory::insert([
            [ 'name' => 'لوحات' ],
            [ 'name' => 'مجسمات' ],
            [ 'name' => 'أعمال الاصدقاء' ],
        ]);

        // add galery
        for($i = 1 ; $i < 12 ; $i++){
            $sourcePath = public_path('frontend/img/portfolio/img-' . $i . '.jpg');
            $destinationPath = public_path('frontend/img/portfolio/img-' . $i . '-tmp.jpg');
            copy($sourcePath, $destinationPath);
            $gallery = Gallery::create([
                'name' => 'لوحة رقم ' . $i,
                'category_id' => rand(1,3),
                'status' => 1,
            ]);  
            $gallery->addMedia($destinationPath)->toMediaCollection('image');
        }
    }
}
