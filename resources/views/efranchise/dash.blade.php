@extends('efranchise/template/template')


@section('title', 'Dashboard')
@section('content')
<section class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="stats-icon purple">
                                    <i class="fas fa-motorcycle"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="text-muted font-semibold">Tag Rider</h6>
                                <h6 class="font-extrabold mb-0">100</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="stats-icon blue">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="text-muted font-semibold">Tag Manpower</h6>
                                <h6 class="font-extrabold mb-0">55</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="stats-icon green">
                                    <i class="fas fa-store"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="text-muted font-semibold">Tag Store</h6>
                                <h6 class="font-extrabold mb-0">45</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
            <div class="card" style="height: 62vh;">
                    <div class="card-header">
                        <h5 class="card-title">Transaction History</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#wallet" role="tab"
                                    aria-controls="home" aria-selected="true">Wallet</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#withdrawal" role="tab"
                                    aria-controls="profile" aria-selected="false">Withdrawal</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#deposit" role="tab"
                                    aria-controls="contact" aria-selected="false">Deposit</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            
                        <div class="tab-pane fade show active" id="wallet" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Detail</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">8/14/21</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Deposit</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Peso</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">100.00</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">1,100.00</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="withdrawal" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Detail</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">8/14/21</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Withdrawal</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Peso</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">100.00</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">1,100.00</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>          
                        </div>

                        <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Detail</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">8/14/21</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Deposit</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Peso</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">100.00</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">1,100.00</p>
                                                </div>
                                            </td>
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
</section>

@stop