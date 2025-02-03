@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img"
            style="background-image: url('{{ asset('frontend/images/blog-bg.png') }}');"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Blog Detail</h1>
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="index.html" title="Home">Home</a>
                            <span class="arrow"><img src="{{ asset('/frontend/images/right-arrow.svg') }}"
                                    alt="Arrow"></span>
                            <a href="blog-list.html" title="Blog">Blog</a>
                            <span class="arrow"><img src="{{ asset('/frontend/images/right-arrow.svg') }}"
                                    alt="Arrow"></span>
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
                <div class="col-lg-8" id="blog-list">
                    <div class="blog-detail-box wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="blog-detail-img back-img"
                            style="background-image: url('{{ asset("/storage/$blog->image") }}');">
                            <a href="javascript:void(0);" class="video-play-icon popup-youtube" title="Play Video"><span><i
                                        class="fa fa-play" aria-hidden="true"></i></span></a>
                        </div>
                        <h3 class="h3-title">{{ $blog->title }}</h3>
                        {!! $blog->message !!}
                        <div class="blog-post-footer">
                            <div class="tags">
                                <p>Tags:</p>
                                <ul>

                                    @foreach ($blog->tags as $tag)
                                        <li><a href="javascript:void(0)" title="Web">{{ $tag->title }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="blog-post-social">
                                <a href="https://www.facebook.com/adhoc.tg" title="Follow on Facebook"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/adhoc.tg/" title="Follow on Instagram"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/adhoc_tg" title="Follow on Twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="related-blogs wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="h2-title">Blogs similaires</h2>
                        <div class="row">
                            @if (count($relatedPosts) > 0)
                                @foreach ($relatedPosts as $related)
                                    <div class="col-lg-6">
                                        <div class="blog-post back-img"
                                            style="background-image: url('{{ asset('storage/' . $related->image) }}');">
                                            <span class="blog-date">
                                                {{ \Carbon\Carbon::parse($related->created_at)->isoFormat('MMM D, YYYY') }}
                                            </span>

                                            <div class="blog-post-text">
                                                <h3 class="h3-title">{{ $related->title }}</h3>
                                                <a href="{{ route('blog-detail', ['id' => $related->id]) }}"
                                                    class="read-more" title="Read More">Voir plus</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h3 class="h3-title"></h3>
                            @endif
                        </div>
                    </div>
                    <div class="details-post-comment wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="h2-title">Commentaires</h2>
                        @if (count($comments) > 0)
                            @foreach ($comments as $comment)
                                <div class="detail-comment-box odd">
                                    <div class="detail-comment-img back-img"
                                        style="background-image:url('assets/images/review-img1.jpg')"></div>
                                    <div class="detail-comment-text">
                                        {{-- <a href="javascript:void(0)" title="Reply">Reply</a> --}}
                                        <h5 class="detail-comment-title">{{ $comment->name }}</h5>
                                        <p>{{ $comment->message }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3 class="h3-title"> Aucun Commentaire </h3>
                        @endif
                    </div>
                    <div class="leave-reply wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="h2-title">Laissez un commentaire</h2>
                        <form class="leave-review-form" method="POST" action="{{ route('blog_comment', $blog->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box">
                                        <input name="name" type="text" class="form-input" placeholder="Nom Complet"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <input type="email" name="email" class="form-input" placeholder="Adresse Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box">
                                        <textarea name="message" class="form-input" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box mb-0">
                                        <button name="submit" type="submit" value="Submit" class="sec-btn"><span>Envoyer
                                                </span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-box search-box wow left-animation" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <div class="title left">
                                <span class="sub-title">Recherche</span>
                            </div>
                            <form>
                                <div class="form-box">
                                    <input type="text" class="form-input" placeholder="Rechercher ici..." required />
                                    <button type="submit" class="sec-btn">
                                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box recent-post wow left-animation" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <div class="title left">
                                <span class="sub-title">Posts Recents</span>
                            </div>
                            @if (count($recents) > 0)
                                @foreach ($recents as $recent)
                                    <div class="recent-post-bx">
                                        <div class="recent-img back-img"
                                            style="
                                    background-image: url('{{ asset("/storage/$recent->image") }}');
                                ">
                                        </div>
                                        <div class="recent-text">
                                            <p>
                                                <a href="{{ route('blog-detail', ['id' => $recent->id]) }}"
                                                    title="{{ $recent->title }}">{{ $recent->title }}</a>
                                            </p>
                                            <span>{{ \Carbon\Carbon::parse($recent->created_at)->isoFormat('MMM D, YYYY') }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h3 class="h3-title"> Aucun Poste </h3>
                            @endif
                        </div>
                        <div class="sidebar-box category wow left-animation" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <div class="title left">
                                <span class="sub-title">Categories</span>
                            </div>
                            <ul>
                                @foreach ($categories as $categorie)
                                    <li>
                                        <a href="javascript:void(0);" title="Web Design">{{ $categorie->name }}
                                            <span>{{ \App\Models\Post::where(['category_id' => $categorie->id])->count() }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-box tags wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="title left">
                                <span class="sub-title">Tags</span>
                            </div>
                            <ul id="tags-list">
                                <li><a href="javascript:void(0);" title="Business" data-tag="Business">Business</a></li>
                                <li><a href="javascript:void(0);" title="Web" data-tag="Web">Web</a></li>
                                <li><a href="javascript:void(0);" title="Graphique" data-tag="Graphique">Graphique</a>
                                </li>
                                <li><a href="javascript:void(0);" title="Brand" data-tag="Brand">Brand</a></li>
                                <li><a href="javascript:void(0);" title="Site Web" data-tag="Site Web">Site Web</a></li>
                                <li><a href="javascript:void(0);" title="Strategie" data-tag="Strategy">Strategie</a>
                                </li>
                                <li><a href="javascript:void(0);" title="Mission" data-tag="Mission">Mission</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog List End -->

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                var query = $(this).val();
                searchBlogs({
                    query: query
                });
            });

            $('#tags-list').on('click', 'a[data-tag]', function(e) {
                e.preventDefault();
                var tag = $(this).data('tag');
                alert('yes papa');

                searchBlogs({
                    tag: tag
                });
            });

            function searchBlogs(params) {
                $.ajax({
                    url: '{{ route('search-blogs') }}',
                    type: 'GET',
                    data: params,
                    success: function(data) {
                        $('#blog-list').empty();
                        if (data.length > 0) {
                            data.forEach(function(blog) {
                                var blogPost = `
                                <div class="col-lg-6 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="blog-post back-img" style="background-image: url('/storage/${blog.image}');">
                                        <span class="blog-date">${new Date(blog.created_at).toLocaleDateString('fr-FR', { month: 'short', day: 'numeric', year: 'numeric' })}</span>
                                        <div class="blog-post-text">
                                            <h3 class="h3-title">${blog.title}</h3>
                                            <a href="/blog-detail/${blog.id}" class="read-more" title="Read More">Voir plus</a>
                                        </div>
                                    </div>
                                </div>`;
                                $('#blog-list').append(blogPost);
                            });
                        } else {
                            $('#blog-list').append('<h3 class="h3-title">Aucun Poste</h3>');
                        }
                    }
                });
            }
        });
    </script>
@endsection
