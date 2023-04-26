<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66">
            <h3 class="row cl5 txt-center respon1">
                <div class="col-sm-4">
                    <hr style = "background-color:rgb(0, 0, 0); width:70%;float:left;height:10px">
                    <hr style = "background-color:rgb(167, 167, 167);height:10px">
                </div>
                <div class="col-sm-4 stext-101 text-uppercase fw-bold"><h1>Tin Tức</h1></div>
                <div class="col-sm-4">
                    <hr style = "background-color:rgb(0, 0, 0); width:70%;float:right;height:10px">
                    <hr style = "background-color:rgb(167, 167, 167);height:10px">
                </div>
            </h3>
        </div>
        <div class="row">
        @foreach ($blogs as $key=> $blog )


            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0" style="height:220px">
                        <a href="blog-detail.html">
                            <img src="{{$blog->thumb}}" alt="IMG-BLOG">
                        </a>
                    </div>

                    <div class="p-t-15">
                        <div class="stext-107 flex-w p-b-14">
                            <span class="m-r-3">
                                <span class="cl4">
                                    By
                                </span>

                                <span class="cl5">
                                    admin
                                </span>
                            </span>

                            <span>
                                <span class="cl4">
                                    on
                                </span>

                                <span class="cl5">
                                    2023
                                </span>
                            </span>
                        </div>

                        <h4 class="p-b-12">
                            <a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04" style="font-family: Arial, Helvetica, sans-serif">
                                {{$blog->name}}
                            </a>
                        </h4>

                        <p class="stext-108 cl6" >
                            {{$blog->description}}
                        </p>
                    </div>
                    <a href="/blog-detail/{{ $blog->id }}-{{Str::slug($blog->name)}}.html" >
                        <button type="button" class="stext-107 btn btn-outline-secondary" style="float: right">
                            Tiếp tục
                            <i class="nav-icon fas fa-angle-double-right"></i>
                        </button>
                    </a>
                </div>
            </div>

        @endforeach

        </div>
    </div>
</section>
