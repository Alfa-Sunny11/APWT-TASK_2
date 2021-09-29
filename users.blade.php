@extends('layout.app')

@section('content')
     <div class="container" style = "margin-top:40px; width: 70%" >
           <div class="row">
                 <div class="col-mid-6 offset-mid-3">
                       <div class="card">
                             <div class="card-header">
                                   <div class="card-body">
                                          <form method="POST" action="{{route('users')}}">
                                                @csrf
                                                <div class="mb-3">
                                                      <label for="email" class="form-label">Email address</label>
                                                      <input type="email" class="form-control" id="email" name="email">
                                                      @error('email')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="password" class="form-label">Password</label>
                                                      <input type="password" class="form-control" id="password"
                                                      name="password">
                                                      @error('password')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{route('registration')}}">Click Here For registration</a>
                                          </form>
                                   </div>
                             </div>
                       </div>
                 </div>
           </div>
     </div>

@endsection
