@extends('layouts.navbar-admin')

@section('content')
            <!--begin::Content-->
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
                                        <li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Master Campaign</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-2">

								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header border-0 pt-6">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Campaign" />
											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Toolbar-->
											<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
												<!--end::Filter-->
												<a href="/createCampaign" class="btn btn-primary">Add Campaign</a>
											</div>
											<!--end::Toolbar-->
											<!--begin::Group actions-->
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
												<div class="fw-bold me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
												<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
											</div>
											<!--end::Group actions-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-125px">ID_Program</th>
                                                    <th class="min-w-125px">ID_User</th>
                                                    {{-- <th class="min-w-125px">Pekerjaan</th>
                                                    <th class="min-w-125px">Nama Lembaga</th>
													<th class="min-w-125px">Lokasi</th>
													<th class="min-w-125px">Deskripsi Diri</th> --}}
                                                    <th class="min-w-125px">Nama Lembaga</th>
                                                    <th class="min-w-125px">Foto Campaign</th>
                                                    <th class="min-w-125px">Kategori Campaign</th>
                                                    <th class="min-w-125px">Nama Campaign</th>
                                                    <th class="min-w-125px">Target Campaign</th>
                                                    <th class="min-w-125px">Tenggat Waktu</th>
                                                    <th class="min-w-125px">Tujuan Campaign</th>
                                                    <th class="min-w-125px">Manfaat Campaign</th>
                                                    <th class="min-w-125px">Tujuan Dana</th>
                                                    <th class="min-w-125px">Deskripsi Campaign</th>
                                                    <th class="min-w-125px">Motto Campaign</th>
                                                    <th class="min-w-125px">Kategori Tujuan Dana</th>
                                                    <th class="min-w-125px">Status Pengajuan Campaign</th>
                                                    <th class="min-w-125px">Status Campaign</th>
                                                    <th class="min-w-125px">Total Dana Terkumpul</th>
                                                    <th class="min-w-125px">Jumlah Donatur</th>
                                                    <th class="min-w-125px">Sisa Hari</th>
                                                    <th class="min-w-125px">Presentase</th>
													<th class="min-w-125px">Created Date</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-semibold text-gray-600">
                                                @foreach ( $dataProgram as $program )
                                                <tr>
                                                    <td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>{{ $program->id }}</td>
                                                    <td>{{ $program->id_user }}</td>
                                                    <td>{{ $program->namaLembaga }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img src="{{asset('/gambar_folder/'.$program->gambar)}}" alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $program->kategori }}</td>
                                                    <td>{{ $program->judul }}</td>
                                                    <td>Rp {{number_format( $program->target)}}</td>
                                                    <td>{{ $program->batasWaktu }}</td>
                                                    <td>{{ $program->tujuan }}</td>
                                                    <td>{{ $program->manfaat }}</td>
                                                    <td>{{ $program->rincian }}</td>
                                                    <td>{{ $program->deskripsiPenggalangan }}</td>
                                                    <td>{{ $program->ajakan }}</td>
                                                    <td>{{ $program->tujuanDana }}</td>
                                                    <!--begin::Status=-->
													<td>
                                                        @if($program->statusPengajuan == "belum-verifikasi")
														<div class="badge badge-light-danger">Belum Terverifikasi</div>
                                                        @else()
                                                        <div class="badge badge-light-success">Terverifikasi</div>
                                                        @endif
													</td>
													<!--end::Status=-->
                                                    <!--begin::Status=-->
													<td>
                                                        @if($program->sisa_hari === 0)
                                                        <div class="badge badge-light-success">Selesai</div>
                                                        @else()
                                                        <div class="badge badge-light-warning">Ongoing</div>
                                                        @endif
													</td>
													<!--end::Status=-->

                                                    <td>Rp {{ number_format($program->total_donasi) }}</td>
                                                    <td>{{ $program->jumlah_donatur }} Orang</td>
                                                    <td>{{ $program->sisa_hari }} Hari</td>
                                                    <td>{{ $program->presentasi }} %</td>
                                                    <td>{{ $program->created_at }}</td>

													<!--begin::Action=-->
													<td class="text-end">
                                                        <div class="d-flex justify-content-end flex-shrink-0">
														<!--begin::Edit-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#updateProgram{{ $program->id }}">
                                                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <!--end::Edit-->
                                                            <!--begin::Delete-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#deleteProgram{{ $program->id }}">
                                                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Delete">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <form action="/delete-program" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $program->id }}" name="ID_Program">
                                                                <div class="modal fade" id="deleteProgram{{$program->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Perhatian!</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        <h1>Apakah anda yakin untuk menghapus ?</h1>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Yes</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        <!--end::Delete-->
                                                        </div>
													</td>
                                                    <!--begin::Modal - New Card-->
                                                    <div class="modal fade" id="updateProgram{{ $program->id}}" tabindex="-1" aria-hidden="true">
                                                        <!--begin::Modal dialog-->
                                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                                            <!--begin::Modal content-->
                                                            <div class="modal-content">
                                                                <!--begin::Modal header-->
                                                                <div class="modal-header">
                                                                    <!--begin::Modal title-->
                                                                    <h2>Edit Campaign</h2>
                                                                    <!--end::Modal title-->
                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                        <span class="svg-icon svg-icon-1">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                                    <!--begin::Form-->
                                                                    <form id="kt_modal_new_card_form{{ $program->id }}" class="form" action="/update-program" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" value="{{ $program->id }}" name="ID_Program">
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Nama Campaign</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->judul }}" name="judul" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-6 fw-semibold form-label mb-2">Nama Penyelenggara</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input wrapper-->
                                                                            <div class="position-relative">
                                                                                <!--begin::Input-->
                                                                                <input type="text" class="form-control form-control-solid" placeholder="{{ $program->namaLembaga }}" name="namaLembaga"/>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                            <!--end::Input wrapper-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Tujuan Campaign</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->tujuan }}" name="tujuan" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Manfaat Campaign</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->manfaat }}" name="manfaat" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Tujuan Dana</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->tujuanDana }}" name="tujuanDana" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Deskripsi Campaign</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->rincian }}" name="rincian" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Motto Campaign</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->ajakan }}" name="ajakan" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Kategori Tujuan Campaign</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $program->deskripsiPenggalangan }}" name="deskripsiPenggalangan" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="row mb-10">
                                                                            <!--begin::Col-->
                                                                            <div class="col-md-12 fv-row">
                                                                                <!--begin::Label-->
                                                                                <label class="fs-6 fw-semibold form-label mb-2">Ubah Status Pengajuan</label>
                                                                                <!--end::Label-->
                                                                                <div class="d-flex">
																					    {{-- <!--begin::Col-->
                                                                                    <div class="col-4">
                                                                                        <label class="form-check-image">
                                                                                            <div class="form-check form-check-custom form-check-solid">
                                                                                                <input class="form-check-input" type="radio" value="Terverifikasi" @if($program->status == "terverifikasi") checked name="status1" @endif/>
                                                                                                <div class="form-check-label">
                                                                                                    Terverifikasi
                                                                                                </div>
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                    <!--end::Col-->

                                                                                    <!--begin::Col-->
                                                                                    <div class="col-4">
                                                                                        <label class="form-check-image">
                                                                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                                                                <input class="form-check-input" type="radio" value="Belum Terverifikasi" @if($program->status == "belum-terverifikasi") checked name="status1" @endif/>
                                                                                                <div class="form-check-label">
                                                                                                    Belum Terverifikasi
                                                                                                </div>
                                                                                            </div>
                                                                                        </label>
                                                                                    </div> --}}
                                                                                    <!--end::Col-->
                                                                                    <div class="input-group  mb-5" id="#status1">
                                                                                        <input type="hidden"
                                                                                            value="{{ $program->id }}">
                                                                                        <div class="input-group  mb-5">
                                                                                            <div
                                                                                                class="form-check form-check-custom form-check-solid">
                                                                                                <input class="form-check-input"
                                                                                                    type="radio" name="status1"
                                                                                                    value="belum-terverifikasi" @if($program->statusPengajuan === "belum-terverifikasi") checked @endif />
                                                                                                <label class="form-check-label"
                                                                                                    for="flexRadioDefault">Belum Terverifikasi
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group  mb-5">
                                                                                            <div
                                                                                                class="form-check form-check-custom form-check-solid">

                                                                                                <input class="form-check-input"
                                                                                                    type="radio" name="status1"
                                                                                                    value="Terverifikasi" @if($program->statusPengajuan === "Terverifikasi") checked @endif />
                                                                                                <label class="form-check-label"
                                                                                                    for="flexRadioDefault">Terverifikasi
                                                                                                </label>
                                                                                            </div>
                                                                                    </div>

                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        {{-- <div class="row mb-10">
                                                                            <!--begin::Col-->
                                                                            <div class="col-md-12 fv-row">
                                                                                <!--begin::Label-->
                                                                                <label class="fs-6 fw-semibold form-label mb-2">Status Campaign</label>
                                                                                <div class="input-group  mb-5" id="#status2">
                                                                                    <input type="hidden"
                                                                                        value="{{ $program->id }}">
                                                                                    <div class="input-group  mb-5">
                                                                                        <div
                                                                                            class="form-check form-check-custom form-check-solid">
                                                                                            <input class="form-check-input"
                                                                                                type="radio" name="status2"
                                                                                                value="sedang-berlangsung" @if($program->statusCampaign === "sedang-berlangsung") checked @endif />
                                                                                            <label class="form-check-label"
                                                                                                for="flexRadioDefault">Ongoing
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-group  mb-5">
                                                                                        <div
                                                                                            class="form-check form-check-custom form-check-solid">

                                                                                            <input class="form-check-input"
                                                                                                type="radio" name="status2"
                                                                                                value="selesai" @if($program->statusCampaign === "selesai") checked @endif />
                                                                                            <label class="form-check-label"
                                                                                                for="flexRadioDefault">Selesai
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Label-->
                                                                                {{-- @if($program->statusCampaign == data_create('now'))
                                                                                {{ $program->timestamps }} == Selesai --}}
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--begin::Actions-->
                                                                        <div class="text-center pt-15">
                                                                            {{-- <button type="submit" class="btn btn-primary">
                                                                                <span class="indicator-label">Submit</span>
                                                                                <span class="indicator-progress">Please wait...
                                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                            </button> --}}
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                        <!--end::Actions-->
                                                                    </form>
                                                                    <!--end::Form-->
                                                                </div>
                                                                <!--end::Modal body-->
                                                            </div>
                                                            <!--end::Modal content-->
                                                        </div>
                                                        <!--end::Modal dialog-->
                                                    </div>
                                                    <!--end::Modal - New Card-->
												</tr>
                                                @endforeach
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->

							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
                    @endsection
