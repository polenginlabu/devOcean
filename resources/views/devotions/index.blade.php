@extends('layouts.app')
@php
    $user = Auth::user();
@endphp

@section('content')
    <pagecomponent></pagecomponent>
@endsection

@section('sub_component')
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        @include("layouts.components.toolbar")
        <!--end::Toolbar-->
        <!--begin::Post-->

        
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->

            
            <div id="kt_content_container" class="container">
                <!--begin::Navbar-->
                <template v-if="showError.status">
                    <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10" :class="'bg-light-'+showError.type">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotone/Interface/Comment.svg-->

                       
                        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M5.69477 2.48932C4.00472 2.74648 2.66565 3.98488 2.37546 5.66957C2.17321 6.84372 2 8.33525 2 10C2 11.6647 2.17321 13.1563 2.37546 14.3304C2.62456 15.7766 3.64656 16.8939 5 17.344V20.7476C5 21.5219 5.84211 22.0024 6.50873 21.6085L12.6241 17.9949C14.8384 17.9586 16.8238 17.7361 18.3052 17.5107C19.9953 17.2535 21.3344 16.0151 21.6245 14.3304C21.8268 13.1563 22 11.6647 22 10C22 8.33525 21.8268 6.84372 21.6245 5.66957C21.3344 3.98488 19.9953 2.74648 18.3052 2.48932C16.6859 2.24293 14.4644 2 12 2C9.53559 2 7.31411 2.24293 5.69477 2.48932Z" fill="#191213" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 7C6.44772 7 6 7.44772 6 8C6 8.55228 6.44772 9 7 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H7ZM7 11C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11C11.5523 13 12 12.5523 12 12C12 11.4477 11.5523 11 11 11H7Z" fill="#121319" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Content-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h5 class="mb-1">@{{ showError.text }}</h5>
                            <span>@{{ showError.description }}</span>
                        </div>
                        <!--end::Content-->
                        <!--begin::Close-->
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto">
                            <i class="bi bi-x fs-1 text-danger"></i>
                        </button>
                        <!--end::Close-->
                    </div>
                </template>
                <!--end::Alert-->
                <div class="card mb-8">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <!--begin::Image-->
                            {{-- <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                <img class="mw-50px mw-lg-75px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
                            </div> --}}
                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">Daily Devotionals</a>
                                            <span class="badge badge-light-success me-auto">In Progress</span>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400 w-300px"><i>"Keep this Book of the Law always on your lips; meditate on it day and night, so that you may be careful to do everything written in it. Then you will be prosperous and successful."<br>-Joshua 1:8</i></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        {{-- <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a> --}}
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#add-devotion">Add New Devotion</a>
                                        <!--begin::Menu-->
                                        <div class="me-0">
                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                <i class="bi bi-three-dots fs-3"></i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                    <!--end::Input-->
                                                                    <!--end::Label-->
                                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap justify-content-start">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bolder">29 Jan, 2021</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Due Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-down.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                            <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Open Tasks</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                            <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Budget Spent</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Users-->
                                
                                    <!--end::Users-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Details-->
                        <div class="separator"></div>
                        <!--begin::Nav wrapper-->
                    
                        <!--end::Nav wrapper-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Modals-->
                <!--begin::Modal - View Users-->
                <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Heading-->
                                <div class="text-center mb-13">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Browse Users</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                    <a href="#" class="link-primary fw-bolder">Users Directory</a>.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mb-15">
                                    <!--begin::List-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody Macy
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">max@kt.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean Bean
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian Cox
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela Collins
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis Mitcham
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia Wild
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil Owen
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan Wilson
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Bold
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana Crown
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert Doe
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::List-->
                                </div>
                                <!--end::Users-->
                                <!--begin::Notice-->
                                <div class="d-flex justify-content-between">
                                    <!--begin::Label-->
                                    <div class="fw-bold">
                                        <label class="fs-6">Adding Users by Team Members</label>
                                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - View Users-->
                <!--begin::Modal - Users Search-->
                <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Content-->
                                <div class="text-center mb-13">
                                    <h1 class="mb-3">Search Users</h1>
                                    <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Search-->
                                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                    <!--begin::Form-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                        </span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Wrapper-->
                                    <div class="py-5">
                                        <!--begin::Suggestions-->
                                        <div data-kt-search-element="suggestions">
                                            <!--begin::Heading-->
                                            <h3 class="fw-bold mb-5">Recently searched:</h3>
                                            <!--end::Heading-->
                                            <!--begin::Users-->
                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                <!--begin::User-->
                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                        <span class="badge badge-light">Art Director</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                        <span class="badge badge-light">Marketing Analytic</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                        <span class="badge badge-light">Software Enginer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                        <span class="badge badge-light">Web Developer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                        <span class="badge badge-light">UI/UX Designer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Users-->
                                        </div>
                                        <!--end::Suggestions-->
                                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Users-->
                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                                            <div class="fw-bold text-muted">max@kt.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Users-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-center mt-15">
                                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Results-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Message-->
                                            <div class="fw-bold py-10">
                                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                            </div>
                                            <!--end::Message-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-5">
                                                <img src="assets/media/illustrations/alert.png" alt="" class="mw-100 mh-200px" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Users Search-->
                <!--begin::Modal - New Target-->

                
                <div class="modal fade" id="add-devotion" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">

                            
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">

                                
                                <!--begin:Form-->
                                <form id="kt_modal_new_target_form" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Devotion</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        {{-- <div class="text-muted fw-bold fs-5">If you need more info, please check
                                        <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div> --}}
                                        <!--end::Description-->
                                    </div>

                                    <template v-if="false">
                                        <div class="alert alert-dismissible bg-light-danger border border-danger border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotone/Interface/Comment.svg-->
                                            <span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M5.69477 2.48932C4.00472 2.74648 2.66565 3.98488 2.37546 5.66957C2.17321 6.84372 2 8.33525 2 10C2 11.6647 2.17321 13.1563 2.37546 14.3304C2.62456 15.7766 3.64656 16.8939 5 17.344V20.7476C5 21.5219 5.84211 22.0024 6.50873 21.6085L12.6241 17.9949C14.8384 17.9586 16.8238 17.7361 18.3052 17.5107C19.9953 17.2535 21.3344 16.0151 21.6245 14.3304C21.8268 13.1563 22 11.6647 22 10C22 8.33525 21.8268 6.84372 21.6245 5.66957C21.3344 3.98488 19.9953 2.74648 18.3052 2.48932C16.6859 2.24293 14.4644 2 12 2C9.53559 2 7.31411 2.24293 5.69477 2.48932Z" fill="#191213" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 7C6.44772 7 6 7.44772 6 8C6 8.55228 6.44772 9 7 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H7ZM7 11C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11C11.5523 13 12 12.5523 12 12C12 11.4477 11.5523 11 11 11H7Z" fill="#121319" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Content-->
                                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                                <h5 class="mb-1">This is an alert with a dashed border</h5>
                                                <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Close-->
                                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                                <i class="bi bi-x fs-1 text-danger"></i>
                                            </button>
                                            <!--end::Close-->
                                        </div>
                                    </template>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Title</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" v-model="devotion.title"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row g-9 mb-8">
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">Book</label>
                                            <select2 class="form-control" name="parent" :search="false" :multiple="false" placeholder="Select Book Name" modal="add-devotion" v-model="devotion.book">
                                                <option :value="book" v-for="book in books">@{{ book }}</option>
                                            </select2>
                                           
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Chapter</span>
                                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="target_title" v-model="devotion.chapter"/>
                                        </div>

                                        <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Verse/s</span>
                                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="target_title" v-model="devotion.verses"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row g-9 mb-8" v-if="false">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">Book</label>
                                            <select2 class="form-control" name="parent" :search="false" :multiple="false" placeholder="Select Book Name" modal="kt_modal_new_target">
                                                <option :value="book" v-for="book in books">@{{ book }}</option>
                                            </select2>
                                           
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                                    <span class="symbol-label bg-secondary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-grid.svg-->
                                                        <span class="svg-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1" />
                                                                    <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Datepicker-->
                                                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
                                                <!--end::Datepicker-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-bold mb-2">Rhema
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The Expression of God in the tory"></i>
                                        </label>
                                       
                                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Rhema" v-model="devotion.rhema"></textarea>
                                    </div>

                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-bold mb-2">Reflection
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="How it relate your life in the story"></i>
                                        </label>
                                        
                                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Reflection" v-model="devotion.reflection"></textarea>
                                    </div>

                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-bold mb-2">Motivation
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Seeking the 'why' or reasons in able to do the story in your life"></i>
                                        </label>
                                        
                                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Motivation" v-model="devotion.motivation"></textarea>
                                    </div>

                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-bold mb-2">Application
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="To put into action or taking small steps to do the God given story"></i>
                                        </label>
                                        
                                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Application" v-model="devotion.application"></textarea>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Tags</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
                                        </label>
                                        <!--end::Label-->
                                        <tagify v-model="devotion.tags" :detach="detach"></tagify>
                                     </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack mb-8" v-if="false">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-bold">Adding Users by Team Members</label>
                                            <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-bold text-muted">Allowed</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-15 fv-row" v-if="false">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="fw-bold me-5">
                                                <label class="fs-6">Notifications</label>
                                                <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Checkboxes-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
                                                    <span class="form-check-label fw-bold">Email</span>
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
                                                    <span class="form-check-label fw-bold">Phone</span>
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                                        <button type="button" id="kt_modal_new_target_submit" class="btn btn-primary" @click="submitDevotion()" >
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end:Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Target-->
                <!--end::Modals-->
                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack pb-7">
                    <!--begin::Title-->
                    <div class="d-flex flex-wrap align-items-center my-1">
                        {{-- <h3 class="fw-bolder me-5 my-1">Users (38)</h3> --}}
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                            <span class="svg-icon svg-icon-3 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" id="kt_filter_search" class="form-control form-control-white form-control-sm w-250px ps-9" placeholder="Search" v-model="search"/>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Controls-->
                    <div class="d-flex flex-wrap my-1">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                            <li class="nav-item m-0">
                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-horizontal.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5" />
                                                <rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                        <!--begin::Actions-->
                        <div class="d-flex my-0">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-white form-select-sm w-150px me-5">
                                <option value="1">Recently Updated</option>
                                <option value="2">Last Month</option>
                                <option value="3">Last Quarter</option>
                                <option value="4">Last Year</option>
                            </select>
                            <!--end::Select-->
                            <!--begin::Select-->
                            <select2 class="form-select form-select-white form-select-sm w-200px" name="parent" :search="false" :multiple="false" placeholder="Select Tag" v-model="tagFilter">
                                <option value="all">All</option>
                                <option v-for="tag in datas.tags">@{{ tag.name }}</option>
                            </select2>
                           
                            <!--end::Select-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Controls-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                        <!--begin::Row-->
                        <div class="row g-6 g-xl-9">
                            <!--begin::Col-->
                            {{-- <div class="col-md-6 col-xxl-4" >
                                <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                            <img src="assets/media//avatars/150-3.jpg" alt="image" />
                                            <div class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">@{{ data.title  }}</a>
                                        <!--end::Name-->
                                        <!--begin::Position-->
                                        <div class="fw-bold text-gray-400 mb-6">Art Director at Novica Co.</div>
                                        <!--end::Position-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-center flex-wrap">
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                <div class="fs-6 fw-bolder text-gray-700">$14,560</div>
                                                <div class="fw-bold text-gray-400">Earnings</div>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                <div class="fs-6 fw-bolder text-gray-700">23</div>
                                                <div class="fw-bold text-gray-400">Tasks</div>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                <div class="fs-6 fw-bolder text-gray-700">$236,400</div>
                                                <div class="fw-bold text-gray-400">Sales</div>
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div> --}}

                            <div class="col-sm-6 col-xl-4" v-for="data in datas.data" >
                                <!--begin::Card-->
                                <div class="card border border-2 border-gray-300 border-hover" @click="showDevo(data)">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol  me-5">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx" v-if="tellDayOrNight(data.created_at) == 'day'">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z" fill="#000000"/>
                                                    </g>
                                                    </svg>
                                                </span>

                                                <span v-if="tellDayOrNight(data.created_at) == 'night'" class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" fill-rule="nonzero"/>
                                                        <path d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    </g>
                                                </svg></span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@{{ data.created_at | dateConvert}}</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar m-0">
                                            <!--begin::Menu-->

                                          
                                            <b-dropdown size="lg"  variant="link" toggle-class="text-decoration-none" no-caret>
                                                <template #button-content>
                                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </template>
                                                <b-dropdown-item href="#">Edit</b-dropdown-item>
                                                <b-dropdown-item href="#">Delete</b-dropdown-item>
                                            </b-dropdown>

                                        
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-2tx fw-bolder mb-3">@{{ data.book +' '+ data.chapter +':'+ data.verses}}</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                           
                                            <!--end::Svg Icon-->
                                            <!--begin::Number-->
                                            <div class="fw-bolder text-success me-2">Rhema: </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">@{{ data.rhema }}</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2" v-for="tag in data.tagged">@{{ tag.tag_name }}</span>
                                            {{-- <span class="text-gray-400 fs-7">MRR</span>
                                            <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title="Recurring"></i> --}}
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                           
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Pagination-->
                        
                        <!--end::Pagination-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_table_pane" class="tab-pane fade">
                        <!--begin::Card-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                                        <!--begin::Head-->
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                            <tr>
                                                <th class="min-w-250px">Bible Verse</th>
                                                <th class="min-w-150px">Date</th>
                                                <th class="min-w-90px">Rhema</th>
                                                <th class="min-w-90px">Tags</th>
                                                <th class="min-w-50px text-end">Details</th>
                                            </tr>
                                        </thead>
                                        <!--end::Head-->
                                        <!--begin::Body-->
                                        <tbody class="fs-6">
                                            <tr v-for="data  in datas.data">
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                     
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="mb-1 text-gray-800 text-hover-primary">@{{ data.book+' '+data.chapter+':'+data.verses }}</a>
                                                            {{-- <div class="fw-bold fs-6 text-gray-400">@{{ data.bible_verse }}</div> --}}
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>@{{ data.created_at | dateConvert }}</td>
                                                <td>@{{ data.rhema }}</td>
                                                <td>
                                                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2" v-for="tag in data.tagged">@{{ tag.tag_name }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        <!--end::Body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>

                    <div class="d-flex flex-stack flex-wrap pt-10">
                        <div class="fs-6 fw-bold text-gray-700">Showing @{{ datas.from }} to @{{ datas.to }} of @{{ datas.total }} entries</div>
                        <!--begin::Pages-->
                        <ul class="pagination">
                            {{-- <li class="page-item ">
                                <a href="#" class="page-link">
                                    <i class="previous"></i>
                                </a>
                            </li> --}}
                            <template v-for="(link, index) in datas.links">
                                <li class="page-item" :class="{'active': link.active, 'previous': index == 0, 'next': index == (datas.links.length - 1) }">
                                    
                                    <a href="#" class="page-link" v-if="index == 0">
                                        <i class="previous"></i>
                                    </a>
                                    
                                    <a href="#" class="page-link" v-if="index != 0 && index != (datas.links.length - 1)">@{{ link.label }}</a>
                                    
                                    <a href="#" class="page-link"  v-if="index == (datas.links.length - 1) ">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            </template>
                           
                            {{-- <li class="page-item next">
                                <a href="#" class="page-link">
                                    <i class="next"></i>
                                </a>
                            </li> --}}
                        </ul>
                        <!--end::Pages-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab Content-->
                <!--begin::Modals-->
                <!--begin::Modal - View Users-->
                <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Heading-->
                                <div class="text-center mb-13">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Browse Users</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                    <a href="#" class="link-primary fw-bolder">Users Directory</a>.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mb-15">
                                    <!--begin::List-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody Macy
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">max@kt.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean Bean
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian Cox
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela Collins
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis Mitcham
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia Wild
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil Owen
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan Wilson
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Bold
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana Crown
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert Doe
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::List-->
                                </div>
                                <!--end::Users-->
                                <!--begin::Notice-->
                                <div class="d-flex justify-content-between">
                                    <!--begin::Label-->
                                    <div class="fw-bold">
                                        <label class="fs-6">Adding Users by Team Members</label>
                                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - View Users-->
                <!--begin::Modal - Users Search-->
                <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-lg">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">
                            <!--begin::Modal header-->
                            <div class="modal-header justify-content-end border-0 pb-0">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3">@{{ devotion.created_at | dateConvert}}</h1>
                                    {{-- <div class="text-muted fw-bold fs-5">If you need more info, please check
                                    <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div> --}}
                                </div>
                                <!--end::Heading-->
                                <!--begin::Plans-->
                                <div class="d-flex flex-column">
                                    <!--begin::Nav group-->
                                   
                                    <!--end::Nav group-->
                                    <!--begin::Row-->
                                    <div class="row mt-10">
                                        <!--begin::Col-->
                                        <div>
                                            <!--begin::Tabs-->
                                            <div class="nav flex-column">
                                                <!--begin::Tab link-->
                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">TITLE</div>
                                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">@{{ devotion.title }}</h2>
                                                            
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>
                                                
                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">BIBLE VERSE</div>
                                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">@{{ devotion.book +' '+ devotion.chapter+':'+devotion.verses }}</h2>
                                                            <div class="fw-bold opacity-50">@{{ devotion.bible_verse }}</div>
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>

                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">RHEMA</div>
                                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">@{{ devotion.rhema }}</h2>
                                                            
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>

                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">REFLECTION</div>
                                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">@{{ devotion.reflection }}</h2>
                                                            
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>

                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">MOTIVATION</div>
                                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">@{{ devotion.motivation }}</h2>
                                                            
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>

                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">APPLICATION</div>
                                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">@{{ devotion.application }}</h2>
                                                            
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>

                                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active  d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                 
                                                    <div class="d-flex align-items-center me-2">
                                                        <div class="flex-grow-1">
                                                            <div class="fw-bold opacity-50">TAGS</div>
                                                            <br>
                                                            <span class="badge badge-light-primary mx-2" v-for="tag in devotion.tagged">@{{ tag.tag_name }}</span>
                                                           

                                                            
                                                        </div>
                                                      
                                                    </div>
                                               
                                                </div>
                                            </div>

                                            
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                       
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Plans-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center flex-row-fluid pt-12">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Close</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Users Search-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('components')

@include('scripts.vue-components.select2')
@include('scripts.vue-components.tagify')
<script>
    

    
    Vue.component('pagecomponent', {
        data: function () {
            return {
                books: [
                    'Genesis',
                    'Exodus',
                    'Leviticus',
                    'Numbers',
                    'Deuteronomy',
                    'Joshua',
                    'Judges',
                    'Ruth',
                    '1 Samuel',
                    '2 Samuel',
                    '1 Kings',
                    '2 Kings',
                    '1 Chronicles',
                    '2 Chronicles',
                    'Ezra',
                    'Nehemiah',
                    'Esther',
                    'Job',
                    'Psalm',
                    'Proverbs',
                    'Ecclesiastes',
                    'Song of Solomon',
                    'Isaiah',
                    'Jeremiah',
                    'Lamentations',
                    'Ezekiel',
                    'Daniel',
                    'Hosea',
                    'Joel',
                    'Amos',
                    'Obadiah',
                    'Jonah',
                    'Micah',
                    'Nahum',
                    'Habakkuk',
                    'Zephaniah',
                    'Haggai',
                    'Zechariah',
                    'Malachi',
                    'Matthew',
                    'Mark',
                    'Luke',
                    'John',
                    'Acts',
                    'Romans',
                    '1 Corinthians',
                    '2 Corinthians',
                    'Galatians',
                    'Ephesians',
                    'Philippians',
                    'Colossians',
                    '1 Thessalonians',
                    '2 Thessalonians',
                    '1 Timothy',
                    '2 Timothy',
                    'Titus',
                    'Philemon',
                    'Hebrews',
                    'James',
                    '1 Peter',
                    '2 Peter',
                    '1 John',
                    '2 John',
                    '3 John',
                    'Jude',
                    'Revelation'
                ],
                devotion: {
                    title: null,
                    book: null,
                    chapter: null,
                    verses: null,
                    bible_verse: null,
                    rhema: null,
                    reflection: null,
                    motivation: null,
                    application: null,
                    tags: [],
                    
                },
                showError:{
                    status: false,
                    text: "ERROR!",
                    description: "test descripton",
                    type: "info"
                },
                detach: [],
                current_page: 1,
                datas: {
                    current_page: 1,
                    data: []
                },
                search: null,
                tagFilter: null
            }
        },
        props: [],
        template: `@yield('sub_component')`,
        filters: {
            dateConvert(value){
                return moment(value).format('LLL');
            },
            
        },

        watch: {
            search(val){
                this.fetchData();
            },
            tagFilter(val){
                this.fetchData();
            }
        },

        computed: {

        },

        async mounted() {
            
            this.fetchData();
        
        },
        methods: {

            fetchData: _.debounce(function (e) {
                let obj = { 
                    current_page: this.datas.current_page,
                    search: this.search,
                    tags: this.tagFilter
                }

                console.log(obj);
                
                axios.get('/devotions/devotion/fetch', { params: obj})
                .then(res => {
                    this.datas = res.data;
                    console.log(this.datas);
                })
                .catch(err => {
                    console.error(err); 
                })

            }, 500),
            async submitDevotion(){
                await axios.get('https://api.nlt.to/api/passages?ref='+this.devotion.book+'.'+this.devotion.chapter+':'+this.devotion.verses+',6&version=NLT&key=3453e12a-20ee-4959-ba7b-e50f084666f2', {})
                .then(res => {

                    var html = res.data;
                    var tempDivElement = document.createElement("div");
                    html = $(tempDivElement).html(html);
                    // html = html.replace(/<[^>]+>/g, '');
                    html = html.find("#bibletext");
                    html.find('.vn').remove();
                    html.find('.tn-ref').remove();
                    html.find('.a-tn').remove();
                    html.find('.tn').remove();
                    html.find('.bk_ch_vs_header').remove();
                    html.find('.verse_export').remove();

                    this.devotion.bible_verse = html.text();
                })
                .catch(err => {
                    this.showError = {
                        status: true,
                        text: "ERROR!",
                        description: "Unable to get API verse",
                        type: "danger"
                    }
                    console.error(err); 
                })



                axios.post('devotions/devotion/store',this.devotion)
                .then(res => {

                    this.showError = {
                        status: true,
                        text: "SUCCESS!",
                        description: "Devotion Saved!",
                        type: "success"
                    }
                    $("[data-bs-dismiss='modal']").click();
                })
                .catch(err => {
                    this.showError = {
                        status: true,
                        text: "ERROR!",
                        description: "Can't save devotion",
                        type: "danger"
                    }
                    console.error(err); 
                })
            },
          

            tellDayOrNight(date){

                var currentHour = moment(date).format("HH");
                if (currentHour >= 3 && currentHour < 12){
                    return "day";
                } else if (currentHour >= 12 && currentHour < 15){
                    return "day";
                }   else if (currentHour >= 15 && currentHour < 20){
                    return "night";
                } else if (currentHour >= 20 && currentHour < 3){
                    return "night";
                } else {
                    return "day"
                }
            },
            showDevo(data){
                $('#kt_modal_upgrade_plan').modal('toggle');
                this.devotion = data;
            }
        }
          
    })

</script>


@endsection
