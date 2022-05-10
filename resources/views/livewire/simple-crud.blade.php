<div class="pt-3" style="padding-bottom:400px;">

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">TITLE</th>
            <th scope="col">CONTENT</th>
            <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>
                    <input type="text" name="title" wire:model="title" class="form-control" placeholder="Enter Title">
                </td>
                <td>
                    <input type="text" wire:model="content" name="content" class="form-control" placeholder="Enter Content">
                </td>
                <td>
                    <button wire:click="store" class="btn btn-success">Save</button>
                </td>
            </tr>
            @foreach ($posts as $key=>$post)
            <tr>
                <td>
                    <input type="text" wire:model.defer="posts.{{$key}}.title" class="form-control" >
                </td>
                <td>
                    <input type="text" wire:model.defer="posts.{{$key}}.content" class="form-control">
                </td>
                <td>
                    <button type="button" wire:click="updatepost({{$key}})"  class="btn btn-success btn-sm">Save</button>
                    <button  type="button" wire:click="delete({{$key}})" class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            @endforeach
    </tbody>
    </table>


</div>
