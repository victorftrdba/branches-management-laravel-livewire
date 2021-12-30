<div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 mb-5">
                <div class="border py-2 ps-2 mb-4 rounded text-center fw-bold">
                    Registro de Nova Filial
                </div>
                <a href="{{ route('dashboard') }}" class="btn btn-danger fw-bold rounded-0 border-0">Voltar <i
                        class="fas fa-undo-alt"></i></a>
            </div>
        </div>
        <form class="row" wire:submit.prevent="store" enctype="multipart/form-data">
            <div class="col-12 mb-3">
                <label class="fw-bold mb-2" for="image">Imagem</label>
                <input type="file" class="form-control" wire:model="image" />
                    @if ($image)
                    <div class="text-center mt-5 mb-5">
                        <img src="{{ $image->temporaryUrl() }}" class="img-fluid">
                    </div>
                    @endif
            </div>
            <div class="col-6 mb-3">
                <label class="fw-bold mb-2" for="name">Nome</label>
                <input type="text" placeholder="Digite o nome da filial..." wire:model="name" class="form-control" />
            </div>
            <div class="col-6 mb-3">
                <label class="fw-bold mb-2" for="cnpj">CNPJ</label>
                <input type="text" placeholder="Digite o CNPJ da filial..." wire:model="cnpj" class="form-control" />
            </div>
            <div class="col-6 mb-3">
                <label class="fw-bold mb-2" for="state">Estado</label>
                <select class="form-select" wire:model="state">
                    <option value=""></option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label class="fw-bold mb-2" for="address">Endereço</label>
                <input type="text" wire:model="address" placeholder="Digite o endereço da filial..." class="form-control" />
            </div>
            <div class="col-6 mb-3">
                <label class="fw-bold mb-2" for="phone">Telefone</label>
                <input type="text" wire:model="phone" placeholder="Digite o telefone da filial..." class="form-control" />
            </div>
            <div class="col-6 mb-3">
                <label class="fw-bold mb-2" for="employees">Nº de Funcionários</label>
                <input type="number" wire:model="employees" min="1" value="0" placeholder="Digite o número de funcionários da filial..." class="form-control" />
            </div>

            <div class="col-3">
                <button type="submit" class="btn btn-primary border-0 rounded-0 fw-bold">Registrar <i class="fas fa-save"></i></button>
            </div>
        </form>
    </div>
</div>
