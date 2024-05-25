<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{

    public function registerUser(Request $request) {

    try {
      $request->validate([
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
      ]);

      $user = new User();
      $user->usuario = $request->usuario;
      $user->ip = $request->ip;
      $user->password = Hash::make($request->password);
      $user->email = $request->email;
      $user->nombre = $request->nombre;
      $user->apellido = $request->apellido;
      $user->empresa = $request->empresa;
      $user->telefono = $request->telefono;
      $user->rol_usuario = $request->rol_usuario;
      $user->estado = $request->estado;
      $user->usuario_creacion = $request->usuario_creacion;
      $user->cmp = $request->cmp;
      $user->save();

      return response()->json([
        'message' => 'Usuario creado en la base de datos',
        'status' => 200
      ]);
    }
      catch(\exception $e){
        return response()->json([
            'status' => 400,
            'message' => $e->getMessage()
        ]);
      }
    }

    public function updateUser(Request $request) {

    try {
      $users = [
        "ip" => $request->ip,
        "password" => $request->password,
        "nombre" => $request->nombre,
        "apellido" => $request->apellido,
        "empresa" => $request->empresa,
        "telefono" => $request->telefono,
        "rol_usuario" => $request->rol_usuario,
        "estado" => $request->estado,
        "usuario_creacion" => $request->usuario_creacion,
        "cmp" => $request->cmp,
      ];

      $user = new User();
      $user::where('email', $request->email)
            ->update($users);

      return response()->json([
        'message' => 'Usuario Actualizado en la base de datos',
        'status' => 200
      ]);
    }
      catch(\exception $e) {
        return response()->json([
            'status' => 400,
            'message' => $e->getMessage()
        ]);
      }
    }

    public function DeleteUser(Request $request) {

    }

    public function login(Request $request) {
        $credenciales = $request->validate([
          'email' => ['required','email'],
          'password' => ['required']
        ]);

        if(Auth::attempt($credenciales)) {
          $user = Auth::user();
          $token = $user->createToken('token')->plainTextToken;
          $cookie = cookie('cookie_token', $token, 60 * 24);

            return response(
              [
                "token" => $token,
                "users" => $user::where('email', $request->email)->get()->first(),
                "status" => 200
              ],
                Response::HTTP_OK
            )
            ->withoutCookie($cookie);

        }
        else {

          return response()->json([
              "message" => "El Usuario o Contraseña no son correctos.",
              "status" => 401
            ]);

        }
    }

    public function logOut() {
      $cookie = Cookie::forget('cookie_token');
      return response(["message"=>"Cierre de sesión OK"], Response::HTTP_OK)
             ->withCookie($cookie);
    }


}
