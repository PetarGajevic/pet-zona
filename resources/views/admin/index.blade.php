@include('admin.master')


@include('layouts.message')

<div style="margin-top: 50px;">
<a type="button" class="btn btn-info" href="{{route('posts.create')}}">Dodaj objavu</a>
</div>


<div class="container">
    @foreach(array_chunk($posts, 3) as $post)
    <div class="row">
        @foreach($post as $add)
        <div class="col-sm-3 posts-index">
            <h1>{{$add['title']}} </h1>
            <img src="{{ url('storage/images/'.$add['image'] ) }}" alt="" title="" />
            <div style="display: inline-block;">
            <a type="button" class="btn btn-info" href="/posts/{{$add['id']}}/edit">Izmjeni</a>
           
           {{-- <a href="{{route('posts.destroy', $add['id'])}}" title="delete" type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Delete</a> --}}
           <form action="{{ route('posts.destroy',$add['id']) }}" method="POST" style="display: inline-block;">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Izbrisi</button>
        </form>
        </div>
          </div>
    @endforeach 
    </div>
  
  @endforeach
</div>

@include('layouts.modal-delete')

@include('layouts.footer')