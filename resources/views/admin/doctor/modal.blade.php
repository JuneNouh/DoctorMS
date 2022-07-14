<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Doctor information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card" >
                    <img src="{{ asset('images\doctor') }}/{{ $user->image }}" width="450" class="table-user-thumb" alt="doctor image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <h3 class="badge badge-pill badge-danger">Role : {{ $user->role->name }}</h3>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $user->phone_number }}</li>
                        <li class="list-group-item">{{ $user->email }}</li>
                        <li class="list-group-item">{{ $user->gender }}</li>
                        <li class="list-group-item">{{ $user->education }}</li>
                    </ul>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $user->description }}</li>
                        </ul>
                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div
