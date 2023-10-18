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
                                            <label class="form-check-label" for="conBoton">Con botón</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="useBtnRotor1" value="0" id="sinBoton" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                            <label class="form-check-label" for="sinBoton">Sin botón</label>
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
                            <div class="alert alert-info col-12" role="alert">
                                <i class="material-icons">info</i> Dejar sin imagen en caso de no querer utilizar esta sección.
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
                            <div class="alert alert-info col-12" role="alert">
                                <i class="material-icons">info</i> Dejar sin imagen en caso de no querer utilizar esta sección.
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
                            <!-- cuarto slider -->
                            <div class="col-12 p-0 mt-4">
                                <hr>
                                <h4>Rotor 4</h4>  
                                <div class="form-container">
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group">
                                                <label for="pretitle">Pre-título imagen 1</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="pretitleRotor4" name="pretitleRotor4" value="{{$web->pretitleRotor4}}" maxlength="36" placeholder="Pre-title">
                                                    <div class="input-group-append" style="padding: 0px;">
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <input type="color" name="colorTitleRotor3" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor3 ?? '#333' }}" autocomplete="off">
                                                        </span>
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <select name="fontPretitleRotor4" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                                <option value="Arial" {{ $web->fontPretitleRotor4 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                                <option value="Helvetica" {{ $web->fontPretitleRotor4 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                                <option value="Times New Roman" {{ $web->fontPretitleRotor4 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                                <option value="Georgia" {{ $web->fontPretitleRotor4 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                                <option value="Courier New" {{ $web->fontPretitleRotor4 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                                <option value="Verdana" {{ $web->fontPretitleRotor4 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                                <option value="Tahoma" {{ $web->fontPretitleRotor4 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                                <option value="Trebuchet MS" {{ $web->fontPretitleRotor4 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                                <option value="Impact" {{ $web->fontPretitleRotor4 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Comic Sans MS" {{ $web->fontPretitleRotor4 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                                <option value="Arial Black" {{ $web->fontPretitleRotor4 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                                <option value="Lucida Sans Unicode" {{ $web->fontPretitleRotor4 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                                <option value="Palatino Linotype" {{ $web->fontPretitleRotor4 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                                <option value="Book Antiqua" {{ $web->fontPretitleRotor4 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                                <option value="Palatino" {{ $web->fontPretitleRotor4 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                                <option value="Century Gothic" {{ $web->fontPretitleRotor4 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                                <option value="Lucida Console" {{ $web->fontPretitleRotor4 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                                <option value="Garamond" {{ $web->fontPretitleRotor4 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                                <option value="Franklin Gothic Medium" {{ $web->fontPretitleRotor4 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                                <option value="Copperplate" {{ $web->fontPretitleRotor4 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                                <option value="Arial Narrow" {{ $web->fontPretitleRotor4 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                                <option value="Rockwell" {{ $web->fontPretitleRotor4 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                                <option value="Gill Sans" {{ $web->fontPretitleRotor4 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                                <option value="Baskerville" {{ $web->fontPretitleRotor4 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                                <option value="Cambria" {{ $web->fontPretitleRotor4 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                                <option value="Geneva" {{ $web->fontPretitleRotor4 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                                <option value="Century Schoolbook" {{ $web->fontPretitleRotor4 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                                <option value="Avant Garde" {{ $web->fontPretitleRotor4 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                                <option value="Didot" {{ $web->fontPretitleRotor4 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                                <option value="Futura" {{ $web->fontPretitleRotor4 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                                <option value="Brush Script MT" {{ $web->fontPretitleRotor4 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                                <option value="Helvetica Neue" {{ $web->fontPretitleRotor4 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                                <option value="Cursive" {{ $web->fontPretitleRotor4 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                                <option value="Monaco" {{ $web->fontPretitleRotor4 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                                <option value="Consolas" {{ $web->fontPretitleRotor4 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                                <option value="Courier" {{ $web->fontPretitleRotor4 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                                <option value="Bookman" {{ $web->fontPretitleRotor4 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                                <option value="Cooper Black" {{ $web->fontPretitleRotor4 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                                <option value="Impact" {{ $web->fontPretitleRotor4 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Wide Latin" {{ $web->fontPretitleRotor4 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                                <option value="Century" {{ $web->fontPretitleRotor4 == 'Century' ? 'selected' : '' }}>Century</option>
                                                                <option value="Trebuchet" {{ $web->fontPretitleRotor4 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                                <option value="Comic Sans" {{ $web->fontPretitleRotor4 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                                <option value="Stencil" {{ $web->fontPretitleRotor4 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                                <option value="Marker Felt" {{ $web->fontPretitleRotor4 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                                <option value="Optima" {{ $web->fontPretitleRotor4 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                                <option value="Gill Sans" {{ $web->fontPretitleRotor4 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
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
                                                    <input type="text" class="form-control" id="titleRotor4" name="titleRotor4" value="{{$web->titleRotor4}}" maxlength="36" placeholder="Title">
                                                    <div class="input-group-append" style="padding: 0px;">
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <input type="color"name="colorPretitleRotor4" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor4 ?? '#333' }}" autocomplete="off">
                                                        </span>
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <select name="fontTitleRotor4" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                                <option value="Arial" {{ $web->fontTitleRotor4 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                                <option value="Helvetica" {{ $web->fontTitleRotor4 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                                <option value="Times New Roman" {{ $web->fontTitleRotor4 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                                <option value="Georgia" {{ $web->fontTitleRotor4 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                                <option value="Courier New" {{ $web->fontTitleRotor4 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                                <option value="Verdana" {{ $web->fontTitleRotor4 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                                <option value="Tahoma" {{ $web->fontTitleRotor4 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                                <option value="Trebuchet MS" {{ $web->fontTitleRotor4 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                                <option value="Impact" {{ $web->fontTitleRotor4 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Comic Sans MS" {{ $web->fontTitleRotor4 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                                <option value="Arial Black" {{ $web->fontTitleRotor4 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                                <option value="Lucida Sans Unicode" {{ $web->fontTitleRotor4 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                                <option value="Palatino Linotype" {{ $web->fontTitleRotor4 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                                <option value="Book Antiqua" {{ $web->fontTitleRotor4 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                                <option value="Palatino" {{ $web->fontTitleRotor4 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                                <option value="Century Gothic" {{ $web->fontTitleRotor4 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                                <option value="Lucida Console" {{ $web->fontTitleRotor4 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                                <option value="Garamond" {{ $web->fontTitleRotor4 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                                <option value="Franklin Gothic Medium" {{ $web->fontTitleRotor4 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                                <option value="Copperplate" {{ $web->fontTitleRotor4 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                                <option value="Arial Narrow" {{ $web->fontTitleRotor4 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                                <option value="Rockwell" {{ $web->fontTitleRotor4 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                                <option value="Gill Sans" {{ $web->fontTitleRotor4 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                                <option value="Baskerville" {{ $web->fontTitleRotor4 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                                <option value="Cambria" {{ $web->fontTitleRotor4 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                                <option value="Geneva" {{ $web->fontTitleRotor4 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                                <option value="Century Schoolbook" {{ $web->fontTitleRotor4 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                                <option value="Avant Garde" {{ $web->fontTitleRotor4 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                                <option value="Didot" {{ $web->fontTitleRotor4 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                                <option value="Futura" {{ $web->fontTitleRotor4 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                                <option value="Brush Script MT" {{ $web->fontTitleRotor4 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                                <option value="Helvetica Neue" {{ $web->fontTitleRotor4 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                                <option value="Cursive" {{ $web->fontTitleRotor4 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                                <option value="Monaco" {{ $web->fontTitleRotor4 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                                <option value="Consolas" {{ $web->fontTitleRotor4 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                                <option value="Courier" {{ $web->fontTitleRotor4 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                                <option value="Bookman" {{ $web->fontTitleRotor4 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                                <option value="Cooper Black" {{ $web->fontTitleRotor4 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                                <option value="Impact" {{ $web->fontTitleRotor4 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Wide Latin" {{ $web->fontTitleRotor4 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                                <option value="Century" {{ $web->fontTitleRotor4 == 'Century' ? 'selected' : '' }}>Century</option>
                                                                <option value="Trebuchet" {{ $web->fontTitleRotor4 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                                <option value="Comic Sans" {{ $web->fontTitleRotor4 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                                <option value="Stencil" {{ $web->fontTitleRotor4 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                                <option value="Marker Felt" {{ $web->fontTitleRotor4 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                                <option value="Optima" {{ $web->fontTitleRotor4 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                                <option value="Gill Sans" {{ $web->fontTitleRotor4 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check mr-4">
                                            <input type="radio" class="form-check-input" name="useBtnRotor4" value="1" id="conBoton4" autocomplete="off" @if ($web->useBtnRotor4 == 1) checked @endif>
                                            <label class="form-check-label" for="conBoton4">Con Botón</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="useBtnRotor4" value="0" id="sinBoton4" autocomplete="off" @if ($web->useBtnRotor4 == 0) checked @endif>
                                            <label class="form-check-label" for="sinBoton4">Sin Botón</label>
                                        </div>
                                    </div>
                                    <div class="form-group p-2" id="buttonFields4" style="@if($web->useBtnRotor4 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                        <div class="row">
                                            <div class="col-md-5 pr-0">
                                                <label for="btntext">Texto del botón</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="btnTextRotor4" name="btnTextRotor4" value="{{$web->btnTextRotor4}}" maxlength="22" placeholder="Texto del botón">
                                                    <div class="input-group-append" style="padding: 0px;">
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <input type="color" name="colorBtnTextRotor4" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor4 ?? '#FFFFFF' }}" autocomplete="off">
                                                        </span>
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <select name="fontBtnTextRotor4" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                                <option value="Arial" {{ $web->fontBtnTextRotor4 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                                <option value="Helvetica" {{ $web->fontBtnTextRotor4 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                                <option value="Times New Roman" {{ $web->fontBtnTextRotor4 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                                <option value="Georgia" {{ $web->fontBtnTextRotor4 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                                <option value="Courier New" {{ $web->fontBtnTextRotor4 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                                <option value="Verdana" {{ $web->fontBtnTextRotor4 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                                <option value="Tahoma" {{ $web->fontBtnTextRotor4 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                                <option value="Trebuchet MS" {{ $web->fontBtnTextRotor4 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                                <option value="Impact" {{ $web->fontBtnTextRotor4 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Comic Sans MS" {{ $web->fontBtnTextRotor4 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                                <option value="Arial Black" {{ $web->fontBtnTextRotor4 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                                <option value="Lucida Sans Unicode" {{ $web->fontBtnTextRotor4 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                                <option value="Palatino Linotype" {{ $web->fontBtnTextRotor4 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                                <option value="Book Antiqua" {{ $web->fontBtnTextRotor4 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                                <option value="Palatino" {{ $web->fontBtnTextRotor4 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                                <option value="Century Gothic" {{ $web->fontBtnTextRotor4 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                                <option value="Lucida Console" {{ $web->fontBtnTextRotor4 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                                <option value="Garamond" {{ $web->fontBtnTextRotor4 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                                <option value="Franklin Gothic Medium" {{ $web->fontBtnTextRotor4 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                                <option value="Copperplate" {{ $web->fontBtnTextRotor4 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                                <option value="Arial Narrow" {{ $web->fontBtnTextRotor4 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                                <option value="Rockwell" {{ $web->fontBtnTextRotor4 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                                <option value="Gill Sans" {{ $web->fontBtnTextRotor4 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                                <option value="Baskerville" {{ $web->fontBtnTextRotor4 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                                <option value="Cambria" {{ $web->fontBtnTextRotor4 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                                <option value="Geneva" {{ $web->fontBtnTextRotor4 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                                <option value="Century Schoolbook" {{ $web->fontBtnTextRotor4 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                                <option value="Avant Garde" {{ $web->fontBtnTextRotor4 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                                <option value="Didot" {{ $web->fontBtnTextRotor4 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                                <option value="Futura" {{ $web->fontBtnTextRotor4 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                                <option value="Brush Script MT" {{ $web->fontBtnTextRotor4 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                                <option value="Helvetica Neue" {{ $web->fontBtnTextRotor4 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                                <option value="Cursive" {{ $web->fontBtnTextRotor4 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                                <option value="Monaco" {{ $web->fontBtnTextRotor4 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                                <option value="Consolas" {{ $web->fontBtnTextRotor4 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                                <option value="Courier" {{ $web->fontBtnTextRotor4 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                                <option value="Bookman" {{ $web->fontBtnTextRotor4 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                                <option value="Cooper Black" {{ $web->fontBtnTextRotor4 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                                <option value="Impact" {{ $web->fontBtnTextRotor4 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Wide Latin" {{ $web->fontBtnTextRotor4 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                                <option value="Century" {{ $web->fontBtnTextRotor4 == 'Century' ? 'selected' : '' }}>Century</option>
                                                                <option value="Trebuchet" {{ $web->fontBtnTextRotor4 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                                <option value="Comic Sans" {{ $web->fontBtnTextRotor4 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                                <option value="Stencil" {{ $web->fontBtnTextRotor4 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                                <option value="Marker Felt" {{ $web->fontBtnTextRotor4 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                                <option value="Optima" {{ $web->fontBtnTextRotor4 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                                <option value="Gill Sans" {{ $web->fontBtnTextRotor4 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
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
                                                            <input type="color" name="backgroundBtnTextRotor4" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor4 ?? '#DE2423' }}" autocomplete="off">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="btnurl">URL del botón</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="btnUrlRotor4" name="btnUrlRotor4" value="{{$web->btnUrlRotor4}}" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info col-12" role="alert">
                                <i class="material-icons">info</i> Dejar sin imagen en caso de no querer utilizar esta sección.
                            </div>
                            <div class="slim col-12 mt-1"
                                data-button-edit-title="Editar"
                                data-button-remove-title="Borrar"
                                data-ratio="19:9"
                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                data-size="1920,930">
                                <input type="file" id="imageRotor4" name="imageRotor4"/>
                                @if($web->imageRotor4)
                                <img src="/assets/images/{{$web->imageRotor4}}" />
                                @endif
                            </div>
                            <!-- quinto slider -->
                            <div class="col-12 p-0 mt-4">
                                <hr>
                                <h4>Rotor 5</h4>  
                                <div class="form-container">
                                    <div class="row">
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group">
                                                <label for="pretitle">Pre-título imagen 1</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="pretitleRotor5" name="pretitleRotor5" value="{{$web->pretitleRotor5}}" maxlength="36" placeholder="Pre-title">
                                                    <div class="input-group-append" style="padding: 0px;">
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <input type="color" name="colorTitleRotor5" class="form-control input-in-text form-control-rounded" value="{{ $web->colorTitleRotor5 ?? '#333' }}" autocomplete="off">
                                                        </span>
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <select name="fontPretitleRotor5" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                                <option value="Arial" {{ $web->fontPretitleRotor5 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                                <option value="Helvetica" {{ $web->fontPretitleRotor5 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                                <option value="Times New Roman" {{ $web->fontPretitleRotor5 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                                <option value="Georgia" {{ $web->fontPretitleRotor5 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                                <option value="Courier New" {{ $web->fontPretitleRotor5 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                                <option value="Verdana" {{ $web->fontPretitleRotor5 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                                <option value="Tahoma" {{ $web->fontPretitleRotor5 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                                <option value="Trebuchet MS" {{ $web->fontPretitleRotor5 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                                <option value="Impact" {{ $web->fontPretitleRotor5 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Comic Sans MS" {{ $web->fontPretitleRotor5 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                                <option value="Arial Black" {{ $web->fontPretitleRotor5 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                                <option value="Lucida Sans Unicode" {{ $web->fontPretitleRotor5 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                                <option value="Palatino Linotype" {{ $web->fontPretitleRotor5 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                                <option value="Book Antiqua" {{ $web->fontPretitleRotor5 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                                <option value="Palatino" {{ $web->fontPretitleRotor5 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                                <option value="Century Gothic" {{ $web->fontPretitleRotor5 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                                <option value="Lucida Console" {{ $web->fontPretitleRotor5 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                                <option value="Garamond" {{ $web->fontPretitleRotor5 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                                <option value="Franklin Gothic Medium" {{ $web->fontPretitleRotor5 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                                <option value="Copperplate" {{ $web->fontPretitleRotor5 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                                <option value="Arial Narrow" {{ $web->fontPretitleRotor5 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                                <option value="Rockwell" {{ $web->fontPretitleRotor5 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                                <option value="Gill Sans" {{ $web->fontPretitleRotor5 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                                <option value="Baskerville" {{ $web->fontPretitleRotor5 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                                <option value="Cambria" {{ $web->fontPretitleRotor5 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                                <option value="Geneva" {{ $web->fontPretitleRotor5 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                                <option value="Century Schoolbook" {{ $web->fontPretitleRotor5 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                                <option value="Avant Garde" {{ $web->fontPretitleRotor5 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                                <option value="Didot" {{ $web->fontPretitleRotor5 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                                <option value="Futura" {{ $web->fontPretitleRotor5 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                                <option value="Brush Script MT" {{ $web->fontPretitleRotor5 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                                <option value="Helvetica Neue" {{ $web->fontPretitleRotor5 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                                <option value="Cursive" {{ $web->fontPretitleRotor5 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                                <option value="Monaco" {{ $web->fontPretitleRotor5 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                                <option value="Consolas" {{ $web->fontPretitleRotor5 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                                <option value="Courier" {{ $web->fontPretitleRotor5 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                                <option value="Bookman" {{ $web->fontPretitleRotor5 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                                <option value="Cooper Black" {{ $web->fontPretitleRotor5 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                                <option value="Impact" {{ $web->fontPretitleRotor5 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Wide Latin" {{ $web->fontPretitleRotor5 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                                <option value="Century" {{ $web->fontPretitleRotor5 == 'Century' ? 'selected' : '' }}>Century</option>
                                                                <option value="Trebuchet" {{ $web->fontPretitleRotor5 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                                <option value="Comic Sans" {{ $web->fontPretitleRotor5 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                                <option value="Stencil" {{ $web->fontPretitleRotor5 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                                <option value="Marker Felt" {{ $web->fontPretitleRotor5 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                                <option value="Optima" {{ $web->fontPretitleRotor5 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                                <option value="Gill Sans" {{ $web->fontPretitleRotor5 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
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
                                                    <input type="text" class="form-control" id="titleRotor5" name="titleRotor5" value="{{$web->titleRotor5}}" maxlength="36" placeholder="Title">
                                                    <div class="input-group-append" style="padding: 0px;">
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <input type="color"name="colorPretitleRotor5" class="form-control input-in-text form-control-rounded" value="{{ $web->colorPretitleRotor5 ?? '#333' }}" autocomplete="off">
                                                        </span>
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <select name="fontTitleRotor5" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                                <option value="Arial" {{ $web->fontTitleRotor5 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                                <option value="Helvetica" {{ $web->fontTitleRotor5 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                                <option value="Times New Roman" {{ $web->fontTitleRotor5 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                                <option value="Georgia" {{ $web->fontTitleRotor5 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                                <option value="Courier New" {{ $web->fontTitleRotor5 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                                <option value="Verdana" {{ $web->fontTitleRotor5 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                                <option value="Tahoma" {{ $web->fontTitleRotor5 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                                <option value="Trebuchet MS" {{ $web->fontTitleRotor5 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                                <option value="Impact" {{ $web->fontTitleRotor5 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Comic Sans MS" {{ $web->fontTitleRotor5 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                                <option value="Arial Black" {{ $web->fontTitleRotor5 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                                <option value="Lucida Sans Unicode" {{ $web->fontTitleRotor5 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                                <option value="Palatino Linotype" {{ $web->fontTitleRotor5 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                                <option value="Book Antiqua" {{ $web->fontTitleRotor5 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                                <option value="Palatino" {{ $web->fontTitleRotor5 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                                <option value="Century Gothic" {{ $web->fontTitleRotor5 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                                <option value="Lucida Console" {{ $web->fontTitleRotor5 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                                <option value="Garamond" {{ $web->fontTitleRotor5 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                                <option value="Franklin Gothic Medium" {{ $web->fontTitleRotor5 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                                <option value="Copperplate" {{ $web->fontTitleRotor5 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                                <option value="Arial Narrow" {{ $web->fontTitleRotor5 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                                <option value="Rockwell" {{ $web->fontTitleRotor5 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                                <option value="Gill Sans" {{ $web->fontTitleRotor5 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                                <option value="Baskerville" {{ $web->fontTitleRotor5 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                                <option value="Cambria" {{ $web->fontTitleRotor5 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                                <option value="Geneva" {{ $web->fontTitleRotor5 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                                <option value="Century Schoolbook" {{ $web->fontTitleRotor5 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                                <option value="Avant Garde" {{ $web->fontTitleRotor5 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                                <option value="Didot" {{ $web->fontTitleRotor5 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                                <option value="Futura" {{ $web->fontTitleRotor5 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                                <option value="Brush Script MT" {{ $web->fontTitleRotor5 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                                <option value="Helvetica Neue" {{ $web->fontTitleRotor5 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                                <option value="Cursive" {{ $web->fontTitleRotor5 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                                <option value="Monaco" {{ $web->fontTitleRotor5 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                                <option value="Consolas" {{ $web->fontTitleRotor5 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                                <option value="Courier" {{ $web->fontTitleRotor5 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                                <option value="Bookman" {{ $web->fontTitleRotor5 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                                <option value="Cooper Black" {{ $web->fontTitleRotor5 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                                <option value="Impact" {{ $web->fontTitleRotor5 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Wide Latin" {{ $web->fontTitleRotor5 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                                <option value="Century" {{ $web->fontTitleRotor5 == 'Century' ? 'selected' : '' }}>Century</option>
                                                                <option value="Trebuchet" {{ $web->fontTitleRotor5 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                                <option value="Comic Sans" {{ $web->fontTitleRotor5 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                                <option value="Stencil" {{ $web->fontTitleRotor5 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                                <option value="Marker Felt" {{ $web->fontTitleRotor5 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                                <option value="Optima" {{ $web->fontTitleRotor5 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                                <option value="Gill Sans" {{ $web->fontTitleRotor5 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check mr-4">
                                            <input type="radio" class="form-check-input" name="useBtnRotor5" value="1" id="conBoton5" autocomplete="off" @if ($web->useBtnRotor5 == 1) checked @endif>
                                            <label class="form-check-label" for="conBoton5">Con Botón</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="useBtnRotor5" value="0" id="sinBoton5" autocomplete="off" @if ($web->useBtnRotor5 == 0) checked @endif>
                                            <label class="form-check-label" for="sinBoton5">Sin Botón</label>
                                        </div>
                                    </div>
                                    <div class="form-group p-2" id="buttonFields5" style="@if($web->useBtnRotor5 == 0) display:none; @endif background: #e8e8e8;border-radius: 4px;">
                                        <div class="row">
                                            <div class="col-md-5 pr-0">
                                                <label for="btntext">Texto del botón</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="btnTextRotor5" name="btnTextRotor5" value="{{$web->btnTextRotor5}}" maxlength="22" placeholder="Texto del botón">
                                                    <div class="input-group-append" style="padding: 0px;">
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <input type="color" name="colorBtnTextRotor5" class="form-control input-in-text form-control-rounded" value="{{ $web->colorBtnTextRotor5 ?? '#FFFFFF' }}" autocomplete="off">
                                                        </span>
                                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                                            <select name="fontBtnTextRotor5" class="form-control form-control-rounded font-select"  style="max-width:90px;">
                                                                <option value="Arial" {{ $web->fontBtnTextRotor5 == 'Arial' ? 'selected' : '' }}>Arial</option>
                                                                <option value="Helvetica" {{ $web->fontBtnTextRotor5 == 'Helvetica' ? 'selected' : '' }}>Helvetica</option>
                                                                <option value="Times New Roman" {{ $web->fontBtnTextRotor5 == 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                                                <option value="Georgia" {{ $web->fontBtnTextRotor5 == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                                <option value="Courier New" {{ $web->fontBtnTextRotor5 == 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                                                <option value="Verdana" {{ $web->fontBtnTextRotor5 == 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                                                <option value="Tahoma" {{ $web->fontBtnTextRotor5 == 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                                                <option value="Trebuchet MS" {{ $web->fontBtnTextRotor5 == 'Trebuchet MS' ? 'selected' : '' }}>Trebuchet MS</option>
                                                                <option value="Impact" {{ $web->fontBtnTextRotor5 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Comic Sans MS" {{ $web->fontBtnTextRotor5 == 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                                                <option value="Arial Black" {{ $web->fontBtnTextRotor5 == 'Arial Black' ? 'selected' : '' }}>Arial Black</option>
                                                                <option value="Lucida Sans Unicode" {{ $web->fontBtnTextRotor5 == 'Lucida Sans Unicode' ? 'selected' : '' }}>Lucida Sans Unicode</option>
                                                                <option value="Palatino Linotype" {{ $web->fontBtnTextRotor5 == 'Palatino Linotype' ? 'selected' : '' }}>Palatino Linotype</option>
                                                                <option value="Book Antiqua" {{ $web->fontBtnTextRotor5 == 'Book Antiqua' ? 'selected' : '' }}>Book Antiqua</option>
                                                                <option value="Palatino" {{ $web->fontBtnTextRotor5 == 'Palatino' ? 'selected' : '' }}>Palatino</option>
                                                                <option value="Century Gothic" {{ $web->fontBtnTextRotor5 == 'Century Gothic' ? 'selected' : '' }}>Century Gothic</option>
                                                                <option value="Lucida Console" {{ $web->fontBtnTextRotor5 == 'Lucida Console' ? 'selected' : '' }}>Lucida Console</option>
                                                                <option value="Garamond" {{ $web->fontBtnTextRotor5 == 'Garamond' ? 'selected' : '' }}>Garamond</option>
                                                                <option value="Franklin Gothic Medium" {{ $web->fontBtnTextRotor5 == 'Franklin Gothic Medium' ? 'selected' : '' }}>Franklin Gothic Medium</option>
                                                                <option value="Copperplate" {{ $web->fontBtnTextRotor5 == 'Copperplate' ? 'selected' : '' }}>Copperplate</option>
                                                                <option value="Arial Narrow" {{ $web->fontBtnTextRotor5 == 'Arial Narrow' ? 'selected' : '' }}>Arial Narrow</option>
                                                                <option value="Rockwell" {{ $web->fontBtnTextRotor5 == 'Rockwell' ? 'selected' : '' }}>Rockwell</option>
                                                                <option value="Gill Sans" {{ $web->fontBtnTextRotor5 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>
                                                                <option value="Baskerville" {{ $web->fontBtnTextRotor5 == 'Baskerville' ? 'selected' : '' }}>Baskerville</option>
                                                                <option value="Cambria" {{ $web->fontBtnTextRotor5 == 'Cambria' ? 'selected' : '' }}>Cambria</option>
                                                                <option value="Geneva" {{ $web->fontBtnTextRotor5 == 'Geneva' ? 'selected' : '' }}>Geneva</option>
                                                                <option value="Century Schoolbook" {{ $web->fontBtnTextRotor5 == 'Century Schoolbook' ? 'selected' : '' }}>Century Schoolbook</option>
                                                                <option value="Avant Garde" {{ $web->fontBtnTextRotor5 == 'Avant Garde' ? 'selected' : '' }}>Avant Garde</option>
                                                                <option value="Didot" {{ $web->fontBtnTextRotor5 == 'Didot' ? 'selected' : '' }}>Didot</option>
                                                                <option value="Futura" {{ $web->fontBtnTextRotor5 == 'Futura' ? 'selected' : '' }}>Futura</option>
                                                                <option value="Brush Script MT" {{ $web->fontBtnTextRotor5 == 'Brush Script MT' ? 'selected' : '' }}>Brush Script MT</option>
                                                                <option value="Helvetica Neue" {{ $web->fontBtnTextRotor5 == 'Helvetica Neue' ? 'selected' : '' }}>Helvetica Neue</option>
                                                                <option value="Cursive" {{ $web->fontBtnTextRotor5 == 'Cursive' ? 'selected' : '' }}>Cursive</option>
                                                                <option value="Monaco" {{ $web->fontBtnTextRotor5 == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                                <option value="Consolas" {{ $web->fontBtnTextRotor5 == 'Consolas' ? 'selected' : '' }}>Consolas</option>
                                                                <option value="Courier" {{ $web->fontBtnTextRotor5 == 'Courier' ? 'selected' : '' }}>Courier</option>
                                                                <option value="Bookman" {{ $web->fontBtnTextRotor5 == 'Bookman' ? 'selected' : '' }}>Bookman</option>
                                                                <option value="Cooper Black" {{ $web->fontBtnTextRotor5 == 'Cooper Black' ? 'selected' : '' }}>Cooper Black</option>
                                                                <option value="Impact" {{ $web->fontBtnTextRotor5 == 'Impact' ? 'selected' : '' }}>Impact</option>
                                                                <option value="Wide Latin" {{ $web->fontBtnTextRotor5 == 'Wide Latin' ? 'selected' : '' }}>Wide Latin</option>
                                                                <option value="Century" {{ $web->fontBtnTextRotor5 == 'Century' ? 'selected' : '' }}>Century</option>
                                                                <option value="Trebuchet" {{ $web->fontBtnTextRotor5 == 'Trebuchet' ? 'selected' : '' }}>Trebuchet</option>
                                                                <option value="Comic Sans" {{ $web->fontBtnTextRotor5 == 'Comic Sans' ? 'selected' : '' }}>Comic Sans</option>
                                                                <option value="Stencil" {{ $web->fontBtnTextRotor5 == 'Stencil' ? 'selected' : '' }}>Stencil</option>
                                                                <option value="Marker Felt" {{ $web->fontBtnTextRotor5 == 'Marker Felt' ? 'selected' : '' }}>Marker Felt</option>
                                                                <option value="Optima" {{ $web->fontBtnTextRotor5 == 'Optima' ? 'selected' : '' }}>Optima</option>
                                                                <option value="Gill Sans" {{ $web->fontBtnTextRotor5 == 'Gill Sans' ? 'selected' : '' }}>Gill Sans</option>y
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
                                                            <input type="color" name="backgroundBtnTextRotor5" class="form-control input-in-text form-control-rounded" value="{{ $web->backgroundBtnTextRotor5 ?? '#DE2423' }}" autocomplete="off">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="btnurl">URL del botón</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="btnUrlRotor5" name="btnUrlRotor5" value="{{$web->btnUrlRotor5}}" maxlength="255" placeholder="ej: mitienda.com/destacados">
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info col-12" role="alert">
                                <i class="material-icons">info</i> Dejar sin imagen en caso de no querer utilizar esta sección.
                            </div>
                            <div class="slim col-12 mt-1"
                                data-button-edit-title="Editar"
                                data-button-remove-title="Borrar"
                                data-ratio="19:9"
                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i></p>"
                                data-size="1920,930">
                                <input type="file" id="imageRotor5" name="imageRotor5"/>
                                @if($web->imageRotor5)
                                <img src="/assets/images/{{$web->imageRotor5}}" />
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
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Datos Web</h6>
                </div>
                <div class="card-body d-flex flex-column">
                    <form action="{{ route('saveData') }}" method="POST" class="quick-post-form php-email-form">
                        <div class="form-group pb-5 border-bottom">
                            <h6>Logo web</h6>
                            <div class="py-4" style="background:#eee;">
                            <div class="slim"
                                data-button-edit-title="Editar"
                                data-button-remove-title="Borrar"
                                data-ratio="10:2"
                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                                data-size="330,60">
                                @if($web->imageLogo)
                                <img src="/assets/images/{{$web->imageLogo}}" />
                                @endif
                                <input type="file" name="imageLogo" />
                            </div>
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
                        <div class="form-group border-bottom" style="height: 185px;">
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

                        <h6>Datos de contacto</h6>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" name="email" value="{{$web->email}}" class="form-control" maxlength="64" autocomplete="off">
                        </div>
                        <!-- Address -->
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <textarea name="address" class="form-control" rows="3" maxlength="255" autocomplete="off">{{$web->address}}</textarea>
                        </div>

                        <!-- Cell Phone -->
                        <div class="form-group">
                            <label for="cel">Cel - WhatsApp:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="countryCode" class="form-control" autocomplete="off">
                                        <option value="+54" {{ $web->countryCode == '+54' ? 'selected' : '' }}>Argentina (+54)</option>
                                        <option value="+56" {{ $web->countryCode == '+56' ? 'selected' : '' }}>Chile (+56)</option>
                                        <option value="+57" {{ $web->countryCode == '+57' ? 'selected' : '' }}>Colombia (+57)</option>
                                        <option value="+52" {{ $web->countryCode == '+52' ? 'selected' : '' }}>Mexico (+52)</option>
                                        <option value="+51" {{ $web->countryCode == '+51' ? 'selected' : '' }}>Peru (+51)</option>
                                        <option value="+507" {{ $web->countryCode == '+507' ? 'selected' : '' }}>Panama (+507)</option>
                                        <option value="+34" {{ $web->countryCode == '+34' ? 'selected' : '' }}>España (+34)</option>
                                        <option value="+598" {{ $web->countryCode == '+598' ? 'selected' : '' }}>Uruguay (+598)</option>
                                        <option value="+1" {{ $web->countryCode == '+1' ? 'selected' : '' }}>USA (+1)</option>
                                    </select>
                                </div>
                                <input type="text" id="cel" name="cel" value="{{ $web->cel }}" class="form-control" maxlength="20" pattern="[0-9]*" autocomplete="off">
                            </div>
                        </div>

                        <!-- Facebook -->
                        <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text" name="facebook" value="{{$web->facebook}}" class="form-control" maxlength="255" autocomplete="off">
                        </div>

                        <!-- Instagram -->
                        <div class="form-group">
                            <label for="instagram">Instagram:</label>
                            <input type="text" name="instagram" value="{{$web->instagram}}" class="form-control" maxlength="255" autocomplete="off">
                        </div>

                        <!-- Google -->
                        <div class="form-group">
                            <label for="google">Google:</label>
                            <input type="text" name="google" value="{{$web->google}}" class="form-control" maxlength="255" autocomplete="off">
                        </div>

                        <!-- TikTok -->
                        <div class="form-group">
                            <label for="tiktok">TikTok:</label>
                            <input type="text" name="tiktok" value="{{$web->tiktok}}" class="form-control" maxlength="255" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <h6>Imágen página contacto</h6>
                            <div class="py-5" style="background:#eee;">
                            <div class="slim"
                                data-button-edit-title="Editar"
                                data-button-remove-title="Borrar"
                                data-ratio="19:3"
                                data-label="<p><i class='material-icons touch' style='font-size:40px;'>touch_app</i><p>Cambiar Imágen</p></p>"
                                data-size="1920,240">
                                @if($web->imageContact)
                                <img src="/assets/images/{{$web->imageContact}}" />
                                @endif
                                <input type="file" name="imageContact" />
                            </div>
                            </div>
                        </div>

                        <div class="pt-2 px-0 col-12">
                            <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
            </div>
            <div class="card card-small mt-3">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Filtros de productos</h6>
                </div>
                <div class="card-body d-flex flex-column">
                    <!-- filtros -->
                    <form action="{{ route('saveData') }}" method="POST" class="quick-post-form php-email-form">
                        <!-- <h6 class="pt-3 pb-4">Configuración de Filtros</h6> -->
                            <!-- Colores -->
                        <div class="pt-2  pb-4 border-bottom">
                            <h6>Filtro Precios:</h6>
                            <div class="form-group">
                                <div class="form-check mr-4">
                                    <input type="radio" class="form-check-input" name="useFilterPrices" value="1" id="conPrecios" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                    <label class="form-check-label" for="conPrecios">Usar filtro</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="useFilterPrices" value="0" id="sinPrecios" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                    <label class="form-check-label" for="sinPrecios">No usar</label>
                                </div>
                            </div>
                            <div class="form-group p-2" id="seccionFilterPrecios" style="background: #eee;border-radius: 4px;">
                                <!-- Checkbox para cada color -->
                                @php
                                    $selectedPrices = json_decode($web->filtersPrices); // Convierte la cadena JSON en un array
                                @endphp
                                
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio1" name="filtersPrices[]" value="$0 - $50" {{ in_array("$0 - $50", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio1">$0 - $50</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio2" name="filtersPrices[]" value="$50 - $100" {{ in_array("$50 - $100", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio2">$50 - $100</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio3" name="filtersPrices[]" value="$100 - $200" {{ in_array("$100 - $200", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio3">$100 - $200</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio4" name="filtersPrices[]" value="$200 - $400" {{ in_array("$200 - $400", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio4">$200 - $400</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio5" name="filtersPrices[]" value="$400 - $500" {{ in_array("$400 - $500", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio5">$400 - $500</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio6" name="filtersPrices[]" value="$500 - $750" {{ in_array("$500 - $750", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio6">$500 - $750</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio7" name="filtersPrices[]" value="$750 - $1.000" {{ in_array("$750 - $1.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio7">$750 - $1.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio8" name="filtersPrices[]" value="$1.000 - $1.500" {{ in_array("$1.000 - $1.500", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio8">$1.000 - $1.500</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio9" name="filtersPrices[]" value="$1.500 - $2.000" {{ in_array("$1.500 - $2.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio9">$1.500 - $2.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio10" name="filtersPrices[]" value="$2.000 - $4.000" {{ in_array("$2.000 - $4.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio10">$2.000 - $4.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio11" name="filtersPrices[]" value="$4.000 - $5.000" {{ in_array("$4.000 - $5.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio11">$4.000 - $5.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio12" name="filtersPrices[]" value="$5.000 - $7.500" {{ in_array("$5.000 - $7.500", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio12">$5.000 - $7.500</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio13" name="filtersPrices[]" value="$7.500 - $10.000" {{ in_array("$7.500 - $10.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio13">$7.500 - $10.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio14" name="filtersPrices[]" value="$10.000 - $15.000" {{ in_array("$10.000 - $15.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio14">$10.000 - $15.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio15" name="filtersPrices[]" value="$15.000 - $20.000" {{ in_array("$15.000 - $20.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio15">$15.000 - $20.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio16" name="filtersPrices[]" value="$20.000 - $50.000" {{ in_array("$20.000 - $50.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio16">$20.000 - $50.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio17" name="filtersPrices[]" value="$50.000 - $75.000" {{ in_array("$50.000 - $75.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio17">$50.000 - $75.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio18" name="filtersPrices[]" value="$75.000 - $100.000" {{ in_array("$75.000 - $100.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio18">$75.000 - $100.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio19" name="filtersPrices[]" value="$100.000 - $150.000" {{ in_array("$100.000 - $150.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio19">$100.000 - $150.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio20" name="filtersPrices[]" value="$150.000 - $300.000" {{ in_array("$150.000 - $300.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio20">$150.000 - $300.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio21" name="filtersPrices[]" value="$300.000 - $500.000" {{ in_array("$300.000 - $500.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio21">$300.000 - $500.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio22" name="filtersPrices[]" value="$500.000 - $750.000" {{ in_array("$500.000 - $750.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio22">$500.000 - $750.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio23" name="filtersPrices[]" value="$750.000 - $1.000.000" {{ in_array("$750.000 - $1.000.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio23">$750.000 - $1.000.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio24" name="filtersPrices[]" value="$1.000.000 - $1.400.000" {{ in_array("$1.000.000 - $1.400.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio24">$1.000.000 - $1.400.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio25" name="filtersPrices[]" value="$1.500.000 - $2.000.000" {{ in_array("$1.500.000 - $2.000.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio25">$1.500.000 - $2.000.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio26" name="filtersPrices[]" value="$2.000.000 - $5.000.000" {{ in_array("$2.000.000 - $5.000.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio26">$2.000.000 - $5.000.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="precio27" name="filtersPrices[]" value="$5.000.000 - $10.000.000" {{ in_array("$5.000.000 - $10.000.000", $selectedPrices) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="precio27">$5.000.000 - $10.000.000</label>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 pb-4 border-bottom">
                            <h6>Filtro Kilos:</h6>
                            <div class="form-group">
                                <div class="form-check mr-4">
                                    <input type="radio" class="form-check-input" name="useFilterKilos" value="1" id="conKilos" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                    <label class="form-check-label" for="conKilos">Usar filtro</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="useFilterKilos" value="0" id="sinKilos" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                    <label class="form-check-label" for="sinKilos">No usar</label>
                                </div>
                            </div>
                            <div class="form-group p-2" id="seccionFilterKilos" style="background: #eee;border-radius: 4px;">
                                <!-- Checkbox para cada color -->
                                @php
                                    $selectedKilos = json_decode($web->filtersKilos); // Convierte la cadena JSON en un array
                                @endphp
                                
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo1" name="filtersKilos[]" value="5 kilos" {{ in_array("5 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo1">5 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo2" name="filtersKilos[]" value="10 kilos" {{ in_array("10 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo2">10 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo3" name="filtersKilos[]" value="15 kilos" {{ in_array("15 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo3">15 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo4" name="filtersKilos[]" value="20 kilos" {{ in_array("20 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo4">20 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo5" name="filtersKilos[]" value="25 kilos" {{ in_array("25 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo5">25 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo6" name="filtersKilos[]" value="30 kilos" {{ in_array("30 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo6">30 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo7" name="filtersKilos[]" value="35 kilos" {{ in_array("35 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo7">35 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo8" name="filtersKilos[]" value="40 kilos" {{ in_array("40 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo8">40 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo9" name="filtersKilos[]" value="45 kilos" {{ in_array("45 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo9">45 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo10" name="filtersKilos[]" value="50 kilos" {{ in_array("50 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo10">50 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo11" name="filtersKilos[]" value="55 kilos" {{ in_array("55 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo11">55 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo12" name="filtersKilos[]" value="60 kilos" {{ in_array("60 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo12">60 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo13" name="filtersKilos[]" value="65 kilos" {{ in_array("65 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo13">65 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo14" name="filtersKilos[]" value="70 kilos" {{ in_array("70 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo14">70 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo15" name="filtersKilos[]" value="75 kilos" {{ in_array("75 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo15">75 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo16" name="filtersKilos[]" value="80 kilos" {{ in_array("80 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo16">80 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo17" name="filtersKilos[]" value="85 kilos" {{ in_array("85 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo17">85 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo18" name="filtersKilos[]" value="90 kilos" {{ in_array("90 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo18">90 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo19" name="filtersKilos[]" value="95 kilos" {{ in_array("95 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo19">95 kilos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kilo20" name="filtersKilos[]" value="100 kilos" {{ in_array("100 kilos", $selectedKilos) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kilo20">100 kilos</label>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 pb-4 border-bottom">
                            <h6>Filtro Colores:</h6>
                            <div class="form-group">
                                <div class="form-check mr-4">
                                    <input type="radio" class="form-check-input" name="useFilterColors" value="1" id="conColor" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                    <label class="form-check-label" for="conColor">Usar filtro</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="useFilterColors" value="0" id="sinColor" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                    <label class="form-check-label" for="sinColor">No usar</label>
                                </div>
                            </div>
                            <div class="form-group p-2" id="seccionFilterColor" style="background: #eee;border-radius: 4px;">
                                <!-- Checkbox para cada color -->
                                @php
                                    $selectedColors = json_decode($web->filtersColors); // Convierte la cadena JSON en un array
                                @endphp
                                
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color1" name="filtersColors[]" value="Negro" {{ in_array("Negro", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color1">Negro</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color2" name="filtersColors[]" value="Azul" {{ in_array("Azul", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color2">Azul</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color3" name="filtersColors[]" value="Gris" {{ in_array("Gris", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color3">Gris</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color4" name="filtersColors[]" value="Verde" {{ in_array("Verde", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color4">Verde</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color5" name="filtersColors[]" value="Rojo" {{ in_array("Rojo", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color5">Rojo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color6" name="filtersColors[]" value="Blanco" {{ in_array("Blanco", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color6">Blanco</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color7" name="filtersColors[]" value="Amarillo" {{ in_array("Amarillo", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color7">Amarillo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color8" name="filtersColors[]" value="Naranja" {{ in_array("Naranja", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color8">Naranja</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color9" name="filtersColors[]" value="Rosa" {{ in_array("Rosa", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color9">Rosa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color10" name="filtersColors[]" value="Marrón" {{ in_array("Marrón", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color10">Marrón</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color11" name="filtersColors[]" value="Celeste" {{ in_array("Celeste", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color11">Celeste</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color12" name="filtersColors[]" value="Dorado" {{ in_array("Dorado", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color12">Dorado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color13" name="filtersColors[]" value="Plateado" {{ in_array("Plateado", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color13">Plateado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color14" name="filtersColors[]" value="Lila" {{ in_array("Lila", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color14">Lila</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color15" name="filtersColors[]" value="Violeta" {{ in_array("Violeta", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color15">Violeta</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color16" name="filtersColors[]" value="Turquesa" {{ in_array("Turquesa", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color16">Turquesa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color17" name="filtersColors[]" value="Aguamarina" {{ in_array("Aguamarina", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color17">Aguamarina</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color18" name="filtersColors[]" value="Crema" {{ in_array("Crema", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color18">Crema</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color19" name="filtersColors[]" value="Fucsia" {{ in_array("Fucsia", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color19">Fucsia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="color20" name="filtersColors[]" value="Oliva" {{ in_array("Oliva", $selectedColors) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color20">Oliva</label>
                                </div>
                            </div>

                        </div>
                        <div class="pt-4 pb-4 border-bottom">
                            <h6>Filtro Talles:</h6>
                            <div class="form-group">
                                <div class="form-check mr-4">
                                    <input type="radio" class="form-check-input" name="useFilterSizes" value="1" id="conTalle" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                    <label class="form-check-label" for="conTalle">Usar filtro</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="useFilterSizes" value="0" id="sinTalle" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                    <label class="form-check-label" for="sinTalle">No usar</label>
                                </div>
                            </div>
                            <div class="form-group p-2" id="seccionFilterTalle" style="background: #eee;border-radius: 4px;">
                                <!-- Checkbox para cada tamaño -->
                                @php
                                    $selectedSizes = json_decode($web->filtersSizes); // Convierte la cadena JSON en un array
                                @endphp
                                
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="xs" name="filtersSizes[]" value="XS" {{ in_array("XS", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="xs">XS</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="s" name="filtersSizes[]" value="S" {{ in_array("S", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="s">S</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="m" name="filtersSizes[]" value="M" {{ in_array("M", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="m">M</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="l" name="filtersSizes[]" value="L" {{ in_array("L", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="l">L</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="xl" name="filtersSizes[]" value="XL" {{ in_array("XL", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="xl">XL</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="xxl" name="filtersSizes[]" value="XXL" {{ in_array("XXL", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="xxl">XXL</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="xxxl" name="filtersSizes[]" value="XXXL" {{ in_array("XXXL", $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="xxxl">XXXL</label>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 pb-4">
                            <h6>Filtro Tags:</h6>
                            <div class="form-group">
                                <div class="form-check mr-4">
                                    <input type="radio" class="form-check-input" name="useFilterTags" value="1" id="conTags" autocomplete="off" @if ($web->useBtnRotor1 == 1) checked @endif>
                                    <label class="form-check-label" for="conTags">Usar filtro</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="useFilterTags" value="0" id="sinTags" autocomplete="off" @if ($web->useBtnRotor1 == 0) checked @endif>
                                    <label class="form-check-label" for="sinTags">No usar</label>
                                </div>
                            </div>
                            <div class="form-group p-2" id="seccionFilterTags" style="background: #eee;border-radius: 4px;">
                                <!-- Checkbox para cada color -->
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" id="btnAddTag" name="btnAddTag" value="" placeholder="nombre del tag..." maxlength="22">
                                    <div class="input-group-append" style="padding: 0px;">
                                        <span class="input-group-text p-0" style="border-radius: 4px;">
                                            <!-- Agregar un botón con un identificador para agregar tags -->
                                            <button type="button" class="btn btn-primary" id="agregarTagBtn">Agregar Tag</button>
                                        </span>
                                    </div>
                                </div>
                                @if($web->filtersTags )
                                    @php
                                        $tagsRanges = json_decode($web->filtersTags);
                                    @endphp
                                    @if(!empty($tagsRanges) && is_array($tagsRanges))
                                    @foreach($tagsRanges as $tag)
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="{{$tag}}" name="filtersTags[]" value="{{$tag}}">
                                        <label class="form-check-label" for="{{$tag}}">{{$tag}}</label>
                                    </div>
                                    @endforeach
                                    @endif
								@endif
                            </div>
                        </div>
                        <div class="py-2 px-0 col-12">
                            <button type="submit" class="btn btn-accent btn-block">Guardar</button>
                        </div>
                    </form>
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
    // Espera a que el documento esté listo
    $(document).ready(function () {
        $("#agregarTagBtn").click(function () {
            var nuevoTagName = $("#btnAddTag").val();
            // Crea un nuevo elemento de checkbox y etiqueta
            if(nuevoTagName !=''){
                var nuevoTag = '<div class="form-check mt-1">' +
                    '<input type="checkbox" class="form-check-input" id="nuevoTag" name="filtersTags[]" value="' + nuevoTagName + '">' +
                    '<label class="form-check-label" for="nuevoTag">' + nuevoTagName + '</label>' +
                    '</div>';
                $("#seccionFilterTags").append(nuevoTag);
            }
            $("#btnAddTag").val("");
        });
    });
</script>
<script>
    $(document).ready(function() {
        //solo numeros
        $('#cel').on('input', function() {
            // Remove non-numeric characters using jQuery
            $(this).val(function(index, value) {
                return value.replace(/\D/g, '');
            });
        });
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
        $('input[name="useBtnRotor4"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields4').show();
            } else {
                $('#buttonFields4').hide();
            }
        });
        $('input[name="useBtnRotor5"]').change(function() {
            if ($(this).val() === "1") {
                $('#buttonFields5').show();
            } else {
                $('#buttonFields5').hide();
            }
        });
        $('input[name="useFilterColors"]').change(function() {
            if ($(this).val() === "1") {
                $('#seccionFilterColor').show();
            } else {
                $('#seccionFilterColor').hide();
            }
        });
        $('input[name="useFilterPrices"]').change(function() {
            if ($(this).val() === "1") {
                $('#seccionFilterPrecios').show();
            } else {
                $('#seccionFilterPrecios').hide();
            }
        });
        $('input[name="useFilterKilos"]').change(function() {
            if ($(this).val() === "1") {
                $('#seccionFilterKilos').show();
            } else {
                $('#seccionFilterKilos').hide();
            }
        });
        $('input[name="useFilterTags"]').change(function() {
            if ($(this).val() === "1") {
                $('#seccionFilterTags').show();
            } else {
                $('#seccionFilterTags').hide();
            }
        });
        $('input[name="useFilterSizes"]').change(function() {
            if ($(this).val() === "1") {
                $('#seccionFilterTalle').show();
            } else {
                $('#seccionFilterTalle').hide();
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