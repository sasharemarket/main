@extends('layouts.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-12">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <form id="datewiseform" class="row g-3">
                                <label class="form-label" for="fname">Client</label>
                                <div class="col-md-6">
                                    <label class="form-label" for="future_index_long">Future Index Long</label>
                                    <input type="text" class="form-control" id="future_index_long"
                                        name="future_index_long" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="future_index_short">Future Index Short</label>
                                    <input type="text" class="form-control" id="future_index_short"
                                        name="future_index_short" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="future_stock_long">Future Stock Long</label>
                                    <input type="text" class="form-control" id="future_stock_long"
                                        name="future_stock_long" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="future_stock_short">Future Stock Short</label>
                                    <input type="text" class="form-control" id="future_stock_short"
                                        name="future_stock_short" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="option_index_call_long">Option Index Call Long</label>
                                    <input type="text" class="form-control" id="option_index_call_long"
                                        name="option_index_call_long" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="option_index_put_long">Option Index Put Long</label>
                                    <input type="text" class="form-control" id="option_index_put_long"
                                        name="option_index_put_long" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="option_index_call_short">Option Index Call Short</label>
                                    <input type="text" class="form-control" id="option_index_call_short"
                                        name="option_index_call_short" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="option_index_put_short">Option Index Put Short</label>
                                    <input type="text" class="form-control" id="option_index_put_short"
                                        name="option_index_put_short" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="option_stock_call_long">Option Stock Call Long </label>
                                    <input type="text" class="form-control" id="option_stock_call_long"
                                        name="option_stock_call_long" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="option_stock_put_long">Option Stock Put Long</label>
                                    <input type="text" class="form-control" id="option_stock_put_long"
                                        name="option_stock_put_long" value="">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label" for="option_stock_call_short">Option Stock Call Short</label>
                                    <input type="text" class="form-control" id="option_stock_call_short"
                                        name="option_stock_call_short" value="">

                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="option_stock_put_short">Option Stock Put Short</label>
                                    <input type="text" class="form-control" id="option_stock_put_short"
                                        name="option_stock_put_short" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="total_long_contracts">Total Long Contracts</label>
                                    <input type="text" class="form-control" id="total_long_contracts"
                                        name="total_long_contracts" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="total_short_contracts">Total Short Contracts</label>
                                    <input type="text" class="form-control" id="total_short_contracts"
                                        name="total_short_contracts" value="">
                                </div>
                                <div class="col-12">
                                    <input type="button" class="btn btn-primary" value="Submit"id="datewisesubmit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#datewisesubmit').on('click', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You Want To Add Client Information",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    statusofform = $("#datewiseform").valid();
                    if (statusofform) {
                        $(".preloader").show();
                        var deptform = $('#datewiseform');
                        var url = "{{ env('APP_URL') }}/getdatadatewiseclientsave";
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            data: deptform.serialize(),
                            success: function(response) {
                                $(".preloader").hide();
                                console.log(response.status_code);


                                if (response.status_code == 500) {
                                    toastr.success(response.message);
                                    setInterval(function() {
                                        window.location = APP_URL;
                                    }, 3000);
                                } else {
                                    toastr.success(response.message);
                                    setInterval(function() {
                                        window.location = APP_URL +
                                            '/getdatadatewisedii';
                                    }, 3000);

                                }

                            },
                            error: function(errorResponse) {

                                if (errorResponse.responseJSON.status_code == 422) {
                                    $(".error").empty();
                                    $.each(errorResponse.responseJSON.message, function(key,
                                        value) {

                                        inputErrorMsg = value[0];
                                        inputId = key;
                                        $('#' + inputId).after(
                                            '<label class="error form-label" id=' +
                                            inputId +
                                            '"-error" class="error" for="' +
                                            inputId + '">' + inputErrorMsg +
                                            '</label>')
                                    });
                                    $(".preloader").hide();
                                } else {
                                    swal({
                                        titile: "Error!",
                                        text: "Something Went Wrong",
                                        icon: "error",
                                        button: "Ok",
                                    });
                                    $(".preloader").hide();
                                    window.location = APP_URL;
                                }
                            }
                        });
                    }
                }
            });
        });





        $(document).ready(function() {

            $.extend($.validator.methods, {
                spcenotallow: function(b, c, d) {
                    if (!this.depend(d, c)) return "dependency-mismatch";
                    if ("select" === c.nodeName.toLowerCase()) {
                        var e = a(c).val();
                        return e && e.length > 0
                    }
                    return this.checkable(c) ? this.getLength(b, c) > 0 : b.trim().length > 0
                }
            });
            $.validator.addMethod("alphanumericwithspace", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9\-\s]+$/i.test(value);
            }, "Alpha Numeric With Space ");


            $("#datewiseform").validate({
                rules: {
                    future_index_long: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    future_index_short: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },

                    future_stock_long: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    future_stock_short: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    option_index_call_long: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    option_index_put_long: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },

                    option_index_call_short: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    option_index_put_short: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },

                    option_stock_call_long: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    option_stock_put_long: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    option_stock_call_short: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    option_stock_put_short: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    total_long_contracts: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    total_short_contracts: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },

                },
                messages: {


                    future_index_long: {
                        required: "Enter Future Index Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    future_index_short: {
                        required: "Enter Future Index Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },

                    future_stock_long: {
                        required: "Enter Future Stock Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    future_stock_short: {
                        required: "Enter Future Stock Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    option_index_call_long: {
                        required: "Enter Option Index Call Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    option_index_put_long: {
                        required: "Enter Option Index Put Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },

                    option_index_call_short: {
                        required: "Enter Option Index Call Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    option_index_put_short: {
                        required: "Enter Option Index Put Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },

                    option_stock_call_long: {
                        required: "Enter Option Stock Call Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    option_stock_put_long: {
                        required: "Enter Option Stock Put Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    option_stock_call_short: {
                        required: "Enter Option Stock Call Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    option_stock_put_short: {
                        required: "Enter Option Stock Put Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    total_long_contracts: {
                        required: "Enter Total Long Contracts",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    total_short_contracts: {
                        required: "Enter Total Short Contracts",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"
                    },

                }
            });
        });
    </script>
@stop
