
@include('admin.master')


@include('layouts.message')

<form action="/posts" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlInput1">Naslov objave</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Kategorija</label>
        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
         
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Tekst objave</label>
        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Slika</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

  @include('layouts.footer')