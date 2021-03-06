@extends('admin::layout.app')

@section('content')

    <div class="right_col" role="main" style="min-height: 3801px;">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

                <form enctype="multipart/form-data" role="form" href="/admin/restaurant/store" method="post"
                      id="demo-form2" class="form-horizontal form-label-left">





                    {{--Name--}}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}" >
                        <label class="control-label col-md-1 col-sm-1 col-xs-7" for="first-name">Name <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <input name="name" type="text" id="first-name"  value="{{ old('name') }}" required="required"
                                   class="form-control col-md-4 col-xs-12">
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    {{--End Name--}}
                    <div class="ln_solid"></div>
                    {{--Category--}}
                    <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Category<span
                                    class="required">*</span></label>
                        <div class="col-md-5 col-sm-9 col-xs-12">
                            <select name="category[]" class="select2_multiple form-control" multiple="multiple">
                                @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('category'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                        @endif
                    </div>
                    {{--End Category--}}

                    <div class="ln_solid"></div>
                    {{--Short description--}}
                    <div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }}">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12">Short discription</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea  value="{{ old('short_description') }}" name="short_description" class="resizable_textarea form-control"
                                       placeholder="Shourt description about Restaurant"></textarea>
                        </div>
                        @if ($errors->has('short_description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('short_description') }}</strong>
                                    </span>
                        @endif
                    </div>
                    {{--End Short description--}}

                    <div class="ln_solid"></div>

                    {{--Images--}}
                    <div class="fileUpload btn btn-primary  btn-sm {{ $errors->has('image') ? ' has-error' : '' }}">
                        <span>Upload photos</span>
                        <input id="uploadBtn" type="file" name="image[]" multiple class="upload" autofocus/>

                    </div>
                    <input id="uploadImg" placeholder="Choose File" disabled="disabled"/>
                    @if ($errors->has('image'))
                        <span class="help-block">
                                        <strong style="color: darkred">{{ $errors->first('image') }}</strong>
                                    </span>
                    @endif

                    <div class="ln_solid"></div>

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}" >
<?php $dowMap = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');?>
                        @for($i=0;$i<7;$i++)
                        <label class="control-label col-md-1 col-sm-1 col-xs-7" for="first-name">{{$dowMap[$i]}} <span
                                    class="required"></span>
                        </label>
                        <div style="padding-top: 15px" class="col-md-2 col-sm-3 col-xs-12">
                            <input name="date[{{$i}}][start]" type="time" id="first-name" required="required"
                                   class="form-control col-md-4 col-xs-12" placeholder="start">
                            <input name="date[{{$i}}][end]" type="time" id="first-name"  required="required"
                                   class="form-control col-md-4 col-xs-12" placeholder="end">
                        </div>
                            @endfor
                    </div>


                    {{-- End Images--}}


                    <div class="ln_solid"></div>
                    {{--Menu--}}

                    <div class="fileUpload btn btn-primary btn-sm {{ $errors->has('manu') ? ' has-error' : '' }}">
                        <span>Upload menus</span>
                        <input id="uploadFls" type="file" name="menu[]" multiple class="upload"/>

                    </div>
                    <input id="uploadFile" placeholder="Choose File" multiple disabled="disabled"/>
                    @if ($errors->has('menu'))
                        <span class="help-block">
                                        <strong style="color: darkred">{{ $errors->first('menu') }}</strong>
                                    </span>
                    @endif
                    <script type="text/javascript">

                        document.getElementById("uploadFls").onchange = function () {

                            var input = $(this), numFiles = input.get(0).files ? input.get(0).files.length : 1;
                            if (numFiles < 2) {
                                $("#uploadFile").val(input.val());
                            }
                            else {
                                $("#uploadFile").val("uploaded " + numFiles + " files");

                            }

                        };
                    </script>
                    {{--End Menu--}}

                    <div class="ln_solid"></div>

                    {{--Description--}}
                    <div class="x_title">
                        <h2>Description
                            <small>about restaurant</small>
                            @if ($errors->has('image'))
                                <span class="help-block">
                                        <strong style="color: darkred">{{ $errors->first('desctiption') }}</strong>
                                    </span>
                            @endif
                        </h2>

                        @include('admin::helpers.text_editor')
                        {{--End Description--}}

                        {{--Map--}}
                        <div class="form-group">
                            <div class="ln_solid"></div>
                            <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                                       placeholder="Street, house №">
                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <button class="btn btn-primary" type="button" id="che" onclick="checkAddress()">Check
                            </button>
                            <button class="btn btn-primary" type="button" onclick="addAddress()">Add</button>
                        </div>
                        <div class="form-group">
                            <div class="map">
                                @include('admin::helpers.map')
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback address"
                                 style="height: 300px; width: 500px; overflow-y: scroll;">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">

                                        <th class="column-title" style="display: table-cell;">locality</th>
                                        <th class="column-title" style="display: table-cell;">home</th>
                                        <th class="column-title" style="display: table-cell;">delete</th>

                                    </tr>
                                    </thead>
                                    <tbody class="address">
                                    <tr class="even pointer">
                                        {{--addresses--}}

                                    </tr>
                                    </tbody>

                                </table>

                            </div>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                        <strong style="color: darkred">{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                            <div class="results"></div>

                        </div>

                        {{--End Map--}}

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>


                </form>

            </div>
        </div>


    </div>
    <script src="/admin_asset/js/admin_create.js"></script>

@endsection