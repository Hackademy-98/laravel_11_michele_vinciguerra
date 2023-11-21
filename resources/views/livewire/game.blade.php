<div class="container" >
    <div class="row">

        @if(session('succes'))
            <div class="col-12 alert alert-success" >
                {{ session ('success')}}
                
            </div>
        @endif

        <div class="col-12">
            <form wire:submit.prevent="store">
                <div class="mt-3">
                    <label for="name">name</label>
                    <input id="name" type="text" class="form-control" wire:model="name">
                </div>
            </form>
            <div class="mt-3">
                <label for="description">description</label>
                <textarea id="description" cols="30" rows="10" class="form-control" wire:model="description"></textarea>
            </div>

            <div class="mt-3">
                <label for="img">Image</label>
                <input type="file" id="img" class="form-control" wire:model="img">
            </div>

            <button class="btn btn-primary my-3" type="submit" >save</button>
        </div>
    </div>
</div>
