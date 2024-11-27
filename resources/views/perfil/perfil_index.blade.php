@extends('adminlte::page')

@section('title', 'Perfil de {{ $user->name }}')

@section('content_header')
<h1>Perfil de {{ $user->name }}</h1>
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
                <h3 class="card-title">Informações do Perfil</h3>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <!-- Foto do Perfil -->
                    <div class="col-md-4 text-center">
                        <img
                            src="data:image/jpeg;base64,{{ $user->profile_picture }}"
                            alt="Foto do Perfil"
                            class="img-fluid rounded-circle mb-3 shadow"
                            style="max-width: 150px; height: 150px;">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Nome:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Data de Nascimento:</strong> {{ $user->dob ? \Carbon\Carbon::parse($user->dob)->format('d/m/Y') : 'Não informado' }}</p>
                        <!-- Formata a data de nascimento -->
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('perfil.edit', ['id' => $user->id]) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Editar Perfil
                </a>
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
    }

    /* Imagem de perfil responsiva */
    img.rounded-circle {
        border: 2px solid #ddd;
        padding: 5px;
    }

    img.rounded-circle:hover {
        border-color: #007bff;
    }

    .notification {
        position: fixed;
        top: 10px;
        right: 10px;
        z-index: 1050;
        max-width: 300px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }
</style>
@stop

@section('js')
<script>
    console.log('Perfil carregado com sucesso!');

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