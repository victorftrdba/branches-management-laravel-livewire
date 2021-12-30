<div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form wire:submit.prevent="login">
                    <div class="border py-2 ps-2 mb-4 rounded text-center fw-bold">
                        Faça seu login
                    </div>

                    <div class="flex-column d-flex mb-2">
                        <label class="mb-2 fw-bold" for="email">E-mail</label>
                        <input type="email" class="form-control" wire:model="email" placeholder="Digite seu e-mail..." />
                    </div>

                    <div class="flex-column d-flex mb-4">
                        <label class="mb-2 fw-bold" for="email">Senha</label>
                        <input type="password" class="form-control" wire:model="password" placeholder="Digite sua senha..." />
                    </div>

                    <button class="btn btn-primary rounded-0">Logar</button>
                    <a href="{{ route('register') }}" class="btn btn-danger rounded-0">Registrar</a>
                </form>
            </div>
        </div>
    </div>
</div>
