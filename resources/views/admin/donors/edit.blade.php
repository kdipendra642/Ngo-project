@extends('admin.layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3>{{ $_panel }}</h3>
                </header>
                <div class="panel-body">
                    <div class="btn-group">
                    <a href="{{ route($_base_route) }}" class="btn btn-info btn-xs"><i class="fa fa-arrow-left"> Back</i></a>
                </div>    
                <br>
                <br>                    
                <div class=" form">
                    <form class="form-horizontal" method="POST" action="{{route($_base_route.'.update',$donors->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Donors Image(<em style="color:red">*</em>)</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="file" id="image" name="image" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)" value="{{ $donors->image }}">
                                <img id="previewImg" src="{{ asset('image/donors/'.$donors->image) }}" alt="" style="max-width: 130px; margin-top: 20px;">
                                @if ($errors->has('image'))
                                    <span class="help-block" style="color:red">
                                        * <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Donors Title(<em style="color:red">*</em>)</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="title" name="title" value="{{ $donors->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block" style="color:red">
                                        * <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="status" class="control-label col-lg-2">Status</label>
                            <div class="col-lg-10 col-sm-10">
                                <input type="checkbox"{{ $donors->status == "1" ? 'checked' : '' }} style="width: 20px" class="checkbox form-control" id="status" name="status">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="pull-right">
                                    <input class="btn btn-danger" type="submit" value="Submit">
                                    <a href="{{ route($_base_route) }}" class="btn btn-default" type="button">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
    <script>
        function previewImage(input) {
            var file = $("input[type=file]").get(0).files[0];
            if(file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#previewImg').attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection