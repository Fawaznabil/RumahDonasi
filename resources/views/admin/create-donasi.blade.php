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
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Master Donasi</h1>
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
                    <li class="breadcrumb-item text-muted">Data Donasi</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Master Donasi</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Add Donasi</li>
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
                                <label for="namaCampaign" style="color:black" class="form-label">Nama Campaign</label>
                                @error('namaCampaign')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                <select class="form-select" name="namaCampaign" data-control="select2" data-placeholder="Select an option">
                                    <option>-Pilih-</option>
                                    @foreach ($campaign as $item)
                                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                    @endforeach
                                </select @error('namaCampaign') is-invalid @enderror id="namaCampaign">

                              </div>
                              <div class="mb-3">
                                  <label for="jumlahDonasi" style="color:black" class="form-label">Jumlah Donasi</label>
                                  <input type="text" class="form-control" name="jumlahDonasi" @error('jumlahDonasi') is-invalid
                                  @enderror id="jumlahDonasi">
                              </div>
                              <div class="mb-3">
                                  <label for="doaDonasi" style="color:black" class="form-label">Doa Donasi</label>
                                  @error('doaDonasi')
                                  <div class='invalid-feedback'>
                                      {{ $message }}
                                  </div>
                                @enderror
                                  <input type="text" class="form-control" name="doaDonasi" @error('doaDonasi') is-invalid
                                  @enderror id="doaDonasi">
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
