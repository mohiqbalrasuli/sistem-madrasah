@extends('layout.template_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/assets/css/dashboard.css') }}">
    <div class="dashboard-cards">
      <div class="card">
        <h5 class="card-title">Total Guru</h5>
        <p class="card-text">{{ $jumlahguru }}</p>
      </div>
      <div class="card">
        <h5 class="card-title">Total Murid</h5>
        <p class="card-text">{{ $jumlahmurid }}</p>
      </div>
      <div class="card">
        <h5 class="card-title">Total Murid L/P</h5>
        <p class="card-text">{{ $jumlahmuridlk }}/{{ $jumlahmuridpr }}</p>
      </div>
      <div class="card">
        <h5 class="card-title">Total Fan</h5>
        <p class="card-text">{{ $jumlahfan }}</p>
      </div>
      <div class="card">
        <h5 class="card-title">Total Alumni</h5>
        <p class="card-text">{{ $jumlahalumni }}</p>
      </div>
      <div class="card">
        <h5 class="card-title">Total Alumni L/P</h5>
        <p class="card-text">{{ $jumlahalumnilk }}/{{ $jumlahalumnipr }}</p>
      </div>
    </div>
    <div class="chart-container">
        <canvas id="kelasChart"></canvas>
    </div>

    <div class="chart-container">
        <canvas id="alumniChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart Murid per Kelas
        const ctx = document.getElementById('kelasChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Shifir A', 'Shifir B', 'Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4'],
                datasets: [{
                    label: 'Jumlah Murid per Kelas',
                    data: [
                        {{ $shifirA }},
                        {{ $shifirB }},
                        {{ $kelas1 }},
                        {{ $kelas2 }},
                        {{ $kelas3 }},
                        {{ $kelas4 }}
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Distribusi Murid per Kelas',
                        font: {
                            size: 14
                        }
                    },
                    legend: {
                        display: true,
                        position: window.innerWidth < 768 ? 'bottom' : 'top',
                        labels: {
                            boxWidth: window.innerWidth < 768 ? 10 : 40,
                            font: {
                                size: window.innerWidth < 768 ? 10 : 12
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            font: {
                                size: window.innerWidth < 768 ? 10 : 12
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: window.innerWidth < 768 ? 8 : 12
                            }
                        }
                    }
                }
            }
        });

        // Chart Alumni per Tahun
        const ctxAlumni = document.getElementById('alumniChart');
        new Chart(ctxAlumni, {
            type: 'line',
            data: {
                labels: ['2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Jumlah Alumni per Tahun',
                    data: [15, 18, 20, 22, 25], // Ganti dengan data sebenarnya dari database
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Trend Alumni per Tahun',
                        font: {
                            size: 14
                        }
                    },
                    legend: {
                        display: true,
                        position: window.innerWidth < 768 ? 'bottom' : 'top',
                        labels: {
                            boxWidth: window.innerWidth < 768 ? 10 : 40,
                            font: {
                                size: window.innerWidth < 768 ? 10 : 12
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 5,
                            font: {
                                size: window.innerWidth < 768 ? 10 : 12
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: window.innerWidth < 768 ? 8 : 12
                            }
                        }
                    }
                }
            }
        });

        // Handle resize
        window.addEventListener('resize', function() {
            const isMobile = window.innerWidth < 768;

            [ctx, ctxAlumni].forEach(chart => {
                if (chart.chart) {
                    // Update legend position
                    chart.chart.options.plugins.legend.position = isMobile ? 'bottom' : 'top';
                    // Update font sizes
                    chart.chart.options.plugins.legend.labels.font.size = isMobile ? 10 : 12;
                    chart.chart.options.scales.x.ticks.font.size = isMobile ? 8 : 12;
                    chart.chart.options.scales.y.ticks.font.size = isMobile ? 10 : 12;

                    chart.chart.update();
                }
            });
        });
    </script>

@endsection