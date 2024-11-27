@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1>Editar Perfil de {{ $user->name }}</h1>
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
                <h3 class="card-title">Formulário de Edição de Perfil</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('perfil.update', ['user' => $user->id]) }}" method="POST"> enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Campo de Nome -->
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campo de Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campo de Data de Nascimento -->
                    <div class="form-group">
                        <label for="dob">Data de Nascimento</label>
                        <input type="date" id="dob" name="dob" value="{{ old('dob', $user->dob) }}" class="form-control @error('dob') is-invalid @enderror">
                        @error('dob')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campo de Foto de Perfil -->
                    <div class="form-group">
                        <label for="profile_picture">Foto de Perfil</label>
                        <input type="file" id="profile_picture" name="profile_picture" class="form-control @error('profile_picture') is-invalid @enderror">
                        @error('profile_picture')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small>Carregue uma imagem (JPG, PNG, JPEG).</small>
                    </div>

                    <!-- Botão para Salvar -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                        <a href="{{ route('perfil.index') }}" class="btn btn-secondary">Cancelar</a>
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
        console.log('Edição de Perfil Carregada');
    </script>
@stop
