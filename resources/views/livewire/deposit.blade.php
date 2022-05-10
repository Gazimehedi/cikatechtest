<div class="container mb-5">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
        <div class="mb-2">
            <span class="font-weight-bold">Deposit : </span>
            <input type="text" value="{{$deposit_proccess->count()}}" size="1" class="text-center bg-success text-white" disabled="">
        </div>
        @foreach ($deposit_proccess as $proccess_item)
            <div class="alert alert-success" role="alert">
                <div class="row">
                    <div class="col-md-4">{{\Carbon\Carbon::parse($proccess_item->created_at)->format('Y-m-d h:i:s')}}</div>
                    <div class="col-md-4 text-center">Deposit dari : {{$proccess_item->rekening}}</div>
                    <div class="col-md-4 text-right">Jumlah : {{$proccess_item->jumlah}}</div>
                </div>
            </div>
        @endforeach
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-4" style="background: #f5ff36">
                        <p style="position: relative;top: 8px;" class="text-center">Deposit in progress</p>
                    </div>
                </div>
                <table class="table table-bordered ">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Rekening Tujuan</th>
                            <th>Rekening Asal</th>
                            <th>Jumlah</th>
                            <th>Catatan: Nomor Rekord / Referensi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($deposit_proccess as $key=>$proccess_item)
                            <tr class="text-center">
                                <td>{{++$key}}</td>
                                <td>{{$proccess_item->rekening}}</td>
                                <td>{{$proccess_item->rekening_asal}}</td>
                                <td>{{$proccess_item->jumlah}}</td>
                                <td>{{$proccess_item->catatan}}</td>
                                <td>
                                    <button wire:click.defer="approved({{$proccess_item->id}})" title="approve deposit" class="btn btn-info btn-sm text-white" style="outline: 0"><i class="fas fa-check"></i></button>
                                    <button wire:click="delete({{$proccess_item->id}})" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h5 class="text-center font-weight-bold text-primary">No Deposit found</h5>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-4" style="background: #8deab3">
                        <p style="position: relative;top: 8px;" class="text-center">Deposit Approved</p>
                    </div>
                </div>
                <table class="table table-bordered ">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Rekening Tujuan</th>
                            <th>Rekening Asal</th>
                            <th>Jumlah</th>
                            <th>Catatan: Nomor Rekord / Referensi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($deposit_approved as $key=>$approved_item)
                            <tr class="text-center">
                                <td>{{++$key}}</td>
                                <td>{{$approved_item->rekening}}</td>
                                <td>{{$approved_item->rekening_asal}}</td>
                                <td>{{$approved_item->jumlah}}</td>
                                <td>{{$approved_item->catatan}}</td>
                                <td>
                                    <button wire:click.defer="reload({{$approved_item->id}})" title="cancel deposit" class="btn btn-info btn-sm text-white"><i class="fas fa-redo-alt"></i></button>
                                    <button wire:click="delete({{$approved_item->id}})" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h5 class="text-center font-weight-bold text-primary">No Deposit found</h5>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
</div>
