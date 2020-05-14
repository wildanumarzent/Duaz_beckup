@extends('layouts.app')
@section('content')    
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">Welcome back, Hizrian!</h2>
                <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</h5>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-dark bg-primary-gradient">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-right">+5%</div>
                            <h2 class="mb-2">17</h2>
                            <p>Users online</p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark bg-secondary-gradient">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-right">-3%</div>
                            <h2 class="mb-2">27</h2>
                            <p>New Users</p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark bg-success2">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-right">+7%</div>
                            <h2 class="mb-2">213</h2>
                            <p>Transactions</p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Add Users</div>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        Export
                                    </a>
                                    <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Print
                                    </a>
                                </div>
                            </div>
                             <form method="post" action="/user">
                            @csrf
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name" id="Nama" aria-describedby="emailHelp" placeholder="masuan namal">
                                 @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nim">Email</label>
                                <input type="email" value="{{ old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="nim" aria-describedby="emailHelp" placeholder="masuan email">
                               @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password')}}" name="password" id="password" aria-describedby="emailHelp" required placeholder="masuan email">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                           
                                
                            <button type="submit" class="btn btn-primary ">Add User</button>
                        </form>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="min-height: 375px">
                                <canvas id="statisticsChart"></canvas>
                            </div>
                            <div id="myChartLegend"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection