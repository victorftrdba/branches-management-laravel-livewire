<div>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-12 mb-5">
                <div class="border py-2 ps-2 mb-4 rounded text-center fw-bold">
                    <span class="text-uppercase">Gerenciamento de Filiais</span> | Seja bem-vindo, {{ Auth::user()->name }}.
                </div>
                <a href="{{ route('branch.create') }}" class="btn btn-primary rounded-0 fw-bold border-0 text-uppercase">Nova filial <i class="fas fa-plus"></i></a>
                <button class="btn btn-danger fw-bold rounded-0 border-0 text-uppercase" wire:click="logout">logout <i class="fas fa-sign-out-alt"></i></button>
            </div>

            @foreach($gyms as $gym)
            <div class="col-4 mb-3">
                <div class="card shadow" style="width: 23rem;min-height:32rem;">
                    <img src="{!! asset('storage/'.$gym->image) !!}"
                        class="card-img-top" height="250" alt="{{ $gym->name }}" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-uppercase">{{ $gym->name }}</h5>
                        <p class="card-text mb-2"><span class="fw-bold">Endereço</span>: {{ $gym->address }}</p>
                        <p class="card-text mb-2"><span class="fw-bold">CNPJ</span>: {{ $gym->cnpj }}</p>
                        <p class="card-text mb-2"><span class="fw-bold">Estado</span>: {{ $gym->state }}</p>
                        <p class="card-text"><span class="fw-bold">Telefone</span>: {{ $gym->phone }}</p>
                        <a href="{{ route('branch.show', $gym->id) }}" style="font-size:0.8rem;" class="btn btn-primary fw-bold border-0 rounded-0 text-uppercase">Ver <i class="fas fa-eye"></i></a>
                        <a href="{{ route('branch.edit', $gym->id) }}" style="font-size:0.8rem;" class="btn btn-danger fw-bold border-0 rounded-0 text-uppercase">Editar <i class="fas fa-pen"></i></a>
                        <button class="btn btn-danger fw-bold border-0 rounded-0 text-uppercase" style="font-size:0.8rem;" wire:click="delete({{ $gym->id }})">Excluir <i class="fas fa-trash"></i></button>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        {{ $gyms->links() }}
    </div>
</div>
</div>
