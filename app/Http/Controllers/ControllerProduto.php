<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ControllerProduto extends Controller
{

     public function create() {
        return view('cadastrar');
    }

    public function store(Request $request) {

        $produto = new Produto;

        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->descricao = $request->descricao; 
        $produto->preco = $request->preco;

        // Image Upload
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImage = $request->imagem;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/produto'), $imageName);

            $produto->imagem = $imageName;

        }

         $produto->save();

        return redirect('/criar')->with('msg', 'Cadastrado com sucesso!');
    }

    public function index(){

    $produtos = Produto::all();

    return view('catalogo', compact('produtos'));
}




}

?>