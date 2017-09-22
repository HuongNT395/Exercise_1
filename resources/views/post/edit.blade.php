<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
</head>
<form class="form-group" method="post">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-3">
            Title
        </div>
        <div class="col-lg-9">
            <input type="text" name="title" placeholder="add a title" value="{{$post->title}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            Content
        </div>
        <div class="col-lg-9">
            <textarea class="text-info" name="content" placeholder="add a content" id="content">{{$post->content}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            Category
        </div>
        <div class="col-lg-9">
            <select name="category">
                <option value="{{$post->category_id}}">{{$post->category->name}}</option>
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
                <option value="{{$post->user_id}}">{{$post->user->name}}</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" name="update" class="btn-danger">Add</button>
</form>
<script>
    CKEDITOR.replace('content');
</script>