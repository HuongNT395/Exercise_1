<div class="row">
    <form method="post" action="{{route('search')}}">
        {{csrf_field()}}
        <input type="search" name="search" placeholder="search">
        <button type="submit">Search</button>
    </form>
    <table border="1" style="border-collapse: collapse" class="table-responsive">
        <a href="#">Add</a>
        <tr class="row">
            <th>STT</th>
            <th>Title</th>
            <th>Content</th>
            <th>Category</th>
            <th>Author</th>
            <th colspan="2">Action</th>
        </tr>
    @php($index = 0)
    @foreach($posts as $post)
        <tr class="row">
            <td>{{++$index}}</td>
            <td>{{$post->title}}</td>
            <td>{!! $post->content !!}</td>
            <td>{{$post->category->name}}</td>
            <td>{{$post->user->name}}</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
    @endforeach
    </table>
</div>