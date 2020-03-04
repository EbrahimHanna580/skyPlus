@extends('layouts.normal')

@section('content')
    <!--layout-->
    <div class="wide_layout bg_light">
        <!--header markup-->

        <!--page title-->
        <section class="page_title translucent_bg_color_scheme image_fixed image_bg_14 t_align_c relative wrapper">
            <div class="container" style="text-align: right;">
                <h1 class="color_light fw_light m_bottom_5">الخدمات الاستشارية</h1>
                <!--breadcrumbs-->
                <ul class="hr_list d_inline_m breadcrumbs">
                    <li class="m_right_8 f_xs_none">
                        <a href="{{route('index')}}" class="color_grey_light_3 d_inline_m m_right_10">الرئيسية</a>
                        <i class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i>
                    </li>
                    <li><a class="color_grey_light_3 d_inline_m">اتصل بنا</a></li>
                </ul>
            </div>
        </section>
        <!--content-->
        <section class="section_offset">
            <main class="container t_align_c">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 m_bottom_30">تصريح الإقامة في تركيا</h3>
                <p class="m_bottom_35 heading_2">مميزات الحصول على الإقامة في تركيا</p>
                <div class="row t_align_c">
                    <div class="col-sm-4 m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">1 - تخول الاقامة السياحية التركية الدخول والخروج من تركيا دون الحصول على فيزا أو بدون دفع غرامة أو مخالفة</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">2 - الحصول على رقم خاص بالأجانب يفيد في المعاملات داخل الدولة التركية.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">3 - شرط اساسي من شروط اقامة العمل الحصول على اقامة سياحية على الأقل ستة أشهر.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">4 - فتح حساب مصرفي في جميع البنوك التركية.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">5 - تسهيل حركة التجار ورجال الأعمال وتأسيس شركات.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">6 - تسجيل فاتورة الكهرباء والغاز والمياه والحصول على خدمات الأنترنت والجوال.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col align-self-center m_xs_bottom_30">
                        <figure>
                            <figcaption>
                                <p class="m_bottom_23">7 - تساعد على التملك العقاري أو شراء سيارة أو عمل رخصة قيادة تركية.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </main>
        </section>



        <section class="section_offset image_bg_1">
            <div class="container">
                <h3 class="color_dark fw_light m_bottom_15 t_align_c heading_3 m_bottom_30">أنواع تصريح الإقامة في تركيا</h3>
                <!--first four services-->
                <div class="row m_bottom_30 services_animate">
                    <!--service-->
                    <div class="col-sm-4 tr_all_medium m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">1 - الإقامة السياحية</a>
                            </h6>
                            <p class="fs_medium m_bottom_10">وتمنح الإقامة عادةً لمدة سنة واحدة، ويشترط للحصول عليها إثبات مكان الإقامة من خلال عقد إيجار البيت.</p>
                        </figure>
                    </div>
                    <!--service-->
                    <div class="col-sm-4 tr_all_medium m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">2 - إقامة الطالب</a>
                            </h6>
                            <p class="fs_medium m_bottom_10">وتمنح للطالب الذي يدرس في الجامعات التركية
                                ويشترط للحصول عليها ما يشترط في الإقامة السياحية، بالإضافة إلى ورقة "إثبات طالب"، تكون مصدقة رسمياً من الجامعة المسجل بها.
                            </p>
                        </figure>
                    </div>
                    <div class="col-sm-4 tr_all_medium m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">3 - إقامة العمل</a>
                            </h6>
                            <p class="fs_medium m_bottom_10">تمنح إقامة العمل للأجانب الموظفين في شركات تركية، إذ تقوم الشركة بالحصـول علــى اذن عمــل مــن وزارة العمــل للأجنبي المــراد توظيفــه.
                                ويشترط للحصول عليها أن تقوم الشركة بتوظيف خمســة أتــراك لديها مقابــل كل موظف أجنبــي، ووجوب حصوله على الإقامة السياحية قبل أن يتقدم بطلب إلى وزارة العمل، ويستغرق استخراج إقامة العمل نحو 40 يوم.
                            </p>
                        </figure>
                    </div>
                    <div class="col-sm-4 tr_all_medium m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">4 - إقامة الحالات الإنسانية</a>
                            </h6>
                            <p class="fs_medium m_bottom_10">يتم منح هذا النوع من الإقامات إلى اللاجئين المتواجدين في تركيا.</p>
                        </figure>
                    </div>
                    <div class="col-sm-4 tr_all_medium m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">
                                    5 - إقامة عقارية "إقامة التملك".
                                </a>
                            </h6>
                            <p class="fs_medium m_bottom_10">وهــي إقامــة تمنــح للأجانب الذين يتملكون عقاراً في تركيا، وتمنح لمدة عـام كامل.</p>
                        </figure>
                    </div>
                    <div class="col-sm-4 tr_all_medium m_xs_bottom_30">
                        <figure class="item_services">
                            <h6 class="m_bottom_5 relative">
                                <a href="#" class="color_dark d_block n_sc_hover">6 - إقامة عائلية</a>
                            </h6>
                            <p class="fs_medium m_bottom_10">تمنح للأجنبي في حال الزواج من زوجة تركية/ زوج تركي، ويمكن أن تكون مدة الإقامة سنة أو سنتين أو ثلاث سنوات، بحسب الطلب المقدم، ويحق لصاحبها التقديم على الجنسية التركية بعد ثلاث سنوات.</p>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
@endsection
