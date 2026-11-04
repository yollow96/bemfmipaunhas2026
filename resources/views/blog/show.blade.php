@extends('layout')
@section('title', 'Blog')
@section('blog')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Blog Details</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li>Blog Details</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">



        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ asset($blog->image) }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{ $blog->judul }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $blog->author }}
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                        {{ $blog->created_at->format('d M Y') }}</li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">

                                {!! $blog->desc !!}



                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li>{{ $blog->kategori }}</li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->
                        <!--
              <div class="post-author d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                <div>
                  <h4>Jane Smith</h4>
                  <div class="social-links">
                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div>
                   -->
                        <!-- End post author -->


                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    <div class="post-item mt-3">
                                        <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati
                                                    ut</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a>
                                            </h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div>

                            </div><!-- End sidebar recent posts-->


                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
