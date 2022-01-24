<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong> opp something went wrong</strong></p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container register-form">
    <form action="{{ route('reg.submit') }}" method="POST">
        @csrf
        <div class="container register">
            <div class="row">
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Demo</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    {{--                            <div class="form-group">--}}
                                    {{--                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />--}}
                                    {{--                            </div>--}}
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" value="" />
                                    </div>
                                    {{--                            <div class="form-group">--}}
                                    {{--                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />--}}
                                    {{--                            </div>--}}
                                    <input type="submit" class="btnSubmit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

