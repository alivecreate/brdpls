@extends('front.layout.ganesh-festival-layout')


@section('custom-head')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection

@section('content')

@section('custom-script')
@if (session('error'))

<script>
toastr.error('{{ session('error') }}');
</script>
@endif

@if (session('success'))
<script>
toastr.success('{{ session('success') }}');
</script>
@endif

@endsection


<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10" id="js-oversized">


        @include('front.ext.nav-mobile-menu')

        <div class="flex-1 px-6">

        <h1 class="text-success payment-success" >
        <span>Hello {{$user->first_name}} {{$user->last_name}},</span>  <br>  
        Payment Received Successfull.</h1>

        </div>

        
        @include('front.pages.ganesh.competition.sidebar')
        
    </div>

</main>



</div>
</div>
</div>



@include('front.widget.product-modal-block')


@endsection