<?php

namespace Database\Seeders;

use App\Models\Government;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $governments = [
            ['القاهرة', 'Cairo'],
            ['الجيزة', 'Giza'],
            ['الأسكندرية', 'Alexandria'],
            ['الدقهلية', 'Dakahlia'],
            ['البحر الأحمر', 'Red Sea'],
            ['البحيرة', 'Beheira'],
            ['الفيوم', 'Fayoum'],
            ['الغربية', 'Gharbiya'],
            ['الإسماعلية', 'Ismailia'],
            ['المنوفية', 'Menofia'],
            ['المنيا', 'Minya'],
            ['القليوبية', 'Qaliubiya'],
            ['الوادي الجديد', 'New Valley'],
            ['السويس', 'Suez'],
            ['اسوان', 'Aswan'],
            ['اسيوط', 'Assiut'],
            ['بني سويف', 'Beni Suef'],
            ['بورسعيد', 'Port Said'],
            ['دمياط', 'Damietta'],
            ['الشرقية', 'Sharkia'],
            ['جنوب سيناء', 'South Sinai'],
            ['كفر الشيخ', 'Kafr Al sheikh'],
            ['مطروح', 'Matrouh'],
            ['الأقصر', 'Luxor'],
            ['قنا', 'Qena'],
            ['شمال سيناء', 'North Sinai'],
            ['سوهاج', 'Sohag']
        ];

        foreach ($governments as $government) {
            Government::create([
                'name_ar' => $government[0],
                'name_en' => $government[1],
            ]);
        }
        
    }
}
