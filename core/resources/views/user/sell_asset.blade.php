@extends('userlayout')

@section('content')
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="">
                                <h3 class="">Sell asset</h3>
                                <a data-toggle="modal" data-target="#modal-formx" href=""
                                    class="btn btn-sm btn-neutral"><i class="fa fa-arrow-right"></i> Create request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                    aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card bg-white border-0 mb-0">
                                    <div class="card-body px-lg-5 py-lg-5">
                                        <form action="{{ route('submit.sellasset') }}" method="post" id="modal-details">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-2">Amount</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="number" name="amount" id="amount" step="any"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-2">Currency</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control select" name="asset" id="asset_price"
                                                        data-fouc required>
                                                        @foreach ($asset as $k => $val)
                                                            <option value="{{ $val->plan->id }}">{{ $val->plan->name }} -
                                                                {{ $val->plan->price }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-2">You will get</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="number" readonly id="gain" step="any"
                                                            maxlength="10" class="form-control" required="">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">{{ $currency->symbol }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Sell<i
                                                        class="icon-paperplane ml-2"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($logs as $k => $val)
                    <div class="col-md-4">
                        <div class="card bg-white">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <!-- Title -->
                                        <h4 class="mb-0">
                                            <a href="JAVASCRIPT:VOID;" class="text-success">#{{ $val->reference }}</a>
                                        </h4>
                                    </div>
                                    <div class="col ml--2">
                                        <p class="text-sm text-dark mb-0">Asset: {{ $val->plan->name }}</p>
                                        <p class="text-sm text-dark mb-0">Amount:
                                            {{ substr($val->amount, 0, 9) . $val->plan->symbol }}</p>
                                        <p class="text-sm text-dark mb-0">Created:
                                            {{ date('Y/m/d h:i:A', strtotime($val->created_at)) }}</p>
                                        <span class="badge badge-pill badge-primary">Charge:
                                            {{ substr($val->charge, 0, 9) . $val->plan->symbol }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @stop
