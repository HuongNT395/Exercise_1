<form method="post">
    <h2><i>Are you sure delete this post?</i></h2>
    {{csrf_field()}}
    <h1>{{$post->title}}</h1>
    <button class="btn-info"><a href="#">Cancle</a></button>
    <button class="btn-danger" type="submit">OK</button>
</form>