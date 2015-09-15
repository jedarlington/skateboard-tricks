@extends('layouts.main')

@section('content')

  <h1>Add a new trick</h1>

  {!! Form::model(new App\Tricks, ['route' => ['tricks.store']]) !!}
      <!-- Trick name -->
      <div class="form-item">
        {!! Form::text('name', 'Name a trick...') !!}
      </div>

      <!-- Trick description -->

      <!-- Trick category -->

      <!-- Submit -->
      {!! Form::submit('Add trick!') !!}
  {!! Form::close() !!}

@endsection
