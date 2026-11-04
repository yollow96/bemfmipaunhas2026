@extends('layout')
@section('title', 'Blog')
@section('blog')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 260px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2 class="text-white fw-bold mb-2">Kelola Berita & Publikasi</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Kelola Blog</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main" style="background-color: #000000;">

        <!-- ======= Breadcrumbs ======= -->
        <section id="blog" class="blog py-5">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                @guest
                @else
                    <div class="d-flex gap-2 mb-4">
                        <a href="{{ url('/blog/create') }}" class="fmipa-btn-primary" style="font-size: 13px; padding: 8px 18px !important;">
                            <i class="fa fa-plus me-1" aria-hidden="true"></i> Tulis Berita Baru
                        </a>
                        <a href="{{ url('/guest/blog') }}" class="fmipa-btn-outline" style="font-size: 13px; padding: 8px 18px !important;">
                            <i class="fa fa-regular fa-eye me-1" aria-hidden="true"></i> Lihat Tampilan Publik
                        </a>
                    </div>
                @endguest
                <div class="section-header">
                    <h2>Blog</h2>
                </div>


                <div class="row gy-4 posts-list">
                    @foreach ($blog as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset($item->image) }}" class="img-fluid " alt="">
                                    <span class="post-date">{{ $item->created_at->format('d M') }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ Str::limit($item->judul, 40) }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">{{ $item->author }}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">{{ $item->kategori }}</span>
                                        </div>
                                    </div>


                                    {!! Str::limit($item->desc, 50) !!}


                                    <a href="{{ url('/blog/' . $item->id) }}" class="readmore stretched-link"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                            @guest
                            @else
                                <div class="mt-3 d-flex gap-2">
                                    <a href="{{ url('/blog/' . $item->id) . '/edit' }}" title="Edit Blog"
                                       class="btn btn-sm btn-outline-warning rounded-pill px-3 fw-bold" style="border-color: #FFFF00; color: #FFFF00;">
                                        <i class="fa fa-pencil-square-o me-1"></i> Edit
                                    </a>
                                    <form method="POST" action="{{ route('blog.destroy', $item->id) }}" accept-charset="UTF-8"
                                        style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-bold" title="Hapus Berita"
                                            onclick="return confirm(&quot;Yakin ingin menghapus berita ini?&quot;)">
                                            <i class="fa fa-trash-o me-1"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            @endguest
                        </div>
                    @endforeach
                </div>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        {{ $blog->links('pagination::bootstrap-4') }}
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
