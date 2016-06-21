<html>

<body>
<h1>List of categories</h1>


<div>
    @foreach ($categoryList as $category)
     {{$category->title}}

    @endforeach


</div>

</body>

</html>