@extends('layouts.app')

@section('title')
     JobHunt
@endsection

@section('content')
     <div class="jumbotron">
        <div class="mx-auto align-middle jumbotron-content">
            <div>
              <h1 class="display-4 h1">JOBSHUNT</h1>
              <h2 class="display-4 h2">Let's Hunt the Job That Fits Your Skills</h2>
              <form action="/userdashboard" method="get">
                <div class="input-group mb-3 w-50">
                  <input type="text" class="form-control" placeholder="HUNT Jobs" aria-label="Amount (rounded to the nearest dollar)" aria-describedby="basic-addon" name="search">
                  <div class="input-group-append">
                    <button class="input-group-text bg-info text-light" id="basic-addon" type="submit"><i class="fas fa-search"></i></button>
                    <form action="/jobs/filter" method="post">
                        @csrf
                        <label for="minQuality">Min Salary:</label>
                        <input type="number" name="min_quality" id="minQuality" value="{{ old('minQuality', 1000) }}">
                    
                        <label for="maxQuality">Max Salary:</label>
                        <input type="number" name="max_quality" id="maxQuality" value="{{ old('maxQuality', 2000) }}">
                    
                        <button type="submit">Filter</button>

                    </form>
{{-- 
                    <form action="{{ route('user.profile.add_skillset', $user->id) }}" method="post">
                        @csrf
                        <select name="skillset_id">
                            @foreach($skillsets as $skillset)
                                <option value="{{ $skillset->id }}">{{ $skillset->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit">Add Skillset</button>
                    </form> --}}


                    
                  </div>
                </div>
              </form>  
          </div>
       </div>
    </div>
    <section id="BrowseCategories">
        <div class="container">
            <h2 class="h2 text-center">Browse JOB Services</h2>
            <h4 class="h4 text-center mb-5 text-muted">Get inspired to hunt your desired jobplatform</h4>
            <div class="row mb-5">
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=1">
                    <i class="fas fa-paint-brush fa-5x text-muted"></i><br><br>  
                   <h5 class="h5 text-muted"> Graphics &amp; Design</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=2">
                    <i class="fas fa-code fa-5x text-muted"></i><br>  <br>  
                    <h5 class="h5 text-muted">Programming &amp; Tech</h5></a> 
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=3">
                    <i class="far fa-chart-bar fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Digital Marketing</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=4">
                    <i class="fas fa-pencil-alt fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted"> Writing &amp; Translation</h5></a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=5">
                    <i class="fas fa-video fa-5x text-muted"></i><br><br>  
                   <h5 class="h5 text-muted">Video &amp; Animation</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=6">
                    <i class="fas fa-keyboard fa-5x text-muted"></i><br>  <br>  
                    <h5 class="h5 text-muted">Admin Support</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=7">
                    <i class="fas fa-cog fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Architecture &amp; Engineering</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=8">
                    <i class="fas fa-chart-pie fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Management &amp; Finance</h5></a>
                </div>
            </div>
        </div>
    </section> 
    <section id="vectorimages" class="pt-1">
        <div class="col-sm">
           <h2 class="h2 mt-5">CSE471 GROUP PROJECT</h2>
           <p class="text-dark">Let's approach this process with a growth mindset, embracing the learning curve and staying adaptable. The job market might present its challenges, but it's also brimming with opportunities waiting to be seized by individuals like us—individuals eager to make a difference. Feel free to adjust the speech to suit your personal style or needs. Good luck on your job hunt!</p>
        </div>
        <div class="col-sm">
            <img src="/storage/assets/freelancervector.jpg" class="img-fluid">
        </div>
    </section>
@endsection