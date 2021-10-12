@extends('layouts.blog-home')



@section('content')


   <!-- Contact Section -->

   <div class="container"style="margin-bottom:250px;">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="border border-dark" style="padding: 20px;">
                
                    @if (count($errors) >0) 

                        <div class="alert alert-danger">

                            <ul>
                                @foreach ($erros->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-succes">
                            <h5> {{$message}}</h5>
                    </div>

                    @endif
                    {!! Form::open(array('action' => 'SendEmailController@send', 'method' => 'post'))   !!}
                    @if ($message = Session::get('succses'))
                    <div class="alert alert-success">
                        <h3> {{$message}} </h3>
                    </div>
                        
                    @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" name="send" class="btn btn-dark btn-xl">Send Message</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>

</div>
<!--

    @stop