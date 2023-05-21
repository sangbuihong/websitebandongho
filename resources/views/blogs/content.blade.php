@include('head')
@include('header')

<section class="bg0 p-t-120 p-b-60">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $key=> $blog )
            <div class="col-12 p-b-80">
                <div class="p-l-130 p-r-130  p-r-0-lg">
                    <!-- item blog -->
                    <div class="p-b-63">
                        <a href="/blog-detail/{{ $blog->id }}-{{Str::slug($blog->name)}}.html" class="hov-img0 how-pos5-parent">
                            <img src="{{$blog->thumb}}" alt="IMG-BLOG" style="height:500px;">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
                                @foreach ($logos as $logo )
                                <span class="ltext-107 cl2 txt-center">
                                    <img src="{{$logo->thumb}}" alt="IMG-BLOG">
                                </span>

                                <span class="stext-109 cl3 txt-center">
                                     2023
                                </span>
                                @endforeach

                            </div>
                        </a>

                        <div class="p-t-32">
                            <h4 class="p-b-15">
                                <a href="/blog-detail/{{ $blog->id }}-{{Str::slug($blog->name)}}.html" class="ltext-108 cl2 hov-cl1 trans-04">
                                    {{$blog->name}}
                                </a>
                            </h4>

                            <p class="stext-108 cl6">
                                {{$blog->description}}
                            </p>

                            <div class="flex-w flex-sb-m p-t-18" >
                                <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                    <span>
                                        <span class="cl4">By</span> Admin
                                        <span class="cl12 m-l-4 m-r-6">|</span>
                                    </span>

                                    <span>
                                        8 Comments
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{--  ==========================================  --}}




@include('footer')
