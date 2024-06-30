@extends('frontend.layouts.master') @section('content')
<!-- Banner Start -->
<section class="main-banner inner-banner">
    <span
        class="inner-banner-bg back-img"
        style="background-image: url('assets/images/blog-bg.jpg')"
    ></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1
                        class="h1-title wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                    >
                        Notre blog
                    </h1>
                    <div
                        class="breadcrumb-box wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.3s"
                    >
                        <a href="index.html" title="Home">Accueil</a>
                        <span class="arrow"
                            ><img
                                src="{{
                                    asset('frontend/images/right-arrow.svg')
                                }}"
                                alt="Arrow"
                        /></span>
                        <p>Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Blog List Start -->
<section class="main-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @if (count($blogs)>0)
                     @foreach ($blogs as $blog )

                    <div class="col-lg-6 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div
                            class="blog-post back-img"
                            style="
                                background-image: url('{{asset("/storage/uploads/blog_images/$blog->image")}}');
                            "
                        >
                            <span
                                class="blog-date"
                                >{{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM D, YYYY')}}</span
                            >
                            <div class="blog-post-text">
                                <h3 class="h3-title">{{$blog->title}}</h3>
                                <a
                                    href="{{route('blog-detail',["id"=>$blog->id])}}"
                                    class="read-more"
                                    title="Read More"
                                    >Voir plus</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="pagination wow fadeup-animation"
                                data-wow-duration="1s"
                                data-wow-delay="0.2s"
                            >
                                <ul>
                                    <li>
                                        <a
                                            href="javascript:void(0);"
                                            class="arrow"
                                            title="Previous"
                                            ><img
                                                src="{{asset('frontend/images/right-arrow.svg')}}"
                                                alt="Arrow"
                                        /></a>
                                    </li>
                                    <li><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li class="active">
                                        <a href="javascript:void(0);">3</a>
                                    </li>
                                    <li><a href="javascript:void(0);">4</a></li>
                                    <li><a href="javascript:void(0);">5</a></li>
                                    <li>
                                        <a
                                            href="javascript:void(0);"
                                            class="arrow"
                                            title="Next"
                                            ><img
                                                src="{{asset('frontend/images/right-arrow.svg')}}"
                                                alt="Arrow"
                                        /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                     @else
                        <h3 class="h3-title"> Aucun Poste  </h3>
                     @endif 
                     {{--

                    <div
                        class="col-lg-6 wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"  >
                        <div
                            class="blog-post back-img"
                            style="
                                background-image: url('assets/images/blog-img3.jpg');
                            "
                        >
                            <span class="blog-date">May 1, 2021</span>
                            <div class="blog-post-text">
                                <h3 class="h3-title">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <a
                                    href="blog-detail.html"
                                    class="read-more"
                                    title="Read More"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s" >
                        <div
                            class="blog-post back-img"
                            style="
                                background-image: url('assets/images/blog-img4.jpg');
                            "
                        >
                            <span class="blog-date">May 1, 2021</span>
                            <div class="blog-post-text">
                                <h3 class="h3-title">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <a
                                    href="blog-detail.html"
                                    class="read-more"
                                    title="Read More"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div
                            class="blog-post back-img"
                            style="
                                background-image: url('assets/images/blog-img5.jpg');
                            "
                        >
                            <span class="blog-date">May 1, 2021</span>
                            <div class="blog-post-text">
                                <h3 class="h3-title">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <a
                                    href="blog-detail.html"
                                    class="read-more"
                                    title="Read More"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s" >
                        <div
                            class="blog-post back-img"
                            style="
                                background-image: url('assets/images/blog-img6.jpg');
                            "
                        >
                            <span class="blog-date">May 1, 2021</span>
                            <div class="blog-post-text">
                                <h3 class="h3-title">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <a
                                    href="blog-detail.html"
                                    class="read-more"
                                    title="Read More"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s" >
                        <div class="blog-post no-img">
                            <span class="blog-date">May 1, 2021</span>
                            <div class="blog-post-text">
                                <h3 class="h3-title">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <a
                                    href="blog-detail.html"
                                    class="read-more"
                                    title="Read More"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 wow fadeup-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s" >
                        <div class="blog-post no-img">
                            <span class="blog-date">May 1, 2021</span>
                            <div class="blog-post-text">
                                <h3 class="h3-title">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <a
                                    href="blog-detail.html"
                                    class="read-more"
                                    title="Read More"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
               
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div
                        class="sidebar-box search-box wow left-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                    >
                        <div class="title left">
                            <span class="sub-title">Recherche</span>
                        </div>
                        <form>
                            <div class="form-box">
                                <input
                                    type="text"
                                    class="form-input"
                                    placeholder="Rechercher ici..."
                                    required
                                />
                                <button type="submit" class="sec-btn">
                                    <span
                                        ><i
                                            class="fa fa-search"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div
                        class="sidebar-box recent-post wow left-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                    >
                        <div class="title left">
                            <span class="sub-title">Posts Recents</span>
                        </div>
                        @if (count($recents)>0) @foreach ($recents as $recent )
                        <div class="recent-post-bx">
                            <div
                                class="recent-img back-img"
                                style="
                                    background-image: url('{{asset("/storage/uploads/blog_images/$recent->image")}}');
                                "
                            ></div>
                            <div class="recent-text">
                                <p>
                                    <a
                                        href="{{route('blog-detail',["id"=>$recent->id])}}"
                                        title="{{$recent->title}}"
                                        >{{$recent->title}}</a
                                    >
                                </p>
                                <span
                                    >{{ \Carbon\Carbon::parse($recent->created_at)->isoFormat('MMM D, YYYY')}}</span
                                >
                            </div>
                        </div>
                        @endforeach
                        @else 
                         <h3 class="h3-title"> Aucun Poste  </h3>
                        @endif
                    </div>
                    <div
                        class="sidebar-box category wow left-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                    >
                        <div class="title left">
                            <span class="sub-title">Categories</span>
                        </div>
                        <ul>
                            @foreach ($categories as $categorie )
                            <li>
                                <a href="javascript:void(0);" title="Web Design"
                                    >{{ $categorie->name}} <span>{{\App\Models\Post::where(['category_id'=>$categorie->id])->count()}}</span></a
                                >
                            </li>

                            @endforeach {{--
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    title="Graphic Design"
                                    >Graphic Design <span>10</span></a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Web Design"
                                    >Web Design <span>08</span></a
                                >
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    title="Web Development"
                                    >Web Development <span>15</span></a
                                >
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    title="SEO & Marketing"
                                    >SEO & Marketing <span>05</span></a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Business"
                                    >Business <span>06</span></a
                                >
                            </li>
                            --}}
                        </ul>
                    </div>
                    <div
                        class="sidebar-box tags wow left-animation"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                    >
                        <div class="title left">
                            <span class="sub-title">Tags</span>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" title="Business"
                                    >Business</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Web"
                                    >Web</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Graphic"
                                    >Graphic</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Brand"
                                    >Brand</a
                                >
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    title="Development"
                                    >Development</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Website"
                                    >Website</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Strategy"
                                    >Strategy</a
                                >
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Mission"
                                    >Mission</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog List End -->

@endsection
