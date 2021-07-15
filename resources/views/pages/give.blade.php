@extends('layouts.app')

@section('content')

    <section class="page-banner-wrap bg-cover" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>The Chosen Generations</strong></h4>
                        </div>
                        <div class="page-title">
                            <h1>Giving</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Giving</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="cause-contents-wrapper section-padding donation-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="cause-details-wrapper">
                        {{-- <div class="featured-thumb">
                            <img src="{{ asset('assets/img/donation_bg.jpg') }}" alt="donation">
                        </div> --}}
                        <div class="give-form-wrap cause-form-wrap">
                            
                            <div class="row donation-form align-items-baseline">
                                <div class="donation-title col-12 col-lg-8">
                                    <h2 class="give-form-title">GIVING/DONATION</h2>
                                </div>
                            </div>

                            <div class="table table-responsive">
                                <table class="table table-striped table-bordered">
                                    
                                    <tbody>
                                        <tr>
                                            <td style="font-weight: bold;">Purpose</td>
                                            <td>Tithe/Offering</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Bank</td>
                                            <td>Guarantee Trust Bank</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Account Information</td>
                                            <td>
                                                Account Name: <span style="font-weight: bold;">RCCG Root of Jesse</span> <br>
                                                Account Number: <span style="font-weight: bold;">0038608552</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section> 

   @endsection