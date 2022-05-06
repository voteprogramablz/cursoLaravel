<h3>Fornecedor</h3>

{{-- O comentário que será descartado pelo interpretador do blade --}}

@php
/*
if() {
  
} else if () {

} else {
}

*/
@endphp

@isset($fornecedores)
    @foreach ($fornecedores as $fornecedor)
        <h2>Nome: {{ $fornecedor['nome'] }}</h2>
        <p>Status: {{ $fornecedor['status'] }}</p>
        @isset($fornecedor['cnpj'])
            <p>CNPJ: {{ $fornecedor['cnpj'] }}</p>
        @endisset
    @endforeach
@endisset
