<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Very Good Rating</p>
                                <h4 class="mb-0">{{$veryGoodRating}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a type="submit" href="{{ route('very-good') }}"
                            class="btn btn-lg bg-gradient-primary btn-sm w-100 mt-4 mb-0">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Good Rating</p>
                                <h4 class="mb-0">{{$goodRating}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a type="submit" href="{{ route('good') }}"
                            class="btn btn-lg bg-gradient-primary btn-sm w-100 mt-4 mb-0">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Fair Rating</p>
                                <h4 class="mb-0">{{$fairRating}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a type="submit" href="{{ route('fair') }}"
                            class="btn btn-lg bg-gradient-primary btn-sm w-100 mt-4 mb-0">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Poor Rating</p>
                                <h4 class="mb-0">{{$poorRating}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a type="submit" href="{{ route('poor') }}"
                            class="btn btn-lg bg-gradient-primary btn-sm w-100 mt-4 mb-0">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
            <canvas id="ratingChart" width="400" height="120"></canvas>
           
                                        </tr>
                                    </tbody>
                                </table>
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
    
    <x-plugins></x-plugins>
    </div>
    <script>
        // Get the counts from your PHP variables
        var veryGoodRating = <?php echo $veryGoodRating; ?>;
        var goodRating = <?php echo $goodRating; ?>;
        var fairRating = <?php echo $fairRating; ?>;
        var poorRating = <?php echo $poorRating; ?>;
    
        // Create a bar chart using Chart.js
        var ctx = document.getElementById('ratingChart').getContext('2d');
        var ratingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Very Good', 'Good', 'Fair', 'Poor'],
                datasets: [{
                    label: 'Rating Counts',
                    data: [veryGoodRating, goodRating, fairRating, poorRating],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    @push('js')

    @endpush
</x-layout>
