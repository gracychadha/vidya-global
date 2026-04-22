<div class="col-xl-8 col-lg-7">
    <div class="blog-details__left">
        <div class="blog-details__img">
            <img src="{{ Storage::url($blog->image) }}" alt="">
            <div class="blog-details__date">
                <span class="day"> {{ date('d', strtotime($blog->date)) }}</span>
                <span class="month"> {{ date('M', strtotime($blog->date)) }}</span>
            </div>
        </div>
        <div class="blog-details__content">
            <ul class="list-unstyled blog-details__meta">
                <li><a href="{{ route('blog-details', $blog->slug) }}"><i class="fas fa-user-circle"></i>
                        {{ $blog->author }}</a> </li>
                <li><a href="{{ route('blog-details', $blog->slug) }}"><i class="fas fa-comments"></i>
                        {{ random_int(1, 10) }} Comments</a>
                </li>
            </ul>
            <h3 class="blog-details__title">{{ $blog->title }}</h3>
            <p class="blog-details__text-2" align="justify">{{ $blog->description }}</p>


            </p>


        </div>


    </div>
</div>