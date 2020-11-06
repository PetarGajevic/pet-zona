@include('admin.master')


@include('layouts.message')

<form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {!! method_field('patch') !!}
    <div class="form-group">
        <label for="exampleFormControlInput1">Naslov objave</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{old('title', $post->title)}}" >
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Kategorija</label>
        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"{{ ( old("category_id" , $post->category_id) == $category->id ? "selected":"") }} >{{ $category->name }}</option>
            @endforeach
         
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Tekst objave</label>
        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" >{{old('body', $post->body)}}</textarea>
      </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Slika</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

  @include('layouts.footer')