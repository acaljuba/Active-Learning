@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h3>About Us</h3></div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod est non risus consectetur varius ut at sem. Aenean eu leo bibendum, placerat lorem quis, molestie mauris. Suspendisse scelerisque, mauris eu ullamcorper dignissim, libero libero sollicitudin enim, id convallis ex dolor eu lectus. Phasellus in orci turpis. Praesent in posuere neque. Integer vehicula enim eu turpis pharetra, vitae imperdiet ex molestie. Aenean egestas dolor velit, fermentum mollis orci laoreet varius. Etiam sed mollis risus, volutpat tempor mi. Maecenas ut consequat risus. Duis a semper sapien, et cursus dolor.</p>

        <p>Donec maximus ex ac ultricies porta. Maecenas vitae ullamcorper risus, ac sagittis libero. Duis cursus leo at dolor posuere sagittis. Integer dapibus ultrices gravida. Nam sed consectetur ligula. Nulla metus urna, porta sed pharetra vitae, dapibus non leo. Pellentesque in turpis luctus sem condimentum dictum. Phasellus quis semper augue. Aenean fringilla sit amet dolor et lacinia. Donec mattis, enim et commodo accumsan, nulla neque laoreet augue, non venenatis nulla risus nec sem. Aenean faucibus bibendum nulla vitae molestie. Praesent nunc nisl, vulputate sit amet sodales vitae, dapibus vitae mauris. In vitae fringilla leo. Donec metus massa, lacinia eget nulla id, placerat blandit nulla. Sed justo felis, mollis quis dui nec, mollis viverra lorem. Vivamus ex dui, posuere eu rhoncus in, ullamcorper sed nisl.</p>

        <p>Integer dapibus dictum eros sit amet luctus. Nam nulla elit, condimentum non nisl eget, tincidunt sodales dui. Nam efficitur lacus quam, at fermentum risus suscipit vel. Nulla mattis dolor in erat mattis viverra. Cras arcu nisl, finibus eu sem eu, ultrices accumsan turpis. Nulla at ipsum et quam molestie blandit. Maecenas cursus nisl non nulla cursus, ac scelerisque nulla tempus. Morbi efficitur eros consectetur, cursus est eu, dapibus nisi.</p>
    </div>
</div>
@endsection