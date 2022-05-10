<div class="container" style="height: 90vh" >
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="card">
        <div style="font-size: 22px;font-weight:600" class="card-header">Form Deposit</div>
        <div class="card-body">
            <div class="form-group">
            <label>Rekening Tujuan:</label>
                <select wire:model="rekening" class="form-control @error('rekening') is-invalid @enderror">
                    <option value="">Pilih Rekening Tujuan</option>
                    <option value="BCA 1234 tes">BCA 1234 tes</option>
                    <option value="BCA 09876 tes 2">BCA 09876 tes 2</option>
                </select>
                @error('rekening')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Rekening Asal</label>
                <input wire:model="rekening_asal" type="text" class="form-control @error('rekening_asal') is-invalid @enderror" placeholder="Rekening Asal">
                @error('rekening_asal')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input wire:model="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Jumlah">
                @error('jumlah')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Catatan: No Rekord / Referensi</label>
                <input wire:model="catatan" type="text" class="form-control " placeholder="Catatan">
            </div>
            <button wire:click="save" class="btn btn-success" style="width:100%;margin:10px 0">Submit</button>
        </div>
    </div>
</div>
