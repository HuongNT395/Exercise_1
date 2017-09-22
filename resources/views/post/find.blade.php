@foreach($result as $r)
    <div>
        {{$r->title}}<br>
        {{$r->content}}<br>
        {{$r->category_id}}<br>
        {{$r->user_id}}<br>
    </div>
@endforeach