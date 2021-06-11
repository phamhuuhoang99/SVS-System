<div class="container">
    <section class="wrap-section-collection">
        <div class="groupTitle-home">
            <div class="blockTitle">
                <h2>{{$title}}</h2>
            </div>
            <p class="subtitle"></p>
        </div>
        <div class="section-collection-list">
            <div class="flex-container-listTheme">
                @include('layouts.themes.item',['img'=>$img1,'sub'=>$sub1,'hrefreal'=>$hrefreal1])
                @include('layouts.themes.item',['img'=>$img2,'sub'=>$sub2,'hrefreal'=>$hrefreal2])
                @include('layouts.themes.item',['img'=>$img3,'sub'=>$sub3,'hrefreal'=>$hrefreal3])
                @include('layouts.themes.item',['img'=>$img4,'sub'=>$sub4,'hrefreal'=>$hrefreal4])
            </div>
        </div>
    </section>
</div>