@extends('layout_client.main')
@section('css')
    <style>
        #fixNav {
            color: #5f5842 !important;
            background-color: white !important;
        }

        #fixNav .menu li a{
            color: #5f5842;
            text-shadow: none;
        }

        #iframeContainer {
            height: 210vh;
            padding-top: 72px;
        }

        @media screen and (max-width:1025px){
            #iframeContainer {
                height: 215vh;
            }
        }

        @media screen and (max-width:1015px){
            #iframeContainer {
                height: 237vh;
            }
        }

        @media screen and (max-width:868px){
            #iframeContainer {
                height: 260vh;
            }
        }

        @media screen and (max-width:780px){
            #iframeContainer {
                height: 280vh;
            }
        }

        @media screen and (max-width:720px){
            #iframeContainer {
                height: 325vh;
            }
        }

        @media screen and (max-width:590px){
            #iframeContainer {
                height: 235vh;
            }
        }

        @media screen and (max-width:495px){
            #iframeContainer {
                height: 260vh;
            }
        }

        @media screen and (max-width:430px){
            #iframeContainer {
                height: 290vh;
            }
        }

        @media screen and (max-width:350px){
            #iframeContainer {
                height: 325vh;
            }
        }

        @media screen and (max-width:280px){
            #iframeContainer {
                height: 400vh;
            }
        }
    </style>
@endsection
@section('content')
    <div class="iframe-spa" id="iframeContainer" style="width: 100%;">
        <iframe src="https://daruma.idspa.vn/dat-hen" scrolling="no" id="myIframe" width="100%" height="100%" frameborder="0"></iframe>
    </div>

    {{-- @section('scripts')
        <script>
            const iframe = document.getElementById('myIframe');
            window.addEventListener('message', (event) => {
                if (event.data && event.data.height) {
                    iframe.style.height = event.data.height + 'px';
                }
            });
        </script>
    @endsection --}}
@endsection
