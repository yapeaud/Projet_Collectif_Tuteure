@extends('base')

@section('title')
Connexion
@endsection

@section('content')
<main class="container mt-5">
    <section class="row justify-content-center">
        <article class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Connexion</h1>
                </div>
                <div class="card-body">
                    <!-- Le formulaire commence ici -->
                    <form method="post" action="{{ route('traitementConnexion') }}">

                        @if (session()->has('successAdd'))
                        <div class="alert alert-success mb-4">
                            <h4>{{ session()->get('successAdd') }}</h4>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                            @endforeach
                        </div>
                        @endif
                        @if (session()->has('successDelete'))
                        <div class="alert alert-success mb-4">
                            <h4>{{ session()->get('successDelete') }}</h4>
                        </div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" placeholder="Entrez votre email"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe :</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Entrez votre mot de passe" name="mdp">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Se connecter" />
                    </form>
                    <!-- Fin du formulaire -->
                </div>
            </div>
        </article>
    </section>
</main>
@endsection