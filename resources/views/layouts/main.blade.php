<!DOCTYPE html>
<html lang="en">
@include("includes.head")

<body class="goto-here">
	@include("includes.header")
	@include("includes.navbar")

	
	@include("includes.breadcrumb")
	@yield("content")

	@include("includes.footer")

</body>

</html>