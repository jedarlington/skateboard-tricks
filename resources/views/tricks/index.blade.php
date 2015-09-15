@extends('layouts.main')

@section('content')
    <h2>Tricks</h2>

    @if (! $tricks->count())
        <h3>You have no tricks!</h3>
    @else
      <ul>
        @foreach ($tricks as $trick)
          <li>{!! $trick->name !!}</li>
        @endforeach
      </ul>

        {{-- <ul>
            @foreach( $projects as $project )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                        <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                        (
                            {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul> --}}
    @endif

     <p>
        {!! link_to_route('tricks.create', 'Add Trick') !!}
    </p>
@endsection
