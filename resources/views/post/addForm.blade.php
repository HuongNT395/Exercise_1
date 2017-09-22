<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
</head>
<form class="form-group" method="post" action="{{route('post.added')}}">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-3">
            Title
        </div>
        <div class="col-lg-9">
            <input type="text" name="title" placeholder="add a title">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            Content
        </div>
        <div class="col-lg-9">
            <textarea class="text-info" name="content" placeholder="add a content" id="content"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            Category
        </div>
        <div class="col-lg-9">
            <select name="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            User
        </div>
        <div class="col-lg-9">
            <select name="user">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" name="add" class="btn-danger">Add</button>
</form>
<script>
    CKEDITOR.replace('content');
</script>