@foreach ($posts as $post)
    <div class="search-result-list col-md-12 row">
        @if ($post->image_path = null)
            <p class="col-md-4">no_image</p>
        @else
            <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
        @endif
        <div class="search-about col-md-8">
            <label>{{ ($cond_title) }}</label><br>
            <label>{{ ($cond_prefecture) }}</label><br>
            <label>{{ ($cond_category) }}</label><br>
        </div>
    </div>
    <hr>
@endforeach

@foreach ($posts as $post)
    <div class="col-md-12 row">
        @if ($post->image_path)
            <img src="{{ asset('storage/image/' . $post->image_path) }}" class="col-md-4">
        @else
            <p class="col-md-4">no_image</p>
        @endif
        <div class="content-about col-md-8 col text-left">
            <label>タイトル：{{ $post->title }}</label><br>
            <label>県：{{ $post->prefecture }}</label><br>
            <label>カテゴリー：{{ $post->category }}</label><br>
            <label>本文：{{ $post->body }}</label>
        </div>
    </div>
    <hr>
@endforeach
