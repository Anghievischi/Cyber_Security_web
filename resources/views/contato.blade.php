@extends('layout.master')
@section('title', 'Contato')
@section('content')

    <section class="contato" style="height: 80vh">
    </section>

    <div class="__forms scrollToForm">
        <form id="contato" action="{{ route('formulario.contato') }}" method="post" data-reset="true" class="ajax_off">
            @csrf
            @if (session('success'))
                <div class="ajax_response --form-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="ajax_response --form-error">
                    {{ session('error') }}
                </div>
            @endif

            <div class="__display">
                <div class="input">
                    <input type="text" name="nome" placeholder="Nome*" value="{{ old('nome') }}">

                    @if ($errors->has('nome'))
                        <div class="--input-error" role="alert">
                            {{ $errors->first('nome') }}
                        </div>
                    @endif
                </div>

                <div class="input">
                    <input type="tel" name="telefone" placeholder="Telefone*" class="mask-tel"
                        value="{{ old('telefone') }}">
                    @if ($errors->has('telefone'))
                        <div class="--input-error" role="alert">
                            {{ $errors->first('telefone') }}
                        </div>
                    @endif
                </div>

                <div class="input">
                    <input type="email" name="email" placeholder="E-mail*" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <div class="--input-error" role="alert">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="--duo">
                    <div class="input">
                        <select class="ajax-uf" name="uf" data-response="select.cidade" data-url="/busca/cidades"
                            style="width: 100%;">
                            <option value="">U.F*</option>
                            @foreach ($estados as $estado)
                                <option data-uf="{{ $estado->id_uf }}" value="{{ $estado->name_f }}">
                                    {{ $estado->name_s }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('uf'))
                            <div class="--input-error" role="alert">
                                {{ $errors->first('uf') }}
                            </div>
                        @endif
                    </div>

                    <div class="input">
                        <select class="cidade" name="cidade" id="cidade">
                            <option selected disabled value="">Cidade*</option>
                            <option disabled value="">Selecione um estado primeiro</option>
                        </select>
                        @if ($errors->has('cidade'))
                            <div class="--input-error" role="alert">
                                {{ $errors->first('cidade') }}
                            </div>
                        @endif
                    </div>
                </div><!-- --duo -->

                <div class="input">
                    <textarea name="mensagem" placeholder="Mensagem*">{{ old('nome') }}</textarea>
                    @if ($errors->has('mensagem'))
                        <div class="--input-error" role="alert">
                            {{ $errors->first('mensagem') }}
                        </div>
                    @endif
                </div>
            </div><!-- __display -->

            <div class="__button">
                <input type="submit" data-callback='onSubmit' data-action='submit' value="Enviar">
            </div>
        </form>
    </div>

    <section class="contato" style="height: 80vh">
    </section>
@endsection

@push('script')
    <script>
        function removeOptions(target, text) {
            $(target).empty();
        }

        function carregaCidade(trg) {
            console.log(trg)
            var changed = trg;
            var data = changed.data();
            var val = changed.find(':selected').data('uf');
            var load = $(".ajax_load");
            var flashClass = "ajax_response";
            var flash = $(this).find("." + flashClass);
            var form = $('form');
            var csrf = $('input[name="_token"]').val();
            $.ajax({
                url: data.url,
                type: "POST",
                data: {
                    "post_val": val,
                    "_token": csrf
                },
                dataType: "json",
                beforeSend: function() {
                    load.fadeIn(200).css("display", "flex");
                },
                success: function(response) {
                    if (response.cidades) {
                        load.fadeOut(200);
                        removeOptions(data.response, 'Selecione');

                        jQuery.each(response.cidades, function(index, item) {
                            console.log('data', item)
                            $("#cidade").append(
                                `<option value="${item.cidade}">${item.cidade}</option>`);
                        });
                    }

                    //message
                    if (response.message) {
                        if (flash.length) {
                            flash.html(response.message).fadeIn(100).effect("bounce", 300);
                        } else {
                            form.prepend("<div class='" + flashClass + "'>" + response.message + "</div>")
                                .find("." + flashClass).effect("bounce", 300);
                        }
                    } else {
                        flash.fadeOut(200);
                    }

                    load.fadeOut(200);
                },
                error: function(e) {
                    alert("Ocorreu um erro inesperado, por favor tente novamente mais tarde.");
                }
            });
        }

        $("select.ajax-uf").change(function() {
            carregaCidade($(this));
        });
    </script>
@endpush
