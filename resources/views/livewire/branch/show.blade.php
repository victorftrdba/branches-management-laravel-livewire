<div>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-12 mb-5">
                <div class="border py-2 ps-2 mb-4 rounded text-center fw-bold">
                    Filial {{ $gym->id }}
                </div>
                <a href="{{ route('dashboard') }}" class="btn btn-danger fw-bold rounded-0 border-0">Voltar <i
                class="fas fa-undo-alt"></i></a>
            </div>

            <div class="col-6 text-center">
                <img class="img-fluid" src="{{ asset('storage/'.$gym->image) }}" alt="{{ $gym->name }}" />
            </div>

            <div class="col-6 border ps-5 pt-5 pb-5">
                <p><span class="fw-bold">Nome da Filial: </span>{{ $gym->name }}</p>
                <p><span class="fw-bold">Estado: </span>{{ $gym->state }}</p>
                <p><span class="fw-bold">CNPJ: </span>{{ $gym->cnpj }}</p>
                <p><span class="fw-bold">Telefone: </span>{{ $gym->phone }}</p>
                <p><span class="fw-bold">Endereço: </span>{{ $gym->address }}</p>
                <p><span class="fw-bold">Nº de Funcionários: </span>{{ $gym->employees }}</p>
            </div>
    </div>
</div>
</div>
