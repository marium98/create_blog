@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card">
                 
                  <div class="card-header">
                    <h3>ADD CONTACTS</h3>
                  </div>

                  <form action="/contacts" method="POST">
                    @csrf
                      <div class="form-group">
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                      placeholder="Contact Name" value="{{old('name')}}" >
                          @error('name')
                      <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                         placeholder="Contact Email"  value="{{old('email')}}" >
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                         placeholder="Contact Phone"  value="{{old('phone')}}" >
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit"  class="btn btn-primary" value="Add Contact" >
                    </div>

                  </form>
              </div>
        </div>
    </div>
</div>
@endsection
