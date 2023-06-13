@extends('layouts.navbar-admin')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display:none;
    }
</style>

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
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    <style>.image-input-placeholder { background-image: url('dist/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('dist/assets/media/svg/files/blank-image-dark.svg'); }</style>
                                    <!--end::Image input placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                            <!--begin::Icon-->
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--end::Icon-->
                                            <!--begin::Inputs-->
                                            <input type="file" name="gambar1" value="{{ old('gambar1') }}" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="gambar1">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="title" style="color:black" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control"name="title" value="{{ old('title') }}"id="title" required>
                              </div>
                              <div class="mb-3">
                                <label for="body" style="color:black" class="form-label">Isi Berita</label>
                                <input type="hidden" name="body" id="body" required value="{{ old('body')}}">
                                <trix-editor input="body"></trix-editor>
                              </div>
                              <div class="mb-3">
                                <label for="slug" style="color:black" class=" form-label">Slug Berita</label>
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}"id="slug" required>
                              </div>
                              <div class="mb-3">
                                <label for="category" style="color:black" class="form-label">Kategori</label>
                                <select class="form-select" name="category" id="category" data-control="select2" data-placeholder="Select an option">
                                    <option>-Pilih-</option>
                                    <option value="Bencana">Bencana</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select required>
                              </div>
                              <div class="mb-3">
                                <label for="namaCampaigner" style="color:black" class="form-label">Nama Campaigner</label>
                                <select class="form-select" name="namaCampaigner" id="namaCampaigner" data-control="select2" data-placeholder="Select an option">
                                    <option>-Pilih-</option>
                                    @foreach ($campaigner as $item)
                                        <option value="{{ $item->namaLembaga }}">{{ $item->namaLembaga }}</option>
                                    @endforeach
                                </select required>
                              </div>
                            <input type="submit" class="btn btn-primary" value="Save">
                          </form>
                    </div>
                    <script>
                        const title = document.querySelector("#title");
                        const slug = document.querySelector("#slug");

                        title.addEventListener("keyup", function() {
                            let preslug = title.value;
                            preslug = preslug.replace(/ /g,"-");
                            slug.value = preslug.toLowerCase();
                        });

                        document.addEventListener('trix-file-accept',function(e){
                            e.preventDefault();
                        })
                    </script>
                  </div>
                </div>
            </section>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
