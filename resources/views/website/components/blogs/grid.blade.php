@php
    $blogs = \App\Models\Blog::where('status', 'active')->get();
@endphp
<section class="news-section">
    <div class="auto-container">
        <div class="row">
            @forelse ($blogs as $blog)
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('blog-details', $blog->slug) }}"><img
                                        src="{{ Storage::url(path: $blog->image) }}" alt=""></a></figure>
                            <span class="date">
                                {{ date('d', strtotime($blog->date)) }}
                                <span class="month">
                                    {{ date('F', strtotime($blog->date)) }}
                                </span>
                            </span></span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i>{{ $blog->author }}</li>
                                <li><i class="fa fa-comments"></i> {{ random_int(1, 10) }} Comments</li>
                            </ul>
                            <h4 class="title"><a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a></h4>
                            <div class="text">{{ $blog->description }} </div>
                        </div>
                    </div>
                </div>
            @empty
                No blogs to show
            @endforelse
        </div>
    </div>
</section>