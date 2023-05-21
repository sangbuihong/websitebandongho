@include('head')
@include('header')


<section class="bg0 p-t-120 p-b-20">
    <div class="container">
        <div class="row">

            @forelse ($blogs as $blog )

            <div class="col-12  p-b-80">
                <div class="p-l-130 p-r-130 p-r-0-lg">
                    <!--  -->
                    <div class="wrap-pic-w how-pos5-parent">
                        <img src="{{$blog->thumb}}" alt="IMG-BLOG">

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
                    </div>

                    <div class="p-t-32">
                        <span class="flex-w flex-m stext-111 cl2 p-b-19">
                            <span>
                                <span class="cl4">By</span> Admin
                                <span class="cl12 m-l-4 m-r-6">|</span>
                            </span>

                            <span>
                                bình luận
                            </span>
                        </span>

                        <h4 class="ltext-109 cl2 p-b-28" >
                            {{$blog->name}}
                        </h4>

                        <p class="stext-108 cl6 p-b-26" >
                            {{$blog->description}}
                        </p>

                        <p class="stext-108 cl6 p-b-26" >
                            {!!$blog->content!!}
                        </p>
                    </div>

                    <div class="flex-w flex-t p-t-16">
                        <span class="size-216 stext-116 cl8 p-t-4">
                            Thẻ
                        </span>

                        <div class="flex-w size-217">
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Đồng hồ
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Quai da
                            </a>
                        </div>
                    </div>

                    <!--  -->
                    <div class="p-t-40">
                        <h5 class="mtext-113 cl2 p-b-12">
                            Bình Luận
                        </h5>

                        <p class="stext-107 cl6 p-b-40">
                            Địa chỉ email và số điện thoại của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *
                        </p>

                        <form>
                            <div class="bor19 m-b-20">
                                <textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Bình luận"></textarea>
                            </div>

                            <div class="bor19 size-218 m-b-20">
                                <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="name" placeholder="Tên *">
                            </div>

                            <div class="bor19 size-218 m-b-20">
                                <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
                            </div>

                            <div class="bor19 size-218 m-b-30">
                                <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="web" placeholder="SĐT">
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04">
                                Gửi Bình Luận
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            @empty
                <h1>không có tin tức</h1>
            @endforelse

        </div>
    </div>
</section>

@include('footer')
