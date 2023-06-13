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
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Master User</h1>
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
                    <li class="breadcrumb-item text-muted">Data User</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Master User</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Add User</li>
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
                        <form action="storeUser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="gambar" style="color:black" class="form-label">Input Foto</label>
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
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <input type="file" name="photo" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="photo">

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
                                <label for="nik" style="color:black" class="form-label">NIK</label>
                                @error('nik')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="text" class="form-control"name="nik" @error('nik') is-invalid
                                @enderror id="nik">
                              </div>
                              <div class="mb-3">
                                  <label for="name" style="color:black" class="form-label">Nama Lengkap</label>
                                  <input type="text" class="form-control" name="name" @error('name') is-invalid
                                  @enderror id="name">
                              </div>
                              <div class="mb-3">
                                  <label for="alamat" style="color:black" class="form-label">Alamat</label>
                                  @error('alamat')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="text" class="form-control" name="alamat" @error('alamat') is-invalid
                                  @enderror id="alamat">
                              </div>
                              <div class="mb-3">
                                  <label for="notelepon" style="color:black" class=" form-label">No. Telepon</label>
                                  @error('notelepon')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="text" class="form-control" name="notelepon" @error('notelepon') is-invalid
                                  @enderror id="notelepon">
                              </div>
                              <div class="mb-3">
                                  <label for="email" style="color:black" class="form-label">Email</label>
                                  @error('email')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="email" class="form-control" name="email" @error('email') is-invalid
                                  @enderror id="email">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" style="color:black" class="form-label">Password</label>
                                @error('password')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <input type="password" class="form-control" name="password" @error('password') is-invalid
                                @enderror id="password">
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
