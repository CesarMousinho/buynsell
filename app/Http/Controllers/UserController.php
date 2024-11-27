<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar essa página.');
        }

        $user = Auth::user(); // Obtém o usuário logado

        return view('perfil.perfil_index', compact('user'));
    }

    // Exibe o perfil para edição
    public function edit(User $user)
    {
        $user = Auth::user(); // Obtém o usuário logado
        return view('perfil.perfil_edit', compact('user'));
    }

    /**
     * Atualiza o perfil do usuário.
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user(); // Obtém o usuário logado

        // Valida os campos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'dob' => 'nullable|date', // Validação do campo 'dob'   
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação de imagem   
        ]);

        // Atualiza os dados do usuário
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob; // Salvar o campo 'dob'

        // Se uma imagem foi carregada, converte para base64 e salva
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageContent = file_get_contents($image);  // Pega o conteúdo da imagem
            $base64Image = base64_encode($imageContent); // Converte para base64

            // Salva a imagem em base64 no banco de dados
            $user->profile_picture = $base64Image;
        }

        // Salva as alterações
        $user->save();

        return redirect()->route('perfil.index')->with('success', 'Perfil atualizado com sucesso!');
    }


    public function show()
    {
        $profile = auth()->user()->profile; // Usa o relacionamento no modelo
        return view('profile.show', compact('profile'));
    }
}
