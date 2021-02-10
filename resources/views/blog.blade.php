@extends('layouts.master')
@section('content')
                <div class="right-side">
                        <div class="dog-section" id="dog-section" >
                          <div class="dog-left">
                          </div>
                          <div class="dog-right" >
                            <div class="dog-categories">
                              <ul>
                                @foreach ($tags as $tag)
                                <li> <span class="label label-info label-many"><a href="#">{{ $tag->title }}</a></span> </li>
                               @endforeach
                              </ul>
                            </div>
                            <div class="dog-blog-main" >
                              @forelse ($posts as $post)
                              <div class="dog-blog">
                                <a href="/posts/{{$post->id}}">
                                <h2>{{$post->title}}</h2>
                                <div class="dog-date">
                                  <p class="blog-date" style="color:#F6921B;">Blog je objavljen {{$post->created_at->diffForHumans()}}</p>
                                  <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                  <img src="/site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                </div>
                              </a>
                              </div>

                              <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                              @empty
                              <div class="dog-blog">
                             
                                <h2>Kategorija nema blog objava</h2>
                            
                              </div>
                              @endforelse
                            
                            </div>
                          </div>
                        </div>

                </div>
@endsection