<table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Bidang Minat</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mhs as $no => $m)
                                    <tr>
                                        <th scope="row">{{++$no}}</th>
                                        <td>{{$m -> nim}}</td>
                                        <td>{{$m -> nama}}</td>
                                        <td>{{$m -> gender}}</td>
                                        <td>{{$m -> jurusan}}</td>
                                        <td>{{$m -> bid_minat}}</td>
                                        <td>
                                            <a href="/mhs/updatemhs/{{$m->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/mhs/hapusmhs/{{$m->id}}" class="btn btn-outline-primary"><i class="bi bi-x-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>