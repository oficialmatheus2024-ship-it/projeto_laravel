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


 public function dashboard() {

    $produto = Produto::all();
    
        return view('adm',  compact('produto'));

    }


 public function destroy($id) {

        Produto::findOrFail($id)->delete();

          return redirect('/adm')->with('msg', 'Produto excluído com sucesso!');

    }

    public function edit($id) {

        $produto = Produto::findOrFail($id);

        return view('editar', compact('produto'));

    }

       public function update(Request $request, $id) {

        $produto = Produto::findOrFail($id);

        $produto->update($request->all());

        return redirect('/adm');
        
        }
   



}

?>