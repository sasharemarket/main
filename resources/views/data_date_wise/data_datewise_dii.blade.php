@extends('layouts.master')
@section('content')

    <form action="/action_page.php" id="datewisediiform">
        <label for="fname">Client</label><br>
        <label for="fname">Future Index Long</label><br>
        <input type="text" id="future_index_long_dii" name="future_index_long_dii" value=""><br>
        <label for="lname">Future Index Short</label><br>
        <input type="text" id="future_index_short_dii" name="future_index_short_dii" value=""><br>

        <label for="lname">Long Index Long Short %</label><br>
        <input type="text" id="long_index_long_short_percent_dii" name="long_index_long_short_percent_dii" value=""><br>


        <label for="fname">Future Stock Long</label><br>
        <input type="text" id="future_stock_long_dii" name="future_stock_long_dii" value=""><br>
        <label for="lname">Future Stock Short</label><br>
        <input type="text" id="future_stock_short_dii" name="future_stock_short_dii" value=""><br>

        <label for="lname">Option Index Call Long</label><br>
        <input type="text" id="option_index_call_long_dii" name="option_index_call_long_dii" value=""><br>

        <label for="lname">Option Index Put Long</label><br>
        <input type="text" id="option_index_put_long_dii" name="option_index_put_long_dii" value=""><br>


        <label for="lname">Option Index buy Call Put %</label><br>
        <input type="text" id="option_index_buy_call_put_percentage_dii" name="option_index_buy_call_put_percentage_dii" value=""><br>


        <label for="fname">Option Index Call Short</label><br>
        <input type="text" id="option_index_call_short_dii" name="option_index_call_short_dii" value=""><br>
        <label for="lname">Option Index Put Short</label><br>
        <input type="text" id="option_index_put_short_dii" name="option_index_put_short_dii" value=""><br>
        <label for="lname">Option Index Short Call Put %</label><br>
        <input type="text" id="option_index_short_call_put_percent_dii" name="option_index_short_call_put_percent_dii"
            value=""><br>

        <label for="lname">Option Stock Call Long </label><br>
        <input type="text" id="option_stock_call_long_dii" name="option_stock_call_long_dii" value=""><br>

        <label for="lname">Option Stock Put Long</label><br>
        <input type="text" id="option_stock_put_long_dii" name="option_stock_put_long_dii" value=""><br>



        <label for="lname">Option Stock Call Short</label><br>
        <input type="text" id="option_stock_call_short_dii" name="option_stock_call_short_dii" value=""><br>


        <label for="lname">Option Stock Put Short</label><br>
        <input type="text" id="option_stock_put_short_dii" name="option_stock_put_short_dii" value=""><br>

        <label for="lname">Total Long Contracts</label><br>
        <input type="text" id="total_long_contracts_dii" name="total_long_contracts_dii" value=""><br>



        <label for="lname">Total Short Contracts</label><br>
        <input type="text" id="total_short_contracts_dii" name="total_short_contracts_dii" value=""><br>
        <input type="button" value="Submit"id="datewisediisubmit">

        <script>
            $('#datewisediisubmit').on('click', function() {
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
                        statusofform = $("#datewisediiform").valid();
                        if (statusofform) {
                            $(".preloader").show();
                            var deptform = $('#datewisediiform');
                            var url = "{{ env('APP_URL') }}/getdatadatewisediisave";
                            $.ajax({
                                type: "POST",
                                    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
                                url: url,
                                data: deptform.serialize(),
                                success: function(response) {
                                    $(".preloader").hide();
                                    if (response.status_code == 500) {
                                        toastr.success(response.message);
                                        setInterval(function() {
                                            window.location = APP_URL +
                                                '/masters/department-master';
                                        }, 3000);
                                    } else {
                                        var reqID = response.data.id;
                                        toastr.success(response.message);
                                        setInterval(function() {
                                            window.location = APP_URL +
                                                '/masters/department-master-edit/' + reqID;
                                        }, 3000);

                                    }

                                },
                                error: function(errorResponse) {
                                    if (errorResponse.responseJSON.status_code == 422) {
                                        $(".error").empty();
                                        $.each(errorResponse.responseJSON.message, function(key,
                                            value) {
                                            inputErrorMsg = value;
                                            inputId = key;
                                            $('#' + inputId).after('<label id=' + inputId +
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


                $("#datewisediiform").validate({
                    rules: {
                        future_index_long_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        future_index_short_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        long_index_long_short_percent_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        future_stock_long_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        future_stock_short_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_index_call_long_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_index_put_long_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_index_buy_call_put_percentage_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_index_call_short_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_index_put_short_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_index_short_call_put_percent_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_stock_call_long_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_stock_put_long_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_stock_call_short_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        option_stock_put_short_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        total_long_contracts_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },
                        total_short_contracts_dii: {
                            required: true,
                            spcenotallow: true,
                            alphanumericwithspace: true
                        },

                    },
                    messages: {


                        future_index_long_dii: {
                            required: "Enter Future Index Long",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        future_index_short_dii: {
                            required: "Enter Future Index Short",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        long_index_long_short_percent_dii: {
                            required: "Enter Long Index Long Short %",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        future_stock_long_dii: {
                            required: "Enter Future Stock Long",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        future_stock_short_dii: {
                            required: "Enter Future Stock Short",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_index_call_long_dii: {
                            required: "Enter Option Index Call Long",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_index_put_long_dii: {
                            required: "Enter Option Index Put Long",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_index_buy_call_put_percentage_dii: {
                            required: "Enter Option Index buy Call Put %",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_index_call_short_dii: {
                            required: "Enter Option Index Call Short",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_index_put_short_dii: {
                            required: "Enter Option Index Put Short",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_index_short_call_put_percent_dii: {
                            required: "Enter Option Index Short Call Put %",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_stock_call_long_dii: {
                            required: "Enter Option Stock Call Long",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_stock_put_long_dii: {
                            required: "Enter Option Stock Put Long",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_stock_call_short_dii: {
                            required: "Enter Option Stock Call Short",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        option_stock_put_short_dii: {
                            required: "Enter Option Stock Put Short",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        total_long_contracts_dii: {
                            required: "Enter Total Long Contracts",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"

                        },
                        total_short_contracts_dii: {
                            required: "Enter Total Short Contracts",
                            spcenotallow: "Enter Some Text",
                            alphanumericwithspace: "Enter Valid Text"
                        },

                    }
                });
            });
        </script>
    @stop
