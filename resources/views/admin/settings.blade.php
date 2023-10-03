@extends('layouts.app')


@section('content')

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Configuraciones generales</h3>
        </div>
    </div>

    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Rotor de imágenes</h6>
            </div>
            <div class="card-body pt-0">
            <div class="card-body d-flex flex-column">
                <form action="{{ route('saveData') }}" method="POST" class="quick-post-form php-email-form">
                    <label></label>
                    <div class="form-group row">
                        <div class="col-12 p-0">
                            <h4>Rotor 1</h4>  
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="pretitle">Pre-título imagen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="pretitleRotor1" name="pretitleRotor1" value="{{$web->pretitleRotor1}}" maxlength="36" placeholder="Pre-title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorPretitleRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor1 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontPretitleRotor1" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontPretitleRotor1 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontPretitleRotor1 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontPretitleRotor1 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontPretitleRotor1 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontPretitleRotor1 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontPretitleRotor1 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontPretitleRotor1 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontPretitleRotor1 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontPretitleRotor1 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontPretitleRotor1 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontPretitleRotor1 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontPretitleRotor1 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontPretitleRotor1 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontPretitleRotor1 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontPretitleRotor1 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontPretitleRotor1 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontPretitleRotor1 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontPretitleRotor1 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontPretitleRotor1 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontPretitleRotor1 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontPretitleRotor1 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontPretitleRotor1 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontPretitleRotor1 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontPretitleRotor1 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontPretitleRotor1 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontPretitleRotor1 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontPretitleRotor1 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontPretitleRotor1 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontPretitleRotor1 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontPretitleRotor1 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontPretitleRotor1 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontPretitleRotor1 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontPretitleRotor1 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontPretitleRotor1 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontPretitleRotor1 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontPretitleRotor1 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontPretitleRotor1 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontPretitleRotor1 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontPretitleRotor1 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontPretitleRotor1 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontPretitleRotor1 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontPretitleRotor1 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontPretitleRotor1 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontPretitleRotor1 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontPretitleRotor1 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontPretitleRotor1 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontPretitleRotor1 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Título imágen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="titleRotor1" name="titleRotor1" value="{{$web->titleRotor1}}" maxlength="36" placeholder="Title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color"name="colorTitleRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor1 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontTitleRotor1" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontTitleRotor1 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontTitleRotor1 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontTitleRotor1 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontTitleRotor1 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontTitleRotor1 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontTitleRotor1 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontTitleRotor1 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontTitleRotor1 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontTitleRotor1 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontTitleRotor1 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontTitleRotor1 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontTitleRotor1 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontTitleRotor1 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontTitleRotor1 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontTitleRotor1 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontTitleRotor1 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontTitleRotor1 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontTitleRotor1 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontTitleRotor1 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontTitleRotor1 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontTitleRotor1 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontTitleRotor1 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontTitleRotor1 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontTitleRotor1 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontTitleRotor1 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontTitleRotor1 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontTitleRotor1 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontTitleRotor1 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontTitleRotor1 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontTitleRotor1 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontTitleRotor1 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontTitleRotor1 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontTitleRotor1 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontTitleRotor1 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontTitleRotor1 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontTitleRotor1 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontTitleRotor1 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontTitleRotor1 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontTitleRotor1 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontTitleRotor1 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontTitleRotor1 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontTitleRotor1 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontTitleRotor1 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontTitleRotor1 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontTitleRotor1 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontTitleRotor1 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontTitleRotor1 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check mr-4">
                                        <input type="radio" class="form-check-input" name="useBtnRotor1" value="1" id="conBoton" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                        <label class="form-check-label" for="conBoton">Con Botón</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="useBtnRotor1" value="0" id="sinBoton" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                        <label class="form-check-label" for="sinBoton">Sin Botón</label>
                                    </div>
                                </div>
                                <div class="form-group p-2" id="buttonFields" style="@if($web->useBtnRotor1 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                    <div class="row">
                                        <div class="col-md-5 pr-0">
                                            <label for="btntext">Texto del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnTextRotor1" name="btnTextRotor1" value="{{$web->btnTextRotor1}}" maxlength="22" placeholder="Texto del botón">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorBtnTextRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor1 ?? '#FFFFFF' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontBtnTextRotor1" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontBtnTextRotor1 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontBtnTextRotor1 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontBtnTextRotor1 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontBtnTextRotor1 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontBtnTextRotor1 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontBtnTextRotor1 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontBtnTextRotor1 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontBtnTextRotor1 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontBtnTextRotor1 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontBtnTextRotor1 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontBtnTextRotor1 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontBtnTextRotor1 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontBtnTextRotor1 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontBtnTextRotor1 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontBtnTextRotor1 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontBtnTextRotor1 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontBtnTextRotor1 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontBtnTextRotor1 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontBtnTextRotor1 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontBtnTextRotor1 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontBtnTextRotor1 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontBtnTextRotor1 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontBtnTextRotor1 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontBtnTextRotor1 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontBtnTextRotor1 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontBtnTextRotor1 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontBtnTextRotor1 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontBtnTextRotor1 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontBtnTextRotor1 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontBtnTextRotor1 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontBtnTextRotor1 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontBtnTextRotor1 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontBtnTextRotor1 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontBtnTextRotor1 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontBtnTextRotor1 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontBtnTextRotor1 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontBtnTextRotor1 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontBtnTextRotor1 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontBtnTextRotor1 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontBtnTextRotor1 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontBtnTextRotor1 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontBtnTextRotor1 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontBtnTextRotor1 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontBtnTextRotor1 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontBtnTextRotor1 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontBtnTextRotor1 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontBtnTextRotor1 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <label for="btntext">Color de botón</label>
                                            <div class="input-group">
                                                <div class="input-group-append m-auto" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="backgroundBtnTextRotor1" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor1 ?? '#DE2423' }}" autocomplete="off">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="btnurl">URL del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnUrlRotor1" name="btnUrlRotor1" value="{{$web->btnUrlRotor1}}" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="slim col-12 "
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="19:9"
                            data-fetcher="/slim-cropper-uploading/server/fetch.php"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1920,930">
                            <input type="file" id="imageRotor1" name="imageRotor1"/>
                            @if($web->imageRotor1)
                            <img src="/assets/images/{{$web->imageRotor1}}" />
                            @endif
                        </div>
                        <!-- segundo slider -->
                        <div class="col-12 p-0 mt-4">
                            <hr>
                            <h4>Rotor 2</h4>  
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="pretitle">Pre-título imagen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="pretitleRotor2" name="pretitleRotor2" value="{{$web->pretitleRotor2}}" maxlength="36" placeholder="Pre-title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorTitleRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor2 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontPretitleRotor2" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontPretitleRotor2 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontPretitleRotor2 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontPretitleRotor2 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontPretitleRotor2 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontPretitleRotor2 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontPretitleRotor2 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontPretitleRotor2 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontPretitleRotor2 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontPretitleRotor2 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontPretitleRotor2 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontPretitleRotor2 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontPretitleRotor2 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontPretitleRotor2 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontPretitleRotor2 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontPretitleRotor2 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontPretitleRotor2 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontPretitleRotor2 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontPretitleRotor2 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontPretitleRotor2 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontPretitleRotor2 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontPretitleRotor2 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontPretitleRotor2 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontPretitleRotor2 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontPretitleRotor2 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontPretitleRotor2 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontPretitleRotor2 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontPretitleRotor2 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontPretitleRotor2 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontPretitleRotor2 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontPretitleRotor2 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontPretitleRotor2 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontPretitleRotor2 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontPretitleRotor2 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontPretitleRotor2 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontPretitleRotor2 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontPretitleRotor2 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontPretitleRotor2 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontPretitleRotor2 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontPretitleRotor2 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontPretitleRotor2 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontPretitleRotor2 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontPretitleRotor2 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontPretitleRotor2 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontPretitleRotor2 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontPretitleRotor2 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontPretitleRotor2 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontPretitleRotor2 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Título imágen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="titleRotor2" name="titleRotor2" value="{{$web->titleRotor2}}" maxlength="36" placeholder="Title">
                                                <div class="input-group-append" style="padding: 0px; ">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color"name="colorPretitleRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor2 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontTitleRotor2" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontTitleRotor2 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontTitleRotor2 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontTitleRotor2 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontTitleRotor2 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontTitleRotor2 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontTitleRotor2 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontTitleRotor2 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontTitleRotor2 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontTitleRotor2 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontTitleRotor2 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontTitleRotor2 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontTitleRotor2 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontTitleRotor2 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontTitleRotor2 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontTitleRotor2 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontTitleRotor2 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontTitleRotor2 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontTitleRotor2 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontTitleRotor2 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontTitleRotor2 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontTitleRotor2 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontTitleRotor2 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontTitleRotor2 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontTitleRotor2 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontTitleRotor2 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontTitleRotor2 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontTitleRotor2 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontTitleRotor2 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontTitleRotor2 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontTitleRotor2 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontTitleRotor2 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontTitleRotor2 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontTitleRotor2 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontTitleRotor2 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontTitleRotor2 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontTitleRotor2 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontTitleRotor2 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontTitleRotor2 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontTitleRotor2 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontTitleRotor2 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontTitleRotor2 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontTitleRotor2 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontTitleRotor2 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontTitleRotor2 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontTitleRotor2 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontTitleRotor2 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontTitleRotor2 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check mr-4">
                                        <input type="radio" class="form-check-input" name="useBtnRotor2" value="{{$web->useBtnRotor2}}" value="1" id="conBoton2" autocomplete="off" @if ($web->useBtnRotor2 == 1) checked @endif>
                                        <label class="form-check-label" for="conBoton2">Con Botón</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="useBtnRotor2" value="0" id="sinBoton2" autocomplete="off" @if ($web->useBtnRotor2 == 0) checked @endif>
                                        <label class="form-check-label" for="sinBoton2">Sin Botón</label>
                                    </div>
                                </div>
                                <div class="form-group p-2" id="buttonFields2" style="@if($web->useBtnRotor2 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                    <div class="row">
                                        <div class="col-md-5 pr-0">
                                            <label for="btntext">Texto del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnTextRotor2" name="btnTextRotor2" value="{{$web->btnTextRotor2}}" maxlength="22" placeholder="Texto del botón">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorBtnTextRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor2 ?? '#FFFFFF' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontBtnTextRotor2" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontBtnTextRotor2 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontBtnTextRotor2 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontBtnTextRotor2 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontBtnTextRotor2 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontBtnTextRotor2 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontBtnTextRotor2 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontBtnTextRotor2 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontBtnTextRotor2 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontBtnTextRotor2 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontBtnTextRotor2 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontBtnTextRotor2 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontBtnTextRotor2 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontBtnTextRotor2 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontBtnTextRotor2 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontBtnTextRotor2 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontBtnTextRotor2 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontBtnTextRotor2 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontBtnTextRotor2 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontBtnTextRotor2 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontBtnTextRotor2 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontBtnTextRotor2 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontBtnTextRotor2 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontBtnTextRotor2 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontBtnTextRotor2 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontBtnTextRotor2 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontBtnTextRotor2 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontBtnTextRotor2 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontBtnTextRotor2 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontBtnTextRotor2 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontBtnTextRotor2 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontBtnTextRotor2 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontBtnTextRotor2 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontBtnTextRotor2 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontBtnTextRotor2 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontBtnTextRotor2 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontBtnTextRotor2 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontBtnTextRotor2 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontBtnTextRotor2 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontBtnTextRotor2 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontBtnTextRotor2 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontBtnTextRotor2 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontBtnTextRotor2 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontBtnTextRotor2 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontBtnTextRotor2 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontBtnTextRotor2 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontBtnTextRotor2 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontBtnTextRotor2 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <label for="btntext">Color de botón</label>
                                            <div class="input-group">
                                                <div class="input-group-append m-auto" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="backgroundBtnTextRotor2" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor2 ?? '#DE2423' }}" autocomplete="off">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="btnurl">URL del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnUrlRotor2" name="btnUrlRotor2" value="{{$web->btnUrlRotor2}}" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="slim col-12 mt-1"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="19:9"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1920,930">
                            <input type="file" id="imageRotor2" name="imageRotor2"/>
                            @if($web->imageRotor2)
                            <img src="/assets/images/{{$web->imageRotor2}}" />
                            @endif
                        </div>
                        <!-- tercer slider -->
                        <div class="col-12 p-0 mt-4">
                            <hr>
                            <h4>Rotor 3</h4>  
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="pretitle">Pre-título imagen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="pretitleRotor3" name="pretitleRotor3" value="{{$web->pretitleRotor3}}" maxlength="36" placeholder="Pre-title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorTitleRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor3 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontPretitleRotor3" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontPretitleRotor3 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontPretitleRotor3 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontPretitleRotor3 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontPretitleRotor3 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontPretitleRotor3 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontPretitleRotor3 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontPretitleRotor3 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontPretitleRotor3 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontPretitleRotor3 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontPretitleRotor3 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontPretitleRotor3 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontPretitleRotor3 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontPretitleRotor3 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontPretitleRotor3 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontPretitleRotor3 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontPretitleRotor3 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontPretitleRotor3 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontPretitleRotor3 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontPretitleRotor3 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontPretitleRotor3 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontPretitleRotor3 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontPretitleRotor3 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontPretitleRotor3 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontPretitleRotor3 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontPretitleRotor3 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontPretitleRotor3 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontPretitleRotor3 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontPretitleRotor3 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontPretitleRotor3 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontPretitleRotor3 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontPretitleRotor3 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontPretitleRotor3 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontPretitleRotor3 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontPretitleRotor3 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontPretitleRotor3 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontPretitleRotor3 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontPretitleRotor3 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontPretitleRotor3 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontPretitleRotor3 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontPretitleRotor3 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontPretitleRotor3 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontPretitleRotor3 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontPretitleRotor3 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontPretitleRotor3 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontPretitleRotor3 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontPretitleRotor3 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontPretitleRotor3 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Título imágen 1</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="titleRotor3" name="titleRotor3" value="{{$web->titleRotor3}}" maxlength="36" placeholder="Title">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color"name="colorPretitleRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor3 ?? '#333' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontTitleRotor3" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontTitleRotor3 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontTitleRotor3 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontTitleRotor3 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontTitleRotor3 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontTitleRotor3 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontTitleRotor3 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontTitleRotor3 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontTitleRotor3 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontTitleRotor3 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontTitleRotor3 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontTitleRotor3 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontTitleRotor3 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontTitleRotor3 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontTitleRotor3 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontTitleRotor3 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontTitleRotor3 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontTitleRotor3 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontTitleRotor3 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontTitleRotor3 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontTitleRotor3 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontTitleRotor3 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontTitleRotor3 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontTitleRotor3 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontTitleRotor3 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontTitleRotor3 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontTitleRotor3 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontTitleRotor3 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontTitleRotor3 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontTitleRotor3 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontTitleRotor3 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontTitleRotor3 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontTitleRotor3 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontTitleRotor3 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontTitleRotor3 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontTitleRotor3 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontTitleRotor3 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontTitleRotor3 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontTitleRotor3 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontTitleRotor3 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontTitleRotor3 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontTitleRotor3 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontTitleRotor3 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontTitleRotor3 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontTitleRotor3 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontTitleRotor3 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontTitleRotor3 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontTitleRotor3 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check mr-4">
                                        <input type="radio" class="form-check-input" name="useBtnRotor3" value="1" id="conBoton3" autocomplete="off" @if ($web->useBtnRotor3 == 1) checked @endif>
                                        <label class="form-check-label" for="conBoton3">Con Botón</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="useBtnRotor3" value="0" id="sinBoton3" autocomplete="off" @if ($web->useBtnRotor3 == 0) checked @endif>
                                        <label class="form-check-label" for="sinBoton3">Sin Botón</label>
                                    </div>
                                </div>
                                <div class="form-group p-2" id="buttonFields3" style="@if($web->useBtnRotor3 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                    <div class="row">
                                        <div class="col-md-5 pr-0">
                                            <label for="btntext">Texto del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnTextRotor3" name="btnTextRotor3" value="{{$web->btnTextRotor3}}" maxlength="22" placeholder="Texto del botón">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="colorBtnTextRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor3 ?? '#FFFFFF' }}" autocomplete="off">
                                                    </span>
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <select name="fontBtnTextRotor3" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                            <option value="Arial" {{ $web->fontBtnTextRotor3 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                            <option value="Helvetica" {{ $web->fontBtnTextRotor3 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                            <option value="Times New Roman" {{ $web->fontBtnTextRotor3 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                            <option value="Georgia" {{ $web->fontBtnTextRotor3 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                            <option value="Courier New" {{ $web->fontBtnTextRotor3 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                            <option value="Verdana" {{ $web->fontBtnTextRotor3 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                            <option value="Tahoma" {{ $web->fontBtnTextRotor3 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                            <option value="Trebuchet MS" {{ $web->fontBtnTextRotor3 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                            <option value="Impact" {{ $web->fontBtnTextRotor3 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Comic Sans MS" {{ $web->fontBtnTextRotor3 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                            <option value="Arial Black" {{ $web->fontBtnTextRotor3 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                            <option value="Lucida Sans Unicode" {{ $web->fontBtnTextRotor3 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                            <option value="Palatino Linotype" {{ $web->fontBtnTextRotor3 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                            <option value="Book Antiqua" {{ $web->fontBtnTextRotor3 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                            <option value="Palatino" {{ $web->fontBtnTextRotor3 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                            <option value="Century Gothic" {{ $web->fontBtnTextRotor3 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                            <option value="Lucida Console" {{ $web->fontBtnTextRotor3 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                            <option value="Garamond" {{ $web->fontBtnTextRotor3 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                            <option value="Franklin Gothic Medium" {{ $web->fontBtnTextRotor3 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                            <option value="Copperplate" {{ $web->fontBtnTextRotor3 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                            <option value="Arial Narrow" {{ $web->fontBtnTextRotor3 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                            <option value="Rockwell" {{ $web->fontBtnTextRotor3 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                            <option value="Gill Sans" {{ $web->fontBtnTextRotor3 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                            <option value="Baskerville" {{ $web->fontBtnTextRotor3 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                            <option value="Cambria" {{ $web->fontBtnTextRotor3 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                            <option value="Geneva" {{ $web->fontBtnTextRotor3 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                            <option value="Century Schoolbook" {{ $web->fontBtnTextRotor3 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                            <option value="Avant Garde" {{ $web->fontBtnTextRotor3 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                            <option value="Didot" {{ $web->fontBtnTextRotor3 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                            <option value="Futura" {{ $web->fontBtnTextRotor3 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                            <option value="Brush Script MT" {{ $web->fontBtnTextRotor3 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                            <option value="Helvetica Neue" {{ $web->fontBtnTextRotor3 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                            <option value="Cursive" {{ $web->fontBtnTextRotor3 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                            <option value="Monaco" {{ $web->fontBtnTextRotor3 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                            <option value="Consolas" {{ $web->fontBtnTextRotor3 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                            <option value="Courier" {{ $web->fontBtnTextRotor3 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                            <option value="Bookman" {{ $web->fontBtnTextRotor3 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                            <option value="Cooper Black" {{ $web->fontBtnTextRotor3 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                            <option value="Impact" {{ $web->fontBtnTextRotor3 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                            <option value="Wide Latin" {{ $web->fontBtnTextRotor3 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                            <option value="Century" {{ $web->fontBtnTextRotor3 == 'Century' ? 'selected' : '' }}>Century</option>
                                                            <option value="Trebuchet" {{ $web->fontBtnTextRotor3 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                            <option value="Comic Sans" {{ $web->fontBtnTextRotor3 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                            <option value="Stencil" {{ $web->fontBtnTextRotor3 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                            <option value="Marker Felt" {{ $web->fontBtnTextRotor3 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                            <option value="Optima" {{ $web->fontBtnTextRotor3 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                            <option value="Gill Sans" {{ $web->fontBtnTextRotor3 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0">
                                            <label for="btntext">Color de botón</label>
                                            <div class="input-group">
                                                <div class="input-group-append m-auto" style="padding: 0px;">
                                                    <span class="input-group-text p-0" style="border-radius: 4px;">
                                                        <input type="color" name="backgroundBtnTextRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor3 ?? '#DE2423' }}" autocomplete="off">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="btnurl">URL del botón</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="btnUrlRotor3" name="btnUrlRotor3" value="{{$web->btnUrlRotor3}}" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="slim col-12 mt-1"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="19:9"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                            data-size="1920,930">
                            <input type="file" id="imageRotor3" name="imageRotor3"/>
                            @if($web->imageRotor3)
                            <img src="/assets/images/{{$web->imageRotor3}}" />
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-block btn-accent">Guardar Imágenes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
            <h6 class="m-0">Logo Web</h6>
            </div>
            <div class="card-body d-flex flex-column">
                <form action="{{ route('saveData') }}" method="POST" class="quick-post-form php-email-form">
                    <div class="form-group pb-5 border-bottom">
                        <div class="slim"
                            data-button-edit-title="Editar"
		                    data-button-remove-title="Borrar"
                            data-ratio="10:2"
                            data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                            data-size="330,60">
                            @if($web->imageLogo)
                            <img src="/assets/images/{{$web->imageLogo}}" />
                            @endif
                            <input type="file" name="imageLogo" required/>
                        </div>
                    </div>
                    <div>
                        <!-- <div class="form-group pb-5 border-bottom">
                            <h6 class="mb-5">Banner promocional</h6>
                            <div class="slim"
                                data-button-edit-title="Editar"
                                data-button-remove-title="Borrar"
                                data-ratio="86:3"
                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                                data-size="1900,66">
                                @if($web->imageLogo)
                                <img src="/assets/images/{{$web->imageLogo}}" />
                                @endif
                                <input type="file" name="imageBanner1" />
                            </div>
                        </div> -->
                    <div class="form-group">
                        <div class="input-group" style="height: 120px;">
                            <h6>Color institucional</h6>
                            <input type="color" class="form-control form-control-rounded" style="width: 100%; height: 100%;" value="#DE2423" autocomplete="off">
                            <div class="input-group-append" style="top: -85px;position: relative;left: 130px;">
                            <span class="input-group-text" style="background: transparent; border: none;">
                                <i class='material-icons touch' style='font-size:40px;'>touch_app</i>
                            </span>
                            </div>
                        </div>
                    </div>

                    <div class="py-5 px-0 col-12">
                        <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                    </div>

                </form>
            </div>
            </div>

            </div>
        </div>
        </div>
        <!-- End Users By Device Stats -->
        <!-- New Draft Component -->
        <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
        <!-- Quick Post -->
        <div class="card card-small h-100">

        </div>
        <!-- End Quick Post -->
        </div>
        <!-- End New Draft Component -->
        <!-- Discussions Component -->
        <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
        <div class="card card-small blog-comments">
            <div class="card-header border-bottom">
            <h6 class="m-0">Discussions</h6>
            </div>
            <div class="card-body p-0">
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 3 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 4 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 5 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 5 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="blog-comments__item d-flex p-3">
                <div class="blog-comments__avatar mr-3">
                <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">James Johnson</a> on
                    <a class="text-secondary" href="#">Hello World!</a>
                    <span class="text-muted">– 5 days ago</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                        <span class="text-success">
                        <i class="material-icons">check</i>
                        </span> Approve </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-danger">
                        <i class="material-icons">clear</i>
                        </span> Reject </button>
                    <button type="button" class="btn btn-white">
                        <span class="text-light">
                        <i class="material-icons">more_vert</i>
                        </span> Edit </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="card-footer border-top">
            <div class="row">
                <div class="col text-center view-report">
                <button type="submit" class="btn btn-white">View All Comments</button>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- End Discussions Component -->
        <!-- Top Referrals Component -->
        <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
            <h6 class="m-0">Top Referrals</h6>
            </div>
            <div class="card-body p-0">
            <ul class="list-group list-group-small list-group-flush">
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">GitHub</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Hacker News</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Reddit</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">The Next Web</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">YouTube</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                </li>
                <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Adobe</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!-- End Top Referrals Component -->
    </div>
</div>

@endsection

@section('script')	
<script>
    $(document).ready(function(){
        //si borramos imagen exsistente para saber que exsistia y ya no
        $('.slim-btn-remove').click(function(){
            var secondParent = $(this).parent().parent();
            var hiddenInput = secondParent.find('input[type="hidden"]');
            if (hiddenInput.length > 0) {
                hiddenInput.val("empty");//en el input hidden le ponemos = empty
            }
        });
    });


    //input number solo numeros inputNumber
    $('.inputNumber').bind('keypress', function(e) { 
        return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
    });
</script>

<script>
    $(document).ready(function() {
        // Listen for changes on the radio buttons
        $('input[name="useBtnRotor1"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields').show();
            } else {
                $('#buttonFields').hide();
            }
        });
        $('input[name="useBtnRotor2"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields2').show();
            } else {
                $('#buttonFields2').hide();
            }
        });
        $('input[name="useBtnRotor3"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields3').show();
            } else {
                $('#buttonFields3').hide();
            }
        });
        //aplicamos fuente selecionada a los input text como queda
        $('.font-select').on('change', function() {
            console.log('change font')
            var selectedFont = $(this).val();
            // Aplicar el estilo de fuente a los elementos <input> con la clase ".pretitle-input"
            $(this).parent().parent().parent().find('input[type="text"]').css('font-family', selectedFont);
        });
    });
</script>


@endsection