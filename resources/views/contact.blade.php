@extends('layouts.master')
@section('title')
    Контакти
@endsection

@section('content')
    <div id="SideDate">
        <p>27.09-02.10</p>
    </div>
    <div  class="col-lg-1">
        <p id="SuzIstoria">Създаваме история</p>
        <p id="purvoMezdunarodno">Първото международно биенале в България</p>
    </div>

    <div id="contentInfo" class="FirstTable">
        <h1 id="Title1">Контакти</h1><br>
        <div>
            <p>
                Международно биенале на стъклото<br>
                София 1000, България<br>
                ул. Номередно 12<br>
            </p>
        </div>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                <tr>
                    <td>Александра Велева</td>
                    <td>alex.kotseva@gmail.com</td>
                </tr>
                <tr>
                    <td>кординатор</td>
                    <td>+359 887 288 667</td>
                <tr>
                <tr>
                    <td>София-Хара Хадзопулу</td>
                    <td>sofia.hadzopoulu@gmail.com</td>
                </tr>
                <tr>
                    <td>кординатор</td>
                    <td>+359 887 288 667</td>
                <tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-8 col-md-offset-8" id="contact">
        <h2 id="Title2" class="col-md-offset-4" >Контактна Форма</h2>
        <form method="POST" action="{{ URL::to('/apply') }}" class="form-horizontal"><br><br>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Име и фамилия*" value="{{ Request::old('name') }}">
                </div>
            </div>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ Request::old('email') }}">
                </div>
            </div>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" id="title" name="Title" placeholder="Заглавие*" value="{{ Request::old('englishTitle') }}">
                </div>
            </div>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <textarea class="form-control" id="Message" name="Message" cols="25" rows="5" placeholder="Съобщение*"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-7" id="submitButton">
                    <button type="submit">Изпрати&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>

@endsection