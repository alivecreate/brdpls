@extends('front.layout.ganesh-festival-layout')

@section('content')


<!-- main contents -->

<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">

@include('front.ext.nav-mobile-menu')
        <div class="px-6">
        <h1 class="heading-rules-title"><ion-icon name="alert-circle" class="text-2xl mr-1" ></ion-icon> ગણેશ સ્પર્ધાના નિયમો:</h1>

            <div class="w-full lg:flex">
               
            <div class="w-full clear">
                <h2 class="heading-rules">1). શ્રેષ્ઠ મૂર્તિ અને ડેકોરેશન (ફ્ક્ત મંડળ માટે):</h2>
                <ul class="list">
                <li>મંડળનું રજિસ્ટ્રેશન ફરજિયાત છે.</li>
                    <li>સ્પર્ધા માટેનું વોટિંગ સંપૂર્ણપણે ઑનલાઇન વેબસાઈટ મારફતે થશે.</li>
                    <li>બંને કેટેગરીમાં અલગ વિજેતા જાહેર કરવામાં આવશે.</li>
                    <li>દરેક કેટેગરીમાં યુસર ફ્ક્ત 1 મંડળને 1 વોટ કરી શક્સે.</li>
                    <li>વિજેતા સ્પર્ધકોના નામો જાહેર મંચ પર જાહેર કરવામાં આવશે.</li>
                    <li>સ્પર્ધાના આયોજકોનો નિર્ણય અંતિમ રહેશે.</li>
                    <li>કોઈપણ જાતની બોગસ કે ફેક વોટિંગ ચલાવામાં નઈ આવે.</li>
                    
                </ul>
                
                <p class='text-danger custom-bg-blue mb-6'>Entry Fees: ₹.501</p>
</div>
                <div class="w-full clear">
                <h2 class="heading-rules">2). ઘરની બેસ્ટ મૂર્તિ:</h2>
                <ul class="list">
                    
                <li>યુસર એકાઉન્ટ બનાવું ફરજિયાત છે.</li>
                    <li>સ્પર્ધા માટેનું વોટિંગ સંપૂર્ણપણે ઑનલાઇન વેબસાઈટ મારફતે થશે.</li>
                    <li>દરેક કેટેગરીમાં યુસર ફ્ક્ત 1 મંડળને 1 વોટ કરી શક્સે.</li>
                    <li>વિજેતા સ્પર્ધકોના નામો જાહેર મંચ પર જાહેર કરવામાં આવશે.</li>
                    <li>સ્પર્ધાના આયોજકોનો નિર્ણય અંતિમ રહેશે.</li>
                    <li>કોઈપણ જાતની બોગસ કે ફેક વોટિંગ ચલાવામાં નઈ આવે.</li>
                    
                    <p class='text-danger custom-bg-blue'>Entry Fees: ₹.251</p>

                </ul>
                </div>


            </div>

        </div>


    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection