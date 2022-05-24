<div>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="justify-content-center my-alert disappear-5 col-md-6">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <span><b> Error - </b> {{$error}} </span>
                </div>
            </div>
        @endforeach
    @endif
</div>

<div>
    @if(session('success'))
    <div class="justify-content-center my-alert disappear-5 col-md-6">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <span><b> Success - </b> {{session('success')}} </span>
        </div>
    </div>
    @endif
</div>
<div>
    @if(session('error'))
    <div class="justify-content-center my-alert disappear-5 col-md-6">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <span><b> Error - </b> {{session('error')}} </span>
        </div>
    </div>
    @endif
</div>
