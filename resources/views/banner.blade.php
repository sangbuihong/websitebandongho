<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">

            @foreach ($menus as $menu)

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <div class="hov-img0" style="height:220px">
                        <a href="blog-detail.html">
                            <img src="{{$menu->thumb}}" alt="IMG-BLOG">
                        </a>
                    </div>

                    <a href="/danh-muc/{{$menu->id}}-{{\Str::slug($menu->name, '-')}}.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name stext-102 trans-04 p-b-8" style="font-family: Bookman">
                                <h3>{{$menu->name}}</h3>
                            </span>

                            <span class="block1-info stext-102 trans-04" style="font-family: Bookman">
                                Hot 2023
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">

                                <button class="block1-link stext-101 cl0 trans-09">XEM</button>
                            
                        </div>
                    </a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>

