<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\questions::create([
            'question'=>'يظهر فيروس كورونا بشكل',
            'answer1'=>'التهاب رئوى حاد',
            'answer2'=>'التهاب الاحبال الصوتية',
            'answer3'=>'التهاب اللوز',
            'answer4'=>'التهاب الجيوب الانفية',
            'true_answer'=>'التهاب رئوى حاد',
        ]);
        App\questions::create([
            'question'=>'فى اى عام تم اكتشاف فيروس كورونا',
            'answer1'=>'2020',
            'answer2'=>'2013',
            'answer3'=>'2015',
            'answer4'=>'2019',
            'true_answer'=>'2019',
        ]);
        App\questions::create([
            'question'=>'يصيب فيروس كورونا الجهاز ؟',
            'answer1'=>'البولى',
            'answer2'=>'الهضمى',
            'answer3'=>'التنفسى',
            'answer4'=>'العصبى',
            'true_answer'=>'التنفسى',
        ]);
        App\questions::create([
        'question'=>'من اداب العطاس لتقليل العدوى',
        'answer1'=>'غسيل اليدين بالماء الدافئ والصابون',
        'answer2'=>'استخدام المناديل الورقية للعطاس',
        'answer3'=>'جميع ما ذكر',
        'answer4'=>'ثنى الذراع عند العطاس',
        'true_answer'=>'جميع ما ذكر',
    ]);
        App\questions::create([
            'question'=>'مكان العزل للمشتبه به او مصابى فيروس كورونا الجديد يسمى',
            'answer1'=>'غرفة العمليات',
            'answer2'=>'العناية المركزة',
            'answer3'=>'الحجر الصحى',
            'answer4'=>'الطوارئ',
            'true_answer'=>'الحجر الصحى',
        ]);
        App\questions::create([
            'question'=>'لتجنب انتقال العدوى  يجب على الشخص الاحتفاظ بمسافة لا تقل عن',
            'answer1'=>'متر واحد',
            'answer2'=>'مترين',
            'answer3'=>'ثلاثة امتار',
            'answer4'=>'اربعة امتار',
            'true_answer'=>'متر واحد',
        ]);
        App\questions::create([
            'question'=>'عند الكحة او العطاس',
            'answer1'=>'استخدام المناديل النظيفة ',
            'answer2'=>'الغسيل بالماءوالصابون عند التنظيف',
            'answer3'=>'تغطية الفم بالمرفق',
            'answer4'=>'جميع الاجابات صحيحة',
            'true_answer'=>'جميع الاجابات صحيحة',
        ]);
        App\questions::create([
            'question'=>'درجة احتمالية الاصابة بفيروس كورونا  المستجد تتوقف حسب دولة الاقامة ومدى انتشار الفيروس فيها',
            'answer1'=>'متوسطة',
            'answer2'=>'عالية',
            'answer3'=>'عالية جدا',
            'answer4'=>'ضعيفة',
            'true_answer'=>'ضعيفة',
        ]);
        App\questions::create([
            'question'=>'يدخل الفيروس للجسم عن طريق',
            'answer1'=>'الانف',
            'answer2'=>'الفم',
            'answer3'=>'العين',
            'answer4'=>'جميع الاجابات صحيحة',
            'true_answer'=>'جميع الاجابات صحيحة',
        ]);
        App\questions::create([
            'question'=>'من اعراض فيروس كورونا المستجد',
            'answer1'=>'التهاب الحهاز التنفسى ',
            'answer2'=>'السعال',
            'answer3'=>'ارتفاع درجة حرارة الجسم',
            'answer4'=>'جميع الاجابات صحيحة',
            'true_answer'=>'جميع الاجابات صحيحة',
        ]);
        App\questions::create([
            'question'=>'مركز اتصالوزارة الصحة هو',
            'answer1'=>'999',
            'answer2'=>'996',
            'answer3'=>'937',
            'answer4'=>'998',
            'true_answer'=>'999',
        ]);
        App\questions::create([
            'question'=>'اى من الحالات الاتية تستدى لبس الكمامة',
            'answer1'=>'جميع الاجابات صحيحة',
            'answer2'=>'عندما تشكو من السعال',
            'answer3'=>'عندو تشكو من العطاس',
            'answer4'=>'عندما تعتنى بشخص لدية اعراض تنفسية',
            'true_answer'=>'جميع الاجابات صحيحة',
        ]);
        App\questions::create([
            'question'=>'يطلق مسمى covi-19على',
            'answer1'=>'الملاريا',
            'answer2'=>'الانفلونزا الموسمية',
            'answer3'=>'السارس',
            'answer4'=>'الكورونا المستجد',
            'true_answer'=>'كورونا المستجد',
        ]);
        App\questions::create([
            'question'=>'يمكن القضاء على فيروس كورونا من خلال',
            'answer1'=>'لا شئ مما سبق',
            'answer2'=>'الرمل',
            'answer3'=>'الثلج',
            'answer4'=>'الملج',
            'true_answer'=>'لا شئ مما سبق',
        ]);
        App\questions::create([
            'question'=>'اى من الحيوانات التالية يمكن ان يصيبها فيروس الكورونا',
            'answer1'=>'الجمال',
            'answer2'=>'القطط',
            'answer3'=>'الطلاب',
            'answer4'=>'لا شئ مما سبق',
            'true_answer'=>'لا شئ مما سبق',
        ]);
        App\questions::create([
            'question'=>'هل يمكن الشفاء التام من فيروس كورونا المستجدا',
            'answer1'=>'لا يمكن',
            'answer2'=>'يمكن مع بقاء اثار الجسم',
            'answer3'=>'نعم',
            'answer4'=>'يمكن بنسبة متدنية',
            'true_answer'=>'نعم',
        ]);
        App\questions::create([
        'question'=>'لبس القفازات الطبية طوال الوقت دون تغييرها يجنبك من الاصابة من فيروس كورونا الجديد',
        'answer1'=>'حقيقة',
        'answer2'=>'خرافة',
        'true_answer'=>'خرافة',
    ]);
        App\questions::create([
            'question'=>'التغذية السليمة وممارسة الرياضة بشكل منتظم والنوم الجيد احد العوامل التى تقوم برفع مستوى الجهاز المناعى',
            'answer1'=>'حقيقة',
            'answer2'=>'خرافة',
            'true_answer'=>'حقيقة',
        ]);
        App\questions::create([
            'question'=>'يساعد مسح المعلبات الغذائية بمادة مطهرة قبل فتحها وتخزينها على الحد من انتقال فيروس كورونا',
            'answer1'=>'حقيقة',
            'answer2'=>'خرافة',
            'true_answer'=>'حقيقة',
        ]);
        App\questions::create([
            'question'=>'تعقيم اليدين افضل من غسل اليدين بالماء والصابون لمدة اربعين ثانية',
            'answer1'=>'حقيقة',
            'answer2'=>'خرافة',
            'true_answer'=>'خرافة',
        ]);
    }
}
