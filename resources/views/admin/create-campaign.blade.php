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
                    <li class="breadcrumb-item text-muted">Data Master</li>
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
                        <form action="storeCampaign" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="gambar" style="color:black" class="form-label">Input Foto Campaign</label>
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
                                                <input type="file" name="gambar" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="gambar">
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
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Bencana">Bencana</option>
                                        <option value="Lainnya">Lainnya</option>
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
                              <div class="mb-3">
                                <label for="rincian" style="color:black" class="form-label">Rincian</label>
                                @error('rincian')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="rincian" class="form-control" name="rincian" @error('rincian') is-invalid
                                @enderror id="rincian">
                              </div>
                              <div class="mb-3">
                                <label for="ajakan" style="color:black" class="form-label">Ajakan</label>
                                @error('ajakan')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="ajakan" class="form-control" name="ajakan" @error('ajakan') is-invalid
                                @enderror id="ajakan">
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
