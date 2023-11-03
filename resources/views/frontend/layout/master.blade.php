<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	{!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset("css/bootstrap.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset("css/custom.css") }}">

</head>
<body>
			@includeif("frontend.layout.header")
			@yield("content")
	 	 </div>
		</main>
	</div>

	<script src="{{ URL::asset("js/jquery.min.js") }}" type="text/javascript"></script>
	<script src="{{ URL::asset("js/popper.min.js") }}" type="text/javascript"></script>
	<script src="{{ URL::asset("js/bootstrap.min.js") }}" type="text/javascript"></script>

</body>
</html>