@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card">
                 
                  <div class="card-header">
                    <h3>UPDATE CONTACT</h3>
                  </div>

                  <form action="/contacts/{{$contact->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                      <div class="form-group">
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           placeholder="Contact Name" value="{{$contact->name}}">
                          @error('name')
                      <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Contact Email" value="{{$contact->email}}" >
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                         placeholder="Contact Phone" value="{{$contact->phone}}" >
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit"  class="btn btn-primary" value="Update Contact" >
                    </div>

                  </form>
              </div>
        </div>
    </div>
</div>
@endsection
