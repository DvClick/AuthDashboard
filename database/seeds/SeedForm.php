<?php

use App\AllForm;
use Illuminate\Database\Seeder;

class SeedForm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllForm::insert([
            [
                'description' => '
                إجـراء ضبط المعلومات الموثقة
                أستمارة طلب اصدار، إلغاء ، تعديل',
                'number' => 'Form 1',
                'code' => '(IMS -01-F02)',
            ],
            [
                'description' => '
                إجراء ضبط العملية
                التقرير الشهري للصحة و السلامة المهنية
                ',
                'number' => 'Form 2',
                'code' => '(IMS-24-F01)',

            ],
            [
                'description' => '
                إجـراء التدقيق الداخلي
                إستمارة حالة عدم المطابقة و الفعل التصحيحي
                ',
                'number' => 'Form 3',
                'code' => '(IMS-06-F06)',

            ]
        ]);
    }
}
