@extends('layouts.master') 
@section('content')

<!-- CONTENT -->    
  <div class="content col-xs-8">


    <div class="col-xs-6">

   @if(isset($categires)) 
            {{-- in tất cả bài viết ra bằng foreach --}}
            @foreach ($categires as $category)
        <!-- ARTICLE 1 -->      
        <article>
            <div class="post-image">
                <div class="category"><a href="#">{{$category->name}}</a></div>
            </div>
            <div class="post-text">
                <span class="date">{{$category->created_at}}</span>
                <h2><a href="#">MAECENAS CONSECTETUR</a></h2>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.
                                Nunc maximus arcu sit amet accumsan imperdiet. Aliquam elementum efficitur ipsum nec blandit. 
                                Pellentesque posuere vitae metus sed auctor. Nullam accumsan fringilla ligula non pellentesque.
                                <a href="#"><i class="icon-arrow-right2"></i></a></p>                                 
            </div>
            <div class="post-info">
                <div class="post-by">Post By <a href="#">AD-Theme</a></div>
            </div>
        </article>
    
   </div>
</div>
 @endforeach
@endif
@endsection