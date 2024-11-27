@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
<h1>Editar Perfil de {{ $user->name }}</h1>
@stop

@section('content')

<div class="row">
    <!-- Mensagens de Sessão -->
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show notification" role="alert">
        <strong>Erro:</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show notification" role="alert">
        <strong>Sucesso:</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
    @endif

    <div class="col-md-8 offset-md-2 col-12">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="card-title">Formulário de Edição de Perfil</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('perfil.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Campo de Nome -->
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Digite seu nome completo">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campo de Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Digite seu email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campo de Data de Nascimento -->
                    <div class="form-group">
                        <label for="dob">Data de Nascimento</label>
                        <input type="date" id="dob" name="dob" value="{{ old('dob', $user->dob) }}"
                            class="form-control @error('dob') is-invalid @enderror">
                        @error('dob')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Foto de Perfil Atual -->
                    <div class="form-group text-center">
                        <label>Foto de Perfil Atual</label>
                        <div>
                            <img src="data:image/jpeg;base64,{{ $user->profile_picture }}"
                                alt="Foto do Perfil"
                                class="img-fluid rounded-circle shadow mb-3"
                                style="max-width: 120px; height: 120px;">
                        </div>
                    </div>

                    <!-- Campo de Foto de Perfil -->
                    <div class="form-group">
                        <label for="profile_picture">Nova Foto de Perfil</label>
                        <input type="file" id="profile_picture" name="profile_picture"
                            class="form-control @error('profile_picture') is-invalid @enderror">
                        @error('profile_picture')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small>Carregue uma imagem (JPG, PNG, JPEG). Tamanho máximo: 2MB.</small>
                    </div>

                    <!-- Botões de Ação -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Salvar Alterações
                        </button>
                        <a href="{{ route('perfil.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
<style>
    .card-header {
        font-weight: bold;
    }

    /* Ajustes para imagem de perfil */
    img.rounded-circle {
        border: 2px solid #ddd;
        padding: 5px;
    }

    img.rounded-circle:hover {
        border-color: #007bff;
    }

    /* Estilos para tornar o layout responsivo */
    @media (max-width: 767px) {
        .form-group {
            margin-bottom: 1rem;
        }

        .card-header {
            text-align: center;
        }

        .card-body {
            padding: 1.5rem;
        }
    }

    /* Ajuste para telas grandes */
    @media (min-width: 768px) {
        .card-body {
            padding: 2rem;
        }

        .notification {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1050;
            max-width: 300px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

    }
</style>
@stop

@section('js')
<script>
    console.log('Edição de Perfil carregada com sucesso!');
    
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            const alerts = document.querySelectorAll('.notification');
            alerts.forEach(alert => alert.classList.add('fade-out'));
        }, 5000); // Fecha automaticamente após 5 segundos
    });

    // Adicione uma classe de fade-out para transição suave
    document.styleSheets[0].insertRule(`
    .fade-out {
        opacity: 0;
        transition: opacity 1s ease-out;
    }
`, document.styleSheets[0].cssRules.length);
</script>

@stop