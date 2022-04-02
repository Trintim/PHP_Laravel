@extends('layout.principal')

@section('title', 'Contatos')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Contatos</h4>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Criar Contato</b></h4>
                    <p class="text-muted font-14 m-b-30">
                        Formulário para {{isset($contacts) ? "edição de contato" : "criar contato"}}.
                    </p>

                    <form id="form-contact" method="POST" action=" {{ isset($contact) ? route("contact.update", $contact->id) : route("contact.store")}} " enctype="multipart/form-data">
                        @csrf
                        @isset($contact)
                            @method("PUT")
                        @else
                            @method("post")
                        @endisset
                        @component('sistema.contato.form', ["contact" => isset($contact) ? $contact : null ])
                        @endcomponent

                    </form>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" form="form-contact" class="btn btn-success mr-2">Salvar</button>
                        <a href="{{ route('contact.index')}}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection

@section('style')

@endsection
