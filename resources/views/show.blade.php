@extends('layouts.master')
@section('content')
  
        <div class="right-side">


            <div class="about-section" id="about-section" style="background-color: transparent">
                <div class="fl-di">
                    <div class="dog-left" style="margin-left: 0px;">

                    </div>
                    <div class="about-main posts-main">

                        <div class="dog-categories tagssingle">
                            <ul>
                                @foreach ($tags as $tag)
                             <li> <span class="label label-info label-many">{{ $tag->title }}</span> </li>
                            @endforeach
                            </ul>
                        </div>

                        <h2 style="font: normal normal bold 24px/22px Fira Sans;">{{ $post->title }}</h2>
                        <p style="font: normal normal normal 14px/22px Fira Sans; color:#F6921B;
                                margin-bottom: 70px;">21. decembar 2020</p>


                        <p>{{ $post->body }}</p>
                        <strong>Ukoliko vam se dopada naš blog, podijelite isti sa svojim prijateljima. Hvala!</strong>

                        <div class="share-blog">
                            <img src="../site-images/iconfinder_logo-share_350996.svg">
                            <a
                                href="https://www.facebook.com/sharer/sharer.php?u=https://petzoona.me/posts/1&display=popup"><img
                                    src="../site-images/iconfinder_facebook_389172.svg"></a>
                            <a href="https://twitter.com/share?url=https://petzoona.me/posts/1&text=title" rel="me"
                                title="Twitter" target="_blank"><img
                                    src="../site-images/iconfinder_twitter_2400858.svg"></a>
                        </div>
                    </div>

                </div>
                <div class="more-blogs" style="   ">
                    <h2>Još naših blogova pogledajte u nastavku</h2>
                    <div class="dog-blog-main">
                        @foreach ($posts as $post)
                            <div class="dog-blog">
                                <a href="/posts/{{ $post->id }}">
                                    <h2>{{ $post->title }}</h2>
                                    <div class="dog-date">
                                        <p class="blog-date" style=" color:#F6921B;">Blog je objavljen
                                            {{ $post->created_at->diffForHumans() }}</p>
                                        <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                        <img src="/site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                    </div>
                                </a>
                            </div>

                            <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                        @endforeach
                    </div>
                </div>


        @endsection
