@extends('layouts.master')
@section('title')
    Контакти
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 SideDate">
                    <p>27.09-02.10</p>
                </div>
            </div>
        </div>
        <div  class="container">
            <div class="row">
                <div class="col-sm-1">
                    <p id="SuzIstoria">Създаваме<br>история</p>
                    <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
                </div>
            </div>
        </div>


        <div id="contentInfo" class="container-fluid">
        <h1 id="Title1">Контакти</h1><br>
        <div id="contactText">
            <p>
                Международно биенале на стъклото<br>
                София 1000, България<br>
                ул. Номередно 12<br>
            </p>
            <p>
                <a id="emailCordinator">glassbiennalebg@gmail.com</a>
            </p>
            <span id="nameForContact">Александра Велева</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a id="emailCordinator">alex.kotseva@gmail.com</a></span>
            <span id="cordinator">координатор</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="telefonCordinator">+359 887 288 667</span><br>
            <span id="nameForContact">София-Хара Хадзопулу</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a id="emailCordinator">sofia.hadzopoulu@gmail.com</a></span><br>
            <span id="cordinator">координатор</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="telefonCordinator">+359 887 288 667</span><br>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-6 container-fluid" id="contact">
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
                    <button type="submit" class="contactButon">Изпрати&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>

    <!-- TODO Validations for contact Form--->

@endsection
