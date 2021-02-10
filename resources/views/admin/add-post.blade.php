
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
      <div class="col-xs-12 form-group">
        <label for="tag" name="tag" class="control-label">Izaberite tag</label>
        <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
            Select all
        </button>
        <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
            Deselect all
        </button>
        <select name="tag[]" id="tag" class="form-control select2" id="selectall-tag" multiple required>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach
        </select>
        <br><br>
        <p class="help-block"></p>
        @if($errors->has('tag'))
            <p class="help-block">
                {{ $errors->first('tag') }}
            </p>
        @endif
{{--     <div class="form-group">
      <label for="exampleFormControlFile1">Slika</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div> --}}

    <input class="btn btn-primary" type="submit" value="Submit">
  </form>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

  <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <script>
    $("#selectbtn-tag").click(function(){
        $("#selectall-tag > option").prop("selected","selected");
        $("#selectall-tag").trigger("change");
    });
    $("#deselectbtn-tag").click(function(){
        $("#selectall-tag > option").prop("selected","");
        $("#selectall-tag").trigger("change");
    });

    $(document).ready(function () {
        $('.select2').select2();
    });
  @include('layouts.footer')