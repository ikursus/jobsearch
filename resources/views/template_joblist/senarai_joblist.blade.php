@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Joblist</div>

                <div class="card-body">

                    @if ( session('mesej_sukses') )
                    <div class="alert alert-success">
                    {{ session('mesej_sukses') }}
                    </div>
                    @endif

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>POSITION</th>
                <th>SALARY</th>
                <th>EDUCATION</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>

            @foreach($rekod_joblist as $job)

            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->description }} </td>
                <td>{{ $job->position }} </td>
                <td>{{ $job->salary }} </td>
                <td>{{ $job->education }} </td>
                <td>
                    <a href="{{ route('editJoblist', $job->id) }}" class="btn btn-primary">
                        EDIT
                    </a>

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $job->id }}">
                    DELETE
                  </button>
      
      <!-- Modal -->
      <form method="POST" action="{{ route('destroyJoblist', $job->id) }}">
      @csrf
      @method('delete')

      <div class="modal fade" id="modal-delete-{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Adakah anda bersetuju untuk delete rekod ini?

              <ul>
                <li>ID: {{ $job->id }}</li>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>

    </form>
      <!-- Tutup Modal -->

                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>
</div>
</div>
</div>
</div>
@endsection
