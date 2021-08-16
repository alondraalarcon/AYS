@extends('efranchise/template/template')


@section('title', 'Log-out')
@section('content')
<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <center><p> Are you sure you want to log-out?</p></center>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning me-1 mb-1">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop