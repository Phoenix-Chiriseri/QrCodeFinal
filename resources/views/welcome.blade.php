<x-layout bodyClass="g-sidenav-show  bg-gray-200 virtual-reality">

    <div class="mt-n3">
        <!-- Navbar -->
      
        <!-- End Navbar -->
    </div>
    
    <style>
        /* Custom styles for the QR code section *
        /* Flashing message animation */
        .flashing-message {
            animation: flash 1s infinite alternate;
        }

        @keyframes flash {
            0% {
                opacity: 8;
            }
            100% {
                opacity: 0.3;
            }
        }
    </style>
    <div class="border-radius-xl mx-2 mx-md-3 position-relative"
        style="background-image: url(''); background-size: cover;">
        <x-navbars.sidebar activePage="virtual-reality"></x-navbars.sidebar>
        <main class="main-content border-radius-lg h-100">
            <div class="section min-vh-85 position-relative transform-scale-0 transform-scale-md-7">
                <div class="container-fluid">
                    <div class="row pt-10">
                        <div class="col-lg-1 col-md-1 pt-5 pt-lg-0 ms-lg-5 text-center">
                            <a href="javascript:;" class="avatar avatar-lg border-0 p-1" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="My Profile">
                                <img class="border-radius-lg" alt="Image placeholder"
                                    src="{{ asset('assets') }}/img/team-1.jpg">
                            </a>
                            <button class="btn btn-white border-radius-lg p-2 mt-n4 mt-md-2" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                                <i class="material-icons p-2">home</i>
                            </button>
                            <button class="btn btn-white border-radius-lg p-2 mt-n4 mt-md-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="right" title="Search">
                                <i class="material-icons p-2">search</i>
                            </button>
                            <button class="btn btn-white border-radius-lg p-2 mt-n4 mt-md-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="right" title="Minimize">
                                <i class="material-icons p-2">more_horiz</i>
                            </button>
                        </div>
                        <div class="col-lg-8 col-md-11 ps-md-5 mb-5 mb-md-0">
                            <div class="d-flex">
                                <div class="me-auto">
                                    <h4 class="flashing-message" style="color:black;"><small>Please Scan The Barcode And Leave Us Your Feedback</small></h4>                                   
                                </div>
                                
                            </div>                        
                                <div class="content has-text-centered qr-code-container">
                                    <div class="qr-code-img">
                                        {!! QrCode::size(500)->generate('/form'); !!}
                                    </div>
                                   
                                </div>
                                <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                                    <div
                                        class="card card-background card-background-mask-dark move-on-hover align-items-start">
                                        <div class="cursor-pointer">
                                            <div class="full-background"
                                                style="background-image: url('https://img.freepik.com/free-vector/blue-glowing-diagonal-lines-abstract-background-design_1017-27053.jpg?w=1060&t=st=1705663891~exp=1705664491~hmac=9e99f4aa49b710d00876979b3c3d561954b47e527bb86fb095f0b35065e491a5')">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="card move-on-hover mt-4">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                
                                                <div class="ms-auto">
                                                    <div class="avatar-group">
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                           >
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets') }}/img/team-1.jpg">
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            ">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets') }}/img/team-2.jpg">
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                           >
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets') }}/img/team-3.jpg">
                                                        </a>
                                                        <a href="javascript:;"
                                                            class="avatar avatar-sm border-0 rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="7 New Messages">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets') }}/img/team-4.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
        <x-plugins></x-plugins>
</x-layout>
