@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Users</div>

                <div class="card-body">

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>

            @foreach($rekod_users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }} </td>
                <td>
                    <a href="{{ route('editUser', $user->id) }}" class="btn btn-primary">
                        EDIT
                    </a>

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">
                    DELETE
                  </button>
      
      <!-- Modal -->
      <form method="POST" action="{{ route('destroyUser', $user->id) }}">
      @csrf
      @method('delete')

      <div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <li>ID: {{ $user->id }}</li>
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
