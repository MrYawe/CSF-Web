@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">A propos</div>
				<div class="panel-body">
					<h4>Les outils</h4>
					<ul>
						<li><strong>Framework Laravel 5.0</strong> : afin d'apporter une organisation à ce projet, des composants et bibliothèques réutilisables (ex: le template Blade) et de faciliter la mise en place du site.</li>
						<li><strong>Bootstrap</strong> : pour son responsive design, sa capacité à fonctionner homogènement sur tous les navigateurs et pour ces fonctionnalités embarquées prêtes à l'usage.</li>
					</ul>

					<h4>L'équipe</h4>
					<ul>
						<li>Arnaud Steinmetz</li>
						<li>Brice Miclo</li>
						<li>Gaëtan Lickel</li>
						<li>Jean-Marcellin Truong</li>
						<li>Jonathan Eritzian</li>
						<li>Yannis Weishaupt</li>
					</ul>
					<p><strong>Comic Sans Fluffy</strong> est une équipe appartenant à l'IUT Robert Schuman à Illkirch (Strasbourg) et rendant hommage à Fluffy, la licorne emblèmatique des 24h des IUT Info 2014.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection