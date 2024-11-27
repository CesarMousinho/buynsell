@extends('adminlte::page')

@section('title', 'Perfil de {{ $user->name }}')

@section('content_header')
    <h1>Perfil de {{ $user->name }}</h1>
@stop

@section('content')
    <div class="row">
        <!-- Mensagens de Sessão -->
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="col-md-8 offset-md-2 col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Informações do Perfil</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <!-- Foto do Perfil (Base64) -->
                            <img 
                                src="data:image/jpeg;base64,{{ $user->profile_picture }}" 
                                alt="Foto do Perfil"
                                class="img-fluid rounded-circle mb-3"
                                style="max-width: 150px; height: 150px;">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Nome:</strong> {{ $user->name }}</p>
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                            <p><strong>Data de Nascimento:</strong> {{ base64_decode($user->dob) }}</p> <!-- Exibe a data de nascimento decodificada -->
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a  href="{{ route('perfil.edit', ['user' => $user->id]) }}" class="btn btn-primary">Editar Perfil</a>
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
        #profile_picture {
            width: 100%;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Perfil carregado com sucesso!');
    </script>
@stop
