@extends('frontend.layouts.master') @section('content')
<!-- Banner Start -->
<section class="main-banner inner-banner">
    <span class="inner-banner-bg back-img" style="background-image: url('assets/images/blog-bg.jpg');"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Blog Detail</h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href="index.html" title="Home">Home</a>
                        <span class="arrow"><img src="{{asset('/frontend/images/right-arrow.svg')}}" alt="Arrow"></span>
                        <a href="blog-list.html" title="Blog">Blog</a>
                        <span class="arrow"><img src="{{asset('/frontend/images/right-arrow.svg')}}" alt="Arrow"></span>
                        <p>Blog Detail</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Blog List Start -->
<section class="main-blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-detail-box wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="blog-detail-img back-img" style="background-image: url('{{asset("/storage/uploads/blog_images/$blog->image")}}');">
                        <a href="javascript:void(0);" class="video-play-icon popup-youtube" title="Play Video"><span><i class="fa fa-play" aria-hidden="true"></i></span></a>
                    </div>
                    <h3 class="h3-title">{{$blog->title}}</h3>
                   {!! $blog->message !!}
                    {{-- <div class="blog-note">
                        <p>There are many variations of passages of It is the available, but the majority have suffered alteration in some form</p>
                        <img width="42" height="30" src="assets/images/quote-icon.svg" alt="Quote">
                    </div>
                    <div class="blog-post-text-list">
                        <ul>
                            <li>Many desktop publishing packages and web page editors now use It is the.</li>
                            <li>injected humour, or randomised words slightly believable.</li>
                            <li>ll the It is the generators on the Internet tend to repeat predefined chunks.</li>
                            <li>Contrary to popular belief, That is the not simply random text.</li>
                        </ul>
                    </div>
                    <div class="blog-detail-img-box">
                        <div class="blog-detail-img back-img" style="background-image: url('assets/images/blog-detail-img1.jpg');"></div>
                        <div class="blog-detail-img back-img" style="background-image: url('assets/images/blog-img3.jpg');"></div>
                    </div> --}}
                    {{-- <p>The point of using That is the that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.  It was popularised in the 1960s with the release of Letraset sheets containing It is the passages</p> --}}
                    <div class="blog-post-footer">
                        <div class="tags">
                            <p>Tags:</p>
                            <ul>
                                <li><a href="javascript:void(0)" title="Web">Web</a></li>
                                <li><a href="javascript:void(0)" title="Graphic">Graphic</a></li>
                                <li><a href="javascript:void(0)" title="Brand">Brand</a></li>
                            </ul>
                        </div>
                        <div class="blog-post-social">
                            <a href="https://www.facebook.com/adhoc.tg" title="Follow on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/adhoc.tg/" title="Follow on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/adhoc_tg" title="Follow on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="related-blogs wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2 class="h2-title">Blogs connexes</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-post back-img" style="background-image: url('assets/images/blog-img4.jpg');">
                                <span class="blog-date">May 1, 2021</span>
                                <div class="blog-post-text">
                                    <h3 class="h3-title">It is a long established fact that a reader will be distracted</h3>
                                    <a href="blog-detail.html" class="read-more" title="Read More">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post back-img" style="background-image: url('assets/images/blog-img3.jpg');">
                                <span class="blog-date">May 1, 2021</span>
                                <div class="blog-post-text">
                                    <h3 class="h3-title">It is a long established fact that a reader will be distracted</h3>
                                    <a href="blog-detail.html" class="read-more" title="Read More">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details-post-comment wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2 class="h2-title">Commentaires</h2>
                    @if (count($comments)>0) @foreach ($comments as $comment )
                    <div class="detail-comment-box odd">
                        <div class="detail-comment-img back-img" style="background-image:url('assets/images/review-img1.jpg')"></div>
                        <div class="detail-comment-text">
                            <a href="javascript:void(0)" title="Reply">Reply</a>
                            <h5 class="detail-comment-title">{{$comment->name}}</h5>
                            <p>{{$comment->message}}</p>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h3 class="h3-title"> Aucun Commentaire  </h3>
                    @endif
                </div>
                <div class="leave-reply wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2 class="h2-title">Laissez un commentaire</h2>
                    <form class="leave-review-form" method="POST" action="{{route('blog_comment',$blog->id)}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input name="name" type="text" class="form-input" placeholder="Nom Complet" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <input type="email" name="email" class="form-input" placeholder="Adresse Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box">
                                    <textarea name="message" class="form-input" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box mb-0">
                                    <button name="submit" type="submit" value="Submit" class="sec-btn"><span>Post Now</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                            @foreach ($tags as $tag)
                            <li>
                                <a href="javascript:void(0);" title="{{$tag->title}}"
                                    >{{$tag->title}}</a
                                >
                            </li>
                            @endforeach
                                               
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog List End -->

@endsection
