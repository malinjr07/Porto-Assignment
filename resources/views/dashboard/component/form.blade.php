@extends('layouts.dashboard')

@section('css_ext')
<style>
    input[type="file"][data-fouc] {
	height: calc(1.5385em + .875rem + 2px);
	opacity: 1;
}
select[data-fouc]:not([aria-hidden="false"]) {
	height: calc(1.5385em + .875rem + 2px);
	opacity: 1;
}
textarea{
    resize: none;
}
</style>
@endsection

@section('page_name')
<h4><i class="icon-arrow-left52 mr-2"></i>
    <span class="font-weight-semibold">Home</span> -
    <span class="font-weight-semibold">Dashboard</span> -
    Form</h4>
@endsection

@section('breads')
<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
<span class="breadcrumb-item active">Form</span>
@endsection

@section('js_ext')

@endsection

@section('main')
<!-- Main charts -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Multiple columns</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details
                                </legend>

                                <div class="form-group">
                                    <label>Enter your Email:</label>
                                    <input type="email" class="form-control" placeholder="demo@demo.com">
                                </div>

                                <div class="form-group">
                                    <label>Enter your password:</label>
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>

                                <div class="form-group">
                                    <label>Select your state:</label>
                                    <select data-placeholder="Select your state"
                                        class="form-control form-control-select2" data-fouc>
                                        @php
                                            $state=App\state::orderBy('id','ASC')->get();
                                        @endphp
                                        <option value="" selected>Select</option>
                                        @foreach ($state as $item)
                                        <option value="{{ $item->id }}">{{ $item->state_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Upload Profile Picture:</label>
                                    <input type="file" class="form-input-styled" data-fouc>
                                </div>

                                {{-- <div class="form-group">
                                    <label>Your message:</label>
                                    <textarea rows="5" cols="5" class="form-control"
                                        placeholder="Enter your message here"></textarea>
                                </div> --}}
                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details
                                </legend>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name:</label>
                                            <input type="text" placeholder="Eugene" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name:</label>
                                            <input type="text" placeholder="Kopyov" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone #:</label>
                                            <input type="text" placeholder="+99-99-9999-9999" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <select data-placeholder="Select your country"
                                                class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                            </select>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State/Province:</label>
                                            <input type="text" placeholder="Bayern" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address line:</label>
                                            <input type="text" placeholder="Ring street 12" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ZIP code:</label>
                                            <input type="text" placeholder="1031" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City:</label>
                                            <input type="text" placeholder="Munich" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="form-group">
                                    <label>Additional message:</label>
                                    <textarea rows="5" cols="5" class="form-control"
                                        placeholder="Enter your message here"></textarea>
                                </div> --}}
                            </fieldset>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i
                                class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /main charts -->

@endsection