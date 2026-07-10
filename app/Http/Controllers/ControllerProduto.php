<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ControllerProduto extends Controller
{

     public function create() {
        return view('adm.create');
    }

    public function store(Request $request) {

        $produto = new Produto;

        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->descricao = $request->descricao; 
        $produto->preco = $request->preco;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/produto'), $imageName);

            $produto->image = $imageName;

        }



}
}

?>