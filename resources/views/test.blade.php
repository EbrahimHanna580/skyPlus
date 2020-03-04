<<<<<<< HEAD


@extends('layouts.blog')

@section('content')

    <!--our featured projects-->
    <section class="section_offset relative" style="background: #f7f9f9">
        <div class="container">
            <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">اخر الاخبار </h3>
            <p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150"></p>
            <div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
                <!--projects carousel-->
{{--                <div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>--}}

                    @foreach($articles as $article)

                        <!--project-->
                            <figure class="t_xs_align_c col-lg-12">
                                <!--image container-->
                                <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                                    <img src="{{asset($article->image)}}" alt="">
                                    <div class="popup_buttons tr_all_long">
                                        <a href="{{asset($article->image)}}" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                            <i class="icon-plus"></i>
                                        </a>
                                        <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <figcaption class="t_xs_align_l">
                                    <!--project's title-->
                                    <h4 class="fw_light fs_middle"><a href="#" class="color_dark" style="font-size: 16px;" >د{{ $article->title }}</a></h4>
                                    <!--project's info-->
                                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_grey_light_2 fs_small">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="fs_medium color_grey">
                                                <i>{{ $article->category->name }}</i></a>,
                                            {{--<a href="#" class="fs_medium color_grey">
                                                <i>استشارات</i>
                                            </a>--}}
                                        </li>
                                        {{--<li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_red_hover">
                                                <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                            </a>
                                        </li>--}}
                                    </ul>
                                    <p class="m_bottom_10 fw_light">{!! substr($article->content, 0, 200)."....." !!}</p>
                                    <div class="clearfix">
                                        <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="color_purple color_pink_hover f_left d_block m_right_20">
                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-angle-right"></i>
                                </span>
                            اقرا المزيد
                            </a>
                            <a href="{{route('blog') }}" class="color_purple color_pink_hover f_left d_block">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-link"></i>
                                </span>
                                آخر الاخبار
                            </a>
                </div>
                </figcaption>
                </figure>

                    @endforeach



{{--                </div>--}}
            </div>
        </div>
        <!--carousel nav-->
       {{-- <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
            <i class="icon-left-open-big"></i>
        </button>
        <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
            <i class="icon-right-open-big"></i>
        </button>--}}
    </section>

@endsection

=======


@extends('layouts.blog')

@section('content')

    <!--our featured projects-->
    <section class="section_offset relative" style="background: #f7f9f9">
        <div class="container">
            <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">اخر الاخبار </h3>
            <p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150"></p>
            <div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
                <!--projects carousel-->
{{--                <div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>--}}

                    @foreach($articles as $article)

                        <!--project-->
                            <figure class="t_xs_align_c col-lg-12">
                                <!--image container-->
                                <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                                    <img src="{{asset($article->image)}}" alt="">
                                    <div class="popup_buttons tr_all_long">
                                        <a href="{{asset($article->image)}}" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                            <i class="icon-plus"></i>
                                        </a>
                                        <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <figcaption class="t_xs_align_l">
                                    <!--project's title-->
                                    <h4 class="fw_light fs_middle"><a href="#" class="color_dark" style="font-size: 16px;" >د{{ $article->title }}</a></h4>
                                    <!--project's info-->
                                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_grey_light_2 fs_small">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="fs_medium color_grey">
                                                <i>{{ $article->category->name }}</i></a>,
                                            {{--<a href="#" class="fs_medium color_grey">
                                                <i>استشارات</i>
                                            </a>--}}
                                        </li>
                                        {{--<li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_red_hover">
                                                <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                            </a>
                                        </li>--}}
                                    </ul>
                                    <p class="m_bottom_10 fw_light">{!! substr($article->content, 0, 200)."....." !!}</p>
                                    <div class="clearfix">
                                        <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="color_purple color_pink_hover f_left d_block m_right_20">
                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-angle-right"></i>
                                </span>
                            اقرا المزيد
                            </a>
                            <a href="{{route('blog') }}" class="color_purple color_pink_hover f_left d_block">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-link"></i>
                                </span>
                                آخر الاخبار
                            </a>
                </div>
                </figcaption>
                </figure>

                    @endforeach



{{--                </div>--}}
            </div>
        </div>
        <!--carousel nav-->
       {{-- <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
            <i class="icon-left-open-big"></i>
        </button>
        <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
            <i class="icon-right-open-big"></i>
        </button>--}}
    </section>

@endsection

>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
