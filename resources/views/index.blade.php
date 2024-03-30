@extends('layouts.app')

@section('content')

<!--Block 01: Main slide-->
@include('layouts.blocks.main_slide')

<!--Block 02: Banner-->
@include('layouts.blocks.banner')

<!--Block 03: Product Tab-->
@include('layouts.blocks.product_tab')

<!--Block 04: Banner Promotion 01 -->
@include('layouts.blocks.banner_promotion_01')

<!--Block 05: Banner Promotion 02-->
@include('layouts.blocks.banner_promotion_02')

<!--Block 06: Products-->
@include('layouts.blocks.products')

<!--Block 07: Brands-->
@include('layouts.blocks.brands')

@endsection