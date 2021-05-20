@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Event') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('eventpost') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>

                            <div class="col-md-6">
                                <input id="event_name" type="text" class="form-control @error('event_name') is-invalid @enderror" name="event_name" value="{{ old('event_name') }}" required autocomplete="event_name" autofocus>

                                @error('event_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Name') }}</label>

                            <div class="col-md-6">
                                <input id="contact_person_name" type="text" class="form-control @error('contact_person_name') is-invalid @enderror" name="contact_person_name" value="{{ old('contact_person_name') }}" required autocomplete="contact_person_name" autofocus>

                                @error('contact_person_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact_person_number" type="text" class="form-control @error('contact_person_number') is-invalid @enderror" name="contact_person_number" value="{{ old('contact_person_number') }}" required autocomplete="contact_person_number" autofocus>

                                @error('contact_person_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Date') }}</label>

                            <div class="col-md-6">
                                <input id="event_date" type="date" class="form-control @error('event_date') is-invalid @enderror" name="event_date" value="{{ old('event_date') }}" required autocomplete="event_date" autofocus min="<?php echo date("Y-m-d"); ?>">

                                @error('event_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Time') }}</label>

                            <div class="col-md-6">
                                <input id="event_time" type="time" class="form-control @error('event_time') is-invalid @enderror" name="event_time" value="{{ old('event_time') }}" required autocomplete="event_time" autofocus>

                                @error('event_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Type') }}</label>

                            <div class="col-md-6">
                                <select class="fav_clr form-control" name="event_type[]" multiple="multiple">
                                <option value="Wedding">Wedding</option>
                                <option value="Birthday party">Birthday party</option>
                                <option value="Business meeting">Business meeting</option>
                                
                            </select>

                                @error('event_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{asset('js')}}/demo1/pages/custom/user/profile.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.fav_clr').select2({
                placeholder: 'Select Users',
                width: '100%',
                border: '1px solid #e4e5e7',
            });
        });

    $('.fav_clr').on("select2:select", function (e) { 
               var data = e.params.data.text;
               if(data=='all'){
                $(".fav_clr > option").prop("selected","selected");
                $(".fav_clr").trigger("change");
               }
          });
    </script>
@endsection

