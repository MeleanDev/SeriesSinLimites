<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"
            style="background-color: var(--primary-dark); color: var(--text-light); border-radius: 0.5rem; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);">
            <div class="modal-header"
                style="background-color: var(--secondary-dark); border-bottom: none; padding: 1.5rem 2rem;">
                <h5 class="modal-title" id="loginModalLabel"
                    style="color: var(--accent-color); font-weight: bold; margin-bottom: 0;">Iniciar Sesión</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Cerrar"></button>
            </div>
            <div class="modal-body" style="padding: 2rem;">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label" style="font-weight: bold;">Correo
                            Electronico</label>
                        <input type="text" class="form-control" name="email" id="username" placeholder="Tu Correo Electronico"
                            style="background-color: #495057; color: var(--text-light); border: 1px solid #6c757d; border-radius: 0.3rem; padding: 0.75rem;">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="font-weight: bold;">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Tu contraseña"
                            style="background-color: #495057; color: var(--text-light); border: 1px solid #6c757d; border-radius: 0.3rem; padding: 0.75rem;">
                    </div>
                    <button type="submit" class="btn btn-primary w-100"
                        style="background-color: var(--accent-color); border-color: var(--accent-color); border-radius: 0.3rem; padding: 0.8rem 1.5rem; font-weight: bold; color: var(--primary-dark); transition: background-color 0.3s ease, border-color 0.3s ease;">
                        Iniciar Sesión
                    </button>
                </form>
                <hr class="my-3" style="border-top: 1px solid #6c757d;">
                <p class="text-center mb-0">¿No tienes cuenta? <a href="#" data-bs-toggle="modal"
                        data-bs-target="#registerModal"
                        style="color: var(--accent-color); font-weight: bold;">Regístrate</a>
                </p>
                <p class="text-center mt-2 mb-0"><a href="#" style="color: #6c757d;">¿Olvidaste tu
                        contraseña?</a></p>
            </div>
        </div>
    </div>
</div>