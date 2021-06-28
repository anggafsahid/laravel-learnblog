<div class="card" style="width: 20rem;">
    <img class="card-img-top" src="{{ $getPost->c_post_imageurl }}" alt="Card image cap" style="width: 20rem; height: 15rem;">
    <div class="card-body d-flex flex-column" style="height:15rem">
        <h5 class="card-title">{{ $getPost->c_post_title }}</h5>
        <p class="card-text">{{ Str::limit($getPost->c_post_text, $limit = 100, $end = '...')  }}</p>
        <a href="index.php/post/?post_id={{ $getPost->c_t002_id }}" class="btn btn-primary mt-auto">Continue</a>
    </div>
</div>