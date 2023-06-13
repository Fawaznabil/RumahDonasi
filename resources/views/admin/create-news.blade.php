@extends('layouts.navbar-admin')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-5 py-2">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Master News</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo10/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Data News</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Master News</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Add News</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <section class="h-100 h-custom gradient-custom-2">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <form action="storeNews" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="gambar1" style="color:black" class="form-label">Input Foto Berita</label>
                                <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    {{-- <style>
                                        .image-input-placeholder {
                                            background-image: url('svg/avatars/blank.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('svg/avatars/blank-dark.svg');
                                        }
                                    </style> --}}
                                    <!--end::Image input placeholder-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="gambar1" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="gambar1" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                            </div>
                            <div class="mb-3">
                                <label for="title" style="color:black" class="form-label">Judul Berita</label>
                                @error('title')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="text" class="form-control"name="title" @error('title') is-invalid
                                @enderror id="title">
                              </div>
                              <div class="mb-3">
                                  <label for="excerpt" style="color:black" class="form-label">Ringkasan Berita</label>
                                  <input type="text" class="form-control" name="excerpt" @error('excerpt') is-invalid
                                  @enderror id="excerpt">
                              </div>
                              <div class="mb-3">
                                  <label for="body" style="color:black" class="form-label">Isi Berita</label>
                                  @error('body')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="text" class="form-control" name="body" @error('body') is-invalid
                                  @enderror id="body">
                              </div>
                              <div class="mb-3">
                                  <label for="slug" style="color:black" class=" form-label">Slug Berita</label>
                                  @error('slug')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="text" class="form-control" name="slug" @error('slug') is-invalid
                                  @enderror id="slug">
                              </div>
                              <div class="mb-3">
                                  <label for="kategori" style="color:black" class="form-label">Kategori</label>
                                  @error('kategori')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <select class="form-select" name="kategori" data-control="select2" data-placeholder="Select an option">
                                    <option>-Pilih-</option>
                                    <option value="1">Bencana</option>
                                    <option value="2">Pendidikan</option>
                                    <option value="3">Lainnya</option>
                                </select @error('kategori') is-invalid @enderror id="kategori">
                              </div>
                              <div class="mb-3">
                                <label for="namaCampaigner" style="color:black" class="form-label">Nama Campaigner</label>
                                @error('namaCampaigner')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <select class="form-select" name="namaCampaigner" data-control="select2" data-placeholder="Select an option">
                                    <option>-Pilih-</option>
                                    @foreach ($campaigner as $item)
                                        <option value="{{ $item->id }}">{{ $item->namaLembaga }}</option>
                                    @endforeach
                                </select @error('namaCampaigner') is-invalid @enderror id="namaCampaigner">
                              </div>
                            <input type="submit" class="btn btn-primary" value="Save">
                          </form>
                    </div>
                  </div>
                </div>
            </section>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
