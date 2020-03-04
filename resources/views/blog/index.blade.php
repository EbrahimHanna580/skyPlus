<<<<<<< HEAD

<title>آخر الأخبار</title>

@extends('layouts.blog')

@section('content')

<!--content-->
<div class="section_offset" style="background: #f7f9f9">
    <div class="container" >

        <div class="row">

            @foreach($articles as $article)

                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_xs_bottom_30">
                    <!--post-->
                    <article>
                        <!--post content-->
                        <figure>
                            <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="d_block wrapper r_corners m_bottom_20">
                                <img src="{{asset($article->image)}}" alt="">
                            </a>
                            <figcaption class="blog_post">
                                <!--date,category,likes-->
                                <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                                    <!--date-->
                                    <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_purple color_light not_hover t_align_c blog_date m_bottom_5">
                                        <span class="d_block day_of_the_month fw_light">{{ $article->date->format('d') }}</span>
                                        <span class="d_block tt_uppercase fs_medium">{{ $article->date->format('M') }}</span>
                                    </a>
                                    <!--category-->
                                    <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_purple bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                                        <i class="icon-picture-1 d_inline_m"></i>
                                    </a>
                                </div>
                                <h3 class="fw_light"><a href="" class="color_dark tr_all">{{$article->title}}</a></h3>
                                <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                    {{--<li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_grey fs_small">
                                            <i>admin</i>
                                        </a>
                                    </li>--}}
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="fs_medium color_grey"><i>{{ $article->category->name }}</i></a>
                                    </li>
                                    {{-- <li class="m_right_15 relative d_inline_m">
                                         <a href="#" class="color_scheme_hover">
                                             <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                         </a>
                                     </li>--}}
                                    {{--<li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_red_hover">
                                            <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">176</i>
                                        </a>
                                    </li>--}}
                                </ul>
                                <p class="fw_light m_bottom_12">{!! substr($article->content, 0, 200)."....." !!}</p>
                                <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-angle-right"></i>
                                </span>
                                    اقرأ المزيد
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>

            @endforeach

        </div>

    </div>
</div>

@endsection
=======

<title>آخر الأخبار</title>

@extends('layouts.blog')

@section('content')

<!--content-->
<div class="section_offset" style="background: #f7f9f9">
    <div class="container" >

        <div class="row">

            @foreach($articles as $article)

                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_xs_bottom_30">
                    <!--post-->
                    <article>
                        <!--post content-->
                        <figure>
                            <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="d_block wrapper r_corners m_bottom_20">
                                <img src="{{asset($article->image)}}" alt="">
                            </a>
                            <figcaption class="blog_post">
                                <!--date,category,likes-->
                                <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                                    <!--date-->
                                    <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_purple color_light not_hover t_align_c blog_date m_bottom_5">
                                        <span class="d_block day_of_the_month fw_light">{{ $article->date->format('d') }}</span>
                                        <span class="d_block tt_uppercase fs_medium">{{ $article->date->format('M') }}</span>
                                    </a>
                                    <!--category-->
                                    <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_purple bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                                        <i class="icon-picture-1 d_inline_m"></i>
                                    </a>
                                </div>
                                <h3 class="fw_light"><a href="" class="color_dark tr_all">{{$article->title}}</a></h3>
                                <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                    {{--<li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_grey fs_small">
                                            <i>admin</i>
                                        </a>
                                    </li>--}}
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="fs_medium color_grey"><i>{{ $article->category->name }}</i></a>
                                    </li>
                                    {{-- <li class="m_right_15 relative d_inline_m">
                                         <a href="#" class="color_scheme_hover">
                                             <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                         </a>
                                     </li>--}}
                                    {{--<li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_red_hover">
                                            <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">176</i>
                                        </a>
                                    </li>--}}
                                </ul>
                                <p class="fw_light m_bottom_12">{!! substr($article->content, 0, 200)."....." !!}</p>
                                <a href="{{ route('view_blog', ['id' => $article->id]) }}" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
                                <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                    <i class="icon-angle-right"></i>
                                </span>
                                    اقرأ المزيد
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>

            @endforeach

        </div>

    </div>
</div>

@endsection
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
