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
										<li class="breadcrumb-item text-dark">Master User</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-2">
									<!--begin::Wrapper-->
									<div class="me-4">
										<!--begin::Menu-->
										<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Filter</a>
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_63d0dab50f621">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bold">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-semibold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_63d0dab50f621" data-allow-clear="true">
															<option></option>
															<option value="1">Approved</option>
															<option value="2">Pending</option>
															<option value="2">In Process</option>
															<option value="2">Rejected</option>
														</select>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-semibold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1" />
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2" checked="checked" />
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-semibold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
										<!--end::Menu-->
									</div>
									<!--end::Wrapper-->
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
												<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Donatur" />
											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Toolbar-->
											<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
												<!--begin::Filter-->
												<div class="w-150px me-3">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="active">Active</option>
														<option value="locked">Locked</option>
													</select>
													<!--end::Select2-->
												</div>
												<!--end::Filter-->
												<!--begin::Add customer-->
												<a href="/createNews" class="btn btn-primary">Add News</a>
												<!--end::Add customer-->
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
                                                    <th class="min-w-125px">ID_News</th>
													<th class="min-w-125px">Judul Berita</th>
													<th class="min-w-125px">Ringkasan Berita</th>
                                                    <th class="min-w-125px">Isi Berita</th>
                                                    <th class="min-w-125px">Slug Berita</th>
                                                    <th class="min-w-125px">Kategori Berita</th>
                                                    <th class="min-w-125px">Author</th>
                                                    <th class="min-w-125px">Nama Campaigner</th>
													<th class="min-w-125px">Gambar 1</th>
                                                    <th class="min-w-125px">Gambar 2</th>
                                                    <th class="min-w-125px">Gambar 3</th>
													<th class="min-w-125px">Created Date</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-semibold text-gray-600">
                                                @foreach ($dataNews as $news)
                                                <tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
                                                    <td>{{ $news->id }}</td>
                                                    <td>{{ $news->title }}</td>
                                                    <td>{{ $news->excerpt }}</td>
                                                    <td>{{ $news->body }}</td>
                                                    <td>{{ $news->slug }}</td>
                                                    <td>{{ $news->category }}</td>
                                                    <td>{{ $news->author }}</td>
                                                    <td>{{ $news->namaCampaigner }}</td>
                                                    <td>{{ $news->gambar1 }}</td>
                                                    <td>{{ $news->gambar2}}</td>
                                                    <td>{{ $news->gambar3 }}</td>
                                                    <td>{{ $news->created_at }}</td>
													<!--begin::Action=-->
													<td class="text-end">
                                                        <div class="d-flex justify-content-end flex-shrink-0">
														<!--begin::Edit-->
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#updateUser{{ $news->id }}">
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
                                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        <!--end::Delete-->
                                                        </div>
													</td>
                                                    <!--begin::Modal - New Card-->
                                                    <div class="modal fade" id="updateUser{{ $news->id }}" tabindex="-1" aria-hidden="true">
                                                        <!--begin::Modal dialog-->
                                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                                            <!--begin::Modal content-->
                                                            <div class="modal-content">
                                                                <!--begin::Modal header-->
                                                                <div class="modal-header">
                                                                    <!--begin::Modal title-->
                                                                    <h2>Edit User</h2>
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
                                                                    <form id="kt_modal_new_card_form{{ $news->id }}" class="form" action="/update-news" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" value="{{ $news->id }}" name="ID_News">
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">NIK</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $news->nik }}" name="nik" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-6 fw-semibold form-label mb-2">Nama Lengkap</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input wrapper-->
                                                                            <div class="position-relative">
                                                                                <!--begin::Input-->
                                                                                <input type="text" class="form-control form-control-solid" placeholder="{{ $news->name }}" name="name"/>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                            <!--end::Input wrapper-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Alamat</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $news->alamat }}" name="alamat" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">No. Telepon</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $news->notelepon }}" name="notelepon" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Email</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $news->email }}" name="email" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span class="">Password</span>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <input type="text" class="form-control form-control-solid" placeholder="{{ $news->password }}" name="password" />
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="row mb-10">
                                                                            <!--begin::Col-->
                                                                            <div class="col-md-12 fv-row">
                                                                                <!--begin::Label-->
                                                                                <label class="fs-6 fw-semibold form-label mb-2">Role</label>
                                                                                <!--end::Label-->
                                                                                <div class="d-flex">
                                                                                    <div class="input-group  mb-5" id="#role">
                                                                                        <input type="hidden"
                                                                                            value="{{ $news->id }}">
                                                                                        <div class="input-group  mb-5">
                                                                                            <div
                                                                                                class="form-check form-check-custom form-check-solid">
                                                                                                <input class="form-check-input"
                                                                                                    type="radio" name="role"
                                                                                                    value="Udmin" @if($news->role === "admin") checked @endif />
                                                                                                <label class="form-check-label"
                                                                                                    for="flexRadioDefault">Admin
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group  mb-5">
                                                                                            <div
                                                                                                class="form-check form-check-custom form-check-solid">

                                                                                                <input class="form-check-input"
                                                                                                    type="radio" name="role"
                                                                                                    value="User" @if($news->role === "costumer") checked @endif />
                                                                                                <label class="form-check-label"
                                                                                                    for="flexRadioDefault">User
                                                                                                </label>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Input group-->
                                                                        <div class="row mb-10">
                                                                            <!--begin::Col-->
                                                                            <div class="col-md-12 fv-row">
                                                                                <!--begin::Label-->
                                                                                <label class="fs-6 fw-semibold form-label mb-2">Ubah Status Akun</label>
                                                                                <!--end::Label-->
                                                                                <div class="d-flex">
                                                                                    <div class="input-group  mb-5" id="#status">
                                                                                        <input type="hidden"
                                                                                            value="{{ $news->id }}">
                                                                                        <div class="input-group  mb-5">
                                                                                            <div
                                                                                                class="form-check form-check-custom form-check-solid">
                                                                                                <input class="form-check-input"
                                                                                                    type="radio" name="status"
                                                                                                    value="locked" @if($news->email_verified_at == 0) checked @endif />
                                                                                                <label class="form-check-label"
                                                                                                    for="flexRadioDefault">Locked
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group  mb-5">
                                                                                            <div
                                                                                                class="form-check form-check-custom form-check-solid">

                                                                                                <input class="form-check-input"
                                                                                                    type="radio" name="status"
                                                                                                    value="active" @if($news->email_verified_at != 0 ) checked @endif />
                                                                                                <label class="form-check-label"
                                                                                                    for="flexRadioDefault">Active
                                                                                                </label>
                                                                                            </div>
                                                                                    </div>
																				</div>
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Input group-->
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
								<!--begin::Modals-->
								<!--begin::Modal - Customers - Add-->
								<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form" action="storeUser" method="POST" id="kt_modal_add_customer_form" enctype="multipart/form-data">
                                                @csrf
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_add_customer_header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add a User</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold mb-2">NIK</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="nik" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
                                                        <!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold mb-2">Nama Lengkap</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
                                                        <!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold mb-2">Alamat</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="alamat" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
                                                        <!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold mb-2">No. Telepon</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="notelepon" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">
																<span class="required">Email</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" placeholder="" name="email" />
															<!--end::Input-->
														</div>
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" class="btn btn-primary" value="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - Customers - Add-->
																<!--begin::Modal - New Card-->
                                                                <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                                                                    <!--begin::Modal dialog-->
                                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                                        <!--begin::Modal content-->
                                                                        <div class="modal-content">
                                                                            <!--begin::Modal header-->
                                                                            <div class="modal-header">
                                                                                <!--begin::Modal title-->
                                                                                <h2>Add New Card</h2>
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
                                                                                <form id="kt_modal_new_card_form" class="form" action="#">
                                                                                    <!--begin::Input group-->
                                                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                                                        <!--begin::Label-->
                                                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                            <span class="required">Name On Card</span>
                                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                    <!--begin::Input group-->
                                                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                                                        <!--begin::Label-->
                                                                                        <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input wrapper-->
                                                                                        <div class="position-relative">
                                                                                            <!--begin::Input-->
                                                                                            <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                                                                            <!--end::Input-->
                                                                                            <!--begin::Card logos-->
                                                                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                                                                <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                                                                <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                                                                <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                                                                            </div>
                                                                                            <!--end::Card logos-->
                                                                                        </div>
                                                                                        <!--end::Input wrapper-->
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                    <!--begin::Input group-->
                                                                                    <div class="row mb-10">
                                                                                        <!--begin::Col-->
                                                                                        <div class="col-md-8 fv-row">
                                                                                            <!--begin::Label-->
                                                                                            <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Row-->
                                                                                            <div class="row fv-row">
                                                                                                <!--begin::Col-->
                                                                                                <div class="col-6">
                                                                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                                                                        <option></option>
                                                                                                        <option value="1">1</option>
                                                                                                        <option value="2">2</option>
                                                                                                        <option value="3">3</option>
                                                                                                        <option value="4">4</option>
                                                                                                        <option value="5">5</option>
                                                                                                        <option value="6">6</option>
                                                                                                        <option value="7">7</option>
                                                                                                        <option value="8">8</option>
                                                                                                        <option value="9">9</option>
                                                                                                        <option value="10">10</option>
                                                                                                        <option value="11">11</option>
                                                                                                        <option value="12">12</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <!--end::Col-->
                                                                                                <!--begin::Col-->
                                                                                                <div class="col-6">
                                                                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                                                                        <option></option>
                                                                                                        <option value="2023">2023</option>
                                                                                                        <option value="2024">2024</option>
                                                                                                        <option value="2025">2025</option>
                                                                                                        <option value="2026">2026</option>
                                                                                                        <option value="2027">2027</option>
                                                                                                        <option value="2028">2028</option>
                                                                                                        <option value="2029">2029</option>
                                                                                                        <option value="2030">2030</option>
                                                                                                        <option value="2031">2031</option>
                                                                                                        <option value="2032">2032</option>
                                                                                                        <option value="2033">2033</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <!--end::Col-->
                                                                                            </div>
                                                                                            <!--end::Row-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--begin::Col-->
                                                                                        <div class="col-md-4 fv-row">
                                                                                            <!--begin::Label-->
                                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                                <span class="required">CVV</span>
                                                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input wrapper-->
                                                                                            <div class="position-relative">
                                                                                                <!--begin::Input-->
                                                                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                                                                <!--end::Input-->
                                                                                                <!--begin::CVV icon-->
                                                                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                                                                    <span class="svg-icon svg-icon-2hx">
                                                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </div>
                                                                                                <!--end::CVV icon-->
                                                                                            </div>
                                                                                            <!--end::Input wrapper-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                    <!--begin::Input group-->
                                                                                    <div class="d-flex flex-stack">
                                                                                        <!--begin::Label-->
                                                                                        <div class="me-5">
                                                                                            <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                                                                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                                                                        </div>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Switch-->
                                                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                                                            <span class="form-check-label fw-semibold text-muted">Save Card</span>
                                                                                        </label>
                                                                                        <!--end::Switch-->
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                    <!--begin::Actions-->
                                                                                    <div class="text-center pt-15">
                                                                                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                                                                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                                                                            <span class="indicator-label">Submit</span>
                                                                                            <span class="indicator-progress">Please wait...
                                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                                        </button>
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
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
                    @endsection
