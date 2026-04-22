@php
    $blogs = \App\Models\Blog::where('status', 'active')->latest()->take(4)->get();
@endphp
<div class="col-xl-4 col-lg-5">
    <div class="sidebar">

        <div class="sidebar__single sidebar__post">
            <h3 class="sidebar__title">Latest blogs</h3>
            <ul class="sidebar__post-list list-unstyled">
                @forelse($blogs as $blog)
                <li>
                    <div class="sidebar__post-image"> <img src="{{ Storage::url($blog->image) }}"
                            alt=""> </div>
                    <div class="sidebar__post-content">
                        <h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a
                                href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                        </h3>
                    </div>
                </li>
                @empty
                No blogs to show
                @endforelse

            </ul>
        </div>

    </div>
</div>