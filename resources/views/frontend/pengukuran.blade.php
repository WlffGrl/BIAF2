@extends('layouts.content')

@section('content')
<div class="text-center" style="">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <h5>Link</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="https://docs.google.com/spreadsheets/d/1LshpA8qG-YFl9rsbk06qyKQ9A7LsdAnoKQDsyMVdsz8/edit?usp=sharing"
                                class="text-dark">Metodologi dan Jadwal BIAF 2022</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <canvas id="myChart"></canvas>
                    </div>
                    
                </div>
            </div>
</div>

{{--
<div class="shadow p-3 mb-5 bg-body rounded">
<img src="{{asset('img/graf.jpeg')}}" class="img-fluid" alt="">
</div>
--}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'radar',
      data: {
        labels: ['Tatakelola dan Management','Jaringan', 'SDM', 'Inovasi', 'Keuangan'],
        datasets: [{
          label: 'Series 1',
          data: [87.50, 60.71, 84.29, 64.29, 66.67],
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
@endsection
