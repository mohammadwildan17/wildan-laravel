@extends("Layout.appadmin")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Kategori </h2>
                <form method="post" action="{{route('admin.storekategori')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Judul Buku </label>
                        <input type="text" class="form-control" name="nama" >
                    </div>

                    <div class="mb-3">
                    <label for="sinopsis">Deskripsi Kategori</label>
                    <input type="deskripsi" class="form-control" name="deskripsi">
                   </div>

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </select>
                    </div>
                </form>
                    <table class="table">
                        <th>
                            <tr>
                                <td>#</td>
                                <td>Nama</td>
                                <td colspan=2>Menu</td>
</tr>
@forelse($kat as $k)
                            <tr>
                                <td>{{ $k->id }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>Edit</td>
                                <td>Delete</td>
 </tr>
 @empty
 <tr>
    <td>
        Data Kosong
    </td>
 </tr>
@endforelse
                        </th>
                    </table>


                </form>

                @if (session('error'))
                    {{session('error')}}
                @endif

                @if (session('succes'))
                    {{session('succes')}}
                @endif

            </div>
        </div>
    </div>







    