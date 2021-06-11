@extends('templates.fashion.master')
@section('title', 'Fashion: HTML5/CSS3 Template')
@section('content')
<section id="article-section" class="line archive">
        <div class="margin">
           <!-- ARTICLES -->
           <div class="s-12 m-7 l-9">
              <!-- ARTICLE 1 -->
              <article class="margin-bottom">
                 <div class="post-1 line">
                    <!-- image -->
                    <div class="s-12 l-11 post-image">
                       <a href="{{ route('temp.fashion.post') }}"><img src="/templates/fashion/img/post1-big.jpg" alt="Fashion"></a>
                    </div>
                    <!-- date -->
                    <div class="s-12 l-1 post-date">
                       <p class="date">07</p>
                       <p class="month">mar</p>
                    </div>
                 </div>
                 <!-- text -->
                 <div class="post-text">
                    <a href="{{ route('temp.fashion.post') }}">
                       <h2>Free responsive template</h2>
                    </a>
                    <p>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                       aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                       ex ea commodo consequat...
                    </p>
                    <a class="continue-reading" href="{{ route('temp.fashion.post') }}">Continue reading</a>
                 </div>
              </article>

              <!-- ARTICLE 2 -->
              <article class="margin-bottom">
                 <div class="post-2 line">
                    <!-- image -->
                    <div class="s-12 l-11 post-image">
                       <a href="{{ route('temp.fashion.post') }}"><img src="/templates/fashion/img/post2-big.jpg" alt="Fashion"></a>
                    </div>
                    <!-- date -->
                    <div class="s-12 l-1 post-date">
                       <p class="date">06</p>
                       <p class="month">mar</p>
                    </div>
                 </div>
                 <!-- text -->
                 <div class="post-text">
                    <a href="{{ route('temp.fashion.post') }}">
                       <h2>Amazing fashion blog</h2>
                    </a>
                    <p>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                       aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                       ex ea commodo consequat...
                    </p>
                    <a class="continue-reading" href="{{ route('temp.fashion.post') }}">Continue reading</a>
                 </div>
              </article>

              <!-- ARTICLE 3 -->
              <article class="margin-bottom">
                 <div class="post-3 line">
                    <!-- image -->
                    <div class="s-12 l-11 post-image">
                       <a href="{{ route('temp.fashion.post') }}"><img src="/templates/fashion/img/post3-big.jpg" alt="Fashion"></a>
                    </div>
                    <!-- date -->
                    <div class="s-12 l-1 post-date">
                       <p class="date">04</p>
                       <p class="month">mar</p>
                    </div>
                 </div>
                 <!-- text -->
                 <div class="post-text">
                    <a href="{{ route('temp.fashion.post') }}">
                       <h2>Nice minimalist design</h2>
                    </a>
                    <p>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                       aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                       ex ea commodo consequat...
                    </p>
                    <a class="continue-reading" href="{{ route('temp.fashion.post') }}">Continue reading</a>
                 </div>
              </article>

              <!-- ARTICLE 4 -->
              <article class="margin-bottom">
                 <div class="post-4 line">
                    <!-- image -->
                    <div class="s-12 l-11 post-image">
                       <a href="{{ route('temp.fashion.post') }}"><img src="/templates/fashion/img/post4-big.jpg" alt="Fashion"></a>
                    </div>
                    <!-- date -->
                    <div class="s-12 l-1 post-date">
                       <p class="date">01</p>
                       <p class="month">mar</p>
                    </div>
                 </div>
                 <!-- text -->
                 <div class="post-text">
                    <a href="{{ route('temp.fashion.post') }}">
                       <h2>With advertising regions</h2>
                    </a>
                    <p>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                       aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                       ex ea commodo consequat...
                    </p>
                    <a class="continue-reading" href="{{ route('temp.fashion.post') }}">Continue reading</a>
                 </div>
              </article>

              <!-- ARTICLE 5 -->
              <article class="margin-bottom">
                 <div class="post-5 line">
                    <!-- date -->
                    <div class="s-12 post-date">
                       <p class="date">27</p>
                       <p class="month">feb</p>
                    </div>
                 </div>
                 <!-- text -->
                 <div class="post-text">
                    <a href="{{ route('temp.fashion.post') }}">
                       <h2>And again - it's totally free!</h2>
                    </a>
                    <p>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                       aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                       ex ea commodo consequat...
                    </p>
                    <a class="continue-reading" href="{{ route('temp.fashion.post') }}">Continue reading</a>
                 </div>
              </article>
           </div>
           <!-- SIDEBAR -->
           <div class="s-12 m-5 l-3">
              <aside>
                 <!-- NEWS 1 -->
                 <img src="/templates/fashion/img/news1.jpg" alt="News 1">
                 <div class="aside-block margin-bottom">
                    <h3>This is the first news on blog</h3>
                    <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                 </div>
                 <!-- NEWS 2 -->
                 <img src="/templates/fashion/img/news2.jpg" alt="News 2">
                 <div class="aside-block margin-bottom">
                    <h3>Second news on the fashion blog</h3>
                    <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                 </div>
              </aside>
           </div>
        </div>
     </section>
@endsection