@include('header')
<link href="{{asset('css/prediction.css')}}" rel="stylesheet">



<div class="main-content">
        @if($result == 0)
            <div>You have <a class="result-link"  target="_blank" href="https://www.mayoclinic.org/diseases-conditions/glioma/symptoms-causes/syc-20350251">
                glioma<svg viewBox="0 0 16 16">
                <polygon fill="currentColor" points="5 4.31 5 5.69 9.33 5.69 2.51 12.51 3.49 13.49 10.31 6.67 10.31 11 11.69 11 11.69 4.31 5 4.31" data-v-22ee7e7c="">
                </polygon></svg></a>
            </div>
        @elseif($result == 1)
            <div>You have <a class="result-link"  target="_blank" href="https://www.mayoclinic.org/diseases-conditions/meningioma/symptoms-causes/syc-20355643">
                meningioma<svg viewBox="0 0 16 16">
                <polygon fill="currentColor" points="5 4.31 5 5.69 9.33 5.69 2.51 12.51 3.49 13.49 10.31 6.67 10.31 11 11.69 11 11.69 4.31 5 4.31" data-v-22ee7e7c="">
                </polygon></svg></a>
            </div>
        @elseif($result == 2)
            You have no tumor.
        @else
            <div>You have <a class="result-link"  target="_blank" href="https://www.mayoclinic.org/diseases-conditions/pituitary-tumors/symptoms-causes/syc-20350548">
                pituitary<svg viewBox="0 0 16 16">
                <polygon fill="currentColor" points="5 4.31 5 5.69 9.33 5.69 2.51 12.51 3.49 13.49 10.31 6.67 10.31 11 11.69 11 11.69 4.31 5 4.31" data-v-22ee7e7c="">
                </polygon></svg></a>
            </div>
        @endif
</div>




@include('footer')