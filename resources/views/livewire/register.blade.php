<div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form wire:submit.prevent="register">
                    <div class="border py-2 ps-2 mb-4 rounded text-center fw-bold">
                        Faça seu registro
                    </div>

                    <div class="flex-column d-flex mb-2">
                        <label class="mb-2 fw-bold" for="email">Nome</label>
                        <input type="text" class="form-control" wire:model="name" placeholder="Digite seu nome..." />
                    </div>

                    <div class="flex-column d-flex mb-2">
                        <label class="mb-2 fw-bold" for="email">E-mail</label>
                        <input type="email" class="form-control" wire:model="email" placeholder="Digite seu e-mail..." />
                    </div>

                    <div class="flex-column d-flex mb-4">
                        <label class="mb-2 fw-bold" for="email">Senha</label>
                        <input type="password" class="form-control" wire:model="password" placeholder="Digite sua senha..." />
                    </div>

                    <button type="submit" class="btn btn-primary rounded-0">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
