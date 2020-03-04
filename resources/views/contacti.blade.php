@extends('layouts.normal')

@section('content')
<!--layout-->
<div class="wide_layout bg_light">
    <!--header markup-->

    <!--page title-->
    <section class="page_title translucent_bg_color_scheme image_fixed image_bg_14 t_align_c relative wrapper">
        <div class="container" style="text-align: right;">
            <h1 class="color_light fw_light m_bottom_5">اتصل بنا</h1>
            <!--breadcrumbs-->
            <ul class="hr_list d_inline_m breadcrumbs">
                <li class="m_right_8 f_xs_none"><a href="index.html" class="color_grey_light_3 d_inline_m m_right_10">الرئيسية</a><i
                        class="icon-angle-right d_inline_m color_grey_light_3 fs_small"></i></li>

                <li><a class="color_grey_light_3 d_inline_m">اتصل بنا</a></li>
            </ul>
        </div>
    </section>
    <!--content-->
    <section class="section_offset">
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                    <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">مكتب اسطنبول</h3>
                    <p class="m_bottom_35 heading_2 t_align_c"></p>
                    <p class="fw_light m_bottom_23">هدفنا هو الاحترافية فى تقديم الخدمات لعملائنا و اللإرتقاء بالمهنة
                        وذلك من خلال الإستعانة بأفضل الخبرات المحلية والدولية فى مختلف المجالات .</p>
                    <div class="row">
                        <ul class="col-lg-6 col-md-6 col-sm-6 fw_light w_break m_bottom_45 m_xs_bottom_30">
                            <li class="m_bottom_8">
                                <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                                    <i class="icon-phone-1"></i>
                                </div>
                                00905385830444
                            </li>
                            <li class="m_bottom_8">
                                <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                                    <i class="icon-mail-alt"></i>
                                </div>
                                <a href="mailto:#" class="color_black color_pink_hover">info@skyplus.com.tr</a>
                            </li>

                        </ul>
                        <ul class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 vr_list_type_5">
                            <li class="m_bottom_8 fw_light">
                                <div class="f_left icon_wrap_size_1 color_pink circle">
                                    <i class="icon-location"></i>
                                </div>
                                منطقة الفاتح شارع اكدينيز بعد فندق بيير بخمسن متر فوق حلويات سيران
                            </li>

                        </ul>
                    </div>
                    <h5 class="color_dark m_bottom_20 fw_light">ابقى على اطلاع على اخر الاخبار</h5>
                    <ul class="hr_list social_icons">
                        <!--tooltip_container class is required-->
                        <li class="m_right_15 m_bottom_15 tooltip_container">
                            <!--tooltip-->
                            <span class="d_block r_corners color_default tooltip fs_small tr_all">تابعنا Facebook</span>
                            <a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
                                <i class="icon-facebook fs_small"></i>
                            </a>
                        </li>
                        <li class="m_right_15 m_bottom_15 tooltip_container">
                            <!--tooltip-->
                            <span class="d_block r_corners color_default tooltip fs_small tr_all">تابعنا Twitter</span>
                            <a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
                                <i class="icon-twitter fs_small"></i>
                            </a>
                        </li>


                        <li class="m_right_15 m_bottom_15 tooltip_container">
                            <!--tooltip-->
                            <span class="d_block r_corners color_default tooltip fs_small tr_all">Youtube</span>
                            <a href="#" class="d_block youtube icon_wrap_size_2 circle color_grey_light_2">
                                <i class="icon-youtube-play fs_small"></i>
                            </a>
                        </li>

                        <li class="m_right_15 m_bottom_15 tooltip_container">
                            <!--tooltip-->
                            <span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
                            <a href="#" class="d_block instagram icon_wrap_size_2 circle color_grey_light_2">
                                <i class="icon-instagramm fs_small"></i>
                            </a>
                        </li>
                        <li class="m_bottom_15 tooltip_container">
                            <!--tooltip-->
                            <span class="d_block r_corners color_default tooltip fs_small tr_all">LinkedIn</span>
                            <a href="#" class="d_block linkedin icon_wrap_size_2 circle color_grey_light_2">
                                <i class="icon-linkedin-squared fs_small"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                    <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">راسلنا</h3>
                    <p class="m_bottom_35 heading_2 t_align_c">نجيب على كافه الاسئلة والاستفسارات</p>
                    <form id="contactform">
                        <ul>
                            <li class="row m_bottom_10">
                                <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10">
                                    <input type="text" name="cf_name" placeholder="الاسم"
                                           class="w_full r_corners fw_light">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full">
                                    <input type="email" name="cf_email" placeholder="الايميل"
                                           class="w_full r_corners fw_light">
                                </div>
                            </li>
                            <li class="m_bottom_10">
                                <input type="text" name="cf_subject" placeholder="العنوان"
                                       class="w_full r_corners fw_light">
                            </li>
                            <li class="m_bottom_5">
                                <textarea class="w_full r_corners fw_light height_3" name="cf_message"
                                          placeholder="الرسالة"></textarea>
                            </li>

                            <li class="m_bottom_10">
                                <button
                                    class="button_type_5 color_blue transparent r_corners fs_medium tr_all m_right_10 m_sm_bottom_10">
                                    ارسال
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.3308555763497!2d28.946505984585613!3d41.01801697929983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb5092bacae9%3A0x193c7ad187292329!2sSvit%20Osviti%20Turkey!5e0!3m2!1sar!2str!4v1577261899076!5m2!1sar!2str"
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <hr class="divider_type_2">

    <!--footer-->
@endsection
