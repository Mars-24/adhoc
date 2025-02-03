@extends('frontend.layouts.master') 
@section('content')
<!-- Banner Start -->
<section class="main-banner inner-banner">
    <span
        class="inner-banner-bg back-img"
        style="background-image: url('{{ asset('frontend/images/blog-bg.png') }}');"
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
                        Blog
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
                <div class="row" id="blog-list">
                    @if ($blogs->count() > 0)
                        @foreach ($blogs as $blog)
                            <div class="col-lg-6 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div
                                    class="blog-post back-img"
                                    style="background-image: url('{{ asset('storage/'.$blog->image) }}');"
                                >
                                    <span class="blog-date">
                                        {{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM D, YYYY') }}
                                    </span>
                                    <div class="blog-post-text">
                                        <h3 class="h3-title">{{ $blog->title }}</h3>
                                        <a href="{{ route('blog-detail', ['id' => $blog->id]) }}" class="read-more" title="Read More">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3 class="h3-title">Aucun Poste</h3>
                    @endif
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="pagination wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                            {{ $blogs->links('vendor.pagination.custom') }}
                        </div>
                    </div>
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
                        <form id="search-form">
                            <div class="form-box">
                                <input
                                    type="text"
                                    id="search"
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
                                    background-image: url('{{asset("/storage/$recent->image")}}');
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

                            @endforeach 
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
                        <ul id="tags-list">
                            <li><a href="javascript:void(0);" title="Business" data-tag="Business">Business</a></li>
                            <li><a href="javascript:void(0);" title="Web" data-tag="Web">Web</a></li>
                            <li><a href="javascript:void(0);" title="Graphique" data-tag="Graphique">Graphique</a></li>
                            <li><a href="javascript:void(0);" title="Brand" data-tag="Brand">Brand</a></li>
                            <li><a href="javascript:void(0);" title="Site Web" data-tag="Site Web">Site Web</a></li>
                            <li><a href="javascript:void(0);" title="Strategie" data-tag="Strategy">Strategie</a></li>
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
            searchBlogs({ query: query });
        });
    
        $('#tags-list').on('click', 'a[data-tag]', function(e) {
            e.preventDefault();
            var tag = $(this).data('tag');
            searchBlogs({ tag: tag });
        });
    
        function searchBlogs(params) {
            $.ajax({
                url: '{{ route("search-blogs") }}',
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

