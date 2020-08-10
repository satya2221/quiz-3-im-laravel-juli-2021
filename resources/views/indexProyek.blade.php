@extends('layouts.master')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar lengkp proyek</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            @if(session('sukses'))
                <div class="alert alert-success">
                    <?php echo session('sukses')?>
                </div>
            @endif
            <a href="/proyek/create" class="btn btn-outline-danger my-2 mx-2">Input Proyek</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Mulai Proyek</th>
                    <th>Deadline</th>
                    <th>detail</th>
                </tr>
                </thead>
                <tbody>
                @forelse($proyek as $key => $value)
                    <tr>
                        <td><?php echo $value->nama ?></td>
                        <td><?php echo $value->mulai?></td>
                        <td><?php echo $value->deadline?></td>
                        <td>
                            <a href="/pertanyaan/{{$value->id}}" class="btn btn-primary btn-sm my-1">detail</a>
                            <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-light btn-sm my-1">edit</a>
                            {{--                                <a href="" class="btn btn-danger btn-sm my-1">delete</a>--}}
                            <form action="/pertanyaan/{{$value->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm my-1" value="delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" align="center">Masih kosong</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
