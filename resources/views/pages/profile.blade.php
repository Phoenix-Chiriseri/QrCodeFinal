<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar-guest activePage="user-profile"></x-navbars.sideba-guest>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->       
        <style>
            .custom-alert {
    color: #fff; /* Set the desired text color */
    background-color: #28a745; /* Set the desired background color */
    border-color: #218838; /* Set the desired border color */
}
        </style>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://img.freepik.com/free-photo/feedback-results-information-satisfeaction_53876-121339.jpg?w=996&t=st=1705661138~exp=1705661738~hmac=aaf307c4ab5da29e8e4eee39ca39bc06782ad3cb1ce4ab1d224b17c401abbb82');">
               
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                Qr Code Scanner
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class = "container">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    </div>
                    @endif
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="btn btn-info" href=""
                                        role="tab" aria-selected="true">
                                        <i class="material-icons text-lg position-relative"></i>
                                        <span class="ms-1"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                    @if(Session::has('success'))
                                <script type="text/javascript">
                                function massge() {
                                Swal.fire(
                                'Success',
                                'Information Sent Successfully'
                                                                    );
                                    }
                                    window.onload = massge;
                                    </script>
                    @endif
                </script>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Add Patient Information</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (Session::has('demo'))
                                <div class="row">
                                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ Session::get('demo') }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                        @endif
                        <form method="POST" action="{{ route('patients.store') }}">
                          @csrf
                        <div class="row">
         <div class="mb-3 col-md-6">
            <label class="form-label">Patient Name</label>
            <input type="text" name="patient_name" class="form-control border border-2 p-2" required>
            @error('name')
                <p class="text-danger inputerror">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Date Of Birth</label>
            <input type="date"  class="form-control border border-2 p-2" name="date_of_birth" required>
            @error('barcode')
                <p class="text-danger inputerror">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control border border-2 p-2" required>
            @error('description')
                <p class="text-danger inputerror">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Hospital Area You Got Care</label>
            <input type="text" name="hospital_area" class="form-control border border-2 p-2" required>
            @error('price')
                <p class="text-danger inputerror">{{ $message }}</p>
            @enderror
        </div>
        <label class="form-label">Please Rate Your Experience At Our Hospital</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" value="Very Good">
            <label class="form-check-label">Very Good</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" value="Good">
            <label class="form-check-label">Good</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" value="Fair">
            <label class="form-check-label">Fair</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" value="Poor">
            <label class="form-check-label">Poor</label>
        </div>
    </div>
    </div>
    <hr>
    <button type="submit" class="btn bg-gradient-dark">Submit</button>
</form>

                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <x-plugins></x-plugins>
</x-layout>
