@extends('pages.user.layout.homepage')
{{-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
{{-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> --}}


@section('title', 'testing')

@section('content')
    @include('pages.user.layout.partial_homepage.header')
    <section id="blog" class="blog">
        <div class="container" style="margin-top:150px;">
            {{-- <h1>jQuery ddtf.js Plugin Demo</h1> --}}
            <table id="table_format" class="table table-bordered">
                <tbody>
                    {{-- @foreach ($schedule as $jam) --}}
                    <tr>
                        <th>jam </th>
                        <th>Type</th>
                        {{-- <th>In Stock</th> --}}
                    </tr>
                    <tr>
                        <td>Item 1</td>
                        <td>Special</td>
                        {{-- <td>Y</td> --}}
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>Not Special</td>
                        {{-- <td>N</td> --}}
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td>Special</td>
                        {{-- <td>N</td> --}}
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </section>
    <script>
        jQuery('#table_format').ddTableFilter();
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
@endsection
