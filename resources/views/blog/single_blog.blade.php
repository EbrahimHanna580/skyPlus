
<title>{{ $article->title }}</title>

@extends('layouts.blog')

@section('content')

    <!--content-->
    <section class="section_offset" style="background: #f7f9f9">
        <div class="container">
            <!--post-->
            <article class="clearfix m_bottom_45 m_xs_bottom_30 blog_post">
                <!--date,category,likes-->
                <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                    <!--date-->
                    <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_color_purple color_light not_hover t_align_c blog_date m_bottom_5">
                        <span class="d_block day_of_the_month fw_light">{{ $article->date->format('d') }}</span>
                        <span class="d_block tt_uppercase fs_medium">{{ $article->date->format('M') }}</span>
                    </a>
                    <!--category-->
                    <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_purple bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                        <i class="icon-picture-1 d_inline_m"></i>
                    </a>
                    <!--likes-->
                   {{-- <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c border_grey r_corners tr_all color_grey color_red_hover">
								<span class="d_inline_m">
									<span class="d_block"><i class="icon-heart-empty color_grey_light_2 tr_all d_block m_top_5"></i></span>
									<i class="fs_medium">176</i>
								</span>
                    </a>--}}
                    <!-- AddThis Button BEGIN -->
                   {{-- <div class="addthis_toolbox addthis_floating_style addthis_counter_style">
                        <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
                        <a class="addthis_button_tweet" tw:count="vertical"></a>
                        <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
                        <a class="addthis_counter"></a>
                    </div>--}}
                </div>
                <!--post content-->
                <figure>
                    <img src="{{asset($article->image)}}" alt="" class="r_corners m_bottom_20">
                    <figcaption>
                        <h3 class="fw_light color_dark">{{ $article->title }}</h3>
                        <ul class="dotted_list m_bottom_5 color_grey_light_2">
                            {{--<li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_grey fs_small">
                                    <i>By admin</i>
                                </a>
                            </li>--}}
                            <li class="m_right_15 relative d_inline_m">
                                <a href="#" class="fs_medium color_grey"><i>{{ $article->category->name }}</i></a>
                            </li>
                            {{--<li class="m_right_15 relative d_inline_m">
                                <a href="#" class="color_scheme_hover">
                                    <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                </a>
                            </li>--}}
                        </ul>

                        <p class="fw_light m_bottom_12">
                            {!! $article->content !!}
                        </p>
                        {{--<p class="fw_light m_bottom_10"> </p>--}}

                        <!--tags-->
                        <i class="icon-tag-1 color_grey_light_2 d_inline_m m_right_5 fs_large tags_icon"></i>
                        <ul class="d_inline_m fw_light">

                            @foreach($article->tags as $tag)

                                <li class="d_inline_m"><a href="#" class="color_purple">{{$tag->name}}</a></li>

                            @endforeach

                        </ul>
                    </figcaption>
                </figure>
            </article>

        </div>
    </section>

@endsection
