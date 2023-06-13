@extends('layouts.navbar-admin')

@section('content')
<!--begin::Image input placeholder-->
<style>
    .image-input-placeholder {
        background-image: url('svg/avatars/blank.svg');
    }

    [data-bs-theme="dark"] .image-input-placeholder {
        background-image: url('svg/avatars/blank-dark.svg');
    }
</style>
<!--end::Image input placeholder-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-5 py-2">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Master Campaign</h1>
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
                    <li class="breadcrumb-item text-muted">Data Campaign</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Master Campaign</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Add Campaign</li>
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
                        <form action="storeCampaign" method="post">
                            @csrf
                                <div class="mb-3">
                                <label for="gambar" style="color:black" class="form-label">Input Foto Campaign</label>
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                    <!--end::Image preview wrapper-->
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Cancel avatar">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove avatar">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <!--end::Image input-->
                                </div>
                                <div class="mb-3">
                                    <label for="judul" style="color:black" class="form-label">Judul</label>
                                    @error('judul')
                                      <div class='invalid-feedback'>
                                          {{ $message }}
                                      </div>
                                    @enderror
                                    <input type="text" class="form-control"name="judul" @error('judul') is-invalid
                                    @enderror id="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" style="color:black" class="form-label">Kategori</label>
                                    @error('kategori')
                                      <div class='invalid-feedback'>
                                          {{ $message }}
                                      </div>
                                    @enderror
                                    <select class="form-select" name="kategori" data-control="select2" data-placeholder="Select an option" @error('kategori') is-invalid
                                    @enderror id="kategori">
                                        <option></option>
                                        <option value="1">Pendidikan</option>
                                        <option value="2">Bencana</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="target" style="color:black" class="form-label">Target</label>
                                    @error('target')
                                      <div class='invalid-feedback'>
                                          {{ $message }}
                                      </div>
                                    @enderror
                                    <input type="text" class="form-control"name="target" @error('target') is-invalid
                                    @enderror id="target">
                                </div>
                              <div class="mb-3">
                                  <label for="batasWaktu" style="color:black" class="form-label">Tenggat Waktu</label>
                                  @error('batasWaktu')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="date" class="form-control" name="batasWaktu" @error('batasWaktu') is-invalid
                                  @enderror id="batasWaktu">
                              </div>
                              <div class="mb-3">
                                  <label for="tujuan" style="color:black" class=" form-label">Tujuan</label>
                                  @error('tujuan')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="text" class="form-control" name="tujuan" @error('tujuan') is-invalid
                                  @enderror id="tujuan">
                              </div>
                              <div class="mb-3">
                                  <label for="manfaat" style="color:black" class="form-label">Manfaat</label>
                                  @error('manfaat')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="manfaat" class="form-control" name="manfaat" @error('manfaat') is-invalid
                                  @enderror id="manfaat">
                              </div>
                              <div class="mb-3">
                                <label for="deskripsiPenggalangan" style="color:black" class="form-label">Deskripsi mengenai Penggalangan</label>
                                @error('deskripsiPenggalangan')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="deskripsiPenggalangan" class="form-control" name="deskripsiPenggalangan" @error('deskripsiPenggalangan') is-invalid
                                @enderror id="deskripsiPenggalangan">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" style="color:black" class="form-label">Tujuan Dana</label>
                                @error('tujuanDana')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="tujuanDana" class="form-control" name="tujuanDana" @error('tujuanDana') is-invalid
                                @enderror id="tujuanDana">
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
