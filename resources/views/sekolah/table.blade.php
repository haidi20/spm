<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-custom">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Sekolah</th>
          <th>jenjang</th>
          <th>Kecamatan</th>
          <th>Alamat</th>
          <th width="200px">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($sekolah as $index => $item)
          @if ($item->pendidikan && $item->kecamatan)
            <tr align="center">
              <td>{{table_row_number($sekolah, $index)}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->pendidikan->nama}}</td>
              <td>{{$item->kecamatan->nama}}</td>
              <td>{{$item->alamat}}</td>
              <td>
                <a href="#" class="btn btn-info btn-sm" id="modal" data-toggle="modal" data-target="#myIp2">Detail</a>
                <a href="{{route('sekolah.edit',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
              </td>
              <modalsekolah></modalsekolah>
            </tr>
          @endif
        @empty
          <tr>
            <td align="center" colspan="6">Tidak Ada Data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    {!! $sekolah->appends(Request::input()); !!}
  </div>
</div>
