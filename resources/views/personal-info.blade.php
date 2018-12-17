@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <h3>Physis Dating Pre-Screening Questionnaire</h3>
                    <p>The information that you disclose will not be distributed under any circumstances and is considered confidential. Keeping your information private during this process, and after you become a member, is of the utmost importance to us. Thank you in advance for taking the time to complete the following screening questionnaire. </p>


            <div class="card">
                <div class="card-header">Please fill up the form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    <form method="POST" action="/personal-info">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="radio" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="Male" required autofocus>Male
                                <input id="gender" type="radio" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="Female" required autofocus>Female

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                           

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bday" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="bday" type="date" class="form-control{{ $errors->has('bday') ? ' is-invalid' : '' }}" name="bday" value="{{ old('bday') }}" required autofocus>

                                @if ($errors->has('bday'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="wdlive" class="col-md-4 col-form-label text-md-right">{{ __('Where Do you Live?') }}</label>

                            <div class="col-md-6">
                                <input id="wdlive" type="text" class="form-control{{ $errors->has('wdlive') ? ' is-invalid' : '' }}" name="wdlive" value="{{ old('wdlive') }}" required autofocus>

                                @if ($errors->has('wdlive'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wdlive') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="pno" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="pno" type="text" class="form-control{{ $errors->has('pno') ? ' is-invalid' : '' }}" name="pno" value="{{ old('pno') }}" required autofocus>

                                @if ($errors->has('pno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="profession" class="col-md-4 col-form-label text-md-right">{{ __('Profession/ Industry/ Title/ Firm') }}</label>

                            <div class="col-md-6">
                                <input id="profession" type="text" class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession" value="{{ old('profession') }}" required autofocus>

                                @if ($errors->has('profession'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education: University/ Degree(s)') }}</label>

                            <div class="col-md-6">
                                <input id="education" type="text" class="form-control{{ $errors->has('education') ? ' is-invalid' : '' }}" name="education" value="{{ old('education') }}" required autofocus>

                                @if ($errors->has('education'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="marriage" class="col-md-4 col-form-label text-md-right">{{ __('Are you marriage minded and comfortable with the concept of a commitment?') }}</label>

                            <div class="col-md-6">
                                <input id="marriage" type="text" class="form-control{{ $errors->has('marriage') ? ' is-invalid' : '' }}" name="marriage" value="{{ old('marriage') }}" required autofocus>

                                @if ($errors->has('marriage'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marriage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marriedb" class="col-md-4 col-form-label text-md-right">{{ __('In addition have you been married before, divorced, widowed, or are you currently separated?') }}</label>

                            <div class="col-md-6">
                                <input id="marriedb" type="text" class="form-control{{ $errors->has('marriedb') ? ' is-invalid' : '' }}" name="marriedb" value="{{ old('marriedb') }}" required autofocus>

                                @if ($errors->has('marriedb'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marriedb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __(' What is your height ?') }}</label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{ old('height') }}" required autofocus>

                                @if ($errors->has('height'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Current Weight') }}</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight" value="{{ old('weight') }}" required autofocus>

                                @if ($errors->has('weight'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="hear" class="col-md-4 col-form-label text-md-right">{{ __('How did you hear about Physis Dating?') }}</label>

                            <div class="col-md-6">
                                <input id="hear" type="text" class="form-control{{ $errors->has('hear') ? ' is-invalid' : '' }}" name="hear" value="{{ old('hear') }}" required autofocus>

                                @if ($errors->has('hear'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hear') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="beforeworked" class="col-md-4 col-form-label text-md-right">{{ __('Have you ever worked with a professional matchmaker before?') }}</label>

                            <div class="col-md-6">
                                <input id="beforeworked" type="text" class="form-control{{ $errors->has('beforeworked') ? ' is-invalid' : '' }}" name="beforeworked" value="{{ old('beforeworked') }}" required autofocus>

                                @if ($errors->has('beforeworked'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('beforeworked') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ytell" class="col-md-4 col-form-label text-md-right">{{ __('If yes, tell us more about the experience') }}</label>

                            <div class="col-md-6">
                                <input id="ytell" type="text" class="form-control" name="ytell" value="{{ old('ytell') }}"  placeholder="Not compulsary">


                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="challenge" class="col-md-4 col-form-label text-md-right">{{ __('What is the greatest challenge in dating you? In other words, why would someone not want to date you? ') }}</label>

                            <div class="col-md-6">
                                <input id="challenge" type="text" class="form-control{{ $errors->has('challenge') ? ' is-invalid' : '' }}" name="challenge" value="{{ old('challenge') }}" required autofocus>

                                @if ($errors->has('challenge'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('challenge') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="passion" class="col-md-4 col-form-label text-md-right">{{ __('What are some of your greatest passions and hobbies outside of the scope of your career?') }}</label>

                            <div class="col-md-6">
                                <input id="passion" type="text" class="form-control{{ $errors->has('passion') ? ' is-invalid' : '' }}" name="passion" value="{{ old('passion') }}" required autofocus>

                                @if ($errors->has('passion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Does religion play a role in your life? If so, tell us about it.') }}</label>

                            <div class="col-md-6">
                                <input id="religion" type="text" class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}" name="religion" value="{{ old('religion') }}" required autofocus>

                                @if ($errors->has('religion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="fb" class="col-md-4 col-form-label text-md-right">{{ __('Facebook URL (not compulsary)') }}</label>

                            <div class="col-md-6">
                                <input id="fb" type="url" class="form-control" name="fb" value="{{ old('fb') }}">


                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('LinkedIn URL (not compulsary)') }}</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="url" class="form-control" name="linkedin" value="{{ old('linkedin') }}" >

                            </div>
                        </div>                                                                                                                       






                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
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
