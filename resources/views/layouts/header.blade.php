<div class="navigation-left" id="navigation-left">
    <div class="logo" style="background-color: white;">
        <a href="/">
            <img src="/site-images/petL.svg" height=60>
        </a>
    </div>
    <div class="pet-blog-main">
        <div class="pet-blog">
            <h2 style="white-space: nowrap;">petZOONA blog</h2>
        </div>
        <div class="pet-blog-right">
            <ul style="width: 120px;">
                @foreach ($categories as $category)

                    <li><img src="/site-images/Drop_down_strelica.svg"><a
                            href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="about-us-main">
        <div class="about-us">
            <h2 style="white-space: nowrap;">About Us</h2>
        </div>
        <div class="about-us-right" onclick="window.location='/about';">
            <h3 style="font-size: 15px;">Sa mnogo sarma pet shop mali svima nudi sto im fali i oprema i vrh hrana
                najstrucnije odabrana</h3>
        </div>
    </div>
    <div class="social">
        <div class="social-div">
            <img src="/site-images/iconfinder_icon-04_2515843.svg">
            <img src="/site-images/iconfinder_icon-social-youtube_211929.svg">
            <img src="/site-images/iconfinder_Colored_Facebook3_svg_5365678.svg">
        </div>
        <div class="social-div-right">
            <ul style="width: 120px; margin-top: 24px;">
                <li><img src="/site-images/Drop_down_strelica.svg"><a target="_blank"
                        href="https://www.instagram.com/petzoonapg/">Instagram</a></li>
                <li><img src="/site-images/Drop_down_strelica.svg"><a target="_blank" href="#">Youtube</a></li>
                <li><img src="/site-images/Drop_down_strelica.svg"><a target="_blank"
                        href="https://www.facebook.com/petzoonapg/">Facebook</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="social-fixed mobile">
    <div class="social-fixed-main row mx-auto">

        <div class="col-4">
            <a target="_blank" href="https://www.instagram.com/petzoonapg/">
                <img src="/site-images/iconfinder_icon-04_2515843.svg"> </a>
        </div>
        <div class="col-4">
            <a target="_blank" href="#">
                <img src="/site-images/iconfinder_icon-social-youtube_211929.svg"> </a>
        </div>
        <div class="col-4"> <a target="_blank" href="https://www.facebook.com/petzoonapg/">
                <img src="/site-images/iconfinder_Colored_Facebook3_svg_5365678.svg"> </a>
        </div>

    </div>
</div>