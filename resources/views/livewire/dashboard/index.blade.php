<div>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-12 mb-5">
                <div class="border py-2 ps-2 mb-4 rounded text-center fw-bold">
                    Gerenciamento de Filiais | Seja bem-vindo, {{ Auth::user()->name }}.
                </div>
                <a href="{{ route('branch.create') }}" class="btn btn-primary rounded-0 fw-bold border-0">Registrar nova filial <i class="fas fa-plus"></i></a>
                <button class="btn btn-danger fw-bold rounded-0 border-0" wire:click="logout">Fazer logout <i class="fas fa-sign-out-alt"></i></button>
            </div>

            @foreach($gyms as $gym)
            <div class="col-4 mb-3">
                <div class="card" style="width: 23rem;min-height:32rem;">
                    <img src="{!! asset('storage/'.$gym->image) !!}"
                        class="card-img-top" height="250" alt="{{ $gym->name }}" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $gym->name }}</h5>
                        <p class="card-text mb-2"><span class="fw-bold">Endereço</span>: {{ $gym->address }}</p>
                        <p class="card-text mb-2"><span class="fw-bold">CNPJ</span>: {{ $gym->cnpj }}</p>
                        <p class="card-text mb-2"><span class="fw-bold">Estado</span>: {{ $gym->state }}</p>
                        <p class="card-text"><span class="fw-bold">Telefone</span>: {{ $gym->phone }}</p>
                        <a href="{{ route('branch.show', $gym->id) }}" class="btn btn-primary fw-bold border-0 rounded-0">Ver filial <i class="fas fa-eye"></i></a>
                        <a href="{{ route('branch.edit', $gym->id) }}" class="btn btn-danger fw-bold border-0 rounded-0">Editar filial <i class="fas fa-pen"></i></a>
                        <button class="btn btn-danger fw-bold border-0 rounded-0" wire:click="delete({{ $gym->id }})">Excluir filial</button>
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
