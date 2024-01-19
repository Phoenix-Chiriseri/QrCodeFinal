<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- gi -->
        <x-navbars.navs.auth titlePage="View Suppliers"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Patients With Poor Rating</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                                Patient Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                              Date Of Birth</th>
                                                <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                               Address</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Hospital Area You Got Attention</th>
                                                <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Rating</th>
                                                <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Created At</th>  
                                                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($patients as $patient)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$patient->patient_name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$patient->date_of_birth}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$patient->address}}</h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$patient->hospital_area}}</h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$patient->rating}}</h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$patient->created_at}}</h6>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
