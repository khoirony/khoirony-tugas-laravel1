<div class="container">
    <div class="row">
        @foreach($users as $u)
            @if($filter['role'] == $u['role'] && $filter['active'] == $u['active'])
            <div class="col-lg-4">
                <div class="card shadow border-0 m-3">
                <img src="{{ $u['foto'] }}" class="card-img-top" style="height:300px; object-fit:cover" alt="profile">
                    <div class="card-body">
                        <h5 class="card-title">{{ $u['nama'] }} (<span class="text-danger">{{$u['role']}}</span>)</h5> 
                        <p class="card-text">{{ $u['bio'] }}</p>
                        <p>
                            Alamat : {{ $u['alamat']}}
                        </p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>