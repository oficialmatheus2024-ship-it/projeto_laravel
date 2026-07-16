<?php 
echo"bora trabalhar esta pagina de adm!!!!"


?>


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus produtos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
   
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">marca</th>
                <th scope="col">preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($produto as $produtos)
                <tr>
                        <td>{{ $produtos->id }}</td>
                        <td>{{ $produtos->nome }}</td>
                        <td>{{ $produtos->marca }}</td>
                        <td>{{ $produtos->preco }}</td>
                <td>
                       <a href="{{ url('/editar/'.$produtos->id) }}">Editar</a>
                        
                        <form action="/views/{{ $produtos->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
 
    <p>Você ainda não tem eventos, <a href="/criar">criar evento</a></p>
    <p>voltar pafina inicial, <a href="/">inicio</a></p>
</div>

