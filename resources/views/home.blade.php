@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<br><br>
 <h3>User Dashboard</h3>

                  <a href="contacts/create" class="btn btn-primary">Add Contacts</a>
                  <a href="/contacts" class="btn btn-primary">ShowContacts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
