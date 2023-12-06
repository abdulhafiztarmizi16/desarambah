@extends('layouts.layout')
@section('title', 'Desa ' . $desa->nama_desa . ' - Wilayah ')

@section('styles')
    <meta name="description"
        content="Wilayah Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}.">

    <style>
        .animate-up:hover {
            top: -5px;
        }

        .counter {
            background-color: #f5f5f5;
            padding: 20px 0;
            border-radius: 5px;
        }

        .count-title {
            font-size: 40px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .count-text {
            font-size: 35px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .fa-2x {
            margin: 0 auto;
            float: none;
            display: table;
            color: #4ad1e5;
        }
    </style>
@endsection

@section('header')
    <h1 class="text-white">Wilayah</h1>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <br />
                    <div class="col text-center">
                        <h2>{{$desa->nama_wilayah}}</h2>
                    </div>



                </div>
                <div class="row text-center" style="margin-top: 50px">
                    <div class="col">
                        <div class="counter">
                            <i class="fa fa-lightbulb-o fa-2x"></i>
                            <h2 class="timer count-title count-number" style="color: blue;" data-to="{{ $detail_dusun->count() }}"
                                data-speed="1500"></h2>
                            <p class="count-text ">RT</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter">
                            <i class="fa fa-lightbulb-o fa-2x"></i>
                            <h2 class="timer count-title count-number" style="color: red;" data-to="{{ $dusun->count() }}" data-speed="1500">
                            </h2>
                            <p class="count-text ">Dusun</p>
                        </div>
                    </div>

                </div>
            </div>
            <p style="margin-top: 10px">
                {!! $desa->deskripsi_wilayah !!}</p>

                <div class="col text-center" style="margin-top: 30px">
                    <h3>Peta Wilayah</h3>
                </div>
                
                <div class="col">
                    <iframe style="margin-top: 10px"
                        src="{{$desa->peta_wilayah}}"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
    </div>
@endsection

@push('scripts')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
@endpush
